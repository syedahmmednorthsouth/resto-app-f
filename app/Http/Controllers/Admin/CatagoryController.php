<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CatagoryStoreRequest;
use App\Models\Catagory;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $catagories = Catagory::all();
        return view('admin.catagories.index', compact('catagories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.catagories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatagoryStoreRequest $request)
    {
        //
        $image = $request->file('image')->store('public/catagories');


        Catagory::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);

        return to_route('admin.catagories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Catagory $catagory){


        return view('admin.catagories.edit', compact('catagory'));

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catagory $catagory)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $image = $catagory->image;

        if($request -> hasfile('image')){
            Storage::delete($catagory->image);
            $image = $request->file('image')->store('public/catagories');
        }

        $catagory->update([
            'name' => $request->name,
            'description' => $request->descrption,
            'image' => $image,
        ]);

        return to_route('admin.catagories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catagory $catagory)
    {
        //
        Storage::delete($catagory->image);
        $catagory->delete();
    }
}
