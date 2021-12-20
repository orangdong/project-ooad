<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/headermsme.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/forum.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
    crossorigin="anonymous">
    <title>NTT Market</title>
</head>
<body>
    @include('headermsme')
    <div id='jumbotron'>
        <h2>Forum</h2>
    </div>
    <div id='container'>
        <div id='container-header'>
            @auth
                <button id='new-thread-btn'>Thread Baru</button>    
            @endauth
        </div>
        <div id='container-content'>
            <div id='container-content-header'>
                <img src={{asset("assets/user-icon.png")}} alt="">
                <div id='container-content-header-text'>
                    <p id='thread-creator'>Batik nusa</p>
                    <p id='thread-title'>Peringatan HUT Nusa Tenggara Barat ke-79</p>
                </div>
                @auth
                    <button id='reply-btn'>Balas Thread</button>    
                @endauth
            </div>
            <div id='container-content-content'>
                <div id='container-content-images'>
                    <img src={{asset("assets/forum1.jpg")}} alt="">
                    <img src={{asset("assets/forum2.jpg")}} alt="">
                    <img src={{asset("assets/forum3.jpg")}} alt="">
                    <img src={{asset("assets/forum4.jpg")}} alt="">
                </div>
                <div id='container-content-content-text'>
                    <p id='text1'>Sehubung dengan Peringatan HUT NTB ke - 79.
                        Kami Membuat Produk Baru dengan Bermacam Macam 
                        Motif Terbaru.
                    </p>
                    <p id='text2'>Setelah itu Kami juga Mengadakan Promo Discount Untuk 
                        Pelanggan Kami Sebesar 25% Selama HUT NTB
                        Diselanggarakan
                    </p>
                </div>
            </div>
        </div>
       
    </div>
    @include('footer')
    <script src={{asset('js/forum.js')}}></script>
    <script src={{asset("js/userDropdown.js")}}></script>
</body>
</html>