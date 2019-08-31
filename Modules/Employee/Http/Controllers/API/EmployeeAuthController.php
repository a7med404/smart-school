<?php

namespace Modules\Employee\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Validator;
use Hash;
use Modules\Employee\Entities\Employee;

class EmployeeAuthController extends Controller
{

    public function login (Request $request) {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required|min:3'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $employee = Employee::where('username', $request->username)->first();
        if ($employee) {
    
            if (Hash::check($request->password, $employee->password)) {
                $token = $employee->createToken('Laravel Password Grant Client')->accessToken;
                $response = [
                    'token'     => $token,
                    'employee'  => $employee,
                ];
                return response($response, 200);
            } else {
                $response = "Password missmatch";
                return response($response, 422);
            }
        } else {
            $response = 'employee does not exist';
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
    