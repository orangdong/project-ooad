<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/orderpage.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/headermsme.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
    @include('headermsme')
    <div id='jumbotron'>
        <h2>Batik nusa</h2>
        <p>Alamat: Labuan Bajo, Manggarai Barat</p>
    </div>
    <div class='container'>
        <div id='container-header'>
            <h2>Pesanan masuk</h2>
        </div>
        <div id="container-content">
            <div class='pesanan'>
                <img src={{asset("assets/user-icon.png")}} class='user-pic' alt="">
                <div class='pesanan-text'>
                    <p class='pesanan-nama'>Acexoul</p>
                    <p>Jl. Kebon Jeruk Raya No. 27 Kebon Jeruk<br> Jakarta Barat 11530</p>
                </div>
                <div>
                    <ul class='list'>
                        <li class='list-title'>Barang yang dipesan</li>
                        <li>Batik NTT x 1</li>
                        <li>Batik NTT x 3</li>
                        <li>Batik NTT x 2</li>
                    </ul>
                </div>
                <button class='pesanan-btn'>Proses</button>
            </div>

            <div class='pesanan'>
                <img src={{asset("assets/user-icon.png")}} class='user-pic' alt="">
                <div class='pesanan-text'>
                    <p class='pesanan-nama'>William</p>
                    <p>Jl. Kebon Jeruk Raya No. 27 Kebon Jeruk<br> Jakarta Barat 11530</p>
                </div>
                <div>
                    <ul class='list'>
                        <li class='list-title'>Barang yang dipesan</li>
                        <li>Batik NTT x 1</li>
                        <li>Batik NTT x 3</li>
                        <li>Batik NTT x 2</li>
                    </ul>
                </div>
                <button class='pesanan-btn'>Kirim</button>
            </div>
        </div>
    </div>
    @include('footer')
    <script src={{asset('/js/orderpage.js')}}></script>
    <script src={{asset("js/userDropdown.js")}}></script>
</body>
</html>