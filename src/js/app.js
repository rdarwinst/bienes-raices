document.addEventListener('DOMContentLoaded', function () {

    eventListeners();
    darkMode();
});

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);
};

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar');
};

function darkMode() {

    const preferenciaDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
    const preferenciaUsuario = localStorage.getItem('darkModeActivo');

    if (preferenciaUsuario === 'true') {
        document.body.classList.add('dark-mode');
    } else if (preferenciaUsuario === 'false') {
        document.body.classList.remove('dark-mode');
    } else {
        if (preferenciaDarkMode.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }

    }


    preferenciaDarkMode.addEventListener('change', function () {
        if (preferenciaDarkMode.matches) {
            document.body.classList.add('dark-mode');
            localStorage.setItem('darkModeActivo', 'true');
        } else {
            document.body.classList.remove('dark-mode');
            localStorage.setItem('darkModeActivo', 'false');
        }
    })

    const btnDarkMode = document.querySelector('.dark-mode-boton');
    btnDarkMode.addEventListener('click', function () {
        const modoOscuroActiveo = document.body.classList.toggle('dark-mode');
        

        localStorage.setItem('darkModeActivo', modoOscuroActiveo.toString());
    })
}