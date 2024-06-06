<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{
    public function login(Request $request){
        try{
            $validated = Validator::make($request->all(),[
                "email" => "required",
                "password" => "required",
            ]);
            if($validated->fails()){
                return response()->json([
                    "status" => false,
                    "message" => "Validate Error",
                    "error" => $validated->errors(),
                ], 401);
            }

            if(!Auth::attempt($request->only(['email','password']))){
                return response()->json([
                    "status" => false,
                    "message" => "Login yoki pariol xato",
                ], 401);
            }

            $user = User::where('email', $request->email)->first();
            if($user->type!='User'){
                return response()->json([
                    "status" => false,
                    "message" => "Siz bizning talaba emassiz",
                ], 401);
            }

            return response()->json([
                "status" => true,
                "message" => "Success",
                "token" => $user->createToken("API TOKEN")->plainTextToken,
            ], 401);
        

        }catch(\Throwable $th){
            return response()->json([
                "status" => false,
                "message" => $th->getMessage(),
            ], 401);
        }
    }

    public function profel(){
        $userData = auth()->user();
        return response()->json([
            "status" => true,
            "message" => "User About",
            'data' =>$userData,
            'id' => $userData->id,
        ], 200);
    }
    public function logout(){
        auth()->user()->tokens()->delete();
        return response()->json([
            "status" => true,
            "message" => "User Log out",
            'data' => [],
        ], 200);
    }
}
