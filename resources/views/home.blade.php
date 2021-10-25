@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:cornflowerblue">{{ __('Publicaciones') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  

                    <section>
                            
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-4 col-md-6 col-12">
                            <ul class="list-group">
                              <li class="list-group-item">
                              <img class="mr-3 " src="img\we.png" alt="Generic placeholder image" width="80px" height="70px">
                                <div class="media-body">
                                  <h5 class="mt-0 mb-1">Publicacion 1</h5>
                                  <p class="mb-0">Prueba de publicacion numero 1</p>
                                </div>
                              </li>
                            </ul>
                          </div>

                          <div class="col-lg-4 col-md-6 col-12">
                            <ul class="list-group">
                              <li class="list-group-item">
                              <img class="mr-3 " src="img\we.png" alt="Generic placeholder image" width="80px" height="70px">
                                <div class="media-body">
                                  <h5 class="mt-0 mb-1">Publicacion 2</h5>
                                  <p class="mb-0">Prueba de publicacion numero 2</p>
                                </div>
                              </li>
                            </ul>
                          </div>

                          <div class="col-lg-4 d-md-none d-lg-block">
                            <ul class="list-group">
                              <li class="list-group-item">
                              <img class="mr-3 " src="img\we.png" alt="Generic placeholder image" width="80px" height="70px">
                                <div class="media-body">
                                  <h5 class="mt-0 mb-1">Publicacion 3</h5>
                                  <p class="mb-0">Prueba de publicacion numero 3</p>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <br>

                      <div class="container">
                        <div class="row">
                          <div class="col-lg-4 col-md-6 col-12">
                            <ul class="list-group">
                              <li class="list-group-item">
                              <img class="mr-3 " src="img\we.png" alt="Generic placeholder image" width="80px" height="70px">
                                <div class="media-body">
                                  <h5 class="mt-0 mb-1">Publicacion 4</h5>
                                  <p class="mb-0">Prueba de publicacion numero 4</p>
                                </div>
                              </li>
                            </ul>
                          </div>

                          <div class="col-lg-4 col-md-6 col-12">
                            <ul class="list-group">
                              <li class="list-group-item">
                              <img class="mr-3 " src="img\we.png" alt="Generic placeholder image" width="80px" height="70px">
                                <div class="media-body">
                                  <h5 class="mt-0 mb-1">Publicacion 5</h5>
                                  <p class="mb-0">Prueba de publicacion numero 5</p>
                                </div>
                              </li>
                            </ul>
                          </div>

                          <div class="col-lg-4 d-md-none d-lg-block">
                            <ul class="list-group">
                              <li class="list-group-item">
                              <img class="mr-3 " src="img\we.png" alt="Generic placeholder image" width="80px" height="70px">
                                <div class="media-body">
                                  <h5 class="mt-0 mb-1">Publicacion 6</h5>
                                  <p class="mb-0">Prueba de publicacion numero 6</p>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      
      
    
            
                    </section>
          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
