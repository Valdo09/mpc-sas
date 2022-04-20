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
                        <h4 class="card-title"><a href="javascript:void(0)">Modifier une Prestation  </a> <i class="fa fa-angle-right"></i> <a href="javascript:void(0)">Ajout</a></h4>
                        <p>Veuillez remplir les champs suivants :</p>
                        <div class="basic-form">
                        <form action="{{route('prestations.update',['prestation'=>$prestation])}}" id="create-form" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("PATCH")
                                <div class="form-group">
                                    <label>Nom : </label>
                                    <input type="text" name="nom" class="form-control input-default @error('nom')
                                        is-invalid
                                    @enderror" value="{{ old('nom') ?? $prestation->nom }}">
                                    @error('nom')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Icône : </label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="icone" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choisir une icone</label>
                                    </div>
                                    @error('icone')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror                                  
                                </div>
                                <div class="form-group">
                                    <label>Description : </label>
                                    <textarea class="form-control editor @error('description')
                                        is-invalid
                                    @enderror" rows="10" id="description" name="description">{{ old('description') ?? $prestation->description }}</textarea>
                                    @error('description')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                                <button type="submit" class="btn btn-dark">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Liste</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped " id="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <!-- <th>Image</th> -->
                                        <th>Nom</th>
                                        <th>Icône</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @forelse($prestations as $prestation)
                                    <tr>
                                        <th>{{$i}}</th>
                                        <!-- <td><img src="{{asset('public/assets/prestations/'.$prestation->image)}}" alt="" class="img-thumbnail"  style="width: 250px; height: 100px; background-color: white;"></td> -->
                                        <td>{{$prestation->nom}}</td>
                                        <td> <img src="{{ asset('storage/'.$prestation->icone) }}" style="width: 36px; height: 36px;" alt="prestation icone"></td>
                                        <td>{!! $prestation->description !!}</td>
                                        <td>
                                            <a href="{{route('prestations.update',['prestation'=>$prestation])}}" class="btn btn-primary" >Editer</a><br><br><br>
                                            <form action="{{route('prestations.destroy',['prestation'=>$prestation])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"  onclick="return confirm('Cette action est irreversible. Etes vous sûr de vouloir supprimer cette prestattion ?');">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                        $i=$i+1;
                                    @endphp
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Aucun prestation ajouté</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# column -->
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
