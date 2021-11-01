@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:cornflowerblue">{{ __('Perfil') }}</div>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container d-flex justify-content-center">
                            <div class="card p-3 py-4">
                                <div class="text-center"> <img src="https://i.imgur.com/stD0Q19.jpg" width="100" class="rounded-circle">
                                    <h3 class="mt-2">Maria Smantha</h3> <span class="mt-1 clearfix">Desarrollador Android</span>
                                    <div class="row mt-3 mb-3">
                                        <div class="col-md-6">
                                            <h5>Proyecto</h5> <span class="num">10</span>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Solicitud</h5> <span class="num">2</span>
                                        </div>
                                        
                                    </div>
                                    <hr class="line"> <small class="mt-4">Soy desarrolladora android</small>
                                    <div class="social-buttons mt-5"> <button class="neo-button"><i class="fa fa-facebook fa-1x"></i> </button> <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button> <button class="neo-button"><i class="fa fa-google fa-1x"></i> </button> <button class="neo-button"><i class="fa fa-youtube fa-1x"></i> </button> <button class="neo-button"><i class="fa fa-twitter fa-1x"></i> </button> </div>
                                    <div class="profile mt-5"> <button class="profile_button px-5">Editar perfil</button> </div>
                                </div>
                            </div>
                    </div>

                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection