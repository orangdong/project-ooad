const body = document.querySelector('body');
body.addEventListener('click', (e)=>{
    const userDropdown = document.querySelector('#user-dropdown');
    if(userDropdown.style.visibility === 'visible') userDropdown.style.visibility = 'hidden';
});