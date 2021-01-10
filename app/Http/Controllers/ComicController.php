<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    public function show($slug)
    
    {
        $comics = config('comic');

        $comic = [];

      /*   foreach($comics as $item){
            if($item['id'] == $id){
                $comic = $item;
            }
        }
 */
        foreach($comics as $item){
            $titleConverted =  Str::slug($item['title'], '-');
            if($slug ==  $titleConverted){
                $comic = $item;
                break;
            }
        }
        // error page
        if(empty($comic)){
          abort(404);
        }

       /*  $comic = collect($comics)->firstWhere('id', $id); */

        /* 
        dd($comic); */


        return view('comics/comic-detail', compact('comic'));
    }
}
