<div class="container">
        <div class="row text-center login-page">
			<div class="col-md-12 login-form">
        <form  method="POST" action="<?php echo base_url().'/inicio';?>">
    <div class="row ">
        <div class="col-md-12 login-form-header">
          <img class="mb-4" src="img/icons-login.jpg" alt="" width="72" height="57">
          <h1 class="login-form-font-header">Por favor, Iniciar sesion</h1>
        </div>
    </div>
       <div class="row ">
        <div class="col-md-12 login-from-row">
            <input type="email" class="form-control " name="email" id="email" placeholder="Usuario">
          </div>
       </div>
      <div class="row ">
        <div class="col-md-12 login-from-row">
            <input type="password" class=" form-control" name="password" id="password" placeholder="Contraseña">
          </div>
      </div>   
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Recordarme
            </label>
          </div>
     <div class="row">
        <div class="col-md-12 login-from-row">
          <button type="submit"  class="btn btn-primary" >Registrarse</button>
        </div>
     </div>
          <p class="mt-5 mb-3 text-muted">&copy; 2020–2021</p>
        </form>
    </div>
  </div>
</div>