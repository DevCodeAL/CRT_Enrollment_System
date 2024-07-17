const shsModal = document.getElementById('shsForm');

const shsBtn = document.getElementById('dropdown-btn-shs');

const shsSpan = document.getElementById('shsclose');

shsBtn.onclick = function shsShow(){
    shsModal.style.display = 'flex';
}

shsSpan.onclick = function shsClose(){
    shsModal.style.display = 'none';
}