<?php

namespace App\Http\Livewire\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;

class SendForm extends Component
{
    public $command;
    public function render()
    {
        return view('livewire.artisan.send-form');
    }
    public function sendArtisanCommand()
    {
        $command = $this->command;
        Artisan::call("$command");
        $output = Artisan::output();
        session()->flash('message', $output);
    }
}
