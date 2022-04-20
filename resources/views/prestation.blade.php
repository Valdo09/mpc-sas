@extends('layout.app')

@section('content')
  <!-- ======= Hero Section ======= -->
  <main id="main" style="margin-top: 150px;">
    @include('flash-message')
    
    <div class="container mb-5">
        <div class="row mb-2">
            <h1 class="col-12 text-center">
                {{ $prestation->nom }}
            </h1>
        </div>
        <p class="text-center">
            Détails du service
        </p>
    </div>
    <div class="container-fluid mb-5">
        <div class="row d-flex justify-content-center">
            @foreach ($prestation->services as $service)
                <div class="col-md-5 p-3 bg-light rounded-lg mt-4 @if($loop->index % 2 != 0) ml-1 @endif">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <h4 class="text-left font-weight-bold">
                                {{$service->name}}
                            </h4>
                            <p>
                                {{$service->name}}
                            </p>
                            <div>
                                {!! $service->description !!}
                            </div>
                        </div>
                        <div class="col-md-4 text-center" style="height: 370px;">
                            <div style=" margin: 0 auto; vertical-align: middle; height:300px;">
                                <img src="{{ asset('storage/'.$service->picture) }}" class="center" style="width: 100%;" alt="Image">
                            </div>
                            <div class="col-12 d-flex justify-content-end mt-4">
                                <a href="{{ route('commande.service', $service->id) }}" class="btn btn-danger">Prendre un rendez-vous</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
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
