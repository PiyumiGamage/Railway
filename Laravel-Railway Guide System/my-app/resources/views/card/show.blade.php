@extends('layouts.mynavi')
@section('content')
        
        <div class="max-w-lg mx-auto mt-30">
            <div class="px-6 py-14 bg-white">
                <div class="font-bold text-xl mb-1 text-center bg-blue-500 text-white mt-3">Area Manager Profile</div>
                <div class="mb-4 ">
                    <div class="flex items-center mb-3 mt-3">
                        <span class="font-bold mr-2 ">Topic:</span>
                        <span>{{ $card->topic }}</span>
                    </div>
                    
                    <div class="flex items-center mb-2 mt-3">
                        <img class="w-90" src="{{asset('cards/'.$card->image)  }}" alt="{{ $card->topic }}">
                    </div>
                    <div class="flex items-center mt-3">
                        <span class="font-bold text-s ">Price:</span>
                        <span>{{ $card->price }}</span>
                    </div>

                    <div class="flex items-center mb-3 mt-3">
                        <span class="font-bold text-s">Description:</span>
                        <div class="border border-black rounded-lg p-2 flex-grow">
                            <p>{{ $card->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection


    