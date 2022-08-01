/*=============== BOTON LANG ===============*/
let btnEs = document.getElementById('btnEs');
let btnPt = document.getElementById('btnPt');
let btnEn = document.getElementById('btnEn');

/* Escucha para el boton en español */
btnEs.addEventListener('click', () => {
    if (!btnEs.classList.contains('active')) {
        localStorage.setItem('lang', 'es');
    }
    updateIdioma();
});

/* Escucha para el boton en portugues */
btnPt.addEventListener('click', () => {
    if (!btnPt.classList.contains('active')) {
        localStorage.setItem('lang', 'pt');
    }
    updateIdioma();
});

/* Escucha para el boton en ingles */
btnEn.addEventListener('click', () => {
    if (!btnEn.classList.contains('active')) {
        localStorage.setItem('lang', 'en');
    }
    updateIdioma();
});

function getIdioma() {
    /* Si existe la key 'lang' */
    if (localStorage.getItem('lang') !== null) {
        if (localStorage.getItem('lang') === 'es') {
            btnEs.classList.add('active');
        } else if (localStorage.getItem('lang') === 'pt') {
            btnPt.classList.add('active');
        } else if (localStorage.getItem('lang') === 'en') {
            btnEn.classList.add('active');
        } else {
            localStorage.setItem('lang', 'es');
            btnEs.classList.add('active');
        }
    } else {
        localStorage.setItem('lang', 'es');
        btnEs.classList.add('active');
        window.location.href = '?lang=es';
    }
    updateIdioma();
}

getIdioma();

function updateIdioma() {
    if (localStorage.getItem('lang') === 'es') {
        btnEs.classList.add('active');
    } else if (localStorage.getItem('lang') === 'pt') {
        btnPt.classList.add('active');
    } else if (localStorage.getItem('lang') === 'en') {
        btnEn.classList.add('active');
    }
}