<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Hotel;
use App\Booking;
use App\Client;
use DB;

class RoomController extends Controller
{
    //
    public function create(){
        $hotels=Hotel::all();
     return view('admin.room.create',compact('hotels'));

    }
    public function index(){
        $hotels=Hotel::all();
        $rooms=DB::table('rooms')
         ->join('hotels','hotels.id','=','rooms.hotel_id')
         ->select('rooms.*','hotels.name as hotel_name')
         ->get();
        return view ('admin.room.index',compact('rooms','hotels'));
    }
    public function store(Request $request){

        $image       = $request->file('image');
        $image_name  = time().$image->getClientOriginalName();
        $upload_path = 'public/image/';
        $image->move($upload_path,$image_name); 
        $image_url = $upload_path.$image_name;
        $this->saveRoom($request, $image_url);
   return redirect('/room/create')->with('message','Room Save successfully');
    }
    protected function saveRoom($request,$image_url){
    	$room=new Room();
    	$room->name=$request->name;
        $room->details=$request->details;
    	$room->hotel_id=$request->hotel_id;
    	$room->price=$request->price;
    	$room->number_of_room=$request->number_of_room;
    	$room->image=$image_url;
    	$room->save();
    
    }

    public function manageProduct(){

    	$products=DB::table('products')
    	         ->join('categories','products.categoryId','=','categories.id')
    	         ->join('manufacturers','products.manufacturerId','=','manufacturers.id')
    	         ->select('products.*','categories.categoryName','manufacturers.manufacturerName')
    	         ->get();
    	         return view('admin.product.manageProduct',['products'=>$products]);
    }

    public function editProduct($id){
    	$categories=Category::where('publicationStatus',1)->get();
     $manufacturers=Manufacturer::where('publicationStatus',1)->get();
     $productById=Product::where('id',$id)->first();
     return view('admin.product.editProduct')
               ->with('productById',$productById)
               ->with('categories',$categories)
               ->with('manufacturers',$manufacturers);


    }


    public function update(Request $request){
    	$imageUrl=$this->imageExistStatus($request);

        $room=Room::find($request->id);
        $room->name=$request->name;
        $room->details=$request->details;
        $room->hotel_id=$request->hotel_id;
        $room->price=$request->price;
        $room->number_of_room=$request->number_of_room;
        $room->image=$imageUrl;
    	$room->update();
        return redirect('/room/')->with('message','Room Updated Successfully');

    }
    private function imageExistStatus($request){
        $room=Room::where('id',$request->id)->first();
    	$roomImage=$request->file('image');
    	if($roomImage){

    		//unlink($productById->productImage);
    		$name=$roomImage->getClientOriginalName();
            $uploadPath='public/image/';
            $roomImage->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;

    	}
    	else{
    		$imageUrl=$room->image;
    		//echo $imageUrl;
    	}
    	return $imageUrl;
    }


      public function deleteProduct($id){

        //return $request->all();
        $product=Product::find($id);
        $product->delete();
        return redirect('/product/manage')->with('message','Product delete Successfully');
    }
    public function delete($id){
  
        //return $request->all();
        $hotels=Hotel::find($id);
        $hotels->delete();
        return redirect('/hotel')->with('message','Hotel delete Successfully');
    }
    public function edit($id){

        $hotels =Hotel::all();
        $room=Room::find($id);

        return view ('admin.room.edit',compact('room','hotels'));
    }
    public function destroy($id){

        //return $request->all();
        $rooms=Room::find($id);
        $rooms->delete();
        return redirect('/room')->with('message','room delete Successfully');
    }

    public function hotelCreate(){
        return view ('admin.hotel.create');
    }
    public function hotelStore(Request $request){
        $hotels=New Hotel;
        $hotels->name=$request->name;
        $hotels->save();
        return view ('admin.hotel.create')->with('message','Successfully Save');
    }
    public function hotelIndex(){
        $hotels=Hotel::all();
        return view ('admin.hotel.index',compact('hotels'));
    }
    public function bookingInfo()
    {
        
        $booking_info=DB::table('bookings')
        ->join('clients','clients.id','=','bookings.client_id')
        ->join('rooms','rooms.id','=','bookings.room_id')
        ->join('hotels','hotels.id','=','rooms.hotel_id')
        ->select('clients.*','hotels.name as hotel_name','rooms.name as room_name','rooms.price','bookings.tx_id','bookings.status','bookings.id as booking_id')
        ->get();
        return view('admin.room.booking_info',compact('booking_info'));
    }
    public function bookingDestroy($id){

        $bookings=Booking::find($id);
        $booking_id = $bookings->client_id;
        $bookings->delete();
        $clients =Client::find($booking_id);
        $clients->delete();
        return redirect('/booking-info')->with('message',' Delete Successfully');
    }
    public function bookingConfirm(Request $request){

        //return $request->all();
        $bookings=Booking::find($request->id);
        $bookings->status =1;
        $bookings->update();
        return redirect('/booking-info')->with('message',' Confirmed Successfully');
    }
}
