<x-app-layout>
<<<<<<< HEAD
    <div class="overflow-hidden ">
=======
    <div class="overflow-hidden bg-white">
>>>>>>> 87cebb6137451b12a1b3a247456ff51ed5dddbb1

        <div class="fixed top-0 left-0 right-0 bg-white border-b-2 border-b-gray-200 ">
            <div class="w-2/4 mx-auto">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight  py-4 ">
<<<<<<< HEAD
                    {{ __('Add Friends') }}
=======
                    {{ __('ChatApp') }}
>>>>>>> 87cebb6137451b12a1b3a247456ff51ed5dddbb1
                </h2>
            </div>

        </div>






        <div class=" h-screen flex flex-col flex-1 overflow-y-scroll justify-center items-center pt-20">

            @if (session('message') || session('error'))
<<<<<<< HEAD
                <div class="md:w-3/4 lg:w-2/4 xl:w-2/4  bg-white md:border rounded-md  shadow ">
=======
                <div class="md:w-3/4 lg:w-2/4 xl:w-2/4  bg-white  shadow ">
>>>>>>> 87cebb6137451b12a1b3a247456ff51ed5dddbb1

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



<<<<<<< HEAD
            <div
                class=" md:w-3/4 lg:w-2/4 xl:w-2/4  md:border rounded-md mt-8 shadow flex-1 overflow-y-scroll   bg-white ">

                <div class="px-4 ">
                    <div class="border-b">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight  py-4">
                            {{ __('Add Friends') }}
                        </h2>
                    </div>





                    <div class="flex flex-col ">
                        @if (!is_array($users) && empty($users))
                            <x-ui.empty-data class="mt-20">No registered user</x-ui.empty-data>
                        @else
                            @foreach ($users as $user)
                                <x-add-friends username='{{ $user->name }}'
                                    created_at="joined {{ $user->created_at->diffForHumans() }}" class="px-2">
                                    <div>
                                        @if (array_key_exists($user->id, $friendsIds))
                                            {{-- User is a friend, show Message button --}}
                                            <form method="post" action="{{ route('add.friend') }}">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                                <input type="hidden" name="friend_id" value="{{ $user->id }}">
                                                
                                                @if (array_key_exists($user->id, $friendsIds))
                                                    {{-- User is a friend, show Message button --}}
                                                    @method('delete')
                                                    <input type="submit" value="Message"
                                                        class="text-sm bg-white border border-gray-500 rounded-full text-center text-gray-600 w-min px-3 cursor-pointer py-2 hover:bg-gray-600 hover:text-white">
                                                @else
                                                    {{-- User is not a friend, show Add Friend button --}}
                                                    <input type="submit" value="Add Friend"
                                                        class="text-sm bg-white border border-blue-500 rounded-full text-center text-blue-600 w-min px-3 cursor-pointer py-2 hover:bg-blue-600 hover:text-white mr-6">
                                                @endif
                                            </form>
                                        @else
                                            {{-- User is not a friend, show Add Friend button --}}
                                            <form method="post" action="{{ route('add.friend') }}">
                                                @csrf
                                                <input type="hidden" hidden name="user_id"
                                                    value="{{ Auth::id() }}">
                                                <input type="hidden" hidden name="friend_id"
                                                    value="{{ $user->id }}">
                                                <input type="submit" value="Add Friend"
                                                    class="text-sm bg-white border border-blue-500 rounded-full text-center text-blue-600 w-min px-3 cursor-pointer py-2 hover:bg-blue-600 hover:text-white mr-6">



                                            </form>
                                        @endif
                                    </div>
                                </x-add-friends>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
=======
            <div class="h-screen w-full md:w-3/4 lg:w-2/4 xl:w-2/4   mt-4 overflow-hidden  ">
                <div class=" border-b">
                    <div class="flex justify-start text-gray-600 ">
                        <p id="tab1"
                            class=" cursor-pointer py-2 mx-4  border-b-2 border-blue-500 hover:border-b-2 hover:border-blue-300">All
                            Users</p>
                        <p id="tab2" class=" cursor-pointer py-2 mx-4   hover:border-b-2 hover:border-blue-300"> Groups
                        </p>
                    </div>
                </div>

                <div class="h-screen  overflow-y-scroll   mt-3">



                    @if (!is_array($users) && empty($users))
                        <x-ui.empty-data class="mt-20">No registered user</x-ui.empty-data>
                    @else
                        @foreach ($users as $user)
                            <x-add-friends username='{{ $user->name }}'
                                created_at="joined {{ $user->created_at->diffForHumans() }}" class="px-2">
                                <div class="flex items-center">
                                    @if (array_key_exists($user->id, $friendsIds))
                                        {{-- User is a friend, show Message button --}}
                                        <form method="post" action="">
                                            @csrf
                                            <input type="hidden" hidden name="user_id" value="{{ Auth::id() }}">
                                            <input type="hidden" hidden name="friend_id" value="{{ $user->id }}">
                                            @method('delete') <input type="submit" value="Message"
                                                class="text-sm bg-white border border-gray-500 rounded-full text-center text-gray-600 w-min px-3 cursor-pointer py-2 hover:bg-gray-600 hover:text-white">



                                        </form>

                                        <form method="post" action="{{ route('unfriend') }}">
                                            @csrf
                                            <input type="hidden" hidden name="user_id" value="{{ Auth::id() }}">
                                            <input type="hidden" hidden name="friend_id" value="{{ $user->id }}">
                                            @method('delete')
                                            <input type="submit" value="X"
                                                class="text-sm bg-white text-center text-red-600 w-min px-3 cursor-pointer py-2 ">
                                        </form>
                                    @else
                                        {{-- User is not a friend, show Add Friend button --}}
                                        <form method="post" action="{{ route('add.friend') }}">
                                            @csrf
                                            <input type="hidden" hidden name="user_id" value="{{ Auth::id() }}">
                                            <input type="hidden" hidden name="friend_id" value="{{ $user->id }}">
                                            <input type="submit" value="Add Friend"
                                                class="text-sm bg-white border border-blue-500 rounded-full text-center text-blue-600 w-min px-3 cursor-pointer py-2 hover:bg-blue-600 hover:text-white mr-6">



                                        </form>
                                    @endif
                                </div>
                            </x-add-friends>
                        @endforeach
                    @endif

                </div>
            </div>


>>>>>>> 87cebb6137451b12a1b3a247456ff51ed5dddbb1
        </div>


    </div>

<<<<<<< HEAD

=======
    @vite('resources/js/friends/tabs.js')
>>>>>>> 87cebb6137451b12a1b3a247456ff51ed5dddbb1
</x-app-layout>
