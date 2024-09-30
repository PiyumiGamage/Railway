@extends('layouts.mynavi')
@section('content')
<div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden mt-5">
    <div class="font-bold text-xl mb-1 text-center bg-blue-500 text-white mt-2">Area Manager Profile</div>
    <div class="p-6">
        <form action="{{ url('card/' .$card->id) }}" method="post" class="space-y-4">
            @csrf
            @method('PATCH')

            <input type="hidden" name="id" value="{{$card->id}}">
            <div class="mb-4">
                <label for="topic" class="font-bold text-s mb-2 mt-2">Topic</label>
                <input type="text" name="topic" id="topic" value="{{ old('topic', $card->topic) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required pattern="[A-Za-z0-9\s]+" title="Only letters, numbers, and spaces are allowed">
                @error('topic')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="font-bold text-s mb-2 mt-2">Description</label>
                <textarea name="description" id="description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required pattern="[\w\s]+" title="Only letters, numbers, and spaces are allowed">{{ old('description', $card->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="location" class="font-bold text-s mb-2 mt-2">Location</label>
                <input type="text" name="location" id="location" value="{{ old('location', $card->location) }}"  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('price')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="price" class="font-bold text-s mb-2 mt-2">Price</label>
                <input type="text" name="price" id="price" value="{{ old('price', $card->price) }}" pattern="\d+(\.\d{1,2})?" title="Enter a valid price (e.g., 10 or 10.50)" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('price')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        

            <button type="submit" class="inline-block bg-green-600 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 ">Save</button>
        </form>
    </div>
</div>
@endsection
