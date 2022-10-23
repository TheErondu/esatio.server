<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Output\ConsoleOutput;

class ArtisanController extends ApiController
{
    public function run(Request $request){

            // Call and Artisan command from within your application.
            $command = $request->input('command');
            Artisan::call("$command");
            $output = Artisan::output();
            return $this->sendResponse(null,"$output");
    }
}
