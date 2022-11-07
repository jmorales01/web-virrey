
const opcion = document.querySelectorAll('.question');

opcion.forEach(e => {

    e.addEventListener('click', function(e){

        const padre = e.target.parentNode;
        padre.children[1].classList.toggle('no');
        padre.parentNode.children[1].classList.toggle('no');

        document.getElementsById("icon").classList.remove("fa-solid fa-plus");
        document.getElementsById("icon").classList.add("fa-solid fa-minus");
    })
})