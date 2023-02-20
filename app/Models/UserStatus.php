<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ixudra\Curl\Facades\Curl;
use SimpleXMLElement;

class UserStatus extends Model
{
    use HasFactory;

    protected $table = 'users_status';


    public Static function getVaultAPIResponse($scan_code = '', $is_print_exception = 0)
    {
        $response = [];
        try {
            if (!empty($scan_code)) {
                $requestData = [
                    'scan_code' => $scan_code,
                    'environment' => 'production',
                ];

                $curl_response = Curl::to('https://stagemitr.mobikasa.net/api/v1/common/give-vault-api-response')
                    ->withData($requestData)
                    //->asJson()
                    ->returnResponseObject()
                    ->get();

                $status_code = $curl_response->status;
                $json_data = json_decode(json_encode($curl_response), true)['content'];
                $array_data = json_decode($json_data, true);

                if ($status_code == 0) {
                    $msg = $curl_response->error;
                    $api_response = json_encode($curl_response);
                    // sendFailureMail($msg, $scan_code, $api_response);
                    return [];
                } elseif ($array_data['statusCode'] != 200) {
                    $msg = 'Exception encounter with status code other than 200!';
                    $api_response = json_encode($curl_response);
                    // sendFailureMail($msg, $scan_code, $api_response);
                    return [];
                }

                $xml_data = $array_data['result'];

                $xml_data = preg_replace('/(<\/?)(\w+):([^>]*>)/', "$1$2$3", $xml_data);
                $xml = new SimpleXMLElement($xml_data);
                $xml_array = json_decode(json_encode($xml), true);

                $response = $xml_array;
            }
        } catch (\Exception $e) {
            $response = [];
            $msg = 'Catch Exception Error!';
            $api_response = $e->getMessage();
            // sendFailureMail($msg, $scan_code, $api_response);

            // if($is_print_exception == 1){
            //     pre($e->getMessage());
            //     die("PRINT EXCEPTION");
            // }
        }
        return $response;
    }
    /**
     * Method used to check vault filters
     * @param String $url
     */
    public static function checkFilterKeys($vault_scan_value)
    {
        $result = [];
        $check_flag = true;
        $error_msg = '';

        if (!isset($vault_scan_value)) {
            $check_flag = false;
            $error_msg = 'Undefiend variable vault_scan_value';
        } elseif (!isset($vault_scan_value['sBody'])) {
            $check_flag = false;
            $error_msg = "Key not found -- vault_scan_value['sBody']";
        } elseif (!isset($vault_scan_value['sBody']['DecomposeCodesResponse'])) {
            $check_flag = false;
            $error_msg = "Key not found -- vault_scan_value['sBody']['DecomposeCodesResponse']";
        } elseif (!isset($vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult'])) {
            $check_flag = false;
            $error_msg = "Key not found -- vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']";
        } elseif (!isset($vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['Batches'])) {
            $check_flag = false;
            $error_msg = "Key not found -- vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['Batches']";
        }

        if (empty($vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['Batches'])) {
            if (!isset($vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['InvalidItemResults'])) {
                $check_flag = false;
                $error_msg = "Key not found -- vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['InvalidItemResults']";
            } elseif (!isset($vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['InvalidItemResults']['ItemResult'])) {
                $check_flag = false;
                $error_msg = "Key not found -- vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['InvalidItemResults']['ItemResult']";
            } elseif (!isset($vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['InvalidItemResults']['ItemResult']['CodeValidityStatus'])) {
                $check_flag = false;
                $error_msg = "Key not found -- vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['InvalidItemResults']['ItemResult']['CodeValidityStatus']";
            }
        } else {
            if (!isset($vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['Batches']['BatchResult'])) {
                $check_flag = false;
                $error_msg = "Key not found -- vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['Batches']['BatchResult']";
            } elseif (!isset($vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['Batches']['BatchResult']['ProductionSegments'])) {
                $check_flag = false;
                $error_msg = "Key not found -- vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['Batches']['BatchResult']['ProductionSegments']";
            } elseif (!isset($vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['Batches']['BatchResult']['Products'])) {
                $check_flag = false;
                $error_msg = "Key not found -- vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['Batches']['BatchResult']['Products']";
            } elseif (!isset($vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['Batches']['BatchResult']['Properties']['PropertySets']['PropertySet'][2]['Properties']['Property'])) {
                $check_flag = false;
                $error_msg = "Key not found -- vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['Batches']['BatchResult']['Properties']['PropertySets']['PropertySet'][2]['Properties']['Property']";
            } elseif (!isset($vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['Batches']['BatchResult']['ProductionSegments']['ProductionSegmentResult']['PackagingLevelResults']['PackagingLevelResult']['Properties']['Properties']['Property'][1]['Value'])) {
                $check_flag = false;
                $error_msg = "Key not found -- vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['Batches']['BatchResult']['ProductionSegments']['ProductionSegmentResult']['PackagingLevelResults']['PackagingLevelResult']['Properties']['Properties']['Property'][1]['Value']";
            } elseif (!isset($vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['Batches']['BatchResult']['Properties']['PropertySets']['PropertySet'][2]['Properties']['Property'][0]['Value'])) {
                $check_flag = false;
                $error_msg = "Key not found -- vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['Batches']['BatchResult']['Properties']['PropertySets']['PropertySet'][2]['Properties']['Property'][0]['Value']";
            } elseif (!isset($vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['Batches']['BatchResult']['Properties']['PropertySets']['PropertySet'][2]['Properties']['Property'][1]['Value'])) {
                $check_flag = false;
                $error_msg = "Key not found -- vault_scan_value['sBody']['DecomposeCodesResponse']['DecomposeCodesResult']['Batches']['BatchResult']['Properties']['PropertySets']['PropertySet'][2]['Properties']['Property'][1]['Value']";
            }
        }

        $result['check_flag'] = $check_flag;
        $result['error_msg'] = $error_msg;

        return $result;
    }


}
