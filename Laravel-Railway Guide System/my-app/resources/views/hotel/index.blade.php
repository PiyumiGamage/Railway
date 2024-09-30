@extends('layouts.mynavi') <!-- Assuming you have a layout file -->

@section('content')
<!-- resources/views/hotel/index.blade.php -->
@if (session('message'))
    <div class="bg-green-400 text-white text-center py-2">
        {{ session('message') }}
    </div>
@endif


    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-gray-900">Hotels</h1>
            <a href="{{ route('hotel.create') }}" class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-md">
                Add New Hotel
            </a>
        </div>
        
        @if ($hotel->isEmpty())
            <p class="text-gray-600">No hotels found.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($hotel as $h)
                    <div class="bg-white overflow-hidden shadow-md rounded-lg">
                        <img src="{{asset('hotel/'.$h->image1)  }}"  class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $h->name }}</h2>
                            <p class="text-gray-600 mb-4">{{ $h->address }}</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-indigo-600 font-semibold">Rs.{{ $h->price }}</span>
                                <a href="{{ route('hotel.show', $h->id) }}" class="text-indigo-600 hover:text-indigo-800">View Details</a>
                            </div>
                            <div class="justify-center mt-4">
                                <a href="{{ url('/guide/hotel/' . $h->id) }}" class="inline-block bg-blue-400 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 ">View</a>
                                <a href="{{ url('/guide/hotel/' . $h->id . '/edit') }}" class="inline-block bg-yellow-500 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Edit</a>
                                <form method="POST" action="{{ url('/guide/hotel'.'/'  . $h->id) }}" accept-charset="UTF-8" class="inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="inline-block bg-red-600 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-5 " onclick="return confirm('Confirm delete?')">Delete</button>
                                </form>
                            </div>   
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>


@endsection