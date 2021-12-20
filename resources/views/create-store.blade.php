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
    <style>
        .desc{
            background-color: #EBEBEB;
            color: #8D8D8D;
            border: none;
            padding: 10px 15px;
            font-weight: bold;
            border-radius: 10px;
        }
    </style>
    @include('headermsme')
    <div style="background: lightgray" id='jumbotron'>
        <h2>Daftar Toko</h2>
    </div>
    <div style="height: 500px" id='container'>
        <div style="display: flex; justify-content: space-between">
            <h2 style="font-weight: 600">Semua Produk</h2>
            <button id='new-thread-btn'>Kelola Toko</button>    
        </div>
       {{-- Modal Box --}}
       <div id="popup-bg">
           <form action="" id='new-thread-form'>
            <h2>Daftar Toko</h2>
            <div id="judul-container">
                <label for="judul">Nama Toko</label>
                <input type="text" name="judul" id="judul" placeholder="Masukkan Nama Toko">
            </div>
            <div id="judul-container">
                <label>Deskripsi Toko</label>
                <textarea rows="10" type="text" name="deskripsi" class="desc" placeholder="Masukkan Deskripsi Toko"></textarea>
            </div>
            <div id="button-container">
                <button>Buat</button>
            </div>
           </form>
       </div>
    </div>
    @include('footer')
    <script src={{asset("js/userDropdown.js")}}></script>
</body>
</html>