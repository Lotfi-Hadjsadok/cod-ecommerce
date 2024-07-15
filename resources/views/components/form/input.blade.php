@props([
    'placeholder'=>'',
    'type'=>'text',
    'value'=>'',

])

<input class="h-10 px-2  outline outline-primary/20 focus:outline-primary transition-all duration-200 rounded" type="{{$type}}" placeholder="{{$placeholder}}" value="{{$value}}">