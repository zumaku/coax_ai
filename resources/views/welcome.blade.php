<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>
<body class="font-inter">
    <div class="w-full p-10 flex flex-col justify-center items-center">
        <h1 class="text-3xl font-bold underline mb-10 text-accent">Bismillah!</h1>
        <h2 class="text-xl font-bold mb-3">Cara Mulai Proyek Ini..</h2>
        <div class="w-1/2 flex flex-col justify-start items-start">
            <h3 class="text-lg font-bold"><span class="text-accent">#1</span> Install PHP dan Composer!</h3>
            <p class="mb-5">Pastikan untuk mengintal PHP minimal versi 8 dan juga menginstal Composer.</p>
            <h3 class="text-lg font-bold"><span class="text-accent">#2</span> Nyalakan XAMPP!</h3>
            <p class="mb-5">Buka aplikasi XAMPP dan nyalakan Apache dan MySQL.</p>
            <h3 class="text-lg font-bold"><span class="text-accent">#3</span> Siapkan Kode Editor</h3>
            <p class="mb-5">Install extentions berikut di VS Code.</p>
            <img src="/img/laravel_extention.png" alt="" class="w-1/2 mb-5">
            <h3 class="text-lg font-bold"><span class="text-accent">#4</span> Buka project di VS Code</h3>
            <p class="mb-5">Siapkan 2 terminal. Terminal pertama untuk menjalankan Laravel dengan perintah <span class="font-bold">"php artisan serve"</span> dan terminal ke dua untuk menjalankan tailwind dengan perintah <span class="font-bold">"npm run dev"</span></p>
            <h3 class="text-lg font-bold"><span class="text-accent">#5</span> Generate Database</h3>
            <p class="mb-5">Buat database di phpmyadmin dengan nama <span class="font-bold">db_coaxai</span>. Setelah itu ketikkan perintah <span class="font-bold">"php artisan migrate:fresh --seed"</span> pada terminal. Maka database akan tergenerate.</p>
            <h3 class="text-lg font-bold"><span class="text-accent">#6</span> Kerjakan Smampai Jadi</h3>
            <p class="mb-5">Duduk diam dan kerjakan sampai selesai. Jangan banyak tanya. Baca dokumentasi atau tanya chat gpt jika tidak mengerti.</p>

            <h2 class="text-xl font-bold mb-3 self-center mt-5 text-center">"Soksoan mau ikut Hackaton, baca dokumentasi aja ndak ngerti. Cuakss."</h2>
        </div>
    </div>
</body>
</html>
