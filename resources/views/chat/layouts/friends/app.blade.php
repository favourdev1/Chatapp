<x-app-layout>
    <div class="overflow-hidden ">

        <div class="fixed top-0 left-0 right-0 bg-white border-b-2 border-b-gray-200 ">
            <div class="w-2/4 mx-auto">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight  py-4 ">
                    {{ __('Add Friends') }}
                </h2>
            </div>

        </div>






        <div class=" h-screen flex flex-col flex-1 overflow-y-scroll justify-center items-center pt-20">

            @if (session('message') || session('error'))
                <div class="md:w-3/4 lg:w-2/4 xl:w-2/4  bg-white md:border rounded-md  shadow ">

                    @if (session('message'))
                        <div class=" px-3 py-2 text-sm text-green-700 my-3 ">
                            {{ session('message') }}
                        </div>
                    @elseif (session('error'))
                        <div class=" px-3 py-2 text-sm text-red-600 my-3 ">
                            {{ session('error') }}
                        </div>
                    @endif

                </div>
            @endif



            <div
                class=" md:w-3/4 lg:w-2/4 xl:w-2/4  md:border rounded-md mt-8 shadow flex-1 overflow-y-scroll   bg-white ">

                <div class="px-4 ">
                    <div class="border-b">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight  py-4">
                            {{ __('Add Friends') }}
                        </h2>
                    </div>





                    @include('chat.layouts.friends.partials.groups')
                </div>
            </div>
        </div>


    </div>


</x-app-layout>
