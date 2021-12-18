function confirm2(){
    const widgetContainer = document.querySelector('#widget-container');
 
    const confirm2Container = document.createElement('div');
    confirm2Container.id = 'confirm2-container';
    widgetContainer.appendChild(confirm2Container);

    const confirm2Text1 = document.createElement('p');
    confirm2Text1.id = 'confirm2-text1';
    confirm2Text1.textContent = 'Apakah anda yakin sudah menerima barangnya?';
    confirm2Container.appendChild(confirm2Text1);

    const confirm2Text2 = document.createElement('p');
    confirm2Text2.id = 'confirm2-text2';
    confirm2Text2.textContent = 'Pastikan kembali, karena setelah dikonfirmasu uang anda akan dikirim ke penjual barang.';
    confirm2Container.appendChild(confirm2Text2);

    const confirm2ButtonContainer = document.createElement('div');
    confirm2ButtonContainer.id = 'confirm2-button-container';
    confirm2Container.appendChild(confirm2ButtonContainer);

    const cancelBtn = document.createElement('button');
    cancelBtn.id = 'confirm2-cancel-btn';
    cancelBtn.textContent = 'Batal';
    confirm2ButtonContainer.appendChild(cancelBtn);

    const okButton = document.createElement('button');
    okButton.id = 'confirm2-ok-btn';
    okButton.textContent = 'Konfirmasi';
    confirm2ButtonContainer.appendChild(okButton);
}

confirm2();
