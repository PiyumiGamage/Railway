@extends('layouts.mynavi') <!-- Assuming you have a layout file, change 'mynavi' to your layout name -->

@section('content')
<div class="container mx-auto py-6 px-4">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="px-6 py-4">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $hotel->name }}</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Left Column - Hotel Information -->
                <div>
                    <div>
                        <img src="{{ asset('hotel/'.$hotel->image1) }}" alt="{{ $hotel->name }}" class="w-full h-64 object-cover rounded-lg shadow-lg">
                    </div>
                    <p class="text-gray-700 mt-4"><span class="font-semibold">Description:</span> {{ $hotel->description }}</p>
                    <p class="text-gray-600 mt-4"><span class="font-semibold">Address:</span> {{ $hotel->address }}</p>
                    <p class="text-gray-600 mt-2"><span class="font-semibold">Phone Number:</span> {{ $hotel->phone_number }}</p>
                </div>

                <!-- Right Column - Hotel Images -->
                <div class="flex flex-col space-y-4">
                    <div>
                        <img src="{{ asset('hotel/'.$hotel->image2) }}" alt="{{ $hotel->name }}" class="w-full h-64 object-cover rounded-lg shadow-lg">
                    </div>
                    <div>
                        <img src="{{ asset('hotel/'.$hotel->image3) }}" alt="{{ $hotel->name }}" class="w-full h-64 object-cover rounded-lg shadow-lg">
                    </div>
                </div>
            </div>

            <!-- Hotel Price and Back Button -->
            <div class="flex justify-between items-center mt-6">
                <span class="text-indigo-600 font-semibold text-lg">Price: Rs.{{ $hotel->price }}</span>
                <a href="{{ url('/') }}" class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-md">
                    Back to List
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
