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
        
        $data2 = DB::table('users_status')->orderBy('id','asc')
            ->pluck('scan_code')
            ->toArray();
            $i=1;
            foreach($data2 as $dt){
                $result['scan_code']=$dt;
                 $result['id']=$i;
                dispatch(new ScanCodeJob($result));       
                $i++;
            }
            // dd($result);

        // dispatch(new TestSqsEmailJob($result));
        // dispatch(new PrcoessedCodesJob($result))->onQueue('processed');
        // dispatch(new TestSqsEmailJob($result))->onQueue('response');
    //    }
    //    dd($result);
      
        return view('welcome');
                
    }
}
