<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return redirect('public.property.index');
    }

    public function propetyDetail()
    {
        return redirect('public.property.detail');
    }
}
