<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Area Manager Dashboard') }}
        </h2>
    </x-slot>

    
<div class="container mx-auto py-6 px-4">
    <h1 class="text-3xl font-bold text-blue-500">Area Manager Profile</h1>
    <!-- Guide Profile Content -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden p-6 mt-4">
        <p class="text-gray-800">Welcome to your Area Manager profile. You Train Shedule here.</p>
   
        <!-- Guide Profile Header -->
        <div class="flex items-center justify-between mb-6 mt-6">
            <!-- Add Tour Destination Button -->
            <a href="{{ route('shedule.create') }}" class="flex items-center bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 2a1 1 0 0 1 1 1v4h4a1 1 0 1 1 0 2h-4v4a1 1 0 1 1-2 0v-4H5a1 1 0 1 1 0-2h4V3a1 1 0 0 1 1-1z" clip-rule="evenodd" />
                </svg>
                Add Train Shedule
            </a>
            <!-- Add Hotel Button -->
            <a href="{{ url('shedule') }}" class="flex items-center bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M11.707 3.707a1 1 0 0 1 1.414 0l3 3a1 1 0 0 1 0 1.414l-8 8a1 1 0 0 1-.32.206l-3.263.816a1 1 0 0 1-1.176-1.176l.816-3.263a1 1 0 0 1 .206-.32l8-8zM15 6l-2-2 2-2 2 2-2 2z" clip-rule="evenodd" />
                </svg>
                View Shedule
            </a>
           
        </div>   
    </div>

</div>
</x-app-layout>
