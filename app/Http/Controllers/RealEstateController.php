<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealEstateController extends Controller
{
    public function index()
    {
        return view('real-estate.index');
    }

    public function create()
    {
        return view('real-estate.create');
    }
}
