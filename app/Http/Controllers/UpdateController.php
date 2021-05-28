<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use Redirect;

class UpdateController extends Controller

{

    
    protected $request;
    
    public function __construct(Request $request)
    {
        //make the request available on the class
        $this->request = $request;
    }

    public function index($id)
    {
        return view('update')->with([
            'data' => Events::find($id)
        ]);
        
    }
    public function save( $id)
    {
        Events::find($id)->update(

            $this->request->except('_token')

        );

        return Redirect::route('home');
    }
}