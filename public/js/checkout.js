const payBtn = document.querySelector('#pay-btn');
payBtn.addEventListener('click', ()=>{
    const body = document.querySelector('body');
    const popupBg = document.createElement('div');
    popupBg.id = 'popup-bg';
    popupBg.addEventListener('click',()=>{
        body.removeChild(popupBg);
    });

    body.appendChild(popupBg);
   
    const popup = document.createElement('div');
    popup.id = 'popup';
    popup.addEventListener('click',(e)=>{
        e.stopPropagation();
    });
    popupBg.appendChild(popup);

    const image = document.createElement('img');
    image.src = "/assets/tick-icon.png";
    popup.appendChild(image);

    const p = document.createElement('p');
    p.textContent = 'Pembayaran Anda Berhasil';
    popup.appendChild(p);
    setTimeout(()=>{
        window.location.href = "/dashboard";
    }, 5000);
});

