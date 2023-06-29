<x-app-layout>
    <div class="flex flex-col sm:flex-col md:flex-row h-screen bg-white">

        {{-- chat list section  --}}
      @include('chat.layouts.chat-list')
       

      {{-- Main chat section --}}

      @include('chat.layouts.main-chat')

      {{-- Profile information  --}}
      @include('chat.layouts.profile-chat-info')
    
    </div>




    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}




</x-app-layout>
