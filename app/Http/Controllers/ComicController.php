<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    public function show($id)
    
    {
        $comics = config('comic');

        $comic = [];

      /*   foreach($comics as $item){
            if($item['id'] == $id){
                $comic = $item;
            }
        } */

        foreach($comics as $item){
            $titleConverted = $slug = Str::slug($item['title'], '-');
            if($slug ==  $titleConverted){
                $comic = $item;
                break;
            }
        }

       /*  $comic = collect($comics)->firstWhere('id', $id); */

        
        dd($comic);


        return view('comics/comic-detail', compact('comic'));
    }
}
