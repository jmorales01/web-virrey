

// ############## FUNCIONES DE VALIDACIONES ##############

export function validateEmail(email, input, error){
    let expReg = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g;

    if (expReg.test(email) == true) {
        input.classList.add("is-valid");
        error.classList.add("valid");
        error.innerHTML = 'correct';
    }else{
        input.classList.add("is-invalid");
        error.classList.add("invalid");
        error.innerHTML = "Introduce un correo valido";
    }
}

export function validarEmail(email, input){
    let expReg = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g;

    if (expReg.test(email) == true) {
        input.classList.add("is-valid");
    }else{
        input.classList.add("is-invalid");
    }
}


export function validatePassword(pass, input, error){
    let expReg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/gm;
    // Minusculas, mayusculas y numeros

    if (expReg.test(pass) == true) {
        input.classList.add("is-valid");
        error.classList.add("valid");
        error.innerHTML = 'correct';
    }else{
        input.classList.add("is-invalid");
        error.classList.add("invalid");
        error.innerHTML = 'Introduce una contraseña correcta [A-a-1]';
    }
}

export function validarPassword(pass, input){
    let expReg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/gm;
    // Minusculas, mayusculas y numeros

    if (expReg.test(pass) == true) {
        input.classList.add("is-valid");
    }else{
        input.classList.add("is-invalid");
    }
}


export function validatePhone(phone, input, error){
    let expReg = /([0-9]{9,9})$/;
    // Minusculas, mayusculas y numeros

    if (expReg.test(phone) == true) {
        input.classList.add("is-valid");
        error.classList.add("valid");
        error.innerHTML = 'correct';
    }else{
        input.classList.add("is-invalid");
        error.classList.add("invalid");
        error.innerHTML = 'Introduce solo numero';
    }
}

export function validarPhone(phone, input){
    let expReg = /([0-9]{9,9})$/;
    // Minusculas, mayusculas y numeros

    if (expReg.test(phone) == true) {
        input.classList.add("is-valid");
    }else{
        input.classList.add("is-invalid");
    }
}


export function validateText(text, input, error){
    let expReg = /([a-z A-Z ]{9,9})$/;
    // Minusculas, mayusculas y numeros

    if (expReg.test(text) == true) {
        input.classList.add("is-valid");
        error.classList.add("valid");
        error.innerHTML = 'correct';
    }else{
        input.classList.add("is-invalid");
        error.classList.add("invalid");
        error.innerHTML = 'Introduce solo texto';
    }
}

export function validarText(text, input){
    let expReg = /([a-z A-Z ]{9,9})$/;
    // Minusculas, mayusculas y numeros

    if (expReg.test(text) == true) {
        input.classList.add("is-valid");
    }else{
        input.classList.add("is-invalid");
    }
}