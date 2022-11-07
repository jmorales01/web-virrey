
let passActual = document.getElementById('passActual');
let passNuevo = document.getElementById('passNuevo');
let confirmPass = document.getElementById('confirmPass');
let btnCambiar = document.getElementById('btnCambiar');

import {validarPassword} from './validacion.js';


btnCambiar.addEventListener('click',(event) => {
    event.preventDefault();
    if (passNuevo.value == confirmPass.value) {
        validarPassword(passNuevo.value, passNuevo);
        validarPassword(confirmPass.value, confirmPass);
    } else {
        window.alert("La confirmacion de la contraseña no coincide");
    }

});