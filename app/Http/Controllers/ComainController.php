<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComainController extends Controller
{
        function index(){
            return view('home.CoMain');
        }
    }

