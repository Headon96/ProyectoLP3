@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:cornflowerblue">{{ __('Perfil') }}</div>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <div class="card-body">
                    @if(session('status'))
                        @if(session('status')=='Actualizado!')
                            <div class="alert alert-warning alert-dismissible fade show margin-top-20" role="alert">
                                <strong>Perfil</strong> Actualizado con exito.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                    @endif
                    <div class="container d-flex justify-content-center">
                            <div class="card p-3 py-4">
                                <div class="text-center"> <img src="images/blank_profile.png" width="100" class="rounded-circle">
                                    <h3 class="mt-2">{{ Auth::user()->name }}</h3> <span class="mt-1 clearfix">{{ Auth::user()->profesion }}</span>
                                    <hr class="line"> <small class="mt-4">Soy {{ Auth::user()->profesion }} con experiencia.</small>
                                    <div class="row mt-3 mb-3">
                                        <div class="col-md-6">
                                            <h5>Redes</h5> 
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Sociales</h5> 
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="social-buttons mt-5"> <button class="neo-button"><i class="fa fa-facebook fa-1x"></i> </button> <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button> <button class="neo-button"><i class="fa fa-google fa-1x"></i> </button> <button class="neo-button"><i class="fa fa-youtube fa-1x"></i> </button> <button class="neo-button"><i class="fa fa-twitter fa-1x"></i> </button> </div>
                                    <div class="profile mt-5"> <a class="profile_button px-5" href="{{ url('/editar') }}" style="color:black">Editar perfil</a> </div>
                                </div>
                            </div>
                    </div>

                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection