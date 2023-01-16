<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PageController extends Controller
{
    public function index()
    {
        return view('guest.welcome');
    }
    public function list()
    {
        $movies = Movie::all();
        dump($movies);
        return view('guest.list', compact('movies'));
    }
}
