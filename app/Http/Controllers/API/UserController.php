<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

class UserController extends ApiController
{
    public function userInfo(Request $request){
        $user = $request->user();
        return $this->sendResponse($user, 'User login successfully.');
    }
}
