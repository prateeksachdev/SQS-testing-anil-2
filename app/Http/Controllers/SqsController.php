<?php

namespace App\Http\Controllers;

use App\Jobs\ScanCodeBatchJob;
use App\Jobs\ScanCodeBatchJob2;
use App\Jobs\ScanCodeJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;
use Illuminate\Bus\Batch;
class SqsController extends Controller
{
    public function batch() {
        $batchId = request('id');

       return  Bus::findBatch($batchId);
    }
    public function scanCodeBatch()
    {
        $result = [];
        //    for($i=0;$i<=100;$i+=50){
        //    DB::enableQueryLog();
        $data2 = DB::table('users_status')
            ->groupBy('user_id')
            ->pluck('user_id')
            ->toArray();
        // ->pluck('scan_code')

        // dd(DB::getQueryLog($data2));
        // dd($data2);

        $i = 1;
        foreach ($data2 as $k => $dt) {
            $result['user_id'] = $dt;
            //  $result['id']=$i;
            // dd($result);
            // dispatch(new ScanCodeJob($result));

            $batch = Bus::batch([])->allowFailures()->dispatch();   
            $codes = DB::table('users_status')->where('user_id',$dt)->pluck('scan_code')->toArray();
            foreach($codes as $sCode){

                $batch->add(new ScanCodeBatchJob($result));
            }
            // $batch->add(new ScanCodeJob($result,$k));

            $i++;
        }
        // dd($result,$k);
        dd($batch);

        return view('welcome');
    }

    public function scanCode()
    {
        $result = [];
        //    for($i=0;$i<=100;$i+=50){
        //    DB::enableQueryLog();
        $data2 = DB::table('users_status')
            // ->groupBy('user_id')
            ->pluck('scan_code')
            ->toArray();
        // ->pluck('scan_code')

        // dd(DB::getQueryLog($data2));
        // dd($data2);

        $i = 1;
        foreach ($data2 as $dt) {
            $result['scan_code'] = $dt;
            //  $result['id']=$i;
            // dd($result);
            dispatch(new ScanCodeJob($result));

            // $batch = Bus::batch([])->allowFailures()->dispatch();   
            // $codes = DB::table('users_status')->where('user_id',$dt)->pluck('scan_code')->toArray();
            // foreach($codes as $sCode){

            //     $batch->add(new ScanCodeJob($result,$k));
            // }

            $i++;
        }
        // dd($result);
        // dd($batch);

        return view('welcome');
    }

    public function scanCodeBatch2()
    {
        $result = [];
        //    for($i=0;$i<=100;$i+=50){
        //    DB::enableQueryLog();
        $data2 = DB::table('users_status')
            ->groupBy('user_id')
            ->pluck('user_id')
            ->toArray();
        // ->pluck('scan_code')

        // dd(DB::getQueryLog($data2));
        // dd($data2);

        $i = 1;
        $batch = Bus::batch([])->allowFailures()->dispatch();   
        foreach ($data2 as $k => $dt) {
            $result['user_id'] = $dt;
            //  $result['id']=$i;
            // dd($result);
            // dispatch(new ScanCodeJob($result));

            $batch->add(new ScanCodeBatchJob2($result));
            // $codes = DB::table('users_status')->where('user_id',$dt)->pluck('scan_code')->toArray();
            // foreach($codes as $sCode){

                // $batch->add(new ScanCodeBatchJob($result));
            // }
            // $batch->add(new ScanCodeJob($result,$k));

            $i++;
        }
        // dd($result,$k);
        dd($batch);

        return view('welcome');
    }
}
