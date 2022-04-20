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
                            <h4>Liste de commandes reçues </h4>
                        </div>
                        <div class="active-member">
                            <div class="table-responsive">
                                <table class="table table-striped table-xs mb-0" id="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Clients</th>
                                            <th>Service / Tarif</th>
                                            <th>Adresse</th>
                                            <th>Email</th>
                                            <th>Téléphone</th>
                                            <th>Code Postal</th>
                                            <th>Date d'Intervention</th>
                                            <th>Urgence ?</th>
                                            <th>Photos</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i=1;
                                        @endphp
                                        @forelse($all_commandes as $commande)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$commande->nom}}</td>
                                            <td class="text-center">{!!$commande->service!!} <br> <br> {!!$commande->tarif!!}</td>
                                            <td>
                                                <span>{{$commande->adresse}}</span>
                                            </td>
                                            <td>{{$commande->email}}</td>
                                            <td>{{$commande->telephone}}</td>
                                            <td>{{$commande->codepostal}}</td>
                                            <td>{{$commande->dateinterv}}</td>
                                            <td>@if ($commande->urgence=="urgent")
                                                Urgent
                                                @else
                                                Sur Rendez-Vous
                                                @endif
                                            </td>
                                            @php
                                                $images=App\Models\Photo::where('commande_id',$commande->id)->get();
                                                $size = sizeof($images);
                                            @endphp
                                            <td>@if ($size!=0)
                                            <a href="#">Voir Photos</a></td>
                                                @else
                                                    Aucune image jointe.
                                                @endif
                                            <td>
                                                <a href="{{route('admin.approvecommande',['id'=>$commande->id])}}" class="btn btn-primary" >Approuver</a><br><br><br>
                                                <a href="{{route('admin.deletecommande',['id'=>$commande->id])}}" class="btn btn-danger"  onclick="return confirm('Cette action est irreversible. Etes vous sûr de vouloir supprimer cette commande ?');">Supprimer</a>
                                            </td>
                                        </tr>
                                        @php
                                            $i=$i+1;
                                        @endphp
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Aucune commande reçue.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
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
@endsection
