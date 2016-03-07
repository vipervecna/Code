@extends('layouts.app')

@section('content')

<section>
<div class="container">
    <div class="row">
        <div class="col-md-20 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<aside class="col-sm-3"> <!--Barra Lateral-->
  <div class="sidebar">
    <h2 class="heading heading--section heading--first">Categories</h2>

    <ul class="list list--marker">
      <li class="list__item"><a class="list__link" href="">Home</a></li>
      <li class="list__item"><a class="list__link" href="">Menssagens</a></li>
      <li class="list__item"><a class="list__link" href="">TrustedOne</a></li>
      <li class="list__item"><a class="list__link" href="{!! route('dados.edit', $user->id)!!}">Atualizar</a></li>
      <li class="list__item"><a class="list__link" href="">Configurações</a></li>
    </ul>

  </div>
</aside><!-- end col --><!--Barra Lateral-->

<h2 class="heading heading--start heading--small">
<button class="btn btn--decorated btn-warning btn-submit" type="submit">Escrever</button>
</h2>


<div class="row">
<div class="col-sm-6">
  <div class="bordered-container">


    <div class="form-error alert alert-danger">
      <span class="alert-market">
        <i class="fa fa-ban"></i>
      </span>
      <div class="form-error__holder"></div>
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
    </div>

    <div class="form-handler">
      <form class="contact contact--clean" id="contact-form" name="contact-form" method="post" action="send.php" novalidate>
          <h3 class="heading-helper heading-helper--large">drop us a line</h3>

          <input class="contact__field" name="contact-name" type="text" placeholder="full name">
          <input class="contact__field" name="contact-email" type="email" placeholder="email">
          <textarea class="contact__field contact__area" name="contact-message" placeholder="message"></textarea>
      </form>
    </div>
  </div><!-- borderec container -->
</div><!-- end col -->
</div>


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
