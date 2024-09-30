@extends('layouts.mynavi')

@section('content')
        <div class="container mx-auto py-8 ml-8">
            @if (session('message'))
                <div class="alert alert-success bg-red-400 text-center">
                    {{ session('message') }}
                </div>
            @endif
             
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold text-gray-900">Hotels</h1>
                <a href="{{ url('/card/create') }}" class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-md">
                    Add New Destination
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
                @foreach($card as $item)
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full h-48 object-cover" src="{{asset('cards/'.$item->image)  }}" alt="{{ $item->topic }}">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $item->topic }}</div>
                        <p class="text-gray-700 text-base">Discription: {{ $item->description }}</p>    
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <a href="{{ url('/card/' . $item->id) }}"  class="inline-block bg-blue-400 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 ">View</a>
                        <a href="{{ url('/card/' . $item->id . '/edit') }}" class="inline-block bg-yellow-500 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Edit</a>
                        <form method="POST" action="{{ url('/card'.'/'  . $item->id) }}" accept-charset="UTF-8" class="inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="inline-block bg-red-600 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-5 " onclick="return confirm('Confirm delete?')">Delete</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection