@extends('layouts.app')

@section('content')

<body>
  <main>
    <div class="container">
      <div class="left box-primary">
      <div class="text-center"> <img src="images/blank_profile.png" width="100" class="rounded-circle">
        <h3 class="username text-center">{{ Auth::user()->name }}</h3>
        
      </div>
      <div class="right tab-content">
        <form class="form-horizontal" method="POST" action="/editarPerfil">
            @csrf
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Nombre</label>
            
           <input type="hidden" name="sal_id_user" value="{{ Auth::user()->id }}">           
            
            <div class="col-sm-10">
                
              <input type="inputName" class="form-control"  placeholder="Nombre" name="name">
            </div>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Profesion</label>
            <div class="col-sm-10">
              <input type="inputName" class="form-control"  placeholder="Profesion" name="profesion">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-danger">Guardar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>

@endsection