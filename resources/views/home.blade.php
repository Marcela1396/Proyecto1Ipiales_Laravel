@extends('principal')
@section('contenido')
    <h1> Bienvenidos al Supermercado El Mas Barato </h2>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.65ymas.com/uploads/s1/35/43/29/shopping-2613984-1920.jpeg" class="d-block w-100" alt="..." height ="550">
            </div>
            <div class="carousel-item">
                <img src="https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2020/07/pareja-supermercado-1995039.jpg?itok=FeO3B7mv" class="d-block w-100" alt="..." height ="550">
            </div>
            <div class="carousel-item">
                <img src="https://www.bbva.com/wp-content/uploads/2016/12/Mujer-conduciendo-un-carrito-de-compras-en-un-supermercado.jpg" class="d-block w-100" alt="..." height ="550">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@stop