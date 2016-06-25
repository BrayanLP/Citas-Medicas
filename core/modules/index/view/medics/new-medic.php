<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
            <h4 class="modal-title" id="gridModalLabel">Nuevo Medico</h4>
      </div>

      <!--INICIO MODAL--> 
      <?php
      $categories = CategoryData::getAll();
      ?>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">      
          <div class="row"> 
          		<form class="col s12" method="post" id="addproduct" action="index.php?view=addmedic" role="form">

                <div class="input-field col s12">
                  
                    <select name="category_id">
                      <option value="">-- SELECCIONE --</option>      
                      <?php foreach($categories as $cat):?>
                      <option value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>      
                      <?php endforeach;?>
                    </select>
                    <label >Area*</label>   
                </div>

                <div class="input-field col s6">
                  <label for="inputEmail1">Nombre*</label> 
                    <input type="text" name="name" class="form-control" id="name">
                </div>

                <div class="input-field col s6">
                  <label for="inputEmail1">Apellido*</label>
                    <input type="text" name="lastname" required class="form-control" id="lastname" > 
                </div>


                <div class="input-field col s6">
                  <label for="inputEmail1">Email*</label> 
                    <input type="text" name="email" class="form-control" id="email" > 
                </div>

                <div class="input-field col s6">
                  <label for="inputEmail1">Telefono*</label> 
                    <input type="text" name="phone" class="form-control" id="phone"  > 
                </div> 

                <div class="input-field col s12">
                  <label for="inputEmail1">Direccion*</label> 
                    <input type="text" name="address" class="form-control"  id="address"  > 
                </div>

                <div class="input-field col s12"> 
                    <button type="submit" class="btn btn-primary">Agregar Medico</button> 
                </div>

                <div class="input-field col s12">
                  <p class="alert alert-info">* Campos obligatorios</p>
                </div>

              </form>  
          </div>
        </div>
      </div>
    </div>
  </div>
</div>