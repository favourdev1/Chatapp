<div class="h-screen overflow-y-auto flex flex-col pt-4 mb-32 " id= "friendTab">
    @if (!is_array($users) && empty($users))
        <x-ui.empty-data class="mt-20">No registered user</x-ui.empty-data>
    @else
        @foreach ($users as $user)
            <x-add-friends username='{{ $user->name }}' created_at="joined {{ $user->created_at->diffForHumans() }}"
                class="px-2">
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
