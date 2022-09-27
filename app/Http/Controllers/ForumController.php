<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;

class ForumController extends Controller
{
    public function index()
        {
            //$forums = Forum::all();
            $forums = Forum::latest()->paginate(5);
            //dd($forums);
            return view('forums.index',compact("forums"));
        }

}