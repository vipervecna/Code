@extends('layouts.app')

@if(Session::has('menssagem'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button>
  {{Session::get('menssagem')}}
</div>
@endif

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container"> <!--Primeira barra-->
  <div class="row">

    <div class="col-sm-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <a class="btn btn-warning btn--decorated product__btn" href="shopping-cart.html">Menssagens</a>
                </div>

                <div class="panel-body">
                  <!-- Product preview -->

                      <!-- Rapidas informações sobre-->
                        <p class="product__info">Usually ships in 2 to 4 weeks FREE Shipping.
                          Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est.
                          Nunc eu sodales turpis, varius viverra mauris.
                        </p>
                </div>
            </div>
        </div>


        <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <a class="btn btn-warning btn--decorated product__btn" href="shopping-cart.html">TrustedOne</a>
                    </div>

                    <div class="panel-body">
                      <!-- Product preview -->

                          <!-- Rapidas informações sobre-->
                            <p class="product__info">Usually ships in 2 to 4 weeks FREE Shipping.
                              Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est.
                              Nunc eu sodales turpis, varius viverra mauris.
                            </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <a class="btn btn-warning btn--decorated product__btn" href="{!! route('dados.edit', $user->id)!!}">Atualizar</a>
                        </div>

                        <div class="panel-body">
                          <!-- Product preview -->

                              <!-- Rapidas informações sobre-->
                                <p class="product__info">Usually ships in 2 to 4 weeks FREE Shipping.
                                  Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est.
                                  Nunc eu sodales turpis, varius viverra mauris.
                                </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <a class="btn btn-warning btn--decorated product__btn" href="shopping-cart.html">Configurações</a>
                            </div>

                            <div class="panel-body">
                              <!-- Product preview -->

                                  <!-- Rapidas informações sobre-->
                                    <p class="product__info">Usually ships in 2 to 4 weeks FREE Shipping.
                                      Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est.
                                      Nunc eu sodales turpis, varius viverra mauris.
                                    </p>
                            </div>
                        </div>
                    </div>

    </div> <!--class="row"-end-->
</div> <!--class="container"-end>-->

<hr>

  <!-- Footer section -->
  <div class="divider present-divider"></div>

  <footer class="footer">
    <br>
    <div class="container">

        <div class="row">

          <div class="col-sm-6 col-md-4">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                        <a class="btn btn-warning btn--decorated product__btn" href="shopping-cart.html">Contato</a>
                      </div>

                      <div class="panel-body">
                        <!-- Product preview -->

                            <!-- Rapidas informações sobre-->
                              <p class="product__info">Usually ships in 2 to 4 weeks FREE Shipping.
                                Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est.
                                Nunc eu sodales turpis, varius viverra mauris.
                              </p>
                      </div>
                  </div>
              </div>


              <div class="col-sm-6 col-md-4">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                            <a class="btn btn-warning btn--decorated product__btn" href="shopping-cart.html">Feedback</a>
                          </div>

                          <div class="panel-body">
                            <!-- Product preview -->

                                <!-- Rapidas informações sobre-->
                                  <p class="product__info">Usually ships in 2 to 4 weeks FREE Shipping.
                                    Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est.
                                    Nunc eu sodales turpis, varius viverra mauris.
                                  </p>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-md-4">
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                <a class="btn btn-warning btn--decorated product__btn" href="shopping-cart.html">Termos e Condições</a>
                              </div>

                              <div class="panel-body">
                                <!-- Product preview -->

                                    <!-- Rapidas informações sobre-->
                                      <p class="product__info">Usually ships in 2 to 4 weeks FREE Shipping.
                                        Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est.
                                        Nunc eu sodales turpis, varius viverra mauris.
                                      </p>
                              </div>
                          </div>
                      </div>

          </div> <!--class="row"-end-->

    </div><!-- end container -->
  </footer>
  <!-- end footer section -->

@endsection
