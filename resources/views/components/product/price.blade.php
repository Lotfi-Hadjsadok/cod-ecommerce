@props([
    'finalprice_fontsize'=>'text-xl',
    'discountedprice_fontsize'=>'text-base',
    'product'
])

<div {{$attributes}}>
    @if ($product->sale_price)
        <div class="{{$finalprice_fontsize}} text-primary font-bold">{{$product->sale_price}} DZD</div>
        <div class="{{$discountedprice_fontsize}} text-gray-400 line-through">{{$product->price}} DZD</div>
    @else
        <div class="{{$finalprice_fontsize}} text-primary font-bold">{{$product->price}} DZD</div>
    @endif
</div>