@extends('layouts.lighten.template.lighten')
@section('titulo', 'Casa&Decoracion - ' . $nombre)
@section ('contenido')

      <section class="slider_section" id="page-top">
         <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">

            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="lighten/images/banner2.jpg" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Nuestro<br> <strong class="black_bold">Ultimo</strong><br>
                           <strong class="yellow_bold">Producto </strong></h1>
                        <p>Da clic y descubre la nueva decoración<br>
                           que tenemos para tu hogar</p>
                        <a  href="#">Ver más productos</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="lighten/images/banner2.jpg" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Decoración<br> <strong class="black_bold">original</strong><br>
                           <strong class="yellow_bold">Productos</strong></h1>
                        <p>Productos de decoración con diseños <br>
                           originales creados por artistas.</p>
                        <a  href="#">Ver más productos</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="lighten/images/banner2.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Más <br> <strong class="black_bold">Populares </strong><br>
                           <strong class="yellow_bold">Productos </strong></h1>
                        <p>Productos de decoración con diseños originales más gustados<br>
                           Con o sin marco. Envío rápido. Diseños con personalidad. </p>
                        <a  href="#">Ver más productos</a>
                     </div>
                  </div>
               </div>

            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class='fa fa-angle-right'></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class='fa fa-angle-left'></i>
            </a>
         </div>
      </section>
      
<!-- CHOOSE  -->
      <div class="whyschose">
         <div class="container">

            <div class="row">
               <div class="col-md-7 offset-md-3">
                  <div class="title">
                     <h2>POR QUÉ <strong class="black">ELEGIRNOS</strong></h2>
                     <span>¡La mejores decoraciones para tu espacio!</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="choose_bg">
         <div class="container">
            <div class="white_bg">
            <div class="row">
               <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img class="imagenes" src="lighten/icon/1.svg"/></i>
                     <h3>Eficiencia</h3>
                     <p>Productos y servicio totalmente eficientes </p>
                  </div>
               </dir>
               <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img class="imagenes" src="lighten/icon/2.svg"/></i>
                     <h3>Novedad</h3>
                     <p>Productos totalmente nuevos con originalidad y creatividad </p>
                  </div>
               </dir>
               <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img class="imagenes" src="lighten/icon/3.svg"/></i>
                     <h3>Economico</h3>
                     <p>Productos estupendos con un precio económico.</p>
                  </div>
               </dir>
               <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img class="imagenes" src="lighten/icon/4.svg"/></i>
                     <h3>Adaptabilidad</h3>
                     <p>Variedad de productos para decorar cualquier espacio</p>
                  </div>
               </dir>
               <div class="col-md-12">
                  <a class="read-more">Leer Más</a>
               </div>
            </div>
         </div>
       </div>
      </div>
<!-- end CHOOSE -->

      

      <!-- our product -->
      <div class="product">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>NUESTROS <strong class="black">PRODUCTOS</strong></h2>
                     <span>Te empaquetamos y enviamos los productos con los mejores servicios para que sea un cliente feliz.</span>
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
               @if($producto->modelo < 9) 
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="product-box">
                        <i><img src="{{asset($producto->imagen)}}"/></i>
                        
                        <h3>{{$producto->nombre}}</h3>
                        <h6>{{$producto->categoria}}</h6>
                        <span>{{$producto->precio}} USD</span>
                     </div>
                  </div>
               @endif
            @endforeach
<!--
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="lighten/icon/productos/p1.jpg"/></i>
                     <h3>Póster - Fantasma en el invernadero</h3>
                     <span>12,73 US$</span>
                  </div>
               </div>

               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="lighten/icon/productos/p2.jpg"/></i>
                     <h3>Lámina fotográfica - El Año Nuevo en Hisseii</h3>
                     <span>20,64 US$</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="lighten/icon/productos/p3.jpg"/></i>
                     <h3>Lienzo - El gato de Vincent</h3>
                     <span>68,27 US$</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="lighten/icon/productos/p4.jpg"/></i>
                     <h3>Lámina enmarcada -Semáforo galgo</h3>
                     <span>98,80 US$</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="lighten/icon/productos/p5.jpg"/></i>
                     <h3>Tela decorativa - Huesos y botánica</h3>
                     <span>37,50 US$</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="lighten/icon/productos/p6.jpg"/></i>
                     <h3>Lámina artística - Tokyo neón</h3>
                     <span>40,86 US$</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="lighten/icon/productos/p7.jpg"/></i>
                     <h3>Lámina metálica - Artorias de los Aybss</h3>
                     <span>32,86 US$</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="lighten/icon/productos/p8.jpg"/></i>
                     <h3>Lámina montada - Lluvia de meteoros</h3>
                     <span>34,86 US$</span>
                  </div>
               </div>
-->
              
              
               
               </div>
            </div>
         </div>
         <!--
         <div class="Clients_bg_white">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="title">
                        <h3>¿Qué dicen los clientes?</h3>
                     </div>
                  </div>
               </div>
               <div id="client_slider" class="carousel slide banner_Client" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#client_slider" data-slide-to="0" class="active"></li>
          <li data-target="#client_slider" data-slide-to="1"></li>
          <li data-target="#client_slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="carousel-caption text-bg">
               <div class="img_bg">
                  <i><img src="lighten/images/lllll.png"/><span>Jone Due<br><strong class="date">12/02/2019</strong></span></i>
                  
               </div>
                
                <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am really satisfied with my first laptop service.<br>
                You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am </p>
                
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption text-bg">
                <div class="img_bg">
                  <i><img src="lighten/images/lllll.png"/><span>Jone Due<br><strong class="date">12/02/2019</strong></span></i>
                  
               </div>
                <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am really satisfied with my first laptop service.<br>
                You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am </p>
                
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption text-bg">
                 <div class="img_bg">
                  <i><img src="lighten/images/lllll.png"/><span>Jone Due<br><strong class="date">12/02/2019</strong></span></i>
                  
               </div>
                <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am really satisfied with my first laptop service.<br>
                You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am </p>
               
              </div>
            </div>
          </div>
        </div>
        
      </div>

            </div>
         </div>
-->
         <div class="container">
            <div class="yellow_bg">
            <div class="row">
               <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                  <div class="yellow-box">
                     <h3>Tiene alguna duda, llamé al servicio a cliente <i><img src="lighten/icon/calll.png"/></i></h3>
                     
                     <p>Obtenga respuestas de las nuestros especialistas.<p>
                  </div>
               </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                  <div class="yellow-box">
                     <a href="#">Contactanos</a>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </div>

      <!-- end our product -->
      <!-- map -->
      <div class="container-fluid padi">
         <div class="map">
            <img src="lighten/images/mapimg.jpg" alt="img"/>
         </div>
      </div>
      <!-- end map -->
@endsection