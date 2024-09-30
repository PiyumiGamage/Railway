<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $card = Card::all();
        return view('card.index')->with('card',$card);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('card.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path(path:'cards'),$imageName);
        
        
        Card::create([
            'topic'=>$request->topic,
            'description'=>$request->description,
            'location'=>$request->location,
            'image'=>$imageName,
            'price'=>$request->price,

        ]);
        return redirect('card')->with('message', 'card Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card)
    {
        return view('card.show')->with('card', $card);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card)
    {
        return view('card.edit')->with('card', $card);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card)
    {
        $data = $request->all();
        $card->update($data);
        return redirect('card')->with('message', 'card Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card)
    {
        $card->delete();
        return redirect('card')->with('message', 'card deleted!');
    }
}
