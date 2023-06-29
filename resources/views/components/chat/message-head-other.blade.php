<div class="flex justify-start">
    <div {{ $attributes->merge(['class' => 'rounded-full py-3 border  px-4 w-max text-dark']) }}>
        <p>{{$slot}}</p>
    </div>
</div>

