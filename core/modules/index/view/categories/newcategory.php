<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
            <h4 class="modal-title" id="gridModalLabel">Nueva Categoria</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">      
          <div class="row"> 
          		<form class="col s12" method="post" id="addcategory" action="index.php?view=addcategory" role="form">


                <div class="input-field col s12">
                  <label for="inputEmail1" >Nombre*</label> 
                    <input type="text" name="name" required class="form-control" id="name" > 
                </div>

                <div class="input-field col s12"> 
                    <button type="submit" class="btn btn-primary">Agregar Categoria</button> 
                </div>
              </form> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>    
