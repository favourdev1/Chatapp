<div {{ $attributes->merge(['class' => 'flex flex-1 items-center justify-center ']) }}>
    <div>
        <x-svg.empty-icon></x-svg.empty-icon>
        <p class="mt-5 text-sm text-gray-500 ">{{$slot}}</p>
    </div>


</div>
