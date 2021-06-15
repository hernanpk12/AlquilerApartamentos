<div class="container">
        <div class="row login-page">
			<div class="col-md-12 login-form">
        <h1>Registro de Usuario</h1>
     <form method="POST" action="<?php echo base_url().'/agregarUser';?>"  >
        <div class="row p-2">
            <div class="col col-12">
                <label for="Nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" required class="form-control"> 
            </div>
        </div>
        <div class="row p-2">
            <div class="col col-12">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" id="exampleInputEmail1" class="form-control">
            </div>
            </div>
        <div class="row p-2">
            <div class="col col-12">
                <label for="cuidad">Cuidad</label>
                <input type="text" name="cuidad" id="cuidad" class="form-control">
            </div>
        </div>
        <div class="row p-2">
            <div class="col col-12">
                <label for="pais">pais</label>
                <input type="text" name="pais" id="pais" class="form-control">
            </div>
        </div>
        <div class="row p-2">
            <div class="col col-12">
                <label for="Contraseña">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
        </div>
         <div class="row p-2">
             <div class="col col-12">
                 <label for="rol">Rol</label>
                 <select name="rol" id="rol" class="form-control" required>
                    <option value="select">--Seleccione--</option>
                     <option value="Anfitrion">Anfitrion</option>
                     <option value="invitado">invitado</option>
                 </select>
             </div>
         </div>
        <div class="row p-2">
            <div class="col col-12 text-center">
                <button  type="submit"  class="btn btn-primary">Enviar </button>
            </div>
        </div>
     </form>
    </div>
</div>
</div>