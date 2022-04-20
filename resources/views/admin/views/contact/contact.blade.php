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
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                        <h4 class="card-title"><a href="javascript:void(0)">Contact  </a> <i class="fa fa-angle-right"></i> <a href="javascript:void(0)">Liste</a></h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Sujet</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @forelse($contacts as $contact)
                                    <tr>
                                        <th>{{$i}}</th>
                                        <td>{{$contact->nom}}</td>
                                        <td>{{$contact->email}}</span></td>
                                        <td>{{$contact->sujet}}</span></td>
                                        <td>{{$contact->message}}</span></td>
                                        <td>
                                            <a href="{{route('admin.deletecontacts',['id'=>$contact->id])}}" class="btn btn-danger"  onclick="return confirm('Cette action est irreversible. Etes vous sûr de vouloir supprimer ce contact ?');">Supprimer</a>
                                        </td>
                                    </tr>
                                    @php
                                        $i=$i+1;
                                    @endphp
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Aucun message reçu !</td>
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