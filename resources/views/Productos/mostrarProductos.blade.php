@extends('layouts.lighten.template.lighten')
@section('titulo', 'mostrarProductos')
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
                     
                     <span>
                     @foreach($decoraciones as $decoracione)
                        @if($decoracione->nombre == $categoria)
                           {{$decoracione->descripcion}}
                        @endif
                     @endforeach
                        
                     
                     
                     <span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="product-bg">
         <div class="product-bg-white">
            <div class="container">
               <div class="row">
                  @foreach($productos as $producto)
                     @if($producto->categoria == $categoria) 
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                           <a href="{{route('mostrarDatos', [$producto->modelo])}}">
                           <div class="product-box">
                              <i><img src="{{asset($producto->imagen)}}"/></i>
                              <h3>{{$producto->nombre}}</h3>
                              <h3>{{$producto->modelo}}</h3>
                           
                           </div>
                           </a>
                        </div>
                     @endif
                  @endforeach
               </div>
               
            </div>
         </div>
      </div>
@endsection