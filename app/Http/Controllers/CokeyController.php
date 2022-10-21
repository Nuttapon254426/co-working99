<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CokeyController extends Controller
{
        function index(){
            return view('home.CoKey');
        }
    }

