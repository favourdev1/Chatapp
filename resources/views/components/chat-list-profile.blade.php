<div {{ $attributes->merge(['class' => 'flex items-center justify-center hover:cursor-pointer']) }}>
    <x-profile-head width="60"></x-profile-head>
    <div class="flex-1 ml-3">
        <div class="flex items-center justify-start">
            <div class="flex-1">
                <p class="font-bold text-md text-blue-700 capitalize">{{ Auth::user()->name }}</p>
            </div>
            <div>
                <p class="text-slate-400 text-xs">2d ago</p>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <p class="text-sm text-slate-700 line-clamp-2">Hey there! Just wanted to say that I had an amazing time
                hanging out with you yesterday. The food was delicious, and the laughter was contagious. Let's
                definitely plan another get-together soon. Take care and have a fantastic day!</p>
        </div>
    </div>
</div>
