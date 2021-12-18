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
    okButton.addEventListener("click",()=>{
        widgetContainer.removeChild(confirm2Container);
        confirm3();
    });
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

function confirm3()
{
    const widgetContainer = document.querySelector('#widget-container');
    const confirm3Container = document.createElement('div');
    confirm3Container.id="confirm3-container";
    widgetContainer.appendChild(confirm3Container);
    confirm3Container.addEventListener("click",(e)=>{
        e.stopPropagation();
    })

    const judulC3 = document.createElement('h2');
    judulC3.id="judul-c3";
    judulC3.textContent="Terima kasih telah berbelanja di Batik nusa";
    confirm3Container.appendChild(judulC3);

    const ratingtxt = document.createElement('div');
    ratingtxt.id="ratingtxt-c3";
    ratingtxt.textContent="Berikan rating untuk Batik Nusa";
    confirm3Container.appendChild(ratingtxt);

    const star = document.createElement('div');
    confirm3Container.appendChild(star);

    for(let i = 0; i<5;i++)
    {
        const star1 = document.createElement('i');
        star1.classList.add("fas","fa-star");
        star.appendChild(star1);
    }
    
    const ratingtxt1 = document.createElement('div');
    ratingtxt1.id="ratingtxt-c3";
    ratingtxt1.textContent="Berikan feedback untuk Batik Nusa";
    confirm3Container.appendChild(ratingtxt1);

    const apa = document.createElement('div');
    apa.id="apa";
    confirm3Container.appendChild(apa);

    const fo = document.createElement('form');
    fo.id="inputfeedback";
    apa.appendChild(fo);

    const fe = document.createElement('input');
    fe.id="feedback";
    fe.placeholder="Masukkan feedback anda";
    fo.appendChild(fe);

    const but = document.createElement('div');
    but.id="c3-buttoncontainer"
    confirm3Container.appendChild(but);

    const but1 = document.createElement('div');
    but.appendChild(but1);
    const but2 = document.createElement('button');
    but2.id="c3-button"
    but2.textContent="Lewati";
    but2.addEventListener("click",()=>{
        widgetContainer.removeChild(confirm3Container);
    })
    but1.appendChild(but2);

    const but3 = document.createElement('div');
    but.appendChild(but3);
    const but4 = document.createElement('button');
    but4.id="c3-buttons"
    but4.textContent="Kirim";
    but4.addEventListener("click",()=>{
        widgetContainer.removeChild(confirm3Container);
    })
    but3.appendChild(but4);
}

{/* <div id="confirm3-container">
                    <div id="judul-c3">Terima kasih telah berbelanja di Batik nusa</div>
                    <div id="ratingtxt-c3">Berikan rating untuk Batik Nusa</div>
                    <div>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div id="ratingtxt-c3">Berikan feedback untuk Batik Nusa</div>
                    <div id="apa">
                        <form action="" id="inputfeedback">
                            <input id="feedback" type="text" placeholder="Masukkan feedback anda">
                        </form>
                    </div>
                    <div id="c3-buttoncontainer">
                        <div><button id="c3-button">Lewati</button></div>
                        <div><button id="c3-buttons">Kirim</button></div>
                    </div>
                </div> */}

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

    const confirm3 = document.querySelector('#confirm3-container');
    if(confirm3) widgetContainer.removeChild(confirm3);
    
});