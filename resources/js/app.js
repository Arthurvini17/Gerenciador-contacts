import './bootstrap';

setTimeout(function () {
    var mensagemElement = document.getElementById('msg-exc');
    if (mensagemElement) {
        mensagemElement.style.display = 'none';
    }
}, 5000); 


setTimeout(function () {
    var mensagemElement = document.getElementById('msg-create');
    if (mensagemElement) {
        mensagemElement.style.display = 'none';
    }
}, 5000); 


setTimeout(function (){
    var mensagemElement = document.getElementById('msg-edit');
    if (mensagemElement){
        mensagemElement.style.display = 'none';

    }
}, 5000);
