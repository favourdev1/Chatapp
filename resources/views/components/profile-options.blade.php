<div
    {{ $attributes->merge(['class' => 'w-full flex px-3 hover:px-3 py-3 items-center  hover:bg-gray-200 hover:border hover:rounded-lg hover:cursor-pointer ']) }}>
    <div class="rounded-full bg-gray-200 p-2 mr-4">
        {{ $slot }}
    </div>
    {{ $svgImage }}
</div>
