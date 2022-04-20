@extends('layout.app')

@section('content')
<style>
  .prestation-description p{
    font-size: 15px !important;
  }
  .bg-custom{
    background-color: #e07f3a24;
  }
</style>

  <!-- ======= Hero Section ======= -->

  <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <span>
                 <picture>
                    <img srcset="{{ asset('{{-- public/  --}}assets/img/plomberie.jpg') }}" alt="responsive image" class="carousel-img d-block img-fluid" style="filter: brightness(50%);">
                  </picture>

                <div class="carousel-caption text-center">
                    <div>
                        <h3 style="color: #ffffff; text-align: center;">MPC, UNE EQUIPE PROFESSIONNELLE ET EXPERIMENTEE POUR TOUS VOS TRAVAUX DE PLOMBERIE</h3>
                        <p></p>
                        <p style="text-align: center; color: #ffffff; font-weight: lighter;" ><strong>Découvrez nos services en cliquant ci-dessous.</strong></p>
                        <a href="#about" class="btn-get-started scrollto">En savoir plus</a>
                    </div>
                </div>
            </span>
        </div>
        <!-- /.carousel-item -->
        <div class="carousel-item">
            <span>
                <picture>
                    <img srcset="{{ asset('{{-- public/  --}}assets/img/chauffage.jpg') }}"  alt="responsive image" class="carousel-img d-block img-fluid" style="filter: brightness(50%);">
                  </picture>

                  <div class="carousel-caption text-center">
                    <div>
                        <h3 style="color: #ffffff; text-align: center;">NOUS VOUS AIDONS DANS LE CHOIX DU SYSTEME DE CHAUFFAGE ADEQUAT ET ADAPTER A VOTRE RÉALITÉ.</h3>
                        <p></p>
                        <p style="text-align: center; color: #ffffff; font-weight: lighter;" ><strong>Commencez maintenant en cliquant ci-dessous.</strong></p>
                        <a href="#about" class="btn-get-started scrollto">En savoir plus</a>
                    </div>
                </div>
            </span>
        </div>
    </div>
    <!-- /.carousel-inner -->
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
  </div>

  <main id="main">
    @include('flash-message')
    <section id="quisommesnous"   style="margin-bottom: -90px; margin-top: 30px;">
        <div class="sectiontitle">
            <h2>Qui Sommes Nous ?</h2>
        </div>
    </section>
    <section id="about" class="about section">
        <div class="container" >

          <div class="row no-gutters">
            <div class="content col-xl-6 d-flex align-items-stretch">
              <div class="content">
              <p></p>
                <p>
                <strong>MPC</strong> est une société spécialisée dans la plomberie, le chauffage et la rénovation située à 2 B RUE DU GENERAL SCHMITZ 95300 PONTOISE. <br>
                 </p>
                 <p>
                  Disposant d'une équipe pluridisciplinaire rigoureuse et réactive, la société MPC propose différentes prestations telles que :
                  <ul class="text-left" style="margin-top: -10px;">
                    <li>La réalisation des travaux de tuyauterie, de robinetterie, d'étanchéité</li>
                    <li>La réalisation des travaux de chauffage</li>
                    <li>L'installation de la plomberie sanitaire</li>
                    <li>La réparation d’une canalisation bouchée</li>
                    <li>etc.</li>
                  </ul>
                  Pour plus d’informations, n’hésitez pas à <a href="{{route('welcome')."#contact"}}">nous contacter</a> afin d’obtenir un devis gratuit !
                 </p>

              </div>
            </div>
            <div class="col-xl-6 d-flex align-items-stretch">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row text-center">
                  <div class="col-md-6 icon-box"  data-aos-delay="100">
                    <i class="bx bx-time"></i>
                    <h4>Support 24H / 7J</h4>
                    <p>+33 (0)6 25 85 73 87</p>
                  </div>
                  <div class="col-md-6 icon-box"  data-aos-delay="200">
                    <i class="bx bx-euro"></i>
                    <h4>Tarifs attractifs</h4>
                    <p>Excellent rapport Qualité / Prix </p>
                  </div>
                  <div class="col-md-6 icon-box"  data-aos-delay="300">
                    <i class="bx bx-trophy"></i>
                    <h4>Expérience</h4>
                    <p>18 années d'expérience dans le domaine</p>
                  </div>
                  <div class="col-md-6 icon-box"  data-aos-delay="400">
                    <img src="{{ asset('{{-- public/  --}}assets/img/icons/efficacite.png') }}" alt="" style="width: 55px; height: 50px; margin-bottom: 15px; margin-top: 5px;">
                    <h4>Efficacité</h4>
                    <p>La satisfaction client est une priorité</p>
                  </div>

                  <div class="col-md-12 content text-center">
                    <a href="#contact" class="about-btn"><span>Contactez nous</span> <i class="bx bx-chevron-right"></i></a>
                  </div>
                </div>

              </div><!-- End .content-->

            </div>
          </div>

        </div>
      </section><!-- End About Section-->
    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team" style="margin-top: -30px;">
        <div class="container" >

          <div class="section-title">
            <h2 style="color: black;">Notre Equipe</h2>
          </div>

          <div class="row">

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member"  data-aos-delay="100">
                <div class="member-img">
                  <img src="{{-- public/  --}}assets/img/team/team-1.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member"  data-aos-delay="200">
                <div class="member-img">
                  <img src="{{-- public/  --}}assets/img/team/team-2.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member"  data-aos-delay="300">
                <div class="member-img">
                  <img src="{{-- public/  --}}assets/img/team/team-3.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member"  data-aos-delay="400">
                <div class="member-img">
                  <img src="{{-- public/  --}}assets/img/team/team-4.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                </div>
              </div>
            </div>

          </div>

        </div>
    </section> -->

    <!-- ======= Tabs Section ======= -->
    <section id="prestations" class="prestations">
        <div class="container" >
            <div class="section-title">
                <h2>Nos prestations</h2>
              </div>

          <ul class="nav nav-tabs row d-flex">
            @php
                $prestations = App\Models\Prestation::all();
            @endphp
            @forelse ($prestations as $prestation)
              @php
                  $icone = $prestation->icone;
                  $type = Str::substr($icone, 0, 4);
                  $tab = "#tab-".$prestation->id;
              @endphp
              
              <li class="nav-item col-lg-4 col-sm-6 mt-4 border-0">
                <span class="@if ($prestation->id==1) active show @endif">
                  <div class="row pl-2">
                    <img src="{{ asset('storage/'.$prestation->icone) }}" class="col-2 text-white bg-custom p-2 text-center rounded" style="font-size: 28px; height: max-content;"/>
                    <div class="col-9 prestation-description">
                      <h4 class=""><a href="{{ route('prestation.show', $prestation->id) }}">{{ $prestation->nom }} </a></h4>
                        {!! $prestation->description !!}
                    </div>
                  </div>
                </span>
              </li>
            @empty

            @endforelse
          </ul>

            <!-- <div class="tab-content">
              @forelse ($prestations as $prestation)
                @php
                    $tab_id = "tab-".$prestation->id;
                @endphp
                @if ($prestation->id==1)
                <div class="tab-pane active show" id="{{ $tab_id }}">
                    <div class="row">
                    <div class="col-lg-6 order-1 order-lg-1 text-left"  data-aos-delay="200">
                        <h3>{{ $prestation->nom }}</h3>
                        <img src="{{ asset('{{-- public/  --}}assets/prestations/'.$prestation->image) }}" alt="" class="img-fluid mt-lg-1">
                    </div>
                    <div class="col-lg-6 order-2 order-lg-2 mt-5 mt-lg-5"  data-aos-delay="100">
                        {!! $prestation->description !!}
                        <p class="text-right">
                          <a href="#about" class="simulationbtn-get-started scrollto mt-3">Démarrer ma simulation</a>
                        </p>
                    </div>
                    </div>
                </div>
                @else
                <div class="tab-pane" id="{{ $tab_id }}">
                    <div class="row">
                    <div class="col-lg-6 order-1 order-lg-1 text-left"  data-aos-delay="200">
                        <h3>{{ $prestation->nom }}</h3>
                        <img src="{{ asset('{{-- public/  --}}assets/prestations/'.$prestation->image) }}" alt="" class="img-fluid mt-lg-1">
                    </div>
                    <div class="col-lg-6 order-2 order-lg-2 mt-5 mt-lg-5"  data-aos-delay="100">
                        {!! $prestation->description !!}
                        <p class="text-right">
                          <a href="#about" class="simulationbtn-get-started scrollto mt-3">Démarrer ma simulation</a>
                        </p>
                    </div>
                    </div>
                </div>

                @endif
              @empty

              @endforelse
            </div> -->

        </div>
      </section><!-- End Tabs Section -->

    <!-- ======= Portfolio Section ======= -->
    


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" >

          <div class="row">

            @php
                $clients_statisfaits = App\Models\Satisfaction::where('recommandation',"Oui")->count();
                $nb_projets = App\Models\Satisfaction::all()->count();
            @endphp

            <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
              <div class="count-box">
                <i class="fa fa-smile-o"></i>
              <span data-toggle="counter-up">{{ $clients_statisfaits }}</span>
                <p>Clients Satisfaits</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
              <div class="count-box">
                <i class="fa fa-folder-open-o"></i>
                <span data-toggle="counter-up">{{ $nb_projets }}</span>
                <p>Projets Réalisés</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="fa fa-users"></i>
                <span data-toggle="counter-up">15</span>
                <p>Personnes dans l'équipe</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Counts Section -->




        @php
            $all_avis = App\Models\Satisfaction::where('publie',"Oui")->get();
            $nb_avis = sizeof($all_avis);
        @endphp
        @if ($nb_avis!=0)
        @if($nb_avis==1)
        <section id="testimonials" class="testimonials mt-5">
                <div class="container" >
                <div class="section-title">
                    <h2>Avis Clients</h2>
                    <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>-->
                </div>
                </div>
                <div class="container-fluid">
                    <div class="row justify-content-center"  data-aos-delay="100">
                    <div class="col-xl-5">
                        <div class="">

                        @foreach ($all_avis as $avis)
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                            <img src="{{ asset('{{-- public/  --}}assets/avis/avatar.png') }}" class="testimonial-img" alt="" style="width: 70px; height: 70px;">
                            <h3>{{ $avis->nom }} {{ $avis->prenom }}</h3>
                            <h4>{{ $avis->service}}</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                <span style="text-align: justify;">{{ $avis->avis }}</span> <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            </div>
                        </div>


                        @endforeach
                        </div>
                    </div>
                    </div>
                </div>
            </section><!-- End Testimonials Section -->
        @else
            <section id="testimonials" class="testimonials mt-5">
                <div class="container" >
                <div class="section-title">
                    <h2>Avis Clients</h2>
                    <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>-->
                </div>
                </div>
                <div class="container-fluid">
                    <div class="row justify-content-center"  data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="owl-carousel testimonials-carousel">

                        @foreach ($all_avis as $avis)
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                            <img src="{{ asset('{{-- public/  --}}assets/avis/avatar.png') }}" class="testimonial-img" alt="" style="width: 70px; height: 70px;">
                            <h3>{{ $avis->nom }} {{ $avis->prenom }}</h3>
                            <h4>{{ $avis->service}}</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                <span style="text-align: justify;">{{ $avis->avis }}</span> <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            </div>
                        </div>


                        @endforeach
                        </div>
                    </div>
                    </div>
                </div>
            </section><!-- End Testimonials Section -->
        @endif
      @endif

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" >

        <div class="section-title">
          <h2>Contactez Nous</h2>
        </div>

        <div class="row"  data-aos-delay="100">

          <div class="col-lg-5">

            <div class="row" style="margin-bottom: 10px;">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Notre Adresse</h3>
                  <p>2 B RUE DU GENERAL SCHMITZ 95300 PONTOISE</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>contact@sas-mpc.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Contact</h3>
                  <p>+33 (0)6 25 85 73 87</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-7">

            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
            <form class="contact-form" method="post" style="box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);padding: 30px;border-radius: 4px;">
                @csrf
              <div class="form-row row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nom" class="form-control" maxlength="30" id="nom" placeholder="Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  value="{{ old('nom') }}" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="prenom" class="form-control"  maxlength="30" id="prenom" placeholder="Prénom" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  value="{{ old('prenom') }}" required/>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email"  maxlength="60" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" value="{{ old('email') }}"  required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <select name="service" id="service" class="form-control" required>
                      <option value="">Choix du service </option>
                      @forelse($prestations as $prestation)
                        <option value="{{ $prestation->nom }}">{{ $prestation->nom }}</option>
                      @empty

                      @endforelse

                  </select>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message"  maxlength="500" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <div class="msg-return" style="color: green; text-align: center;"></div>
              </div>
              <div class="text-center"><button type="submit">Envoyer le Message</button></div>

            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

        <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container-fluid" data-aos="zoom-in">

         <div class="section-title">
            <h2>Nos partenaires</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-xl-10">
              <div class="owl-carousel clients-carousel">
                <img src="{{-- public/  --}}assets/img/clients/ikea.jpg" alt="" style="min-height: 110px;">
                <img src="{{-- public/  --}}assets/img/clients/leroymerlin.jpg" alt="" style="min-height: 110px;">
                <img src="{{-- public/  --}}assets/img/clients/vinci.png" alt="" style="min-height: 110px;">
              </div>
            </div>
          </div>
        </div>
    </section><!-- End Clients Section -->

  </main><!-- End #main -->

  <script>
    $('document').ready(function(){
          $('.contact-form').submit(function( event ) {
          event.preventDefault();
          $.ajax({
              url: '/envoyer-un-message',
              type: 'post',
              data: $('.contact-form').serialize(), // Remember that you need to have your csrf token included
              dataType: 'json',
              success: function( _response ){
                  $('.msg-return').text(_response['return']);
                  $( "input[name='nom']" ).val( "" );
                  $( "input[name='prenom']" ).val( "" );
                  $( "input[name='email']" ).val( "" );
                  $( "select[name='service']" ).val( "" );
                  $( "textarea[name='message']" ).val( "" );
                    var $btn = $(this);
                    $btn.button('loading');
                    // simulating a timeout
                    setTimeout(function () {
                        $btn.button('reset');
                    }, 1000);
              },
              error: function( _response ){
                  // Handle error
              }
          });

    });


    });
  </script>
@endsection
@section('js')

@endsection
