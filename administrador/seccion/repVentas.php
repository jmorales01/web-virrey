<!-- header de la pagina -->
<?php include("../template/headerAdmin.php"); ?>



<div class="row">
    <div class="col-lg-10 offset-lg-1 position-relative">
        <div class="card card-plain mb-4">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex flex-column h-100">
                            <h2 class="font-weight-bolder mb-0">Reporte de Ventas</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row repInventario">

            <div class="col-lg-3 col-sm-3 mt-sm-0 mt-4">
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2 bg-transparent">
                        <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                            <i class="fa-solid fa-money-bill-trend-up"></i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize ">Ventas del dia</p>
                            <h4 class="mb-0 ">S/. 12000</h4>
                        </div>
                    </div>
                    <hr class="horizontal my-0 dark">
                    <div class="card-footer p-3">
                        <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">07 nov 2022 </span>Hoy</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3 mt-sm-0 mt-4">
                <div class="card ">
                    <div class="card-header p-3 pt-2 bg-transparent">
                        <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                            <i class="fa-solid fa-boxes-stacked"></i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize ">Stock</p>
                            <h4 class="mb-0 ">1523</h4>
                        </div>
                    </div>
                    <hr class="horizontal my-0 dark">
                    <div class="card-footer p-3">
                        <p class="mb-0 ">07 nov 2022</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3 mt-sm-0 mt-4">
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2 bg-transparent">
                        <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                            <i class="fa-solid fa-swatchbook"></i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize ">Libros</p>
                            <h4 class="mb-0 ">245</h4>
                        </div>
                    </div>
                    <hr class="horizontal my-0 dark">
                    <div class="card-footer p-3">
                        <p class="mb-0 ">07 nov 2022</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3 mt-sm-0 mt-4">
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2 bg-transparent">
                        <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                            <i class="fa-solid fa-arrow-trend-down"></i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize ">Cancelados</p>
                            <h4 class="mb-0 ">S/. -123</h4>
                        </div>
                    </div>
                    <hr class="horizontal my-0 dark">
                    <div class="card-footer p-3">
                        <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">-3% </span>total pedidos</p>
                    </div>
                </div>
            </div>

        </div>


        <div class="row mt-4 repInventario">

            <div class="col-lg-6">
                <div class="card z-index-2">
                    <div class="card-header pb-0">
                        <h6>Evolucion ventas</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="graficoVentas1" class="graficoVentas1" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card z-index-2">
                    <div class="card-header pb-0">
                        <h6>Meta de ventas</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="graficoVentas2" class="graficoVentas2" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 mt-5">
                <div class="card mb-4 ">
                    <div class="d-flex">
                        <h6 class="mt-3 mb-2">Estado de pedidos</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-hover align-items-center">
                                        <thead>
                                            <tr class="table-dark">
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Atendidos</th>
                                                <th scope="col">Cancelado</th>
                                                <th scope="col">Recibido</th>
                                                <th scope="col">Enviado</th>
                                                <th scope="col">Entregado</th>
                                                <th scope="col">% Entrega</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">05/11/2022</th>
                                                <th>25</th>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>4</td>
                                                <td>18</td>
                                                <td>95%</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">06/11/2022</th>
                                                <th>25</th>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>25</td>
                                                <td>100%</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">07/11/2022</th>
                                                <th>30</th>
                                                <td>2</td>
                                                <td>6</td>
                                                <td>6</td>
                                                <td>16</td>
                                                <td>55%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5">
                                <div id="map" class="mt-0 mt-lg-n4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5">
                <div class="card z-index-2">
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="graficoVentas3" class="graficoVentas3" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>



<!-- link a los css y js -->
<link rel="stylesheet" href="../style/dashboard.css">

<script>

    // Ventas del la semana
let lineal1 = document.getElementById("graficoVentas2").getContext("2d");

const days = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes','Sabado','Domingo']
const cash = [1234, 1654, 2354, 980, 1234, 2456,965]

var chart = new Chart(lineal1,{
    type:"bar",
    data:{
        labels: days,
        datasets:[
            {
                label: 'Ventas',
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
                borderWidth: 1,
                order: 2
            },{
                label: 'Meta',
                data: [1500, 1500, 1500, 1500, 1500,1500, 1500],
                type: 'line',
                order: 1
            }
        ]
    }
})


// Evolucion de ingresos por año
let pastel1 = document.getElementById("graficoVentas1").getContext("2d");

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



// Evolucion de ingresos por año
let donuts = document.getElementById("graficoVentas3").getContext("2d");


var chart = new Chart(donuts,{
    type:"doughnut",
    data:{
        labels: ['Entregado','No estregado'],
        datasets:[
            {
                label: '% total',
                data:[90.7, 9.3],
                backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }
        ]
    }
})

</script>

<!-- footer de la pagina -->
<?php include("../template/footerAdmin.php"); ?>