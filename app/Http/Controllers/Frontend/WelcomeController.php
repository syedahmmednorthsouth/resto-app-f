<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    public function index(){
        $specials = Category::where('name', 'specials')-first();

        return view();
    }
}
