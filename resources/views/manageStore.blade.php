<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/headermsme.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/manageStore.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
    crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @include('headermsme')
    <main>
        <div id='jumbotron'>
            <h2>Batik nusa</h2>
            <p>Alamat: Labuan Bajo, Manggarai Barat</p>
            <a href="">Forum</a>
        </div>
        <div class='container' id='container-produk'>
            <div id='container-produk-header'>
                <h2>Semua produk</h2>
                <a href="">Tambah</a>
            </div>
            <table id='container-produk-content'>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama barang</th>
                        <th>Deskripsi barang</th>
                        <th>Stock</th>
                        <th>Harga</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class='container-item-no'><span>1</span></td>
                        <td>Baju Batik</td>
                        <td>Sebuah baju batik yang sangat indah dimana setiap motif memiliki maknanya </td>
                        <td>10</td>
                        <td>300.000</td>
                        <td class='container-item-button'>
                            <button><i class="fas fa-edit"></i></button>
                            <button><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class='container-item-no'><span>2</span></td>
                        <td>Makanan kolo</td>
                        <td>Makanan khas NTT yang enak</td>
                        <td>9</td>
                        <td>20.000</td>
                        <td class='container-item-button'>
                            <button><i class="fas fa-edit"></i></button>
                            <button><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class='container' id='container-layanan'>
            <div id='container-layanan-header'>
                <h2>Semua layanan</h2>
                <a href="">Tambah</a>
            </div>
            <table id='container-layanan-content'>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama layanan</th>
                        <th>Deskripsi layanan</th>
                        <th>Kesediaan</th>
                        <th>Harga</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class='container-item-no'><span>1</span></td>
                        <td>Panduan wisata</td>
                        <td>Memandu anda keliling kota</td>
                        <td>Tersedia</td>
                        <td>300.000/jam</td>
                        <td class='container-item-button'>
                            <button><i class="fas fa-edit"></i></button>
                            <button><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    @include('footer')
</body>
</html>