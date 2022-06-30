const btnMobile = document.getElementById('btn-mobile');
const oCabecalho = document.getElementById('cabecalho');

function jToggleMenu(){
    const section = document.getElementById('container');
    section.classList.toggle('active');
    oCabecalho.classList.toggle('width');
    console.log(oCabecalho);
}

btnMobile.addEventListener('click', jToggleMenu);