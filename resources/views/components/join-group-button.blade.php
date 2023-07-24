<div class="flex items center justify-center">
    <p class="text-xs text-gray-500">
        Join this channel if you want to
    </p>
</div>

<div
    {{ $attributes->merge(['class' => 'rounded-lg bg-blue-600 py-3 my-3 flex items center justify-center text-white ']) }}>

    <a href="#" class="no-underline text-center">
        {{ $slot }}
    </a>
</div>
