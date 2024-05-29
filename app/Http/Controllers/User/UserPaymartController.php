<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tulov;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;

class UserPaymartController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function Tolovlar(){
        $Tulovlar = Tulov::where('user_id',Auth::user()->id)->orderby('id','desc')->get();
        $Tulov = array();
        foreach($Tulovlar as $key=>$item){
            $Tulov[$key]['summa'] = number_format(($item->summa), 0, '.', ' ');
            $Tulov[$key]['type'] = $item->type;
            $Tulov[$key]['created_at'] = $item->created_at;
        } 
        return view('User.tulovlar',compact('Tulov'));
    }

    public function pay($summa){
        $summa2 = str_replace(" ","",$summa)*100;
        return view('User.pay',compact('summa','summa2'));
    }
    public function pay2(Request $request){
        return $this->pay($request->summa);
    }
    
}
