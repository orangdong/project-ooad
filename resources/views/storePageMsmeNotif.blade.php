<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/storepage.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/headermsmenotif.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @include('headerMsmeNotif')
    <main>
        <div id='jumbotron'>
            <h2>Batik nusa</h2>
            <p>Alamat: Labuan Bajo, Manggarai Barat</p>
            <a href="/dashboard/seller/forum">Forum</a>
        </div>
        <div id='container'>
            <div id='container-header'>
                <h2>Semua produk dan layanan</h2>
                <a href="/dashboard/seller/managestore">Kelola toko</a>
            </div>
            <ul id='container-content'>
                <li>
                    <a href="">
                        <img src={{asset('assets/kelola-item.png')}} alt="item 1">
                        <p>Batik NTT</p>
                        <p>Rp. 250.000</p>
                        <p class='stock'>Stock: 5</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src={{asset('assets/kelola-item.png')}}  alt="item 2">
                        <p>Batik NTT</p>
                        <p>Rp. 150.000</p>
                        <p>Stock: 15</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src={{asset('assets/kelola-item.png')}}  alt="item 3">
                        <p>Batik NTT</p>
                        <p>Rp. 150.000</p>
                        <p>Stock: 15</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src={{asset('assets/kelola-item.png')}}  alt="item 4">
                        <p>Batik NTT</p>
                        <p>Rp. 150.000</p>
                        <p>Stock: 15</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src={{asset('assets/kelola-item.png')}}  alt="item 5">
                        <p>Batik NTT</p>
                        <p>Rp. 250.000</p>
                        <p class='stock'>Stock: 5</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src={{asset('assets/kelola-item.png')}}  alt="item 6">
                        <p>Batik NTT</p>
                        <p>Rp. 250.000</p>
                        <p class='stock'>Stock: 5</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src={{asset('assets/kelola-item.png')}}  alt="item 7">
                        <p>Batik NTT</p>
                        <p>Rp. 150.000</p>
                        <p>Stock: 15</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src={{asset('assets/kelola-item.png')}}  alt="item 8">
                        <p>Batik NTT</p>
                        <p>Rp. 150.000</p>
                        <p>Stock: 15</p>
                    </a>
                </li>
            </ul>
        </div>
    </main>
    @include('footer')
    <script src={{asset("js/storePageMsme.js")}}></script>
    <script src={{asset("js/userDropdown.js")}}></script>
</body>
</html>