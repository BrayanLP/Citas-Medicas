<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
            <h4 class="modal-title" id="gridModalLabel">Nuevo Paciente</h4>
      </div>
      <!--INICIO MODAL--> 
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
          <div class="row">
          		<form class="col s12" method="post" id="addproduct" action="index.php?view=addpacient" role="form">
                <div class="input-field col s6"> 
                    <label for="inputNombre" class="">Nombre*</label>
                    <input id="inputNombre" type="text" name="name" required class="validate" id="name" >
                </div>
                <div class="input-field col s6"> 
                    <label for="inputApellido" >Apellido</label>
                    <input id="inputApellido" type="text" name="lastname"  class="validate" id="lastname"> 
                </div>
                <div class="input-field col s6 l3"> 
                      <p>
                        <input  type="radio" name="gender" required value="h" id="test1" />
                        <label for="test1">Hombre</label>
                      </p>
                </div>
                <div class="input-field col s6 l3">
                      <p>
                        <input  type="radio" name="gender" required value="m" id="test2" />
                        <label for="test2">Mujer</label>
                      </p>   
                </div>

                <div class="input-field col s6"> 
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <!-- <label >Fecha de Nacimiento</label>  -->
                    <!-- <input type="date" name="day_of_birth"> --> 
                </div>


                <div class="input-field col s6">
                  <label for="inputEmail1" >Direccion*</label> 
                    <input type="text" name="address" class="validate"  id="address1"> 
                </div>

                <div class="input-field col s6">
                  <label for="inputEmail1" >Email*</label> 
                    <input type="text" name="email" class="validate" id="email1"> 
                </div>

                <div class="input-field col s6">
                  <label for="inputEmail1" >Telefono*</label> 
                    <input type="text" name="phone" class="validate" id="phone1"  > 
                </div>

                <div class="input-field col s12">
                  <label for="inputEmail1" >Enfermedad</label> 
                    <textarea name="sick" class="validate" id="sick" ></textarea> 
                </div>

                <div class="input-field col s12">
                  <label for="inputEmail1" >Medicamentos</label> 
                    <textarea name="medicaments" class="validate" id="sick"  ></textarea> 
                </div>

                <div class="input-field col s12">
                  <label for="inputEmail1" >Alergia</label> 
                    <textarea name="alergy" class="validate" id="sick" ></textarea> 
                </div>

                <div class="input-field col s12"> 
                    <button type="submit" class="btn btn-primary">Agregar Paciente</button> 
                </div>

                <div class="input-field col s12">
                  <p class="alert alert-info">* Campos obligatorios</p>
                </div>
              </form>
          </div>
        </div>
      </div>
    <!--FIN MODAL-->
    
  
    </div>
  </div>
</div>