<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class IndexController extends Controller
{
    //
    public function index ()
    { $h1= "Hello, world!";
       $h2 = "This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.";
      $articles= Article::select ('id', 'title', 'description') -> get();
        return view ('index') -> with ('h1', $h1 ) -> with ('h2', $h2 )-> with ('articles', $articles );
    }
}
