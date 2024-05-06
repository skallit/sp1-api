<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public $successStatus = 200;
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken(env('APP_NAME'))->accessToken;
            return $success;
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'firstName' => 'required',
            'email' => 'required|email',
            'empowerment' => 'required',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['companyName'] = Auth::user()->companyName;
        $input['contractForm_id'] = Auth::user()->contractForm_id;
        $user = User::create($input);
        $success['token'] =  $user->createToken(env('APP_NAME'))->accessToken;
        return $success;
    }

    public function updatePassword(Request $request){
        $validator = Validator::make($request->all(),[
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $success = User::find(auth()->user()->id)->update(['password'=>$input['password']]);
        return $success;
    }

    /**
     * getRegisteredUser api
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegisteredUser()
    {
        $user = Auth::user();
        return $user;
    }
}
