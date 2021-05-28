<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use Redirect;

class DeleteController extends Controller
{
    public function index($id)
    {
        Events::find($id)->delete();

        return Redirect::route('home');
    }
}
