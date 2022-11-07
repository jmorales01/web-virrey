
/* ############## VALIDA EL FORMULARIO LOG IN ############## */

let inputEmail = document.getElementById('user');
let inputPassword =  document.getElementById('password');
let button = document.getElementById('submit-btn');
let errorUs = document.getElementById('errorUser');
let errorPs = document.getElementById('errorPass');

import {validateEmail} from './validacion.js';
import {validatePassword} from './validacion.js';

// Escucha el boton del login
button.addEventListener('click', (event)=>{
    event.preventDefault();
    validateEmail(inputEmail.value, inputEmail, errorUs);
    validatePassword(inputPassword.value, inputPassword, errorPs);
});


