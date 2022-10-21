<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoreportController extends Controller
{
        function index(){
            return view('home.CoReport');
        }
    }

