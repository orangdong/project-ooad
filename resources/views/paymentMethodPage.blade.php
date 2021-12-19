<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/footer.css">
        <link rel="stylesheet" href="/css/headermsme.css">
        <link rel="stylesheet" href="/css/paymentMethodPage.css">
        <title>Document</title>
    </head>
    
<body>
    @include('headertourist')
    <div id='jumbotron'>
        <h2>Batik nusa</h2>
        <p>Alamat: Labuan Bajo, Manggarai Barat</p>
    </div>
    <div id="judul">
        <h2>Pilih Metode Pembayaran </h2>
    </div>
    <div id="container">
        <div id="gambar-holder">
            <div id="satu">
                <img src={{asset("assets/logo-dana.png")}} alt="">
            </div>
            <div id="satu">
                <img src={{asset("assets/logo-ovo.png")}} alt="">
            </div>
            <div id="satu">
                <img src={{asset("assets/logo-bca.png")}} alt="">
            </div>
            <div id="satu">
                <img src={{asset("assets/logo-gopay.png")}} alt="">
            </div>
            <div id="satu">
                <img src={{asset("assets/logo-shoppe.png")}} alt="">
            </div>
            <div id="satu">
                <img src={{asset("assets/logo-qris.png")}} alt="">
            </div>
            <div id="satu">
                <img src={{asset("assets/logo-link.png")}} alt="">
            </div>
            <div id="satu">
                <img src={{asset("assets/logo-doku.png")}} alt="">
            </div>
            <div id="satu">
                <img src={{asset("assets/logo-ran.png")}} alt="">
            </div>
            <div id="satu">
                <img src={{asset("assets/logo-pay.png")}} alt="">
            </div>
            <div id="satu">
                <img src={{asset("assets/logo-indomaret.png")}} alt="">
            </div>
            <div id="satu">
                <img src={{asset("assets/logo-alfamart.png")}}
                 alt="">
            </div>
        </div>
    </div>
    <div id="checkout">
        <a href={{route('checkout')}}>Checkout</a>
    </div>
    @include('footer')
    <script src={{asset("js/paymentMethodPage.js")}}></script>
    <script src={{asset("js/userDropdown.js")}}></script>
</body>
</html>