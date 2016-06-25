<?php
$pacients = PacientData::getAll();
$medics = MedicData::getAll();

$statuses = StatusData::getAll();
$payments = PaymentData::getAll();

?>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
            <h4 class="modal-title" id="gridModalLabel">Nueva Cita</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">      
          <div class="row"> 
            <form class="col s12" role="form" method="post" action="index.php?view=addreservation">
              <div class="input-field col s12">
                <label for="inputEmail1">Asunto</label> 
                  <input type="text" name="title" required  id="inputEmail1"  > 
              </div>

              <div class="input-field col s12">
                  <select name="pacient_id"  required>
                  <option value="">-- SELECCIONE --</option>
                    <?php foreach($pacients as $p):?>
                      <option value="<?php echo $p->id; ?>"><?php echo $p->id." - ".$p->name." ".$p->lastname; ?></option>
                    <?php endforeach; ?>
                  </select> 
                <label for="inputEmail1">Paciente</label> 
              </div>

              <div class="input-field col s12">
                  <select name="medic_id"  required>
                  <option value="">-- SELECCIONE --</option>
                    <?php foreach($medics as $p):?>
                      <option value="<?php echo $p->id; ?>"><?php echo $p->id." - ".$p->name." ".$p->lastname; ?></option>
                    <?php endforeach; ?>
                  </select> 
                <label for="inputEmail1" >Medico</label> 
              </div>

              <div class="input-field col s12"> 
                  <input type="date" name="date_at" required  id="inputEmail1"  >
              </div>

              <div class="input-field col s12"> 
                  <input type="time" name="time_at" required  id="inputEmail1"  > 
              </div>
              <div class="input-field col s12">
                <label for="inputEmail1" >Nota</label> 
                <textarea  name="note"  ></textarea> 
              </div>

              <div class="input-field col s12">
                <label for="inputEmail1" >Enfermedad</label>
                <textarea  name="sick"  ></textarea>
              </div>

              <div class="input-field col s12">
                <label for="inputEmail1" >Sintomas</label> 
                <textarea  name="symtoms"  ></textarea> 
              </div>

              <div class="input-field col s12">
                <label for="inputEmail1" >Medicamentos</label> 
                <textarea  name="medicaments"  ></textarea>
              </div> 

              <div class="input-field col s12">
                  <select name="status_id"  required>
                    <?php foreach($statuses as $p):?>
                      <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
                    <?php endforeach; ?>
                  </select>
                <label for="inputEmail1" >Estado de la cita</label>  
              </div>

              <div class="input-field col s12">
                  <select name="payment_id"  required>
                    <?php foreach($payments as $p):?>
                      <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
                    <?php endforeach; ?>
                  </select> 
                  <label for="inputEmail1" >Estado del pago</label> 
              </div>

              <div class="input-field col s12">
                <label for="inputEmail1" >Costo</label>  
                  <input type="text"  name="price"  > 
              </div>

              <div class="input-field col s12"> 
                  <button type="submit" class="btn btn-default">Agregar Cita</button> 
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>