

let id = document.getElementById('txtID');
let nombre = document.getElementById('txtNombre');
let categoria = document.getElementById('txtCategoria');
let autor = document.getElementById('txtAutor');
let editorial = document.getElementById('txtEditorial');
let stock = document.getElementById('txtStock');
let precio = document.getElementById('txtPrecio');
let descuento = document.getElementById('txtDescuento');
let btnGuardar = document.getElementById('btnAgregar');
let btnEditar = document.getElementById('btnModificar');


import {validarText} from './validacion.js';
import {validarNamber} from './validacion.js';


btnGuardar.addEventListener('click',(event) => {
    event.preventDefault();
    validarNamber(id.value, id);
    validarText(nombre.value, nombre);
    validarText(categoria.value, categoria);
    validarText(autor.value, autor);
    validarText(editorial.value, editorial);
    validarNamber(stock.value, stock);
    validarNamber(precio.value, precio);
    validarNamber(descuento.value, descuento);
});

btnEditar.addEventListener('click',(event) => {
    event.preventDefault();
    validarNamber(id.value, id);
    validarText(nombre.value, nombre);
    validarText(categoria.value, categoria);
    validarText(autor.value, autor);
    validarText(editorial.value, editorial);
    validarNamber(stock.value, stock);
    validarNamber(precio.value, precio);
    validarNamber(descuento.value, descuento);
});



