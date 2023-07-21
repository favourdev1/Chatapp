<div class="h-screen overflow-y-auto flex flex-col items-center mt-3" id="groupsTab">
    @if (!is_array($users) && empty($users))
        <x-ui.empty-data class="mt-20">No registered user</x-ui.empty-data>
    @else
        @foreach ($users as $user)
            <x-group-card username='{{ $user->name }}' created_at="joined {{ $user->created_at->diffForHumans() }}"
                class="px-2">
                <div class="flex items-center">


                    <form method="post" action="">
                        @csrf
                        <input type="hidden" hidden name="user_id" value="{{ Auth::id() }}">
                        <input type="hidden" hidden name="friend_id" value="{{ $user->id }}">
                        @method('delete')
                        <input type="submit" value="View Group"
                            class="text-sm text-center text-white  bg-blue-500 rounded-md font-medium outline-bg-600 px-8 py-2 cursor-pointer ">
                    </form>

                </div>
            </x-group-card>

            @php
                // break;
            @endphp
        @endforeach
    @endif
    <div class="text-center my-8">
        <small class=" text-gray-400  ">---------------------- End of list ----------------------</small>

    </div>
</div>
