const skin1 = document.getElementById('skin1');
const skin2 = document.getElementById('skin2');
const skin3 = document.getElementById('skin3');
const skin4 = document.getElementById('skin4');

skin1.addEventListener('click', () => {
    boxGame.classList.remove('skinFront2');
    boxUser.classList.remove('skinFront2');
    compteGameUser.classList.remove('skinFront2');
    boxHG.classList.remove('skinFrontHG2');
    boxGame.classList.remove('skinFront3');
    boxUser.classList.remove('skinFront3');
    compteGameUser.classList.remove('skinFront3');
    boxHG.classList.remove('skinFrontHG3');
    boxGame.classList.remove('skinFront4');
    boxUser.classList.remove('skinFront4');
    compteGameUser.classList.remove('skinFront4');
    boxHG.classList.remove('skinFrontHG4');
    /*------------------*/
    boxGame.classList.add('skinFront1');
    boxUser.classList.add('skinFront1');
    compteGameUser.classList.add('skinFront1');
    boxHG.classList.add('skinFrontHG1');
    skin1.style.border = "solid green 1px";
    skin2.style.border = "solid whitesmoke 1px";
    skin3.style.border = "solid whitesmoke 1px";
    skin4.style.border = "solid whitesmoke 1px";
})

skin2.addEventListener('click', () => {
    boxGame.classList.remove('skinFront1');
    boxUser.classList.remove('skinFront1');
    compteGameUser.classList.remove('skinFront1');
    boxHG.classList.remove('skinFrontHG1');
    boxGame.classList.remove('skinFront3');
    boxUser.classList.remove('skinFront3');
    compteGameUser.classList.remove('skinFront3');
    boxHG.classList.remove('skinFrontHG3');
    boxGame.classList.remove('skinFront4');
    boxUser.classList.remove('skinFront4');
    compteGameUser.classList.remove('skinFront4');
    boxHG.classList.remove('skinFrontHG4');
    /*---------------*/
    boxGame.classList.add('skinFront2');
    boxUser.classList.add('skinFront2');
    compteGameUser.classList.add('skinFront2');
    boxHG.classList.add('skinFrontHG2');
    skin1.style.border = "solid whitesmoke 1px";
    skin2.style.border = "solid green 1px";
    skin3.style.border = "solid whitesmoke 1px";
    skin4.style.border = "solid whitesmoke 1px";
})

skin3.addEventListener('click', () => {
    boxGame.classList.remove('skinFront1');
    boxUser.classList.remove('skinFront1');
    compteGameUser.classList.remove('skinFront1');
    boxHG.classList.remove('skinFrontHG1');
    boxGame.classList.remove('skinFront2');
    boxUser.classList.remove('skinFront2');
    compteGameUser.classList.remove('skinFront2');
    boxHG.classList.remove('skinFrontHG2');
    boxGame.classList.remove('skinFront4');
    boxUser.classList.remove('skinFront4');
    compteGameUser.classList.remove('skinFront4');
    boxHG.classList.remove('skinFrontHG4');
    /*---------------*/
    boxGame.classList.add('skinFront3');
    boxUser.classList.add('skinFront3');
    compteGameUser.classList.add('skinFront3');
    boxHG.classList.add('skinFrontHG3');
    skin1.style.border = "solid whitesmoke 1px";
    skin2.style.border = "solid whitesmoke 1px";
    skin3.style.border = "solid green 1px";
    skin4.style.border = "solid whitesmoke 1px";
})

skin4.addEventListener('click', () => {
    boxGame.classList.remove('skinFront1');
    boxUser.classList.remove('skinFront1');
    compteGameUser.classList.remove('skinFront1');
    boxHG.classList.remove('skinFrontHG1');
    boxGame.classList.remove('skinFront2');
    boxUser.classList.remove('skinFront2');
    compteGameUser.classList.remove('skinFront2');
    boxHG.classList.remove('skinFrontHG2');
    boxGame.classList.remove('skinFront3');
    boxUser.classList.remove('skinFront3');
    compteGameUser.classList.remove('skinFront3');
    boxHG.classList.remove('skinFrontHG3');
    /*---------------*/
    boxGame.classList.add('skinFront4');
    boxUser.classList.add('skinFront4');
    compteGameUser.classList.add('skinFront4');
    boxHG.classList.add('skinFrontHG4');
    skin1.style.border = "solid whitesmoke 1px";
    skin2.style.border = "solid whitesmoke 1px";
    skin3.style.border = "solid whitesmoke 1px";
    skin4.style.border = "solid green 1px";
})