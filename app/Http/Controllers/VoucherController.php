<?php

namespace App\Http\Controllers;

use App\Models\Voucher;


class VoucherController extends Controller
{
    
    public function get($code, Voucher $voucher){
    	$voucher = $voucher->withCode($code)->first(); //eloquent

    	if(!$voucher){
    		abort(404);
    	}
    	
    	return view('voucher',[
    		'voucher'=>$voucher,
    	]);
    }

    public function tes(){
    	echo 'halaman tes';
    }


}