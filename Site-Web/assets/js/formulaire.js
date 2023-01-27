let passwordRegex = [];
passwordRegex['lower'] = /[a-z]/;
passwordRegex['upper'] = /[A-Z]/;
passwordRegex['number'] = /[0-9]/;
passwordRegex['special'] = /[$&+,:;=?@#|\'<>\.\-^*()%!"\{\]\{\}]/;
passwordRegex['stringlength'] = /^(.){8,}$/;

let conditions = [
    'lower',
    'upper',
    'number',
    'special',
    'stringlength'
];

const password = document.getElementById('passWord');

const boxList = document.getElementById('boxList');
const boxListMobile = document.getElementById('boxListMobile');


password.addEventListener('input', () => { 
    boxList.classList.remove('none');
    boxList.classList.add('noNone');
    boxListMobile.classList.remove('none');
    boxListMobile.classList.add('noNone');
});

password.addEventListener('input', () => {
  
    let score = 0;
    for (let c of conditions) {
        let li = document.getElementById(c);
     
        if (passwordRegex[c].test(password.value)) {
           li.style.color = 'rgb(40, 206, 40)';
           li.children[0].innerHTML = '<span class="material-symbols-outlined iconValid">check_circle</span>';
           li.children[1].innerHTML = '';
           score += 1;
        } else {
            li.style.color = 'whitesmoke';
            li.children[1].innerHTML = '<span class="material-symbols-outlined iconCancel">cancel</span>';
            li.children[0].innerHTML = '';
            score -= 1;
        }
    }
})
