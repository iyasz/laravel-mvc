<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    function index(){
        $contact = contact::all();
        return view('contact', ['contactList' => $contact]);
    }
}
