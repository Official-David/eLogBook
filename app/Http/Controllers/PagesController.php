<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homePage()
    {
        return view('guests.index');
    }
}
