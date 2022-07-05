<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index(){
        $catagories = Catagory::all();
        return view('categories.index', compact('catagories'));
    }

    public function show(Catagory $catagory){
        return view('categories.show', compact('catagory'));
    }


}
