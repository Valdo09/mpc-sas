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
                            <h4>Liste des Retours Clients</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped " id="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Email</th>
                                        <th>Service</th>
                                        <th>Disponiblité</th>
                                        <th>Délais</th>
                                        <th>Prix</th>
                                        <th>Qualité</th>
                                        <th>Propreté</th>
                                        <th>Protection</th>
                                        <th>Conseils</th>
                                        <th>Recommandation</th>
                                        <th>Note</th>
                                        <th>Avis</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @forelse($satisfactions as $satisfaction)
                                    <tr>
                                        <th>{{$i}}</th><td>{{$satisfaction->nom}}</td>
                                        <td>{{$satisfaction->prenom}}</td>
                                        <td>{{ $satisfaction->email }}</td>
                                        <td>{{ $satisfaction->service }}</td>
                                        <td>{{ $satisfaction->disponibilite }}</td>
                                        <td>{{ $satisfaction->delais }}</td>
                                        <td>{{ $satisfaction->prix }}</td>
                                        <td>{{ $satisfaction->qualite }}</td>
                                        <td>{{ $satisfaction->proprete }}</td>
                                        <td>{{ $satisfaction->conseils }}</td>
                                        <td>{{ $satisfaction->protection }}</td>
                                        <td>{{ $satisfaction->recommandation }}</td>
                                        <td>{{ $satisfaction->note }}</td>
                                        <td>{{ $satisfaction->avis }}</td>

                                        <td>
                                            <a href="{{route('admin.avisclient.delete',['id'=>$satisfaction->id])}}" class="btn btn-danger"  onclick="return confirm('Cette action est irreversible. Etes vous sûr de vouloir supprimer cet avis client ?');">Supprimer</a>
                                        </td>
                                    </tr>
                                    @php
                                        $i=$i+1;
                                    @endphp
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Aucun avis trouvé</td>
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
