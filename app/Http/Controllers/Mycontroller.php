<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function getsayhello() {
        return view('welcome');
    }

    public function getsaygoodbye() {
        return view('index');
    }

    
}
