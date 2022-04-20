@extends('admin.layout.app')
@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><a href="javascript:void(0)">Envoyer un formulaire de satisfaction à un client </a> </h4>
                        <p>Veuillez remplir les champs suivants :</p>
                        <div class="basic-form">

                            <form action="{{ route('admin.satisform.send') }}" method="post" >
                                @csrf
                            <div class="form-row row">
                                <div class="col-md-12 form-group">
                                <input type="text" name="nom" maxlength="30" class="form-control" id="nom" placeholder="Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                                <div class="validate"></div>
                                </div>
                                <div class="col-md-12 form-group">
                                <input type="text" name="prenom"  maxlength="30" class="form-control" id="prenom" placeholder="Prénom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                                <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                <input type="email" class="form-control" name="email"  maxlength="60" id="email" placeholder="Email du client" data-rule="email" data-msg="Please enter a valid email" required/>
                                <div class="validate"></div>
                                </div>
                                <div class="col-md-12 form-group">
                                @php
                                    $prestations = App\Models\Prestation::all();
                                @endphp
                                <select name="service" id="service" class="form-control" required>
                                    <option value="">Service</option>
                                    @forelse($prestations as $prestation)
                                        <option value="{{ $prestation->nom }}">{{ $prestation->nom }}</option>
                                    @empty

                                    @endforelse

                                </select>
                                <div class="validate"></div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-dark">Envoyer</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- #/ container -->
</div>
<!--**********************************
    Content body end
***********************************-->

@endsection
@section('js')

    <script>
        ClassicEditor
            .create( document.querySelector( '#comment' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script type="text/javascript" src="{{asset('js/imageuploadify.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#photo').imageuploadify();
        })
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#composition' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#details' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
