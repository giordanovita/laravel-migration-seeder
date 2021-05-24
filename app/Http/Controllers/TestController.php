<?php

namespace App\Http\Controllers;
use App\Movie;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home(){
        return view('pages.home');
       }
}
