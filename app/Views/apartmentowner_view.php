
<form  method="POST" action="<?php echo base_url().'/agregarcrud';?>">
<div class="row login-page">
  <div class="col-sm-12">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Apartamento</label>
    <input type="text" name="apartamento" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telefono</label>
    <input type="text" name="telefono" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

<h2>Apartamento por propietario</h2>

<div class="row">
      <div class="col-sm-12">
        <div class="table table-responsive">
            <table class="table table-bordered border-danger">      
                    <tr>
                        <th>Nombre</th>
                        <th>Apartamento</th>
                        <th>Telefono</th>
                        <th>Edictar</th>
                        <th>eliminar</th>
                    </tr>  
               <?php foreach ($listar as $data): ?>
                    <tr>
                      <td><?php $data['Nombre'];?></td>
                      <td><?php $data['apartamento'];?></td>
                      <td><?php $data['Telefono'];?></td>
                      <td><a href="">Editar</a></td>
                      <td><a href="">Eliminar</a></td>
                    </tr>
              <?php endforeach ?>
            </table>
        </div>
    </div>      
</div>      
