

// AÑADIR LOS DATOS AL FORMULARIO INFORMACION PERSONAL
var persona = [
    'Comprador',
    'Jose Luis',
    'Maria',
    'joseluismoralesvega24@gmail.com',
    '00000000',
    '+0151253',
    '+5198231024'
];

const cargo = document.querySelector('#cargo'); 
const nombre = document.querySelector('#nombre');
const apellido = document.querySelector('#apellido');
const correo = document.querySelector('#correo');
const dni = document.querySelector('#dni');
const telefono = document.querySelector('#telefono');
const celular = document.querySelector('#celular');

cargo.value = persona[0];
nombre.value = persona[1];
apellido.value = persona[2];
correo.value = persona[3];
dni.value = persona[4];
telefono.value = persona[5];
celular.value = persona[6];




// AÑADIR DATOS A LA TRABLA
