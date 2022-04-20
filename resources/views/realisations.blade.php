
@extends('layout.app')

@section('content')
<style>

    
</style>

<div class="container-fluid ">
    
   @foreach ($categories as $category)
            @foreach ($realisations as $realisation)
            <header class="entry-header text-center row justify-content-center"><h1 class="r mt-5 pt-5">{{$category->intitule}}</h1></header>

            {{-- <div class="row">
                <div class="col-md-7 text-center  justify-content-center mt-5 align-middle ml-5" style="display: inline;">
                    {{$realisation->description}}
                </div>
            </div> --}}
            
                
            
            <div class="row">
                
                <div class="col-md-9 text-left  justify-content-center ml-5 pr-3" id="card">
                    <div class="mt-4 mr-5 col-md-8" style="line-height: 35px">
                        
                        {!!$realisation->description!!}
                    </div>
                
                    <p class="">
                        {{-- {{$realisation->description}} --}}
                        <img src="{{ asset('{{-- public/  --}}assets/realisations/'.$realisation->image)}}" alt="" class="w-75 h-50 my-5 img-fluid"> 
                        
                    </p>
                </div>
                
                
                    
                
            </div>
            
            @endforeach
   @endforeach
   
</div>
@endsection
