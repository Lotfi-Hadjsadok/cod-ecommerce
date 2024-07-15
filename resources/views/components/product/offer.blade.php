@props([
    'name'=>'product-offer',
    'product',
    'checked'=>false
])

<label  class="group flex justify-start items-center gap-2">
    <div class="size-7 bg-white transition-all group-has-[:checked]:border-8 rounded-full  border-primary"></div>
    <input {{$checked?'checked':''}} class="appearance-none" type="radio" name="{{$name}}" value="{{$slot}}" >
    {{$slot}}
    <x-product.price class="flex gap-2 items-center" :product="$product"></x-product.price>
 </label>