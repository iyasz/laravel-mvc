<?php

namespace App\Http\Controllers;
use App\Models\about;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    //
    function index()
    {

        $nama = about::all();
        return view('about', ['data' => $nama]);
    }
}
