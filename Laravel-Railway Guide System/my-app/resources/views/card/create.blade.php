@extends('layouts.mynavi')
@section('content')
<div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden mb-40">
    <div class="font-bold text-xl mb-1 text-center bg-blue-500 text-white mt-2">Area Manager Profile</div>
    <div class="p-6">
        <form action="{{ url('card') }}" method="post" enctype ="multipart/form-data">
            @csrf 
            <input type="hidden" name="id" >

            <div class="">
                <label for="topic" class="font-bold text-s mb-2 mt-2">Topic</label>
                <input type="text" name="topic" id="topic" pattern="[A-Za-z0-9\s]+" title="Only letters, numbers, and spaces are allowed" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            </div>
            
            <div>
                <label for="description" class="font-bold text-s mb-2 mt-2">Description</label>
                <textarea name="description" id="description" rows="3" pattern="[\w\s]+" title="Only letters, numbers, and spaces are allowed" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required></textarea>
            </div>
            
            
            <div>
                <label for="location" class="font-bold text-s mb-2 mt-2">Location</label>
                <input type="text" name="location" id="location"  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            </div>

            
            <div>
                <label for="image" class="font-bold text-s max-w-sm rounded overflow-hidden mt-2">Image</label>
                <input type="file" name="image" id="image" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            </div>

            
            
            <div>
                <label for="price" class="font-bold text-s mb-2 mt-2">Price</label>
                <input type="text" name="price" id="price" pattern="\d+(\.\d{1,2})?" title="Enter a valid price (e.g., 10 or 10.50)" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            </div>
        
        
            <div><button type="submit" class="inline-block bg-green-600 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 mt-4">Submit</button></div>
        </form>  
    </div>
</div>    
@endsection          