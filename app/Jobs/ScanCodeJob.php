<?php

namespace App\Jobs;

use App\Models\UserStatus;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class ScanCodeJob implements ShouldQueue
{
    use Batchable,Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $details;
    public $tries = 1;
    // public $timeout = 300;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        
        // $UIds = $this->details['user_id'];
        $UIds = $this->details['scan_code'];

        // DB::table('users_status')->where('user_id', $UIds)->update(['process_start_at'=>now()]);

        // $codes = DB::table('users_status')->where('user_id',$UIds)->pluck('scan_code')->toArray();
        $codes = DB::table('users_status')->where('scan_code',$this->details['scan_code'])->pluck('scan_code')->toArray();
        foreach($codes as $sCode){

     
        // $startTime = now();
      
        
                $vault_scan_value = '';
                
                $vault_response = '';
                // if($this->details['id'] % 2 == 0){
                //     $number= 1; 
                // }else {
                //     $number ='';
                // }
                $vault_scan_value =  UserStatus::getVaultAPIResponse($sCode,'');

                if (!empty($vault_scan_value) && count($vault_scan_value) > 0) {
                    $checkFiterKeys = UserStatus::checkFilterKeys($vault_scan_value);

                    if ($checkFiterKeys['check_flag'] == false) {
                        $vault_response =
                            "
                             1 - " . $checkFiterKeys['error_msg'];
                    } else {
                        if (!array_key_exists('sBody', $vault_scan_value)) {
                            $vault_response = 'Error 2 - This scan code is Forbidden: Access is denied';
                        } else {
                            $decompose_codes_result = $vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult'];
                            $finding_batches = $decompose_codes_result['Batches'];

                            if (empty($finding_batches)) {
                                $invalid_item_results = $decompose_codes_result['InvalidItemResults']['ItemResult'];
                                $vault_response = 'Error 3 - ' . $invalid_item_results['CodeValidityStatus'];
                            } else {
                                $batch_result = $finding_batches['BatchResult'];
                                $production_segments = $batch_result['ProductionSegments'];
                                $products = $batch_result['Products'];
                                $properties = $batch_result['Properties']['PropertySets']['PropertySet'][2]['Properties']['Property'];

                                $cartoon_or_pack_from_vault = $production_segments['ProductionSegmentResult']['PackagingLevelResults']['PackagingLevelResult']['Properties']['Properties']['Property'][1]['Value'];

                                $fa_code_from_vault = $properties[0]['Value'];
                                $pack_type_from_vault = $properties[1]['Value'];

                                if (!empty($cartoon_or_pack_from_vault) && !empty($fa_code_from_vault) && !empty($pack_type_from_vault)) {
                                    $vault_response = 'CARTOON or PACK FROM VAULT - ' . $cartoon_or_pack_from_vault . ' - FACODE FROM VAULT - ' . $fa_code_from_vault . ' - PACK TYPE FROM VAULT - ' . $pack_type_from_vault;
                                } else {
                                    $vault_response = 'Error 4 - Didnot find FA code, packing type and bundles or packs';
                                }
                            }
                        }
                    }
                } else {
                    $vault_response = 'Error 5 - Vault curently not responding';
                    // dispatch(new ScanCodeJob(['scan_code'=>$sCode]));       
                }

                $scan_code = $sCode;
                $vault_response1 = $vault_response.$sCode;
                $json_response = $vault_scan_value;
                $userUpdate =  DB::table('users_status')->where('scan_code',$sCode)->update(['status'=>'1','updated_at'=>now(),'vault_response'=>$vault_response1,'json_response'=>$json_response]);
            } 
    }

}
