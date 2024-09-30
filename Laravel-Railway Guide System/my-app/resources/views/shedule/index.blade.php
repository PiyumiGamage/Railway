@extends('layouts.mynavi') <!-- Assuming you have a layout file -->

@section('content')

@if (session('message'))
<div class="alert alert-success bg-red-400 text-center">
    {{ session('message') }}
</div>
@endif



<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

            <h2 class="text-2xl font-semibold mb-4">Shedule List</h2>

            @if (count($shedule) > 0)
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border-gray-200 text-center">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Start Station</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">End Station</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Start Time</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">End Time</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">First Class Price</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Second Class Price</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Third Class Price</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($shedule as $booking)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $booking->start_station }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $booking->end_station }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $booking->start_time }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $booking->end_time }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $booking->fprice }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $booking->sprice }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $booking->tprice }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200"> <a href="{{ url('/shedule/' . $booking->id . '/edit') }}" class="inline-block bg-yellow-400 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-5 ">Edit</a></td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200"><form method="POST" action="{{ url('/shedule'.'/'  . $booking->id) }}" accept-charset="UTF-8" class="inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="inline-block bg-red-600 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-5 " onclick="return confirm('Confirm delete?')">Delete</button>
                            </form></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <p class="text-sm text-gray-500">No bookings found.</p>
            @endif

        </div>
    </div>
</div>
@endsection
