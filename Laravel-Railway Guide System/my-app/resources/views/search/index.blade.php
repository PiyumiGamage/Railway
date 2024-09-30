@extends('layouts.mynavi') <!-- Assuming you have a main layout file, change 'app' to your layout name -->

@section('content')
<div class="container mx-auto py-6 px-4">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Search Schedules</h1>

    <!-- Search Form -->
    <form action="{{ route('search.index') }}" method="GET" class="mb-4">
        <div class="flex items-center space-x-4">
            <input type="text" name="start_station" class="border-gray-300 rounded-md shadow-sm py-2 px-4 focus:outline-none focus:border-indigo-300" placeholder="Start Station" value="{{ $startStation ?? '' }}">
            <input type="text" name="end_station" class="border-gray-300 rounded-md shadow-sm py-2 px-4 focus:outline-none focus:border-indigo-300" placeholder="End Station" value="{{ $endStation ?? '' }}">
            <input type="text" name="location" class="border-gray-300 rounded-md shadow-sm py-2 px-4 focus:outline-none focus:border-indigo-300" placeholder="Location" value="{{ $location ?? '' }}">
            
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700">Search</button>
        </div>
    </form>

    <!-- Display Search Results -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden mb-80">
        <div class="px-6 py-4">
            @if ($schedules->isEmpty())
                <p class="text-gray-600">No schedules found.</p>
            @else
                <!-- Shedule -->
                <div class="container mx-auto py-6 px-4">
                    <h1 class="text-3xl text-blue-500 mb-4">Train Schedule</h1>
                
                    <ul>
                        @foreach ($schedules as $schedule)
                        <li class="border-b border-gray-200 py-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-800">{{ $schedule->start_station }} to {{ $schedule->end_station }}</p>
                                    <p class="text-gray-600">Start Time: {{ $schedule->start_time }} - End Time: {{ $schedule->end_time }}</p>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <p class="text-green-800">First Class Price: {{ $schedule->fprice }}</p>
                                    <p class="text-green-700">Second Class Price: {{ $schedule->sprice }}</p>
                                    <p class="text-green-500">Third Class Price: {{ $schedule->tprice }}</p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>


                <!-- Hotels -->
                <h1 class="text-3xl text-blue-500 mt-5">Hotels</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($hotels as $h)
                        <div class="bg-white overflow-hidden shadow-md rounded-lg">
                            <img src="{{asset('hotel/'.$h->image1)  }}"  class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $h->name }}</h2>
                                <p class="text-gray-600 mb-4">{{ $h->address }}</p>
                                <div class="mt-4 flex justify-between items-center">
                                    <span class="text-indigo-600 font-semibold">Rs.{{ $h->price }}</span>
                                    <a href="{{ url('/guide/hotel/' . $h->id) }}" class="text-indigo-600 hover:text-indigo-800">View Details</a>
                                </div> 
                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="container mx-auto py-6 px-4">
                    <h1 class="text-3xl text-blue-500 mt-6">Tour Destinations</h1>
                
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                        @foreach($cards as $item)
                        <div class="border border-gray-200 rounded-lg overflow-hidden shadow-md">
                            <img class="w-full h-64 object-cover" src="{{ asset('cards/'.$item->image) }}" alt="{{ $item->topic }}">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">{{ $item->topic }}</div>
                                <p class="text-gray-700 text-base mb-2">Location: {{ $item->location }}</p>
                                <a href="{{ url('/card/' . $item->id) }}" class="text-indigo-600 hover:text-indigo-800">View Details</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
