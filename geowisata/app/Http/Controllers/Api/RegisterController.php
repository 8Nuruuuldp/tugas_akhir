<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Hash;

class RegisterController extends Controller
{
    public function register(Request $request){
        // $request->validate([
        //     'name'      => 'required|min:2|max:100',
        //     'email'     => 'required|email|unique:users',
        //     'password'  => 'required|min:8|confirmed',
        //     'confirmed_password' => 'required|same:password'
        // ]);

        $validator = Validator::make($request->all(), [
            'name'      => 'required|min:2|max:100',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6',
        ]);

        if ($validator->fails()) {
        return response()->json([
            'message'=>'Validations fails',
            'errors'=>$validator->errors()
        ], 400);
        }

    $user=User::create([
        'name'      =>$request->name,
        'email'     =>$request->email,
        'password'  =>Hash::make($request->password)
    ]);

    return response()->json([
        'message'=>'Resgitrations Succesfull',
        'data'=>$user
    ],200);


    }
}
