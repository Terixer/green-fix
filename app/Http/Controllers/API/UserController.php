<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{
    const SUCCESS_STATUS = 200;
    const ERROR_STATUS = 401;
    const TOKEN_NAME = 'GreenFixApp';


    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] = $user->createToken(self::TOKEN_NAME)->accessToken;
            return response()->json(['success' => $success], self::SUCCESS_STATUS);
        } else {
            return response()->json(['error' => 'Unauthorised'], self::ERROR_STATUS);
        }
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], self::ERROR_STATUS);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken(self::TOKEN_NAME)->accessToken;
        $success['name'] = $user->name;
        return response()->json(['success' => $success], self::SUCCESS_STATUS);
    }


    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], self::SUCCESS_STATUS);
    }
}