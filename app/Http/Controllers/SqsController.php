<?php

namespace App\Http\Controllers;

use App\Jobs\ScanCodeJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;
use Illuminate\Bus\Batch;
class SqsController extends Controller
{
    public function scanCode()
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

            $batch = Bus::batch([new ScanCodeJob($result)])
                ->allowFailures()
                ->dispatch();
            // $batch->add(new ScanCodeJob($result,$k));

            $i++;
        }
        // dd($result,$k);
        dd($batch);

        return view('welcome');
    }
}
