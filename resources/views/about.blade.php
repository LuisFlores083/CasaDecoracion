@extends('layouts.lighten.template.lighten')
@section('titulo', 'Nosotros')
@section ('contenido')

       <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>NOSOTROS</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
      <div class="container">
         <div class="about" id="about">
            <div class="row">
               <dir class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                  <div class="about_box">
                    <figure><img src="lighten/images/pc_layout.png"/></figure>
                  </div>
               </dir>
               <dir  dir class="col-xl-6 col-lg-6 col-md-12 col-sm-12 m-auto">
                  <div class="about_box align-middle">
                     <div>
                        <h3>Quien es Casa&Decoración</h3>
                        <p>Casa&Decoracion es una tienda online de productos de decoración para tu hogar, pero sobre todo una compañía unida, compañía fundada en el 2018 y totalmente mexicana. Somos un pequeño grupo de empleados y todos cumplen sus puestos de trabajo y demuestran sus competencias.</p>
                     </div>
                  </div>
               </dir> 
            </div>
         </div>
      </div>

   


      <!-- service --> 
      <div class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>Proceso de <strong class="black">Servicios</strong></h2>
                     <span>Te ayudamos a vender tus obras de Decoración</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="lighten/icon/service1.png"/></i>
                     <h3>Entregas Rapidas</h3>
                     <p>Entregas a todo México inmediatas y seguras</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="lighten/icon/service2.png"/></i>
                     <h3>Pagos Seguros</h3>
                     <p>Pagos en linea seguros con tarjeta de crédito, ventanilla bancaria, paypal y establecimientos</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="lighten/icon/service3.png"/></i>
                     <h3>Acuerdos con empresas</h3>
                     <p>Tenmos acuerdos con otras empresas para el funcionamiento del servicio</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="lighten/icon/service4.png"/></i>
                     <h3>Servicios Asequibles</h3>
                     <p>Contamos con servicios económicos y sin complejidad de utilizar.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="lighten/icon/service5.png"/></i>
                     <h3>Devoluciones</h3>
                     <p>Si algún producto no te santificó, puedes pedir devoluciones gratis de tu producto</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="lighten/icon/service6.png"/></i>
                     <h3>Ganador de premio</h3>
                     <p>Ganador a Mejor eCommerce pequeño en México</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end service -->

      
       <!-- contact -->
   <!-- <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form class="main_form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Your name" type="text" name="Your Name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" type="text" name="Email">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Phone" type="text" name="Phone">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message"></textarea>
                            </div>
                            <div class=" col-md-12">
                                <button class="send">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>-->
    <!-- end contact -->

   @endsection