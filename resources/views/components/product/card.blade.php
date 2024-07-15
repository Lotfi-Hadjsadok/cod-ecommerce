@props(['product'])

<a href="{{'/product/'.$product->slug}}" class="group ring-2 flex flex-col justify-between ring-gray-100 hover:ring-primary/40 transition-shadow">
    <div class="overflow-hidden">
        <img class=" group-hover:scale-110 transition-transform" src="{{$product->thumbnail}}" alt="">
    </div>
    <div class="text-center py-5">
        <h1 class="text-lg font-bold ">{{$product->title}}</h1>
        <div>
            @if ($product->sale_price)
                <div class="text-xl text-primary font-bold">{{$product->sale_price}} DZD</div>
                <div class="text-gray-400 line-through">{{$product->price}} DZD</div>
            @else
                <div class="text-xl text-primary font-bold">{{$product->price}} DZD</div>
            @endif
        </div>
    </div>
    <div class="mb-2">
        <x-product.add-to-cart-button class="group-hover:bg-primary group-hover:text-gray-200 "></x-product.add-to-cart-button>
    </div>
</a>