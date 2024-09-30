<?php

namespace App\Http\Controllers;

use App\Models\Shedule;
use App\Models\Hotel;
use App\Models\Card;
;
use Illuminate\Http\Request;

class SearchController extends Controller
{   
    public function index(Request $request)
    {
        $startStation = $request->input('start_station');
        $endStation = $request->input('end_station');
        $location = $request->input('location');

        // Perform search based on start and end stations
        $schedules = Shedule::where('start_station', $startStation)
                             ->where('end_station', $endStation)
                             ->get();


        // Search for hotels based on location
        $hotels = Hotel::where('location', 'like', '%' . $location . '%')
                       ->get();                     


        
        // Search for cards based on location
        $cards = Card::where('location', 'like', '%' . $location . '%')
                        ->get();

        return view('search.index', compact('schedules', 'startStation', 'endStation','hotels','cards','location'));
    }
    
}
