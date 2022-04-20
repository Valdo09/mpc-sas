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
                        <h4 class="card-title"><a href="javascript:void(0)">Avis  </a> <i class="fa fa-angle-right"></i> <a href="javascript:void(0)">Ajout</a></h4>
                        <p>Veuillez remplir les champs suivants :</p>
                        <div class="basic-form">
                        <form action="{{route('avis.store')}}" id="create-form" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Nom : </label>
                                    <input type="text" name="nom" class="form-control input-default">
                                </div>
                                <div class="form-group">
                                    <label>Fonction : </label>
                                    <input type="text" name="fonction" class="form-control input-default">
                                </div>
                                <div class="form-group">
                                    <label>Avis : </label>
                                    <textarea class="form-control editor" rows="5" id="avis" name="avis"></textarea>
                                </div>
                                <img src="" id="picture" alt="">
                                <div class="form-group">
                                    <label for="picture">Image </label>
                                    <input type="file" class="form-control-file" name="picture" accept="image/*" id="picture" required>
                                </div>
                                <button type="submit" class="btn btn-dark">Ajouter</button>
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
                                        <th>Image</th>
                                        <th>Nom</th>
                                        <th>Fonction</th>
                                        <th>Avis</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @forelse($all_avis as $avis)
                                    <tr>
                                        <th>{{$i}}</th>
                                        <td><img src="{{asset('assets/avis/'.$avis->image)}}" alt="" class="img-thumbnail"  style="width: 250px; height: 100px; background-color: white;"></td>
                                        <td>{{$avis->nom}}</td>
                                        <td>{{$avis->fonction}}</td>
                                        <td>{!! $avis->avis !!}</td>
                                        <td>
                                            <a href="{{route('avis.edit',['id'=>$avis->id])}}" class="btn btn-primary" >Editer</a><br><br><br>
                                            <a href="{{route('avis.destroy',['id'=>$avis->id])}}" class="btn btn-danger"  onclick="return confirm('Cette action est irreversible. Etes vous sûr de vouloir supprimer cette avis ?');">Supprimer</a>
                                        </td>
                                    </tr>
                                    @php
                                        $i=$i+1;
                                    @endphp
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Aucun avis ajouté</td>
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
