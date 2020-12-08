@extends('principal')
@section('contenido')
    
<div class="container">
<br> <br> <br>
       <div class="row">
                <div class="col-md-4"> 
                        <!-- Card -->
                        <div class="card">

                                <!-- Card image -->
                                <img class="card-img-top" height="240" src="https://i.blogs.es/0baa91/39f95492-38ee-4f16-92e1-ba5161f4a958/1366_2000.jpeg" alt="Card image cap">

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title"><a>Misión </a></h4>
                                    <!-- Text -->
                                    <p class="card-text" id="msg"> 
                                        Satisfacer las necesidades de nuestros clientes con un surtido adecuado a los mismos, un trato cercano, contribuyendo a la mejora social y económica.
                                    </p>
                                </div>

                        </div>
                        <!-- Card -->
                </div>
                <div class="col-md-4"> 
                        <!-- Card -->
                        <div class="card">

                            <!-- Card image -->
                            <img class="card-img-top" height="240" src="https://www.elfinancierocr.com/resizer/-LliefCwWpNXvNFzmq1dT3esQt8=/600x0/center/middle/filters:quality(100)/arc-anglerfish-arc2-prod-gruponacion.s3.amazonaws.com/public/NXORKBUUUJC37N54XIRXJD7O6Q.jpg" alt="Card image cap">

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Title -->
                                <h4 class="card-title"><a>Visión </a></h4>
                                <!-- Text -->
                                <p class="card-text" id="msg"> 
                                 Nuestra visión es ser la primera opción de compra para nuestros clientes siendo una empresa de alta reputación en el entorno en que participamos.
                                </p>
                            </div>
                            

                        </div>
                        <!-- Card -->
                </div>
                <div class="col-md-4"> 
                        <!-- Card -->
                        <div class="card">

                        <!-- Card image -->
                        <img class="card-img-top" height="240" src="https://previews.123rf.com/images/jackf/jackf1612/jackf161200016/66595723-familia-feliz-ordinaria-con-los-ni%C3%B1os-que-compran-compras-en-supermercado.jpg" alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title"><a>Valores </a></h4>
                        <!-- Text -->
                        <p class="card-text" id="msg">
                                Respeto <br>
                                Atención al cliente <br>
                                Servicio <br>
                                Responsabilidad <br>
                        </p>
                        <!-- Button -->

                        </div>

                        </div>
                        <!-- Card -->
                </div>
       </div>
</div>


<div align="center">
    <a href="{{ url('/') }}"> Regresar </a>
</div>
@stop

