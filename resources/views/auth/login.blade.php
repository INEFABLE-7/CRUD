<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
         <div class="login-main-text">
            <h2>INEFABLE-7<br> INICIAR SESION</h2>
            <p>INICIA SESION EN LA COMPAÑIA</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="{{ route('login')}}" method="post">
               @csrf
                  <div class="form-group">
                     <label>USUARIO INEFABLE-7</label>
                     <input type="text" class="form-control" placeholder="User Name" name="email">
                  </div>
                  <div class="form-group">
                     <label>CONTRASEÑA DE LA COMPAÑIA</label>
                     <input type="password" class="form-control" placeholder="Password" name="password">
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
                  <button type="submit" class="btn btn-secondary">Register</button>
               </form>
            </div>
         </div>
      </div>