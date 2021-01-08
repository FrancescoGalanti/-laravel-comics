<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function show($id)
    
    {
        $comics = config('comic');

        $comic = [];

       /*  foreach($comics as $item){
            if($item['id'] == $id){
                $comic = $item;
            }
        }
 */
        $comic = collect($comics)->firstWhere('id', $id);

        


        return view('comics/comic-detail', compact('comic'));
    }
}
