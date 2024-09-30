<?php

namespace App\Http\Controllers;

use App\Models\Shedule;
use Illuminate\Http\Request;

class SheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shedule = Shedule::all();
        return view ('shedule.index')->with('shedule', $shedule);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shedule.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Shedule::create($data);

        return redirect('shedule')->with('message', 'Shedule Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shedule $shedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shedule $shedule)
    {
        return view('shedule.edit')->with('shedule',$shedule);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shedule $shedule)
    {
        $input = $request->all();
        $shedule->update($input);
        return redirect('shedule')->with('message', 'Shedule Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shedule $shedule)
    {
        $shedule->delete();
        return redirect('shedule')->with('message', 'Shedule deleted!');
    }
}
