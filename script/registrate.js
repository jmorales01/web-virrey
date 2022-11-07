

let nombre = document.getElementById('nombre');
let apellido = document.getElementById('apellido');
let email = document.getElementById('email');
let contrasena1 = document.getElementById('contrasena1');
let contrasena2 = document.getElementById('contrasena2');
let btnRegistro = document.getElementById('btn-registro');

import {validarEmail} from './validacion.js';
import {validarPassword} from './validacion.js';
import {validarText} from './validacion.js';


// Escucha el boton del registrar
btnRegistro.addEventListener('click', (event)=>{
    event.preventDefault();
    validarText(nombre.value, nombre);
    validarText(apellido.value, apellido);
    validarEmail(email.value, email);
    validarPassword(contrasena1.value, contrasena1,);
    validarPassword(contrasena2.value, contrasena2,);
});