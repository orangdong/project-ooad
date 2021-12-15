const addProductBtn = document.querySelector('#tambah-produk-btn');
addProductBtn.addEventListener('click',()=>{
    createFormBg();
    createFormProduk();
});

function createFormBg(){
    const body = document.querySelector('body');

    const formBg = document.createElement('div');
    formBg.id='form-bg';
    formBg.addEventListener('click',()=>{
        body.removeChild(formBg);
    });
    body.appendChild(formBg);
}

function createFormProduk(){
    const formBg = document.querySelector('#form-bg');
    

    const form = document.createElement('form');
    form.id='formProduk';
    form.addEventListener('click',(e)=>{
        e.stopPropagation();
    });
    formBg.appendChild(form);

    const formTitle = document.createElement('h2');
    formTitle.textContent = 'Tambah Produk';
    form.appendChild(formTitle);

    const namaDiv = document.createElement('div');
    form.appendChild(namaDiv);
    const namaLabel = document.createElement('label');
    namaLabel.for = 'namaProduk';
    namaLabel.textContent = 'Nama Produk';
    const namaInput = document.createElement('input');
    namaInput.type = 'text';
    namaInput.id = 'namaProduk';
    namaInput.name='namaProduk';
    namaInput.placeholder = 'Masukkan nama produk';
    namaDiv.appendChild(namaLabel);
    namaDiv.appendChild(namaInput);

    const deskripsiDiv = document.createElement('div');
    form.appendChild(deskripsiDiv);
    const deskripsiLabel = document.createElement('label');
    deskripsiLabel.for = 'deskripsiProduk'; 
    deskripsiLabel.textContent = 'Deskripsi Produk';
    deskripsiDiv.appendChild(deskripsiLabel);
    const deskripsiInput = document.createElement('input');
    deskripsiInput.type = 'text';
    deskripsiInput.id = 'deskripsiProduk';
    deskripsiInput.name='deskripsiProduk';
    deskripsiInput.placeholder = 'Masukkan deskripsi produk';
    deskripsiDiv.appendChild(deskripsiInput);

    const hargaJumlahDiv = document.createElement('div');
    form.appendChild(hargaJumlahDiv);
    hargaJumlahDiv.id = 'harga-jumlah-container';
    const hargaDiv = document.createElement('div');
    hargaDiv.id = 'harga-container';
    hargaJumlahDiv.appendChild(hargaDiv);
    const hargaLabel = document.createElement('label');
    hargaLabel.for = 'hargaProduk';
    hargaLabel.textContent = 'Harga Produk';
    hargaDiv.appendChild(hargaLabel);
    const hargaInput = document.createElement('input');
    hargaInput.type = 'text';
    hargaInput.id = 'hargaProduk';
    hargaInput.name = 'hargaProduk';
    hargaInput.placeholder = 'Masukan harga produk';
    hargaDiv.appendChild(hargaInput);

    const jumlahDiv = document.createElement('div');
    hargaJumlahDiv.appendChild(jumlahDiv);
    const jumlahLabel = document.createElement('label');
    jumlahLabel.for = 'jumlahProduk';
    jumlahLabel.textContent = 'Jumlah Produk';
    jumlahDiv.appendChild(jumlahLabel);
    const jumlahInput = document.createElement('input');
    jumlahInput.type = 'text';
    jumlahInput.id = 'jumlahProduk';
    jumlahInput.name = 'jumlahProduk';
    jumlahInput.placeholder = 'Masukan jumlah produk';
    jumlahDiv.appendChild(jumlahInput);

    const buttonDiv = document.createElement('div');
    buttonDiv.id = 'button-container';
    form.appendChild(buttonDiv);
    const button = document.createElement('button');
    button.textContent = 'Tambah';
    buttonDiv.appendChild(button);
}

