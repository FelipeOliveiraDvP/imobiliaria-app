<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return view('property.index');
    }

    public function create()
    {
        return view('property.create');
    }

    public function search()
    {
        return view('property.search');
    }

    public function detail()
    {
        return view('property.detail');
    }
}
