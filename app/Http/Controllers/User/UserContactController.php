<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Murojat;
use Illuminate\Support\Facades\Auth;

class UserContactController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function Contact(){
        $Murojatlar = Murojat::where('user_id',Auth::user()->id)->get();
        $Murojat = array();
        foreach ($Murojatlar as $key => $value) {
            $Murojat[$key]['id'] = $value->id;
            $Murojat[$key]['status'] = $value->status;
            $Murojat[$key]['text'] = $value->text;
            if($value->status=='admin'){
                $Murojat[$key]['name'] = User::find($value->admin_id)->name;
                $MurojatUpdate = Murojat::find($value->id);
                $MurojatUpdate->user_type = 'false';
                $MurojatUpdate->save();
            }else{
                $Murojat[$key]['name'] = "Siz";
            }
            $Murojat[$key]['created_at'] = $value->created_at;
            $Murojat[$key]['admin_type'] = $value->admin_type;
        }
        return view('User.contact', compact('Murojat'));
    }
    public function ContactPost(Request $request){
        $validate = $request->validate([
            'text' => ['required', 'string'],
        ]);
        $validate['filial_id'] = Auth::user()->filial_id;
        $validate['user_id'] = Auth::user()->id;
        $validate['user_type'] = 'true';
        $validate['admin_id'] = 0;
        $validate['admin_type'] = 'true';
        $validate['status'] = 'user';
        Murojat::create($validate);
        return redirect()->back(); 
    }
}
