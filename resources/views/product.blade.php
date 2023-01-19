@extends('layouts.lighten.template.lighten')
@section('titulo', 'product')
@section ('contenido')

      <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Nuestros Productos</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
      <!-- our product -->
      <div class="product">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     
                     <span>Empaquetamos los productos con los mejores servicios para que sea un cliente feliz.span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="product-bg">
         <div class="product-bg-white">
         <div class="container">
         <div class="row">
            @foreach($decoraciones as $decoracion)
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <a href="{{route('mostrarProductos', [$decoracion->nombre])}}">
                     <div class="product-box">
                        <i><img src="{{asset($decoracion->imagen)}}"/></i>
                        <h3>{{$decoracion->nombre}}</h3>
                     </div>
                  </a>
               </div>
            @endforeach
<!--
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <a href="{{route('product').'/posters'}}">
                     <div class="product-box">
                        <i><img src="lighten/icon/productos/c1.jpg"/></i>
                        <h3>Pósters</h3>
                     </div>
                  </a>
               </div>
               
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <a href="{{route('product').'/laminasFotografica'}}">
                     <div class="product-box">
                        <i><img src="lighten/icon/productos/c2.jpg"/></i>
                        <h3>Láminas fotográfica</h3>
                     </div>
                  </a>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <a href="{{route('product').'/lienzos'}}">
                     <div class="product-box">
                        <i><img src="lighten/icon/productos/c3.jpg"/></i>
                        <h3>Lienzos</h3>
                     </div>
                  </a>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
               <a href="{{route('product').'/laminasEnmarcadas'}}">
                      <div class="product-box">
                     <i><img src="lighten/icon/productos/c6.jpg"/></i>
                     <h3>Láminas enmarcadas</h3>
                  </div>
                     </a>
                 
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
               <a href="{{route('product').'/telasDecorativas'}}">
                     <div class="product-box">
                     <i><img src="lighten/icon/productos/c5.jpg"/></i>
                     <h3>Telas decorativas</h3>
                  </div>
                     </a>
                  
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <a href="{{route('product').'/laminasArtisticas'}}">
                     <div class="product-box">
                        <i><img src="lighten/icon/productos/c4.jpg"/></i>
                        <h3>Láminas artísticas</h3>
                     </div>
                  </a>  
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <a href="{{route('product').'/laminaMetalicas'}}">
                     <div class="product-box">
                        <i><img src="lighten/icon/productos/c7.jpg"/></i>
                        <h3>Láminas metálicas</h3>
                     </div>
                  </a>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <a href="{{route('product').'/laminaMontadas'}}">
                     <div class="product-box">
                        <i><img src="lighten/icon/productos/c8.jpg"/></i>
                        <h3>Láminas montadas</h3>
                     </div>
                  </a>
               </div>
-->
            </div>
            </div>
         </div>
      </div>
@endsection