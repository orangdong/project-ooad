function renderForm(){
  const body = document.querySelector('body');
  const popupBg = document.createElement('div');
  popupBg.id = 'popup-bg';
  popupBg.addEventListener('click', ()=>{
      body.removeChild(popupBg);
  });
  body.appendChild(popupBg);

  const form = document.createElement('form');
  form.id = 'new-thread-form';
  form.addEventListener('click',(e)=>{
      e.stopPropagation();
  });
  popupBg.appendChild(form);

  const formTitle = document.createElement('h2');
  formTitle.textContent = 'Thread Baru';
  form.appendChild(formTitle);

  const judulContainer = document.createElement('div');
  judulContainer.id = 'judul-container';
  form.appendChild(judulContainer);

  const judulLabel = document.createElement('label');
  judulLabel.for = 'judul';
  judulLabel.textContent = 'Judul Thread';
  judulContainer.appendChild(judulLabel);

  const judulInput = document.createElement('input');
  judulInput.type = 'text';
  judulInput.placeholder = 'Masukkan judul thread';
  judulInput.id = 'judul';
  judulInput.name = 'judul';
  judulContainer.appendChild(judulInput);

  const isiContainer = document.createElement('div');
  isiContainer.id = 'isi-container';
  form.appendChild(isiContainer);

  const isiLabel = document.createElement('label');
  isiLabel.for = 'isi';
  isiLabel.textContent = 'Isi Thread';
  isiContainer.appendChild(isiLabel);

  const isiInput = document.createElement('input');
  isiInput.type = 'text';
  isiInput.id = 'isi';
  isiInput.name = 'isi';
  isiInput.placeholder = 'Masukkan isi thread';
  isiContainer.appendChild(isiInput);

  const buttonContainer = document.createElement('div');
  buttonContainer.id = 'button-container';
  form.appendChild(buttonContainer);

  const button = document.createElement('button');
  button.textContent = 'Buat';
  buttonContainer.appendChild(button);
}

const newThreadBtn = document.querySelector('#new-thread-btn');
newThreadBtn.addEventListener('click', ()=>{
  renderForm();
});

function replyForm(){
  const containerContent = document.querySelector('#container-content');
  const replyTab = document.createElement('div');
  replyTab.id = 'reply-tab';
  containerContent.appendChild(replyTab);

  const image = document.createElement('img');
  image.src = 'assets/user-icon.png';
  replyTab.appendChild(image);

  const replyContainer = document.createElement('div');
  replyContainer.id = 'reply-container';
  replyTab.appendChild(replyContainer);

  const input = document.createElement('input');
  input.type = 'text';
  input.id = 'reply';
  input.name = 'reply';
  input.placeholder = 'Tulislah balasan anda disini';
  replyContainer.appendChild(input);

  const cancelBtn = document.createElement('button');
  cancelBtn.id = 'cancel-btn';
  cancelBtn.textContent = 'Cancel';
  cancelBtn.addEventListener('click',()=>{
      containerContent.removeChild(replyTab);
  });
  replyContainer.appendChild(cancelBtn);

  const okBtn = document.createElement('button');
  okBtn.id = 'ok-btn';
  okBtn.textContent = 'Balas';
  replyContainer.appendChild(okBtn);
}

const replyBtn = document.querySelector('#reply-btn');
replyBtn.addEventListener('click', ()=>{
  const replyTab = document.querySelector('#reply-tab');
  if(!replyTab){
      replyForm();
  }
});

const body = document.querySelector('body');
body.addEventListener('click', ()=>{
  const userDropdown = document.querySelector('#user-dropdown');
  if(userDropdown.style.visibility === 'visible') userDropdown.style.visibility = 'hidden';
});
