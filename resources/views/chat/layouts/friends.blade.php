<x-app-layout>
<x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight  py-4 mx-32">
                {{ __('Profile') }}
            </h2>
        </x-slot>
    <div class="flex flex-col justify-center items-center h-screen ">
        
        <div class="w-full md:w-3/4 lg:w-2/4 xl:w-2/4  md:border rounded-md mt-12 shadow flex-1 overflow-y-scroll   bg-white ">

            <div class="px-4 ">
                <div class="border-b">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight  py-4">
                        {{ __('Add Friends') }}
                    </h2>
                </div>

                <div class="">

                    @foreach ($users as $user)
                        <x-add-friends username='{{ $user->name }}' created_at="joined 3 days ago" class=" px-2 ">
                        </x-add-friends>
                    @endforeach

                </div>

            </div>
        </div>
    </div>


</x-app-layout>
