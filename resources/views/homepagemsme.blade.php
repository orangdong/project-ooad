<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NTT Market</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/homepageTouristConfirm.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/headermsmenotif.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <style>
        h1 a{
            color: white !important;
        }
    </style>
</head>
<body>
    @include('headerMsmeNotif')
    <main>
        <div>
            <h2>Produk Lokal</h2>
            <ul id='produk-lokal-list'>
                <li>
                    <a href="">
                        <img src={{asset('assets/homepage-produk-lokal1.png')}} alt="Kerajinan Batik">
                        <span>Kerajinan Batik</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src={{asset('assets/homepage-produk-lokal2.png')}} alt="Jawada">
                        <span>Jawada</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src={{asset('assets/homepage-produk-lokal3.png')}} alt="Kolo">
                        <span>Kolo</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src={{asset('assets/homepage-produk-lokal4.png')}} alt="Manggulu">
                        <span>Manggulu</span>
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <h2>Layanan yang tersedia</h2>
            <ul id='layanan-tersedia-list'>
                <li>
                    <a href="">
                        <img src={{asset('assets/homepage-layanan-tersedia1.png')}} alt="">
                        <span>Penginapan</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src={{asset('assets/homepage-layanan-tersedia2.png')}} alt="">
                        <span>Pemanduan Wisata</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src={{asset('assets/homepage-layanan-tersedia3.png')}} alt="">
                        <span>Transportasi</span>
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <h2>Jelajahi toko</h2>
            <ul id='jelajahi-toko-list'>
                <li>
                    <a href="/dashboard/seller/storepage">
                        <img src={{asset('assets/jelajahi-toko1.png')}} alt="">
                        <div>
                            <span class='toko-name'>Batik Nusa</span>
                            <span class='quantity-sold'>36 produk dijual</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/seller/storepage">
                        <img src={{asset('assets/jelajahi-toko2.png')}} alt="">
                        <div>
                            <span class='toko-name'>Juara Jawada</span>
                            <span class='quantity-sold'>40 produk dijual</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/seller/storepage">
                        <img src={{asset('assets/jelajahi-toko3.png')}} alt="">
                        <div>
                            <span class='toko-name'>Rumah kolo</span>
                            <span class='quantity-sold'>10 produk dijual</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/seller/storepage">
                        <img src={{asset('assets/jelajahi-toko4.png')}} alt="">
                        <div>
                            <span class='toko-name'>Manggulu Mantap</span>
                            <span class='quantity-sold'>13 produk dijual</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </main>
    
    @include('footer')
    <script src={{asset("js/homepageMsme.js")}}></script>
    <script src={{asset("js/userDropdown.js")}}></script>
</body>
</html>