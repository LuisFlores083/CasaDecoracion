@extends('layouts.lighten.template.lighten')
@section('titulo', 'mostrarDatos')
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
                     
                     <span>Empaquetamos los productos con los mejores servicios para que sea un cliente feliz.<span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="product-bg">
         <div class="product-bg-white">
         <div class="container">
         <div class="row">
               @foreach($datos as $dato)
                     @if($dato->modelo == $modelo) 
                     <div class="row">
                        <div class="offset-md-3 col-md-6">
                              <i><img src="{{asset($dato->imagen)}}" class="rounded-circle mb-3 imagen-max" /></i>
                              <h2><strong>{{$dato->nombre}}</strong></h2>
                              <p class="text-faded mb-0"><strong>Categoria</strong>{{$dato->categoria}}</p>
                              <p class="h4 mb-0">{{$dato->descripcion}}</p>
                        </div>
                     </div>
                        
                     @endif
                  @endforeach

               
            </div>
            </div>
         </div>
      </div>
@endsection