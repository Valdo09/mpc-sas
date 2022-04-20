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
                        <h4 class="card-title"><a href="javascript:void(0)">Ajouter une actualité/nouveauté à partager</a></h4>
                        <p>Veuillez remplir les champs suivants :</p>
                        <div class="basic-form">
                        <form action="{{route('admin.news.send')}}" id="create-form" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Sujet : </label>
                                    <input type="text" name="sujet" class="form-control input-default" required>
                                </div> 
                                <div class="form-group">
                                    <label>Contenu : </label>
                                    <textarea class="form-control editor" rows="10" id="description" name="contenu" ></textarea>
                                </div>
                                <img src="" id="picture" alt="">
                                <div class="form-group">
                                    <label for="picture">Image (Facultatif)</label>
                                    <input type="file" class="form-control-file" name="picture" accepdt="image/*" id="picture" required>
                                </div>
                                <button type="submit" class="btn btn-dark">Envoyer aux Abonnés</button>
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
                                        <th>Sujet</th> 
                                        <th>Contenu</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @forelse($selected_news as $news)
                                    <tr>
                                        <th>{{$i}}</th>
                                        <td><img src="{{asset('public/assets/news/'.$news->image)}}" alt="" class="img-thumbnail"  style="width: 250px; height: 100px; background-color: white;"></td>
                                        <td>{{$news->sujet}}</td>
                                        <td>{!! $news->contenu !!}</td>
                                        <td>{{$news->date}}</td>
                                        <td>
                                            <a href="{{route('admin.news.destroy',['id'=>$news->id])}}" class="btn btn-danger"  onclick="return confirm('Cette action est irreversible. Etes vous sûr de vouloir supprimer cette news ?');">Supprimer</a>
                                        </td>
                                    </tr>
                                    @php
                                        $i=$i+1;
                                    @endphp
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Aucune actualité ou nouveauté ajoutée</td>
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
