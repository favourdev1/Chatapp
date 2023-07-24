<x-app-layout>
    <div class="overflow-hidden bg-white">

        <div class="fixed top-0 left-0 right-0 bg-white border-b-2 border-b-gray-200 ">
            <div class="w-2/4 mx-auto">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight  py-4 ">
                    {{ __('ChatApp') }}
                </h2>
            </div>

        </div>






        <div class="  flex flex-col flex-1 overflow-y-scroll justify-center items-center pt-20">

            @if (session('message') || session('error'))
                <div class="md:w-3/4 lg:w-2/4 xl:w-2/4  bg-white  shadow ">

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



            <div class="h-screen w-full md:w-3/4 lg:w-2/4 xl:w-2/4   mt-4 overflow-hidden  ">
                <div class=" border-b">
                    <div class="flex justify-start text-gray-600 ">
                        <p id="tab1"
                            class=" cursor-pointer py-2 mx-4  border-b-2 border-blue-500 hover:border-b-2 hover:border-blue-300">All
                            Users</p>
                        <p id="tab2" class=" cursor-pointer py-2 mx-4   hover:border-b-2 hover:border-blue-300"> Groups
                        </p>
                    </div>
                </div >

                    <!-- For Friends  -->
                    @include('chat.layouts.friends.partials.friends')

                   <!--  For Groups tab -->
                    @include('chat.layouts.friends.partials.groups')



                </div>
            </div>


        </div>

        @vite('resources/js/friends/tabs.js')
    </div>


</x-app-layout>
