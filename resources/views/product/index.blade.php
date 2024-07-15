<x-layout class="md:py-5 pb-5 px-0">
    <div class="flex flex-col md:flex-row gap-5 ">
        <div class="w-full md:w-2/5">
            <img class="" src="{{$product->thumbnail}}" alt="" srcset="">
        </div>
        <div class="w-full px-2  md:w-3/5 md:p-5">
            <h1 class="text-6xl text-center md:text-left font-bold ">{{$product->title}}</h1>

            <x-product.price class="flex gap-2 justify-center md:justify-start items-center" :product="$product" discountedprice_fontsize="text-2xl" finalprice_fontsize="text-4xl"></x-product.price>

            <form action="" class="bg-gray-100  mt-5 p-4 rounded">
                <div class="grid grid-cols-2 gap-3">
                    <x-form.input placeholder="Name"></x-form.input>
                    <x-form.input placeholder="Phone" type="tel"></x-form.input>

                     <x-form.select class="algeria_states">
                        <option value="" disabled selected>Select State</option>
                     </x-form.select>

                     <x-form.select class="algeria_cities">
                         <option value="" disabled selected>Select City</option>
                     </x-form.select>
                </div>
                <div class="mt-5 space-y-2 ">
                   
                    <?php $checked=true; ?>
                    @foreach ($product->offers as $offer)
                        <x-product.offer :offer="$offer" :checked="$checked" :product="$offer">
                        </x-product.offer>
                     <?php $checked=false; ?>
                    @endforeach
                
                </div>
                <div class="mt-5">
                    <x-product.add-to-cart-button class="w-full bg-white"></x-product.add-to-cart-button>
                </div>
                <p class="mt-5 text-xl">
                    تميز حامل الهواتف المغنطيسية للسيارات بسهولة التثبيت والإزالة السريعة،مما يسهل متابعة الطريق أو استخدام التطبيقات المختلفة أثناء القيادة. يتيح للمستخدم تركيب الهاتف بسهولة وسرعة عند الحاجة وإزالته بنفس السهولة عند الانتهاء. كما أنها توفر زاوية رؤية مريحة للشاشة . منتوج مميز و عصري متوفر بعدة ألوان حسب أذواقكم 🤩 ……………………………………………………… ️ ضمان روعة شوب ️ نحن في روعة شوب نبيع منتجات مطابقة 100% للصور والنصوص التي نضعها في تعريف المنتج, لكون ثقتكم فينا تجعلنا نفخر بما نقوم به. شكرًا لشرائكم نحن في روعة شوب ندعم خاصية إسترجاع الأموال في حالة وجود أية مشكلة في المنتج . إذا كان لديكم أي استفسار, فيرجى منكم الإتصال بنا على الرقم التالي: 0552.42.83.44
                </p>
            </form>
        </div>
    </div>
</x-layout>
