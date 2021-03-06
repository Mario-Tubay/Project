function displaySideBar() {

    let sidebar = document.getElementById('navbarToggler');
    let sidebarStyle = window.getComputedStyle(sidebar);
    let sidebarDisplay = sidebarStyle.getPropertyValue('display');

    if (sidebarDisplay == "none") {
        document.getElementById('navbarToggler').style.display="block";
        document.getElementById('navbarToggler').classList.remove('col-2');
        document.getElementById('navbarToggler').classList.add('col-9');
        document.getElementById('contenido-principal').style.display="none";
        document.getElementById('container-perfil').style.display="none";
        document.getElementsByTagName('footer')[0].style.display="none";
    }
    else {
        document.getElementById('navbarToggler').style.display="none";
        document.getElementById('navbarToggler').classList.remove('col-9');
        document.getElementById('navbarToggler').classList.add('col-2');
        document.getElementById('contenido-principal').style.display="flex";
        document.getElementById('container-perfil').style.display="block";
        document.getElementsByTagName('footer')[0].style.display="flex";
    }
}

function cambiarPantalla() {
    console.log(screen.width);
    if (screen.width < 1024) {
        document.getElementById('btn-navbarToggler').display="block";
        document.getElementById('navbarToggler').style.display="none";
        document.getElementById('contenido-principal').style.display="flex";
        document.getElementById('container-perfil').style.display="block";
        document.getElementsByTagName('footer')[0].style.display="flex";
        document.getElementById('navbarToggler').classList.remove('col-9');
        document.getElementById('navbarToggler').classList.add('col-2');
    }
    else {
        document.getElementById('navbarToggler').style.display="block";
        document.getElementById('contenido-principal').style.display="flex";
        document.getElementById('container-perfil').style.display="block";
        document.getElementsByTagName('footer')[0].style.display="flex";
        document.getElementById('navbarToggler').classList.remove('col-9');
        document.getElementById('navbarToggler').classList.add('col-2');
    }
}

window.onresize = cambiarPantalla;