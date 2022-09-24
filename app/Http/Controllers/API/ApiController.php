<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Utils\ConstantStrings;
use F9Web\ApiResponseHelpers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiController extends Controller
{

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


            if(!empty($errorMessages)){
                $response['data'] = $errorMessages;
            }


            return response()->json($response, $code);
        }
    }