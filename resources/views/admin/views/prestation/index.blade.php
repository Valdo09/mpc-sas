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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Liste des Prestations</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped " id="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Icône</th>
                                        <th>Description</th>
                                        <!-- <th>Image</th> -->
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @forelse($prestations as $prestation)
                                    <tr>
                                        <th>{{$i}}</th><td>{{$prestation->nom}}</td>
                                        <td> <img src="{{ asset('storage/'.$prestation->icone) }}" style="width: 36px; height: 36px;" alt="prestation icone"></td>
                                        <td>{!! $prestation->description !!}</td>
                                        <!-- <td><img src="{{asset('public/assets/prestations/'.$prestation->image)}}" alt="" class="img-thumbnail"  style="background-color: white;"></td> -->
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
                                        <td colspan="6" class="text-center">Aucune prestation ajoutée</td>
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
