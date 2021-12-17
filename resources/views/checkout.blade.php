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
    <link rel="stylesheet" href="/css/checkout.css">
    <title>Document</title>
</head>
<body>
    @include('headertourist')
    <div id='jumbotron'>
        <h2>Batik nusa</h2>
        <p>Alamat: Labuan Bajo, Manggarai Barat</p>
    </div>
    <div id="container">
        <div id='container-header'>
            <h2>Checkout</h2>
        </div>
        <div id='container-content'>
            <div id="container-content-upper">
                <img src="assets/logo-ovo.png" alt="">
            </div>
            <div id='container-content-lower'>
                <table id="container-content-table">
                    <tbody>
                        <tr>
                            <td>Batik NTT x 1</td>
                            <td>Rp. 250.000</td>
                        </tr>
                        <tr>
                            <td>Batik NTT x 3</td>
                            <td>Rp. 450.000</td>
                        </tr>
                        <tr>
                            <td>Batik NTT x 2</td>
                            <td class='td-pad-bawah'>Rp. 350.000</td>
                        </tr>
                        <tr>
                            <td id='td-harga-barang' class='td-pad-atas'>Harga Barang</td>
                            <td id='td-total-harga'>Rp. 1.050.000</td>
                        </tr>
                        <tr>
                            <td class='border-bawah td-pad-bawah'>Ongkos kirim</td>
                            <td class='border-bawah'>Rp. 30.000</td>
                        </tr>
                        <tr>
                            <td class='td-pad-atas'>Total harga</td>
                            <td>Rp. 1.080.000</td>
                        </tr>
                    </tbody>
                </table>
                <div id="container-content-right">
                    <div id='container-content-phone'>
                        <p>Nomor Handphone</p>
                        <input type="tel" id='telp' name="telp">
                    </div>
                    <div id='container-content-pay'>
                        <button id='pay-btn'>Bayar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
    {{-- <div id='popup-bg'>
        <div id='popup'>
            <img src="/assets/tick-icon.png" alt="">
            <p>Pembayaran Anda Berhasil</p>
        </div>
    </div> --}}
    <script src='js/checkout.js'></script>
</body>
</html>