@extends('layout.app')

@section('content')
  <!-- ======= Hero Section ======= -->
  <main id="main" style="margin-top: 150px;">
    
    <div class="container mb-5">
        <div class="row mb-2">
            <h1 class="col-12 text-center">
                PASSER UNE COMMANDE
            </h1>
        </div>
        <br>
        <div class="row mt-2 bg-light p-4">
            <div class="col-12">
                @include('flash-message')
            </div>
            <div class="col-lg-4 col-sm-12 mb-3">
                <div class="row border border-danger p-4">
                    <div class="col-2 mr-1">
                        <i class="fa fa-building" aria-hidden="true" style="font-size: 38px;"></i>
                    </div>
                    <div class="col-9">
                        <span style="font-size: 20px;">Service:</span>
                        <p class="mt-2 font-weight-bold">
                            {{ $service->name}}
                        </p>
                    </div>
                </div>
                <div class="row border border-danger mt-2 p-4">
                    <div class="col-2 mr-1">
                        <i class="fa fa-credit-card" aria-hidden="true" style="font-size: 38px;"></i>
                    </div>
                    <div class="col-9">
                        <span style="font-size: 20px;">Tarif estimatif:</span>
                        <p class="mt-2 font-weight-bold">
                        {{ $service->price}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12 px-2">
                <form action="{{ route('commande.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    <div class="form-row form-group">
                        <div class="col">
                            <input type="text" value="{{ old('name') }}" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nom">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" name="surname" value="{{ old('surname') }}" class="form-control @error('surname') is-invalid @enderror" placeholder="Prénom">
                            @error('surname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col">
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" name="telephone" value="{{ old('telephone') }}" class="form-control  @error('telephone') is-invalid @enderror" placeholder="Téléphone">
                            @error('telephone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col">
                            <input type="text" name="code_postal" value="{{ old('code_postal') }}" class="form-control @error('code_postal') is-invalid @enderror" placeholder="Code Postal">
                            @error('code_postal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="date" name="date" value="{{ old('date') }}" class="form-control @error('date') is-invalid @enderror" >
                            @error('date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="adresse" id="" cols="30" rows="02" placeholder="Adresse d'intervention (Numéro et voie)" class="form-control @error('adresse') is-invalid @enderror">{{ old('adresse') }}</textarea>
                        @error('adresse')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group form-row">
                        <div class="col">
                            <small>Ajouter une ou plusieurs photos</small>
                            <div class="custom-file">
                                <input type="file" name="pictures[]" class="custom-file-input @error('pictures') is-invalid @enderror" id="customFile" multiple="multiple">
                                <label class="custom-file-label" for="customFile">Images</label>
                            </div>
                            @error('pictures.*')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col">
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('mode') is-invalid @enderror" @if(old('mode') == 'urgent') checked @endif name="mode" value="urgent" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">URGENT</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('mode') is-invalid @enderror" name="mode" @if(old('mode') == 'rendez-vous') checked @endif value="rendez-vous" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">RENDEZ-VOUS</label>
                            </div>
                            @error('mode')
                                <br>
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input @error('agree') is-invalid @enderror" type="checkbox" name="agree" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                J'accepte les Conditions Générales d'Utilisation
                            </label>
                            @error('agree')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">COMMANDER</button>
                        </div>
                    </div>
                </form>
            </div>
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
