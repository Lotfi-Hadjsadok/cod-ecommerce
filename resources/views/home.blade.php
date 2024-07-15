<x-layout class="pb-10">
    <x-title 
    center={{true}}
    subtitle='عند طلب منتوجين عندك توصيل مجاني'>المنتجات الحصرية</x-title>
    
    <section>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
            @foreach ($products as $product)
                <x-product.card :product="$product" ></x-product.card>
            @endforeach
        </div>
    </section>
</x-layout>