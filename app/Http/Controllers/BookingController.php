<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Futsal;

class BookingController extends Controller
{
    public function index()
    {
        //Read

        $data = Booking::all();
        
        return view('admin.booking.bookingrequests',compact('data'));
    }
    public function add()
    {
        return view('admin.booking.add');
        
    }



    public function store(Request $request)
    {
        //CREATE
    //    dd($request->all());
        $request->validate([
            'user_id' => 'required',
            'futsal_id' => 'required',
            'futsal_name' => 'required',
            'booker_name'=>'required',
            'booker_contact'=>'required',
            'price'=>'required',
            'area'=>'required'
           
           
        ]);

    

        $futsals = new Booking();
        $futsals->user_id = $request->user_id;
        $futsals->futsal_id = $request->futsal_id;
        $futsals->futsal_name = $request->futsal_name;
        $futsals->booker_name = $request->booker_name;
        $futsals->booker_contact = $request->booker_contact;
        $futsals->price = $request->price;
        $futsals->area = $request->area;
       
        $futsals->save();


        if($futsals->save()){
            //Redirect with Flash message
            return redirect('/mybookings')->with('status', 'Futsal booked Successfully!');
        }
        else{
            return redirect('/mybookings')->with('status', 'There was an error!');
        }

    }


    public function ConfirmBooking($id)
    {
        $booking=Booking::find($id);
        $data=Futsal::find($booking->futsal_id);
        
        if($data && $booking)
        {
            $data->status="Booked";
            $booking->status="Confirmed";
        }
        $data->save();
        $booking->save();
        if($data->save() && $booking->save())
        {
            return redirect('/admin/booking')->with('status','Booking Confirmed');
        }

    }

    public function CancelBooking($id)
    {
        $booking=Booking::find($id);
        if($booking)
        {
            $booking->status="Canceled";
        }
        $booking->save();
        if($booking->save())
        {
            return redirect('/admin/booking')->with('status','Booking Canceled');
        }
    }

    public function CloseBooking($id)
    {
        $booking=Booking::find($id);
        $data=Futsal::find($booking->futsal_id);
        if($data)
        {
            $data->status="available";
          
        }
        $data->save();
        
        if($data->save())
        {
            return redirect('/admin/booking')->with('status','Booking Closed');
        }
    }

}
