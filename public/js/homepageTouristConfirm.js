function confirm2(){
    const widgetContainer = document.querySelector('#widget-container');
 
    const confirm2Container = document.createElement('div');
    confirm2Container.id = 'confirm2-container';
    confirm2Container.addEventListener('click', (e)=>{
        e.stopPropagation();

    });
    widgetContainer.appendChild(confirm2Container);

    const confirm2Text1 = document.createElement('p');
    confirm2Text1.id = 'confirm2-text1';
    confirm2Text1.textContent = 'Apakah anda yakin sudah menerima barangnya?';
    confirm2Container.appendChild(confirm2Text1);

    const confirm2Text2 = document.createElement('p');
    confirm2Text2.id = 'confirm2-text2';
    confirm2Text2.textContent = 'Pastikan kembali, karena setelah dikonfirmasi uang anda akan dikirim ke penjual barang.';
    confirm2Container.appendChild(confirm2Text2);

    const confirm2ButtonContainer = document.createElement('div');
    confirm2ButtonContainer.id = 'confirm2-button-container';
    confirm2Container.appendChild(confirm2ButtonContainer);

    const cancelBtn = document.createElement('button');
    cancelBtn.id = 'confirm2-cancel-btn';
    cancelBtn.textContent = 'Batal';
    cancelBtn.addEventListener('click',(e)=>{
        e.stopPropagation();
        widgetContainer.removeChild(confirm2Container);
        confirm1();
    })
    confirm2ButtonContainer.appendChild(cancelBtn);

    const okButton = document.createElement('button');
    okButton.id = 'confirm2-ok-btn';
    okButton.textContent = 'Konfirmasi';
    confirm2ButtonContainer.appendChild(okButton);
}

function confirm1(){
    const widgetContainer = document.querySelector('#widget-container');
    
    const confirm1Container = document.createElement('div');
    confirm1Container.addEventListener('click', (e)=>{
        e.stopPropagation();
    });
    confirm1Container.id = 'confirm1-container';
    widgetContainer.appendChild(confirm1Container);

    const confirm1Title = document.createElement('p');
    confirm1Title.textContent = 'Pesanan Tiba Dari';
    confirm1Title.id = 'confirm1-title';
    confirm1Container.appendChild(confirm1Title);

    const confirm1Content = document.createElement('div');
    confirm1Content.id = 'confirm1-content';
    confirm1Container.appendChild(confirm1Content);

    const img = document.createElement('img');
    img.src = 'assets/jelajahi-toko1.png';
    confirm1Content.appendChild(img);

    const div = document.createElement('div');
    confirm1Content.appendChild(div);

    const confirm1List = document.createElement('ul');
    confirm1List.id = 'confirm1-list';
    confirm1Content.appendChild(confirm1List);

    const confirm1Shopname = document.createElement('li');
    confirm1Shopname.id = 'confirm1-shopname';
    confirm1Shopname.textContent = 'Batik Nusa';
    confirm1List.appendChild(confirm1Shopname);

    const listItem1 = document.createElement('li');
    listItem1.textContent = 'Batik NTT x 1';
    confirm1List.appendChild(listItem1);

    const listItem2 = document.createElement('li');
    listItem2.textContent = 'Batik NTT x 3';
    confirm1List.appendChild(listItem2);

    const listItem3 = document.createElement('li');
    listItem3.textContent = 'Batik NTT x 2';
    confirm1List.appendChild(listItem3);

    const okBtn = document.createElement('button');
    okBtn.id = 'confirm1-ok-btn';
    okBtn.textContent = 'Konfirmasi';
    okBtn.addEventListener('click',(e)=>{
        e.stopPropagation();
        widgetContainer.removeChild(confirm1Container);
        confirm2();
    });
    confirm1Container.appendChild(okBtn);
}

const notifBtn = document.querySelector('#notif-container');
notifBtn.addEventListener('click', (e)=>{
    e.stopPropagation();
    confirm1();
});

const body = document.querySelector('body');
body.addEventListener('click', (e)=>{
    const widgetContainer = document.querySelector('#widget-container');

    const confirm1 = document.querySelector('#confirm1-container');
    if(confirm1) widgetContainer.removeChild(confirm1);

    const confirm2 = document.querySelector('#confirm2-container');
    if(confirm2) widgetContainer.removeChild(confirm2);


});