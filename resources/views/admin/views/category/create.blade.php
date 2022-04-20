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
                        <h4 class="card-title"><a href="javascript:void(0)">Categorie  </a> <i class="fa fa-angle-right"></i> <a href="javascript:void(0)">Ajout</a></h4>
                        <p>Veuillez remplir les champs suivants :</p>
                        <div class="basic-form">
                        <form action="{{route('admin.storecategory')}}" id="create-form" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Nom : </label>
                                    <input type="text" name="nom" maxlength="50" class="form-control input-default" placeholder="Titre">
                                </div>
                                <img src="" id="picture" alt="">
                                <div class="form-group">
                                    <label for="picture">Photo </label>
                                    <input type="file" class="form-control-file" name="picture" accept="image/*" id="picture" required>
                                </div>
                                <button type="submit" class="btn btn-dark">Créer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @forelse($all_categories as $category)
                                    <tr>
                                        <th>{{$i}}</th>
                                        <td><img src="{{asset('public/assets/uploads/category/photos/'.$category->image)}}" alt="" class="img-thumbnail"  style="max-width: 200px; max-height: 200px;"></td>
                                        <td>{{$category->name}}</td>
                                        <td>
                                            <a href="{{route('admin.editcategory',['id'=>$category->id])}}" class="btn btn-primary" >Editer</a><br><br><br>
                                            <a href="{{route('admin.deletecategory',['id'=>$category->id])}}" class="btn btn-danger"  onclick="return confirm('Cette action est irreversible. Etes vous sûr de vouloir supprimer cette categorie ?');">Supprimer</a>
                                        </td>
                                    </tr>
                                    @php
                                        $i=$i+1;
                                    @endphp
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Aucun categorie publié !</td>
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
@endsection
