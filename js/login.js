window.onload = alIniciar;

function alIniciar() {
    document.getElementById('acceder').addEventListener('click', login, false);

}

const login = function(e) {
    e.preventDefault();
    let password = document.getElementById('password').value;
    let user = document.getElementById('user').value;
    let tipo = document.getElementById('tipo').value;

    if (user === '' || user === null) {
        alerta('error', 'Error', 'Ingrese el usuario');
    } else if (password === '' || password === null) {
        alerta('error', 'Error', 'Ingrese la contraseña');
    } else {
        let datos = new FormData();
        datos.append('user', user);
        datos.append('password', password);
        datos.append('tipo', tipo);
        var xhr = new XMLHttpRequest();

        xhr.open('POST', '../html/repartidores.php', true);

        xhr.onload = function() {
            if (this.status === 200) {
                let respuesta = JSON.parse(xhr.responseText);
                if (respuesta.respuesta === 'correcto') {
                    if (user === respuesta.user && password === respuesta.pass) {
                        location.href = "../html/inicioRepartidor.php";
                    } else {
                        alerta('error', 'Error', 'Usuario o contraseña incorrecta');
                    }
                }
            }
        }

        xhr.send(datos);
    }


}



function alerta(icon, title, mensaje) {
    Swal.fire({
        icon: `${icon}`,
        title: `${title}`,
        text: `${mensaje}`
    })
}