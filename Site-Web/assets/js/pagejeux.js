const Trophées = document.getElementById('Trophées');
const Description = document.getElementById('Description');

const boiteTrophée = document.getElementById('boiteTrophée');
const boiteDescription = document.getElementById('boiteDescription');


Description.addEventListener('click', ()=>{
    boiteDescription.classList.remove('NoVisibleGame');
    boiteDescription.classList.add('VisibleGame');

    boiteTrophée.classList.remove('VisibleGame');
    boiteTrophée.classList.add('NoVisibleGame');
})

Trophées.addEventListener('click', ()=>{
    boiteTrophée.classList.remove('NoVisibleGame');
    boiteTrophée.classList.add('VisibleGame');

    boiteDescription.classList.remove('VisibleGame');
    boiteDescription.classList.add('NoVisibleGame');
})