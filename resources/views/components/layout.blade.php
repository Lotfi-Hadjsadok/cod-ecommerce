<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <a href="" class="text-center bg-primary p-2 w-full block text-white">لإستفساراتكم يرجى الإتصال بنا على الرقم  0553397543</a>
    <nav class="flex px-4 h-[8vh] items-center shadow-sm justify-between">
        <div class="logo">
            <img class="w-20" src="https://www.raw3ashop.com/wp-content/themes/maec/resources/images/logos/store-logo.svg" alt="logo">
        </div>
        <ul class="flex gap-4">
          <li>Lorem</li>
          <li>Neque</li>
          <li>Cum</li>
        </ul>
    </nav>

    <main  {{$attributes->merge(['class'=>"max-w-screen-xl mx-auto  px-5"])}} >
        {{$slot}}
    </main>
    <footer class="bg-gray-100  h-[15vh] flex justify-between items-center px-20">
        <div>
            logo
        <p>جميع الحقوق محفوظة © 2024 روعة شوب</p>
        </div>
        <div>Facebook</div>
    </footer>
</body>
</html>