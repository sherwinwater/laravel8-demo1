<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()

    {
        $title = 'welcome to Laravel world';
        // return view('fruit', compact('title'));
        return view('fruit')->with('title', $title);
        // return 'index';
    }
}