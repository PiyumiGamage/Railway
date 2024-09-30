<!-- resources/views/booking/create.blade.php -->

@extends('layouts.mynavi') <!-- Assuming you have a layout file -->

@section('content')
<div class="max-w-md mx-auto bg-white shadow p-8 rounded-md mt-10">
    <h2 class="text-xl font-semibold mb-4">Create Shedule</h2>

    <form action="{{ url('shedule') }}" method="post" enctype ="multipart/form-data">
        @csrf 

        <!-- Start Station -->
        <div class="mb-4">
            <label for="start_station" class="block text-sm font-medium text-gray-700">Start Station</label>
            <input type="text" name="start_station" id="start_station" 
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                   required>
        </div>

        <!-- End Station -->
        <div class="mb-4">
            <label for="end_station" class="block text-sm font-medium text-gray-700">End Station</label>
            <input type="text" name="end_station" id="end_station" 
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                   required>
        </div>

        <!-- Start Time -->
        <div class="mb-4">
            <label for="start_time" class="block text-sm font-medium text-gray-700">Start Time</label>
            <input type="time" name="start_time" id="start_time" 
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                   required>
        </div>

        <!-- End Time -->
        <div class="mb-4">
            <label for="end_time" class="block text-sm font-medium text-gray-700">End Time</label>
            <input type="time" name="end_time" id="end_time" 
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                   required>
        </div>

        <!-- Prices -->
        <div class="grid grid-cols-3 gap-4 mb-4">
            <!-- First  Class Price -->
            <div>
                <label for="fprice" class="block text-sm font-medium text-gray-700">First Class Price</label>
                <input type="number" name="fprice" id="fprice" 
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                       required>
            </div>

            <!-- Second Class Price -->
            <div>
                <label for="sprice" class="block text-sm font-medium text-gray-700">Second Class Price</label>
                <input type="number" name="sprice" id="sprice" 
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                       required>
            </div>

            <!-- Third Class Price -->
            <div>
                <label for="tprice" class="block text-sm font-medium text-gray-700">Third Class Price</label>
                <input type="number" name="tprice" id="tprice" 
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                       required>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">
                Create Shedule
            </button>
        </div>
    </form>
</div>
@endsection

