@props(['username', 'profile', 'created_at'])

<div {{ $attributes->merge(['class' => 'flex items-center justify-between ']) }}>
    <x-profile-head width="56"></x-profile-head>
    <div class="flex flex-1 items-center  py-4 border-b ">
        <div class="flex-1 ml-3">
            <div class="flex items-center justify-start">
                <div class="flex-1">
                    <p class="font-bold text-md text-gray-600 capitalize hover:cursor-pointer">{{ $username }}</p>
                </div>

            </div>

            <p class="text-sm text-slate-400 line-clamp-2 ">{{ $created_at }}</p>
        </div>

        <div>
            <form method="post" action="#">
                <input type="button" value="Add Friend"
                    class="text-sm bg-white border border-blue-500 rounded-full text-center text-blue-600 w-min px-3 cursor-pointer  py-2 hover:bg-blue-600 hover:text-white">
            </form>
        </div>

    </div>

</div>
