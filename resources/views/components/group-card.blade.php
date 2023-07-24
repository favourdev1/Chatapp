@props(['username', 'profile', 'created_at'])

<div {{ $attributes->merge(['class' => 'flex items-center justify-between  py-']) }}>

    <div class="flex flex-1 items-center  border-b  hover:bg-gray-50 hover:rounded-xl px-4 py-4 ">
        <div class="">
            <x-profile-head class="rounded-md  w-32  md:h-24 object-cover " src="{{ url('img/group-logo.png') }}">
            </x-profile-head>
        </div>


        <div class="flex-1 ml-3">
            <div class="flex items-center justify-start">
                <div class="flex-1">
                    <p class="font-bold text-md text-gray-600 capitalize hover:cursor-pointer">{{ $username }}</p>
                </div>

            </div>

            <small class="text-sm text-slate-400 line-clamp-2 ">{{ $created_at }}</small>
        </div>

        {{ $slot }}

    </div>

</div>
