
const button = document.querySelectorAll('.button')
const detalles = document.querySelectorAll('.detalles')

// CUANDO HACEMOS CLICK EN UN BOTON

// Recorriendo todos las clases BUTTON
button.forEach(( cadaButton , i)=>{
    // Asignando un click a cada BUTTON
    button[i].addEventListener('click',()=>{

        button.forEach(( cadaButton , i)=>{
            // Quitando la clase activo a los BUTTON y DETAALES
            button[i].classList.remove('activo');
            detalles[i].classList.remove('activo');
        })

        // En el boton que se hizo click le añadimos la clase activo
        button[i].classList.add('activo')
        detalles[i].classList.add('activo')
    })
})


