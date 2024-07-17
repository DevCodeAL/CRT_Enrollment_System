const enrollForm = document.getElementById('enrollModal');

const enrollBtn = document.getElementById('dropdown-btn-college');

const enrollSpan = document.getElementById('enrollClose');

enrollBtn.onclick = function show_Form(){
    enrollForm.style.display = 'flex';
}

enrollSpan.onclick = function formClose(){
    enrollForm.style.display = 'none';
}