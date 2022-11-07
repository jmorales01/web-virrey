

// Top de libros mas valorados 
let barras1 = document.getElementById("graficoInventario").getContext("2d");

const names = [
    'Odicea', 
    'Plata como cancha', 
    'Padre rico padre pobre', 
    'Maria Juares', 
    'El yacumama'
];

const cant = [5, 5, 4.8, 4.7, 4.5];

var chart = new Chart(barras1,{
    type:"bar",
    data:{
        labels: names,
        datasets:[
            {
                label: 'Top de libros mas vendidos',
                data:cant,
                backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }
        ]
    }
})


// Ventas del la semana
let lineal1 = document.getElementById("MiGrafica2").getContext("2d");

const days = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes','Sabado','Domingo']
const cash = [1234, 1654, 2354, 980, 1234, 2456,965]

var chart = new Chart(lineal1,{
    type:"bar",
    data:{
        labels: days,
        datasets:[
            {
                label: 'Ventas de la semana',
                data:cash,
                backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }
        ]
    }
})


// Evolucion de ingresos por año
let pastel1 = document.getElementById("MiGrafica3").getContext("2d");

const month = ['ene', 'feb', 'mar', 'abr', 'may','jun','jul','ago','set','oct','nov','dic']
const money = [133213, 253213, 239813, 211113, 233987, 333213,763452,324142,432345,233454,434528,396857]

var chart = new Chart(pastel1,{
    type:"line",
    data:{
        labels: month,
        datasets:[
            {
                label: 'Ingresos mensuales',
                data:money,
                backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }
        ]
    }
})

