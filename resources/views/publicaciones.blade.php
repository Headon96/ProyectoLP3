@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:cornflowerblue">{{ __('Publiaciones') }}</div>

                <div class="card-body">
                    @if(session('status'))
                        @if(session('status')=='Publicacion creada!')
                            <div class="alert alert-warning alert-dismissible fade show margin-top-20" role="alert">
                                <strong>Publicacion</strong> creada con exito.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                    @endif
                  
                    <div class="col-auto text-center">
                        <div class="card">
                        <button onclick="myFunction()" type="button" class="btn btn-primary">Crear Publicacion</button>
                       
                            <div id="myDIV" style="border:1px solid black;">
                            <div class="container contact-form">
                        <div class="contact-image">
                
                    </div>
            

                    <form action="/publicaciones" method="post" enctype="multipart/form-data">
            
                        @csrf
                            <br>
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="titulo_p" class="form-control" placeholder="Titulo de la publicacion *" value="" />
                                        <span>{{$errors->first('titulo_p')}}</span>
                                    </div>
                                    <input type="hidden" name="fecha" value="<?php date_default_timezone_set('America/Lima');  echo date('d-m-Y');?>">
                                    <input type="hidden" name="hora" value="<?php  echo date('H:i');?>">
                                    <br>   
                                    <div class="form-group">
                                            <textarea name="descripcion_p" class="form-control" placeholder="Agregar contenido *" style="width: 100%; height: 150px;" ></textarea>
                                            <span>{{$errors->first('descripcion_p')}}</span>
                                        </div> 
                                                       
                                    <div class="form-group">
                                        <input type="submit" name="btnSubmit" class="btnContact" value="Publicar" />
                                    </div>
                                </div>
                                
                            </div>
                    </form>

                  
                </div>
            </div>   

                <div class="container mt-5 mb-3">
                    @foreach($publicacion as $publicacions)
                        @foreach($user as $users)
                            @if($publicacions['f_id_user']==$users['id'])
                            <div class="row">
                                <div class="col-md-12 margin-auto">
                                    <div class="card p-3 mb-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div class="icon"><img src="images/blank_profile.png" width="100" class="rounded-circle"> </div>
                                                <div class="ms-2 c-details margin-left">
                                                    <h6 class="mb-0">{{$users['name']}}</h6> <span>{{$publicacions['fecha']}}</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="mt-5">
                                            <h3 class="heading">{{$publicacions['titulo_p']}}<br><br></h3>
                                            <h4 class="heading">{{$publicacions['descripcion_p']}}</h4>
                                            <div class="mt-5">
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            
                        @endforeach
                    @endforeach
                    

        </div>
    </div>
</div>
@endsection