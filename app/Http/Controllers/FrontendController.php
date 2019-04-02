<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Hotel;
use App\Booking;
use App\Client;
use App\Http\Controllers\Redirect;
class FrontendController extends Controller
{
    //
    public function index()
    {
        
        return view('frontend.home.index');
    }
    public function hotelList()
    {
        
        $hotels =Hotel::all();
        $hotel_room=DB::table('rooms')
        ->join('hotels','hotels.id','=','rooms.hotel_id')
        ->selectRaw('rooms.*,hotels.name as hotel_name,rooms.number_of_room')
        ->where('hotels.name','!=','University hostel')
        ->groupBy('rooms.hotel_id')
        ->get();
        $total_hotel_room=DB::table('rooms')
        ->join('hotels','hotels.id','=','rooms.hotel_id')
        ->selectRaw('rooms.*,hotels.name as hotel_name,rooms.number_of_room')
        ->where('hotels.name','!=','University hostel')
        ->get();
        $total_hostel_room=DB::table('rooms')
        ->join('hotels','hotels.id','=','rooms.hotel_id')
        ->selectRaw('rooms.*,hotels.name as hotel_name,rooms.number_of_room')
        ->where('hotels.name','=','University hostel')
        ->get();
        $uni_hostel=DB::table('rooms')
        ->join('hotels','hotels.id','=','rooms.hotel_id')
        ->selectRaw('rooms.*,hotels.name as hotel_name,SUM(rooms.number_of_room) as total_uni_room')
        ->where('hotels.name','=','University hostel')
        ->groupBy('rooms.hotel_id')
        ->get();
        $total_booking_room=DB::table('bookings')
        ->join('rooms','bookings.room_id','=','rooms.id')
        ->join('hotels','hotels.id','=','rooms.hotel_id')
        ->selectRaw('bookings.*,rooms.number_of_room,count(rooms.id) as hotel_room')
        ->where('hotels.name','!=','University hostel')
        ->get();

        $count_booking_hostel_room=DB::table('bookings')
        ->join('rooms','bookings.room_id','=','rooms.id')
        ->join('hotels','hotels.id','=','rooms.hotel_id')
        ->selectRaw('bookings.*,rooms.number_of_room,count(rooms.id) as hostel_room')
        ->where('hotels.name','=','University hostel')
        ->get();
    
        return view('frontend.hotel.index',compact('hotels','hotel_room','uni_hostel','total_booking_room','total_hotel_room','total_hostel_room','count_booking_hostel_room'));
    }
    public function roomList($id)
    {
        $total_booking_room=DB::table('bookings')
        ->rightJoin('rooms','bookings.room_id','=','rooms.id')
        ->leftJoin('hotels','hotels.id','=','rooms.hotel_id')
        ->selectRaw('rooms.*,rooms.number_of_room,count(bookings.room_id) as booking_room')
        ->where('hotels.name','!=','University hostel')
        ->groupBy('bookings.room_id')
        ->get();
        $hotels =Hotel::all();
        $hotel_room=DB::table('rooms')
        ->join('hotels','hotels.id','=','rooms.hotel_id')
        ->select('rooms.*','hotels.name as hotel_name')
        ->where('hotels.name','=','University hostel')
        ->where('rooms.hotel_id',$id)
        ->get();
        return view('frontend.hotel.room_list',compact('hotels','hotel_room','total_booking_room'));
    }
    public function roomDetails($id)
    { 
        $hotel_room=DB::table('rooms')
        ->join('hotels','hotels.id','=','rooms.hotel_id')
        ->select('rooms.*','hotels.name as hotel_name')
        ->where('rooms.id',$id)
        ->first();
        return view('frontend.hotel.room_details',compact('hotel_room'));
    }

    public function bookingStore(Request $request){
       $hotel_room=DB::table('rooms')
        ->join('hotels','hotels.id','=','rooms.hotel_id')
        ->select('rooms.*','hotels.name as hotel_name')
        ->first();

    	$client=new Client();
    	$client->name=$request->name;
        $client->email=$request->email;
    	$client->address=$request->address;
    	$client->save();
        $client_id =$client->id;
        $current_date =Date('Y-m-d');
    	$booking=new Booking();
    	$booking->client_id=$client_id;
    	$booking->room_id=$request->room_id;
    	$booking->date=$current_date;
    	$booking->tx_id=$request->tx_id;
    	$booking->status=0;
    	$booking->save();
        return back()->with('success', ['your message,here']); 
    }
    public function about()
    {
        
        return view('frontend.about.about');
    }
    public function contact()
    {
        
        return view('frontend.contact.contact');
    }
}
