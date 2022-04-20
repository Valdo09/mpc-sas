@extends('admin.layout.app')
@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Visiteurs</a></li>
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
                            <h4>Nombre total des visiteurs </h4>
                        </div>
                        @php
                            $nb=sizeof($total_visitors);
                        @endphp
                        <div class="active-member">
                            <div class="table-responsive">
                                <p>Le nombre total de visiteurs différents sur le site : <b style="color: coral;">{{$nb}}</b></p>
                            </div>
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
                            <h4>Historique des visiteurs </h4>
                        </div>
                        <div class="active-member">
                            <div class="table-responsive">
                                <table class="table table-striped table-xs mb-0" id="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Adresse</th>
                                            <th>Date de Visite</th>
                                            <th>Heure</th>
                                            <th>Page(s) Vue(s) / Actions Effectuées</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i=1;
                                        @endphp
                                        @forelse($all_visitors as $visitor)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$visitor->location}}</td>
                                            <td>{{$visitor->visit_date}}</td>
                                            <td>{{$visitor->time}}</td>
                                            <td>{{$visitor->view}}</td>
                                        </tr>
                                        @php
                                            $i=$i+1;
                                        @endphp
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">Aucun visiteur</td>
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Liste des visiteurs (par jours) </h4>
                        </div>
                        <div class="active-member">
                            <div class="table-responsive">
                                <table class="table table-striped table-xs mb-0" id="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Adresse</th>
                                            <th>Date</th>
                                            <th>Nombre de pages visités</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i=1;
                                        @endphp
                                        @forelse($visitors_by_ip as $visitor)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$visitor->location}}</td>
                                            <td>{{$visitor->visit_date}}</td>
                                            <td>{{$visitor->total}}</td>
                                        </tr>
                                        @php
                                            $i=$i+1;
                                        @endphp
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Aucun visiteur</td>
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
