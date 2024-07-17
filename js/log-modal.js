const logModal = document.getElementById('modal');

const logBtn = document.getElementById('btn');

const logSpan = document.getElementById('close');

logBtn.onclick = function show(){
    logModal.style.display = 'flex';
}

logSpan.onclick = function close(){
    logModal.style.display = 'none';
}

window.onclick = function(event){
    if(event.target === logModal){
        logModal.style.display = 'none';
    }
}