<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
    <nav>
        <a href="/home">Home</a> | 
        <a href="/laravel">Laravel</a>
    </nav>
    <hr>
    <h1>Apa itu Laravel?</h1>
    <img src="{{ asset('images/laravel.png') }}" alt="Logo Laravel" width="200">
    <p>
        Laravel adalah framework aplikasi web berbasis PHP  yang dirancang untuk mempermudah developer membangun aplikasi modern.
    </p>

    <h3>Fitur Utama Laravel</h3>
    <ul>
        <li><b>MVC (Model-View-Controller) —</b> membuat kode lebih rapi dan terstruktur.</li>
        <li><b>Sintaks elegan & ekspresif —</b> mudah dibaca dan dipelihara.</li>
        <li><b>Routing sederhana —</b> menetapkan URL ke fungsionalitas dengan mudah.</li>
        <li><b>ORM Eloquent —</b> interaksi dengan database tanpa query SQL mentah.</li>
        <li><b>Fitur bawaan lengkap —</b> autentikasi, session, middleware, Blade template, API, queue, dan testing.</li>
        <li><b>Ekosistem luas —</b> banyak package tersedia untuk berbagai kebutuhan.</li>
        <li><b>Komunitas besar —</b> dokumentasi dan dukungan komunitas melimpah.</li>
    </ul>

    <p>
        Singkatnya, <i>Laravel</i> adalah alat bantu yang mempercepat dan mempermuddah pembuatan aplikasi web dengan PHP, sehingga hasilnya lebih rapi, aman,
        dan modern.
    </p>
</body>
</html>
