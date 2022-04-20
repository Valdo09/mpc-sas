  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MPC<span>.</span></h3>
            <p>
              2 B RUE DU GENERAL <br>SCHMITZ 95300 PONTOISE<br> France<br><br>
              <strong><i class="icofont-phone"></i></strong> +33 (0)6 25 85 73 87<br>
              <strong><i class="bx bx-at"></i></strong>&nbsp; contact@sas-mpc.com<br>
              <strong><i class='bx bxs-credit-card-front'></i> &nbsp;SIREN:</strong> 880798079 <br>
              <strong><i class="bx bx-barcode"></i> &nbsp;SIRET:</strong> 88079807900013<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Liens Utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('welcome')."#quisommesnous" }}">Qui sommes nous?</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('welcome')."#prestations" }}">Nos prestations</a></li>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="{{ route('welcome')."#portfolio" }}">Nos réalisations</a></li> --}}
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('welcome')."#contact" }}">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('politique') }}">Politique de Confidentialité</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('welcome')."#prestations"}}">Travaux de chauffage</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('welcome')."#prestations"}}">Installation de plomberie sanitaire</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('welcome')."#prestations"}}">Réparation de canalisation bouchée</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('welcome')."#prestations"}}">Plus de services</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Newsletter</h4>
            <p>Recevez toutes nos actualités par mail !</p>
            <form class="nform" action="" method="post">
                @csrf
              <input type="email" name="email"><input type="submit" value="Souscrire" class="newsinput"> <button type="submit" value="Souscrire" class="newsbutton"><i class="bx bx-check"></i> </button>
            </form>
            <div class="msg mt-2" style="color: green"></div>

            <div class="social-links text-center text-md-right pt-3 mt-4">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="mr-md-auto text-center text-md-center mt-3">
        <div class="copyright">
          &copy; Copyright <strong><span>MPC</span></strong>. Tous Droits Réservés <br>
          Designed by <a href="https://wootan-group.com/">WOOTAN GROUP</a>
        </div>
      </div>
    </div>
    <div>
        &nbsp;&nbsp;
    </div>
  </footer><!-- End Footer -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

  <script>
    $('document').ready(function(){
      $('.newsbutton').hide();
      $('.nform').submit(function( event ) {
          event.preventDefault();
          $.ajax({
              url: '/myAjaxCallURI',
              type: 'post',
              data: $('form').serialize(), // Remember that you need to have your csrf token included
              dataType: 'json',
              success: function( _response ){
                  $('.msg').text(_response['return']);
                  $('.newsinput').hide();
                  $('.newsbutton').show();
                  $('.newsbutton').attr('disabled','disabled');
              },
              error: function( _response ){
                  // Handle error
              }
          });

    });
      
});
  </script>
