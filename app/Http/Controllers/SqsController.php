<?php

namespace App\Http\Controllers;

use App\Jobs\ScanCodeJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SqsController extends Controller
{
    public function scanCode(){
        
        $result=[];
    //    for($i=0;$i<=100;$i+=50){
    //    DB::enableQueryLog();
        $data2 = DB::table('users_status')->groupBy('user_id')->pluck('user_id')->toArray();
            // ->pluck('scan_code')
            
            // dd(DB::getQueryLog($data2));
        // dd($data2);
            $i=1;
            foreach($data2 as $dt){
                $result['user_id']=$dt;
               
                //  $result['id']=$i;
                dispatch(new ScanCodeJob($result));       
                $i++;
            }

        return view('welcome');
                
    }
}
