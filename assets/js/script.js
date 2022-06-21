const btnMobile = document.getElementById('btn-mobile');

function toggleMenu(){
    const section = document.getElementById('container');
    section.classList.toggle('active');
}

btnMobile.addEventListener('click', toggleMenu);