  <!-- ======= Header ======= -->
  
  <header id="header" class="sticky-top">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="/">
                <img src="{{ asset('logo_mpc.jpg') }}" alt="" class="mr-1" style="transform: scale(1.5)">
                <span>MPC</span>
            <span></span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li><a href="{{ route('welcome')."#quisommesnous"}}">Qui sommes nous ?</a></li>
              <li><a href="{{ route('welcome')."#prestations" }}">Prestations</a></li>
              <li>
                <div class="dropdown-show">
                  <a  href="#"  class="dropdown-toggle nav-item" id="dropDownRealisationsLink" data-toggle="dropdown"  >Nos Réalisations</a>
                  <div class="dropdown-menu" aria-labelledby="dropDownRealisationsLink">
                    @foreach ($categories as $category)
                    <a href="{{ route('realisation',$category->id) }}" class="dropdown-item"> {{$category->intitule}}</a>
                        
                    @endforeach
                   
            
                   
                  </div>
                </div>
                
              </li>
              <li><a href="{{ route('welcome')."#contact" }}">Contactez nous</a></li>
              <li><a href="{{ route('welcome')."#clients" }}">Nos partenaires</a></li>
              
              <!-- <li><a href="{{ route('welcome')."#" }}">Faire une estimation</a></li> -->
            </ul>
          </nav>
        </div>
      </div>
      {{-- <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
      
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div> --}}

    </div>
  </header>
  <!-- End Header -->
  <div id="subheader" class="fixed-top sub">

    {{-- <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-11 d-flex align-items-center">
            <h1 class="logo mr-auto"><a href="">
            <span></span></a></h1>
            <div class="nav-menu-sh d-xl-block d-lg-block">
              <ul>
                <li><span class="social-links"> <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> |+33 (0)6 25 85 73 87 – contact@mllrenovation.com</span></li>
              </ul>
            </div>
          </div>
        </div>

      </div> --}}
      <div class="container">
        <!-- <div class="row justify-content-center"> -->
          <!-- <div class="col-xl-12 col-lg-12 d-flex align-items-center"> -->
                <!-- <h1 class="logo mr-auto"><a href="">
                    <span></span></a></h1> -->
          <div class="social-links nav-menu-sh  d-xl-block d-lg-block text-center text-md-right pt-3 pt-md-0">
            <span> <span class="phone">+33 (0)6 25 85 73 87 –</span>  contact@sas-mpc.com <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </span>
          </div>
      </div>
    </div>
  </div>
</div>
<script>
  
</script>

