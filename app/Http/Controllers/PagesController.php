<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function about()
    {

        /* I like the with option for passing data to a view */
        //return view('pages.about')->with('people',['Me','Myself','I']);
        //$name = 'Ramon Mcdonald';


        //$people = ['Me','Myself','I'];
        $people = [];
        return view('pages.about',compact('people'));

    }

    public function contact()
    {
     return view('pages.contact');
    }
}
