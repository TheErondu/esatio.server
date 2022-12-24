<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Messaging\CloudMessage;

class WebNotificationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('push.index');
    }

    public function storeToken(Request $request)
    {
        auth()->user()->update(['device_key'=>$request->token]);
        return response()->json(['Token successfully stored.']);
    }

    public function sendWebNotification(Request $request)
    {
        $deviceToken = "";
        $messaging = app('firebase.messaging');
        $message = CloudMessage::withTarget('token', $deviceToken)
            ->withNotification(Notification::create('Title', 'Body'))
            ->withData(['key' => 'value']);

        $messaging->send($message);
    }
}

