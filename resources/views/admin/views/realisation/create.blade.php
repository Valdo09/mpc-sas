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
                        <h4 class="card-title"><a href="javascript:void(0)">Réalisation  </a> <i class="fa fa-angle-right"></i> <a href="javascript:void(0)">Ajout</a></h4>
                        <p>Veuillez remplir les champs suivants :</p>
                        <div class="basic-form">
                        <form action="{{route('realisations.store')}}" id="create-form" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
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
                                <div class="form-group">
                                    <label>Adresse *: </label>
                                    <input type="text" name="adresse" maxlength="50" class="form-control input-default">
                                </div>
                                <div class="form-group">
                                    <label>Description : </label>
                                    <textarea class="form-control editor" maxlength="800"  rows="10" id="description" name="description"></textarea>
                                </div>
                                <img src="" id="picture" alt="">
                                <div class="form-group">
                                    <label for="picture">Image / Vidéo</label>
                                    <input type="file" class="form-control-file" name="picture" accept="image/*, video/mp4,video/x-m4v,video/*" id="picture" required>
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
                                        <th>Service</th>
                                        <th>Adresse</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @forelse($realisations as $realisation)
                                    <tr>
                                        <th>{{$i}}</th>
                                        <td><img src="{{asset('public/assets/realisations/'.$realisation->image)}}" alt="" class="img-thumbnail"  style="width: 250px; height: 100px; background-color: white;"></td>
                                        <td>{{$realisation->service}}</td>
                                        <td>{{$realisation->adresse}}</td>
                                        <td>{!! $realisation->description !!}</td>
                                        <td>
                                            <a href="{{route('realisations.edit',['realisation'=>$realisation])}}" class="btn btn-primary" >Editer</a><br><br><br>
                                            <form action="{{route('realisations.destroy',['realisation'=>$realisation])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"  onclick="return confirm('Cette action est irreversible. Etes vous sûr de vouloir supprimer cette realisation ?');">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                        $i=$i+1;
                                    @endphp
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Aucune realisation ajoutée</td>
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
