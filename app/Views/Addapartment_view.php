
<div class="container fluid">

        <h1>Registro de Apartamentos</h1>
     <form  onsubmit="return validacionApartamento()"  method="POST" action="<?php echo base_url() .'/addApt' ?>" enctype="multipart/form-data" class="font-weight-bold">
        <div class="row p-2">
            <div class="col col-6">
                <label for="cuidad">Cuidad</label>
                <input type="text" name="cuidad" id="cuidad" required class="form-control"> 
            </div>
            <div class="col col-6">
                <label for="pais">Pais</label>
                <input type="text" name="pais" id="pais" required class="form-control">
            </div>
        </div>
        <div class="row p-2">
            <div class="col col-6">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" id="direccion" class="form-control">
            </div>
            <div class="col col-3">
                <label for="celular">Ubicacion en Google maps</label>
                <input type="number" name="ubicacion" id="celular" class="form-control">
            </div>
            <div class="col col-3">
                <label for="habitaciones">Numero de Habitaciones</label>
                <input type="number" name="habitaciones" id="habitaciones" class="form-control">
            </div>
        </div>
         <div class="row p-2">
             <div class="col col-6">
                 <label for="tipo">Imaganes del Apartamento</label>
                 <input type="file" name="imagen" class="form-control">
             </div>
             <div class="col col-6">
                 <label for="cedula">Imagen Destacada</label>
                 <input type="file" name="imagenDestacada" class="form-control">

             </div>
         </div>
         <div class="row p-2">
            <div class="col col-6">
                <label for="valor">Valor por Noche</label>
                <input type="number" name="valor" id="valor" class="form-control" required>
            </div>
            <div class="col col-6">
                <label for="comentarios">Reseña del apartamento</label>
                <textarea name="reseña" id="comentarios" cols="" rows="" class="form-control"></textarea>
            </div>
        </div>
            <div class="row p-2">
            <div class="col col-12">
                <input type="checkbox" name="acepto" id="acepto" required>
                <a href=""data-toggle="modal" data-target="#exampleModal">Acepto Terminos y condiciones</a> 
            </div>
        </div>
        <div class="row p-2">
            <div class="col col-12 text-center">
                <button name="boton" id="boton" class="btn btn-secondary">Agregar Apartamento</button>
            </div>
        </div>
     </form>
</div>

