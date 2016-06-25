<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
            <h4 class="modal-title"  >Agregar Usuario</h4>
      </div>
      <div class="modal-body">
              <div class="container-fluid bd-example-row">
                <div class="row"> 
		              <form class="col s12" method="post" id="addproduct" action="index.php?view=adduser" role="form">
                    <div class="input-field col s6">
                      <label for="inputEmail1" >Nombre*</label> 
                        <input type="text" name="name" class="form-control" id="name" >
                    </div>

                    <div class="input-field col s6">
                      <label for="inputEmail1" >Apellido*</label>
                        <input type="text" name="lastname" required class="form-control" id="lastname" >
                    </div>

                    <div class="input-field col s6">
                      <label for="inputEmail1" >Nombre de usuario*</label>
                        <input type="text" name="username" class="form-control" required id="username"  >
                    </div>

                    <div class="input-field col s6">
                      <label for="inputEmail1" >Email*</label>
                        <input type="text" name="email" class="form-control" id="email"  >
                    </div>

                    <div class="input-field col s6">
                      <label for="inputEmail1" >Contrase&ntilde;a</label>
                        <input type="password" name="password" class="form-control" id="inputEmail1" >
                    </div>

                    <div class="input-field col s6">
                      <p>
                        <input  name="is_admin" type="checkbox" id="test5" />
                        <label for="test5">Es administrador</label>
                      </p> 
                    </div>

                    <div class="input-field col s12 "> 
                        <button type="submit" class="btn btn-primary">Agregar Usuario</button>
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