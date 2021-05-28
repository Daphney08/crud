<?php

namespace App\Http\Controllers;
use App\Models\Events;

use Illuminate\Http\Request;


class IndexController extends Controller
{
    protected $request;
    //declare varialble
    public function __construct(Request $request)
    {
        //make the request available on the class
        $this->request = $request;
    }
    public function index()
    {
        $data = Events::all();

        if($this->request->has('search')){
            $data = Events::where(
                $this->request->by,
                'LIKE',
                '%'.$this->request->search.'%'
            )->get();

        }
        /**
         * kinds of operator
         * = != < > <= >+ LIKE
         * 
         * ->where(column_name, operator, string)
         */

        if($this->request->has('date1')){
            $data = Events::whereBetween('date', [
                $this->request->date1,
                $this->request->date2,
            ])->get();

        }
        $data = Events::all();

        if($this->request->has('price1')){
            $data = Events::where('entrance_fee','>=', $this->request->price1)
                            ->where('entrance_fee','>=', $this->request->price2)
                            ->get();

        }
        
        
        return view('index')->with([
            'data' => $data
        ]);
    }
}
