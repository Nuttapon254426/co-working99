<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CologinController extends Controller
{
        function index(){
            return view('home.CoLogin');
        }
    }

