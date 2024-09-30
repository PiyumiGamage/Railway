@extends('layouts.mynavi') <!-- Assuming you have a layout file -->

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
    <h2 class="text-xl font-semibold mb-4">Create Hotel Listing</h2>

    <form action="{{ url('/guide/hotel') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>

        <!-- Address -->
        <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
            <input type="text" name="address" id="address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>

        <!-- Phone Number -->
        <div class="mb-4">
            <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
            <input type="tel" name="phone_number" id="phone_number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" maxlength="10" required>
            <p class="text-xs text-gray-500 mt-1">Please enter a 10-digit phone number.</p>
        </div>

        <!-- Image Uploads -->
        <div class="mb-4">
            <label for="image1" class="block text-sm font-medium text-gray-700">Image 1</label>
            <input type="file" name="image1" id="image1" accept="image/*" class="mt-1 block w-full">
        </div>
        <div class="mb-4">
            <label for="image2" class="block text-sm font-medium text-gray-700">Image 2</label>
            <input type="file" name="image2" id="image2" accept="image/*" class="mt-1 block w-full">
        </div>
        <div class="mb-4">
            <label for="image3" class="block text-sm font-medium text-gray-700">Image 3</label>
            <input type="file" name="image3" id="image3" accept="image/*" class="mt-1 block w-full">
        </div>

         <!-- Location -->
         <div class="mb-4">
            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
            <input type="text" name="location" id="location" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>

        <!-- Description -->
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required></textarea>
        </div>

        <!-- Price -->
        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input type="number" name="price" id="price" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit" class="w-full bg-green-500 text-black py-2 px-4 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">
                Create Hotel Listing
            </button>
        </div>
    </form>
</div>
@endsection
