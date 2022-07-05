<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function stepOne(Request $request){
        $reservation = $request->session()->get('reservation');
        
        return view('reservations.step-one');
    }


    // public function storeStepOne(Request $request){
    //     $validated = $request->validate([
    //         'first_name'=>['required'],
    //         'last_name'=> ['required'],
    //         'email'=>['required', 'email'],
    //         'res_date'=> ['required', 'date'],
    //         'tel_number'=> ['required'],
    //         'guest_number'=> ['requrired']
    //     ]);


    // }
}
