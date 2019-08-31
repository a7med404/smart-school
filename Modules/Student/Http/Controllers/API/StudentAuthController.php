<?php

namespace Modules\Student\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Validator;
use Hash;
use Modules\Student\Entities\StudentParent;

class StudentAuthController extends Controller
{

    public function login (Request $request) {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required|min:3'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $StudentParent = StudentParent::where('username', $request->username)->first();
        if ($StudentParent) {
    
            if (Hash::check($request->password, $StudentParent->password)) {
                $token = $StudentParent->createToken('Laravel Password Grant Client')->accessToken;
                $response = [
                    'token'     => $token,
                    'StudentParent'  => $StudentParent,
                ];
                return response($response, 200);
            } else {
                $response = "Password missmatch";
                return response($response, 422);
            }
        } else {
            $response = 'StudentParent does not exist';
            return response($response, 422);
        }
    
    }


    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
    
        $response = 'You have been succesfully logged out!';
        return response($response, 200);
    }
}
