<?php

namespace App\Exceptions;

class CustomeException extends \Exception{
    public function render(){
        return back()->with('error', $this->message);
    }
}
