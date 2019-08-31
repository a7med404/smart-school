<?php

namespace Modules\Student\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Laravel\Passport\Bridge\Client;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use phpseclib\Crypt\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Route;

class StudentController extends Controller
{
    // public $successStatus = 200;
    // public $client;

    // public function __construct()
    // {
    //     $this->client = Client::find(1);   
    // }

    // public function login(Request $request){
    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|email',
    //         'password' => 'required|min:3'
    //     ]);
    //     if ($validator->fails()) {
    //         return response()->json(['error' => $validator->errors()], 401);
    //     }
    //     if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
    //         $params = [
    //             'grant_type' => 'password',
    //             'client_id' => $this->client->id,
    //             'client_secret' => $this->client->secret,
    //             'username' => $request->email,
    //             'password' => $request->password,
    //             'scope' => '*',
    //         ];

    //         $request->request->add($params);
    //         $proxy = Request::create(url('oauth/token'), 'POST');
    //         return Route::dispatch($proxy);

    //     }
    //     else {
    //         return response()->json(['message'=>'Email  Or Password Wrong','success' => false], 401);
    //     }
    // }

    // public function changePassword(Request $request){
    //     $user = \Auth::user();
    //     if (Hash::check($request->currentPassword, $user->password)) {
    //         DB::table('users')->where('id',$request->id)->update(['password' => bcrypt($request->newPassword), 'updated_at' => new \DateTime()] );

    //         $params = [
    //             'grant_type' => 'password',
    //             'client_id' => $this->client->id,
    //             'client_secret' => $this->client->secret,
    //             'scope' => '*',
    //         ];

    //         $request->request->add($params);
    //         $proxy = Request::create(url('oauth/token'), 'POST');
    //         return Route::dispatch($proxy);
    //     }

    //     return response()->json(['message'=>'Wrong password','success' => false], 400);
    // }

    // public function refresh(Request $request){
    //     $params = [
    //         'grant_type' => 'refresh_token',
    //         'client_id' => $this->client->id,
    //         'client_secret' => $this->client->secret,
    //         'scope' => '*',
    //     ];

    //     $request->request->add($params);
    //     $proxy = Request::create(url('oauth/token'), 'POST');
    //     return Route::dispatch($proxy);

    // }

    // public function logout(Request $request){
    //     $accessToken = Auth::user()->token();
    //     DB::table('oauth_access_tokens')->where('id', $accessToken->id)->update(['revoked' => true]);
    //     $accessToken->revoke();
    //     return response()->json(['status'=>true], 204);
    // }

    // public function reset(Request $request){
    //     $accessToken = Auth::user()->token();
    //     // dd($accessToken);
    //     DB::table('oauth_access_tokens')
    //         ->where('id', $accessToken->id)
    //         ->update(['revoked' => true]);
    //     $accessToken->revoke();

    //     return response()->json([''], 204);
    // }

}
