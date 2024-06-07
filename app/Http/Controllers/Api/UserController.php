<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Models\Guruh;
use App\Models\Tulov;
use App\Models\GuruhUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller{
    public function guruh(){
        $userData = auth()->user();
        $id = $userData->id;
        $GuruhUser = GuruhUser::where('user_id',$id)->where('status','true')->get();
        $Guruh = array();
        foreach ($GuruhUser as $key => $value) {
            $Guruh[$key]['guruh_id'] = $value->guruh_id;
            $Guruh[$key]['guruh_name'] = Guruh::find($value->guruh_id)->guruh_name;
            $Guruh[$key]['guruh_price'] = Guruh::find($value->guruh_id)->guruh_price;
            $Guruh[$key]['guruh_start'] = Guruh::find($value->guruh_id)->guruh_start;
            $Guruh[$key]['guruh_end'] = Guruh::find($value->guruh_id)->guruh_end;
        }
        return response()->json([
            "status" => true,
            "message" => "Barcha guruhlari",
            'Guruh' =>$Guruh,
            'id' => $userData->id,
        ], 200);
    }
    public function guruhshow(Request $id){
        $userData = auth()->user();
        $Guruh = array();
        $Guruh = Guruh::find($id);
        return response()->json([
            "status" => true,
            "message" => "Guruh haqida",
            'Guruh' =>$Guruh,
            'id' => $userData->id,
        ], 200);
    }
    public function tulovlar(){
        $userData = auth()->user();
        $Tulov = Tulov::where('user_id',$userData->id)->get();
        return response()->json([
            "status" => true,
            "message" => "Barcha to'lovlar",
            'Tulov' =>$Tulov,
            'id' => $userData->id,
        ], 200);
    }

}
