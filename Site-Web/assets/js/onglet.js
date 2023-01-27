
/*-----------------------Onglet-Ordinateur------------------------------*/

const onglet1 = document.getElementById('onglet1');
const onglet2 = document.getElementById('onglet2');
const onglet3 = document.getElementById('onglet3');
const onglet4 = document.getElementById('onglet4');


const ongletOne = document.getElementById('ongletOne');
const ongletTwo = document.getElementById('ongletTwo');
const ongletThree = document.getElementById('ongletThree');
const ongletFour = document.getElementById('ongletFour');

const parentGame = document.getElementById('parentGame');

const boxGame = document.getElementById('boxGame');

onglet1.addEventListener('click', () => {
    ongletOne.classList.remove('noVisible');
    ongletOne.classList.add('visible');
    onglet1.classList.remove('onglet');
    onglet1.classList.add('ongletOpen');

    ongletTwo.classList.add('noVisible');
    ongletTwo.classList.remove('Visible');
    onglet2.classList.remove('ongletOpen');
    onglet2.classList.add('onglet');

    ongletThree.classList.add('noVisible');
    ongletThree.classList.remove('Visible');
    onglet3.classList.remove('ongletOpen');
    onglet3.classList.add('onglet');

    ongletFour.classList.add('noVisible');
    ongletFour.classList.remove('Visible');
    onglet4.classList.remove('ongletOpen');
    onglet4.classList.add('onglet');

    parentGame.classList.remove('sizeBoxTwo');
    parentGame.classList.add('sizeBox');
})

onglet2.addEventListener('click', () => {
    ongletTwo.classList.remove('noVisible');
    ongletTwo.classList.add('visible');
    onglet2.classList.remove('onglet');
    onglet2.classList.add('ongletOpen');


    ongletOne.classList.add('noVisible');
    ongletOne.classList.remove('Visible');
    onglet1.classList.remove('ongletOpen');
    onglet1.classList.add('onglet');

    ongletThree.classList.add('noVisible');
    ongletThree.classList.remove('Visible');
    onglet3.classList.remove('ongletOpen');
    onglet3.classList.add('onglet');

    ongletFour.classList.add('noVisible');
    ongletFour.classList.remove('Visible');
    onglet4.classList.remove('ongletOpen');
    onglet4.classList.add('onglet');

    parentGame.classList.remove('sizeBox');
    parentGame.classList.add('sizeBoxTwo');
})

onglet3.addEventListener('click', () => {
    ongletThree.classList.add('visible');
    ongletThree.classList.remove('noVisible');
    onglet3.classList.add('ongletOpen');
    onglet3.classList.remove('onglet');

    ongletOne.classList.add('noVisible');
    ongletOne.classList.remove('Visible');
    onglet1.classList.remove('ongletOpen');
    onglet1.classList.add('onglet');

    ongletTwo.classList.add('noVisible');
    ongletTwo.classList.remove('Visible');
    onglet2.classList.remove('ongletOpen');
    onglet2.classList.add('onglet');

    ongletFour.classList.add('noVisible');
    ongletFour.classList.remove('Visible');
    onglet4.classList.remove('ongletOpen');
    onglet4.classList.add('onglet');

    parentGame.classList.remove('sizeBox');
    parentGame.classList.add('sizeBoxTwo');
})

onglet4.addEventListener('click', () => {
    ongletFour.classList.add('visible');
    ongletFour.classList.remove('noVisible');
    onglet4.classList.add('ongletOpen');
    onglet4.classList.remove('onglet');

    ongletOne.classList.add('noVisible');
    ongletOne.classList.remove('Visible');
    onglet1.classList.remove('ongletOpen');
    onglet1.classList.add('onglet');

    ongletThree.classList.add('noVisible');
    ongletThree.classList.remove('Visible');
    onglet3.classList.remove('ongletOpen');
    onglet3.classList.add('onglet');

    ongletTwo.classList.add('noVisible');
    ongletTwo.classList.remove('Visible');
    onglet2.classList.remove('ongletOpen');
    onglet2.classList.add('onglet');

    parentGame.classList.remove('sizeBox');
    parentGame.classList.add('sizeBoxTwo');
})


/*-----------------------Onglet-Mobile------------------------------*/

const onglet1M = document.getElementById('onglet1M');
const onglet2M = document.getElementById('onglet2M');
const onglet3M = document.getElementById('onglet3M');
const onglet4M = document.getElementById('onglet4M');

onglet1M.addEventListener('click', () => {
    ongletOne.classList.remove('noVisible');
    ongletOne.classList.add('visible');
    onglet1M.classList.remove('bouton');
    onglet1M.classList.add('boutonM');

    ongletTwo.classList.add('noVisible');
    ongletTwo.classList.remove('Visible');
    onglet2M.classList.remove('boutonM');
    onglet2M.classList.add('bouton');

    ongletThree.classList.add('noVisible');
    ongletThree.classList.remove('Visible');
    onglet3M.classList.remove('boutonM');
    onglet3M.classList.add('bouton');

    ongletFour.classList.add('noVisible');
    ongletFour.classList.remove('Visible');
    onglet4M.classList.remove('boutonM');
    onglet4M.classList.add('bouton');
})

onglet2M.addEventListener('click', () => {
    ongletTwo.classList.remove('noVisible');
    ongletTwo.classList.add('visible');
    onglet2M.classList.remove('bouton');
    onglet2M.classList.add('boutonM');


    ongletOne.classList.add('noVisible');
    ongletOne.classList.remove('Visible');
    onglet1M.classList.remove('boutonM');
    onglet1M.classList.add('bouton');

    ongletThree.classList.add('noVisible');
    ongletThree.classList.remove('Visible');
    onglet3M.classList.remove('boutonM');
    onglet3M.classList.add('bouton');

    ongletFour.classList.add('noVisible');
    ongletFour.classList.remove('Visible');
    onglet4M.classList.remove('boutonM');
    onglet4M.classList.add('bouton');
})

onglet3M.addEventListener('click', () => {
    ongletThree.classList.add('visible');
    ongletThree.classList.remove('noVisible');
    onglet3M.classList.add('boutonM');
    onglet3M.classList.remove('bouton');

    ongletOne.classList.add('noVisible');
    ongletOne.classList.remove('Visible');
    onglet1M.classList.remove('boutonM');
    onglet1M.classList.add('bouton');

    ongletTwo.classList.add('noVisible');
    ongletTwo.classList.remove('Visible');
    onglet2M.classList.remove('boutonM');
    onglet2M.classList.add('bouton');

    ongletFour.classList.add('noVisible');
    ongletFour.classList.remove('Visible');
    onglet4M.classList.remove('boutonM');
    onglet4M.classList.add('bouton');
})

onglet4M.addEventListener('click', () => {
    ongletFour.classList.add('visible');
    ongletFour.classList.remove('noVisible');
    onglet4M.classList.add('boutonM');
    onglet4M.classList.remove('bouton');

    ongletOne.classList.add('noVisible');
    ongletOne.classList.remove('Visible');
    onglet1M.classList.remove('boutonM');
    onglet1M.classList.add('bouton');

    ongletThree.classList.add('noVisible');
    ongletThree.classList.remove('Visible');
    onglet3M.classList.remove('boutonM');
    onglet3M.classList.add('bouton');

    ongletTwo.classList.add('noVisible');
    ongletTwo.classList.remove('Visible');
    onglet2M.classList.remove('boutonM');
    onglet2M.classList.add('bouton');
})

