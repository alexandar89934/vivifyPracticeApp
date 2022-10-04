<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function postRequest() {
        return view('post');
    }

    public function getName($firstName) {

       
        return view('simple')->with('first_name', $firstName);
    }
}
