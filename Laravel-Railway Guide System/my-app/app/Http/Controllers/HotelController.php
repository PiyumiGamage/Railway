<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotel = Hotel::all();
        return view('hotel.index')->with('hotel',$hotel);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageName1 = time() . '_1.' . $request->image1->extension();
        $request->image1->move(public_path(path:'hotel'),$imageName1);

        $imageName2 = time() . '_2.' . $request->image2->extension();
        $request->image2->move(public_path(path:'hotel'),$imageName2);
        
        $imageName3 = time() . '_3.' . $request->image3->extension();
        $request->image3->move(public_path(path:'hotel'),$imageName3);

        
        
        Hotel::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'phone_number'=>$request->phone_number,
            'description'=>$request->description,
            'image1'=>$imageName1,
            'image2'=>$imageName2,
            'image3'=>$imageName3,
            'location'=>$request->location,
            'price'=>$request->price,

        ]);
    
        return redirect('guide/hotel')->with('message', 'Hotel Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        return view('hotel.show')->with('hotel',$hotel);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        return view('hotel.edit')->with('hotel', $hotel);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
        $data = $request->all();
        $hotel->update($data);
        return redirect('guide/hotel')->with('message', 'Hotel Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect('guide/hotel')->with('message', 'Hotel deleted!');
    }
}
