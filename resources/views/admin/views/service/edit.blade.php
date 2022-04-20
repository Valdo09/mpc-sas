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
                        <h4 class="card-title"><a href="javascript:void(0)">Service  </a> <i class="fa fa-angle-right"></i> <a href="javascript:void(0)">Editer</a></h4>
                        <p>Veuillez remplir les champs suivants :</p>
                        <div class="basic-form">
                        <form action="{{route('services.update',$service->id) }}" id="create-form" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @include('admin.views.service.form')
                            <button type="submit" class="btn btn-dark">Modifier</button>
                        </form>
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
