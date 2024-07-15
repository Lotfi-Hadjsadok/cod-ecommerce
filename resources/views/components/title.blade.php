
@props([
    'center'=>false,
    'subtitle'=>false
])

<div class="my-10 *:w-fit {{$center ? '*:mx-auto' : '' }}">
    <h1 class="text-2xl  font-extrabold after:block after:w-full after:-mt-2 after:bg-primary/40 after:h-1">{{$slot}}</h1>
    @if($subtitle)
        <h2 class="text-base ">{{$subtitle}}</h2>
    @endif
</div>