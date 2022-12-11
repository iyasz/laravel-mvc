<?php

namespace App\Http\Controllers;

use App\Models\admin;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function index(){
        $admin = admin::all();
        return view('services', ['adminList' => $admin]);
    }
}
