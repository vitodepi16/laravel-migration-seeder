<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainsController extends Controller
{

    public function index()
    {
        $data = Train::all();
        return view('welcome', compact('data'));
    }
}
