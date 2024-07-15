@props([
    'name'=>'product-offer',
    'offer',
    'checked'=>false,
])

<label for="{{$offer->id}}" class="group flex justify-start items-center gap-2">
    <div class="size-7 bg-white transition-all group-has-[:checked]:border-8 rounded-full  border-primary"></div>
    <input {{$checked?'checked':''}} class="appearance-none" type="radio" name="{{$name}}" value="{{$offer->id}}" id="{{$offer->id}}" >
    {{$offer->offer}}    
    <x-product.price class="flex gap-2 items-center" :product="$offer"></x-product.price>
 </label>