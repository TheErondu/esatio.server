<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtisanController extends Controller
{
     public function index()
    {
        return view('artisan.index');
    }
    public function runCommand(Request $request){
        $command = $request->input('command');
        Artisan::call("$command");
        $output = Artisan::output();
         return back()->withMessage($output);;
    }
}
