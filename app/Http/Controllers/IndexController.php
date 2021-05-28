<?php

namespace App\Http\Controllers;
use App\Models\Events;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        
        return view('index')->with([
            'data' => Events::all()
        ]);
    }
}
