<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class ApiController extends Controller
{

    public function index()
    {
        $timeOfDay = Carbon::now()->toRfc850String();
        $response = [
            'success' => true,
            'data'    => null,
            'message' => "Welcome to Estatio!, Today is $timeOfDay [API VERSION:1.0]",
        ];


        return response()->json($response, 200);
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];


        return response()->json($response, 200);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];


        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }


        return response()->json($response, $code);
    }
}
