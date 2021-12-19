const widgetContainer = document.querySelector('#widget-container');
widgetContainer.addEventListener('click',(e)=>{
    e.stopPropagation();
});

const userBtn = document.querySelector('#user-btn');
userBtn.addEventListener('click', (e)=>{
    const userDropdown = document.querySelector('#user-dropdown');
    userDropdown.style.visibility = 'visible';
});