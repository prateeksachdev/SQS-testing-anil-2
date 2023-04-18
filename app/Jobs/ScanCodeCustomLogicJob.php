<?php

namespace App\Jobs;

use App\Models\UserStatus;
use Exception;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use romanzipp\QueueMonitor\Traits\IsMonitored;


class ScanCodeCustomLogicJob implements ShouldQueue
{
    use Batchable,Dispatchable, InteractsWithQueue, Queueable, SerializesModels,IsMonitored;
    protected $details;
    public $tries = 2;
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
        sleep(3);
        $checkStatus = DB::table('users_status')->where('scan_code', $this->details['scan_code'])->first();
        if($checkStatus->status==0){
            throw new Exception();
        }else {
            DB::table('users_status')->where('scan_code', $this->details['scan_code'])->update(['logic'=>$checkStatus->status.'-'.$this->details['scan_code'].now()]);
        }
        
    }

}
