<?php

namespace App\Http\Controllers;
use App\Models\Futsal;
use App\Models\Booking;
use Auth;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        $data=Futsal::where('status','=','available')->get();
       
        return view('frontend.futsals',compact('data'));
    }

 

    public function FutsalDetails($id)
    {
        $futsal = Futsal::find($id);
        return view('frontend.futsaldetails',compact('futsal'));
    }


    public function Book($id)
    {
        $futsal=Futsal::find($id);
        return view('frontend.bookingform',compact('futsal'));
    }

    public function MyBookings()
    {
        $user=Auth::id();
        $data=Booking::where('user_id',$user)->get();
        return view('frontend.mybookings',compact(('data')));
    }
}





