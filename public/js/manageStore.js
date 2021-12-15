const addProductBtn = document.querySelector('#tambah-produk-btn');
addProductBtn.addEventListener('click',()=>{
    createFormBg();
    createFormProduk();
});

const addLayananBtn = document.querySelector('#tambah-layanan-btn');
addLayananBtn.addEventListener('click',()=>{
    createFormBg();
    createFormLayanan();
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

function createFormLayanan(){
    const formBg = document.querySelector('#form-bg');

    const formLayanan = document.createElement('form');
    formLayanan.id = 'formLayanan';
    formLayanan.addEventListener('click',(e)=>{
        e.stopPropagation();
    });
    formBg.appendChild(formLayanan);

    const formTitle = document.createElement('h2');
    formTitle.textContent='Tambah Layanan';
    formLayanan.appendChild(formTitle);

    const namaDiv = document.createElement('div');
    namaDiv.id = 'containerNama';
    formLayanan.appendChild(namaDiv);   
    const namaLabel = document.createElement('label');
    namaLabel.for='namaLayanan';
    namaLabel.textContent = 'Nama Layanan';
    formLayanan.appendChild(namaLabel);
    const namaInput = document.createElement('input');
    namaInput.type='text';
    namaInput.id = 'namaLayanan';
    namaInput.name='namaLayanan';
    namaInput.placeholder = 'Masukkan nama layanan';
    namaDiv.appendChild(namaInput);

    const deskripsiDiv = document.createElement('div');
    deskripsiDiv.id='containerDeskripsi';
    formLayanan.appendChild(deskripsiDiv);
    const deskripsiLabel = document.createElement('label');
    deskripsiLabel.for = 'deskripsiLayanan';
    deskripsiDiv.appendChild(deskripsiLabel);

    const deskripsiInput = document.createElement('input');
    deskripsiInput.type = 'text';
    deskripsiInput.name='deskripsiLayanan';
    deskripsiInput.id = 'deskripsiLayanan';
    deskripsiInput.placeholder = 'Masukkan deskripsi layanan';
    deskripsiDiv.appendChild(deskripsiInput);

    const hargaKesediaanContainer = document.createElement('div');
    hargaKesediaanContainer.id = 'harga-kesediaan-container';
    formLayanan.appendChild(hargaKesediaanContainer);

    const hargaDiv = document.createElement('div');
    hargaDiv.id = 'harga-container';
    hargaKesediaanContainer.appendChild(hargaDiv);

    const hargaLabel = document.createElement('label');
    hargaLabel.id= 'hargaLayanan';
    hargaLabel.textContent = 'Harga layanan / jam';
    hargaDiv.appendChild(hargaLabel);

    const hargaInput = document.createElement('input');
    hargaInput.type = 'text';
    hargaInput.name='hargaLayanan';
    hargaInput.id = 'hargaLayanan';
    hargaInput.placeholder = 'Masukkan harga / jam';
    hargaDiv.appendChild(hargaInput);

    const kesediaanDiv = document.createElement('div');
    kesediaanDiv.id = 'kesediaan-layanan-container';
    hargaKesediaanContainer.appendChild(kesediaanDiv);
    const kesediaanLabel = document.createElement('label');
    kesediaanLabel.for = 'kesediaanLayanan';
    kesediaanLabel.textContent = 'Kesediaan';
    kesediaanDiv.appendChild(kesediaanLabel);

    const radioDiv = document.createElement('div');
    radioDiv.id = 'radio-container';
    kesediaanDiv.appendChild(radioDiv);

    const sediaDiv = document.createElement('div');
    sediaDiv.class = 'radioItem';
    sediaDiv.id = 'sedia-container';
    radioDiv.appendChild(sediaDiv);

    const sediaInput = document.createElement('input');
    sediaInput.type = 'radio';
    sediaInput.name = 'kesediaanLayanan';
    sediaInput.id = 'layananSedia';
    sediaInput.value = 'sedia';
    sediaDiv.appendChild(sediaInput);

    const sediaLabel = document.createElement('label');
    sediaLabel.for = 'layananSedia';
    sediaLabel.textContent = 'Tersedia';
    sediaDiv.appendChild(sediaLabel);

    const takSediaDiv = document.createElement('div'); 
    takSediaDiv.class = 'radioItem';
    radioDiv.appendChild(takSediaDiv);

    const takSediaInput = document.createElement('input');
    takSediaInput.type = 'radio';
    takSediaInput.name='kesediaanLayanan';
    takSediaInput.id ='layananTidakSedia';
    takSediaInput.value = 'tidakSedia';
    takSediaDiv.appendChild(takSediaInput);

    const takSediaLabel = document.createElement('label');
    takSediaLabel.for = 'layananTidakSedia';
    takSediaLabel.textContent = 'Tidak';
    takSediaDiv.appendChild(takSediaLabel);

    const buttonDiv = document.createElement('div');
    buttonDiv.id = 'button-container';
    formLayanan.appendChild(buttonDiv);

    const button = document.createElement('button');
    button.textContent = 'Tambah';
    buttonDiv.appendChild(button);
}