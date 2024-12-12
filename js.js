
const openRegisterModal = document.getElementById('openRegisterModal');
const registerModal = document.getElementById('registerModal');
const closeRegisterBtn = document.querySelector('.close-btn');


openRegisterModal.onclick = function() {
    registerModal.style.display = 'flex';
}

closeRegisterBtn.onclick = function() {
    registerModal.style.display = 'none';
}



const openInModal = document.getElementById('openInModal');
const inModal = document.getElementById('inModal');
const closeInBtn = document.querySelector('.in-close-btn'); // Закрывающая кнопка для окна входа


openInModal.onclick = function() {
    inModal.style.display = 'flex';
}


closeInBtn.onclick = function() {
    inModal.style.display = 'none';
}
