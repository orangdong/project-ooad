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
        <title>Forum</title>
    </head>

    <body>
        @include('headertourist')
        <div id='jumbotron'>
            <h2>Forum</h2>
        </div>

        <div class='container' id='container-forum'>
            <div class='container-header'>
                <button class="btn btn-lg btn-primary mt-4 rounded" type="Thread" id="myBtn" >Thread Baru</button>
            </div>

            <div class="content-main w-75">
                <div class="card mt-4 ">
                    <div class="content-main-upper d-flex">
                        <div class="image-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </div>
                        <div class="content-main-upper-middle">
                            <h5>Batik Nusa</h5>
                            <h6>Peringatan HUT Nusa Tenggara Barat ke-79 </h6>
                        </div>
                        <div class="Button-content">
                            <button class="btn btn-lg btn-primary mt-4 rounded" type="Thread" onclick="myFunction1()">Balas Thread</button>
                        </div>

                    </div>
                    <div class="content-main-lower d-flex mx-auto">
                        <div class="content-img">
                            <div class="d-flex mb-2">
                                <img src="{{asset('assets/forum1.jpg')}}" class="w-50 rounded " alt="">
                                <img src="{{asset('assets/forum2.jpg')}}" class="w-50 rounded " alt="">
                            </div>
                            <div class="d-flex">
                                <img src="{{asset('assets/forum3.jpg')}}" class="w-50 rounded " alt="">
                                <img src="{{asset('assets/forum4.png')}}" class="w-50 rounded " alt="">
                            </div>
                        </div>
                        <div class="content-text d-flex">
                            <p>Sehubung dengan Peringatan HUT NTB ke - 79 
                                Kami Membuat Produk Baru dengan Bermacam Macam 
                                Motif Terbaru.</p>
                            
                            <p>
                                Setelah itu Kami juga Mengadakan Promo Discount Untuk 
                                Pelanggan Kami Sebesar 25% Selama HUT NTB
                                Diselanggarakan
                            </p>
                        </div>
                        <div>

                        </div>
                    </div>

                    <div id="myDIV1">
                        <div class="content-main-upper1 d-flex">
                            <div class="image-content1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                            </div>
                            <div class="form-floating mb-2 mt-3" id="BalasThreadBaru">
                                <input type="text" class="form-control" id="BalasThreadBaru1" placeholder="ThreadBaru">
                                <label for="floatingThreadBaru" id="BalasThreadBaru1">Masukan Judul Thread</label>
                            </div>
                            <div class="Button-content">
                                <button class="btn btn-lg btn-primary mt-4 rounded" type="Thread" onclick="myFunction2()">Send !</button>
                            </div>
    
                        </div>
                    </div>
                  
                </div>
                  
                
            </div>
        </div>

        @include('footer')

        <!-- The Modal -->
        <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="popup">
                <h1>Thread Baru</h1>

                <div>
                    <form action="" >
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="ThreadBaru" placeholder="ThreadBaru">
                            <label for="floatingThreadBaru">Masukan Judul Thread</label>
                        </div>
                        <div class="form-floating">
                            <textarea name="" cols="50" rows="10" class="form-control" id="IsiThreadBaru" placeholder="IsiThreadBaru"></textarea>
                            {{-- <input type="text" class="form-control" id="IsiThreadBaru" placeholder="IsiThreadBaru"> --}}
                            <label for="floatingIsiThreadBaru">Masukan Isi Thread</label>
                        </div>
                    </form>
                    
                </div>

                <button class="btn btn-lg btn-primary mt-4 rounded" type="Thread" id="myBtn1" onclick="myFunction()">Buat</button>
            </div>
        </div>


        <script src='/js/forum.js'></script>
    </body>
</html>