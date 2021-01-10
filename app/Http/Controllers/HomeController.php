<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    public function index()
    {
       $comics = config('comic');
       
       foreach( $comics as $key => $item){
        $slug = Str::slug($item['title'], '-');

        
        // add a slug and put it on the array
        $comics[$key]['slug'] = $slug;


    }

    /* dd($comics); */

       return view('home', compact('comics'));
    }
}
