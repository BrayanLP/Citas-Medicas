<?php 
$reservation = ReservationData::getById($_GET["id"]);
$pacients = PacientData::getAll();
$medics = MedicData::getAll();
$statuses = StatusData::getAll();
$payments = PaymentData::getAll();
?>
 
	   <h1>Editar Cita</h1> 
    <div class="cont-total">
    <form class="form-horizontal" role="form" method="post" action="./?action=updatereservation">
      <div class="input-field col s12 l6 m6">
        <label for="inputEmail1">Asunto</label>
          <input type="text" name="title" value="<?php echo $reservation->title; ?>" required id="inputEmail1" >
      </div>


      <div class="input-field col s12 l6 m6">
        <select name="pacient_id"   required>
        <option value="">-- SELECCIONE --</option>
          <?php foreach($pacients as $p):?>
            <option value="<?php echo $p->id; ?>" <?php if($p->id==$reservation->pacient_id){ echo "selected"; }?>><?php echo $p->id." - ".$p->name." ".$p->lastname; ?></option>
          <?php endforeach; ?>
        </select>
        <label for="inputEmail1">Paciente</label>
      </div>


      <div class="input-field col s12 l6 m6">
        <select name="medic_id" required>
        <option value="">-- SELECCIONE --</option>
          <?php foreach($medics as $p):?>
            <option value="<?php echo $p->id; ?>" <?php if($p->id==$reservation->medic_id){ echo "selected"; }?>><?php echo $p->id." - ".$p->name." ".$p->lastname; ?></option>
          <?php endforeach; ?>
        </select> 
        <label for="inputEmail1">Medico</label>
      </div>

      <div class="input-field col s12 l3 m3">
        
          <input type="date" name="date_at" value="<?php echo $reservation->date_at; ?>" required id="inputEmail1">
           
      </div>
      <div class="input-field col s12 l3 m3">
        
           <input type="time" name="time_at" value="<?php echo $reservation->time_at; ?>" required id="inputEmail1" >

      </div>

      <div class="input-field col s12 l6 m12">
        <label for="inputEmail1">Nota</label>
        <textarea name="note" ><?php echo $reservation->note;?></textarea>
     
      </div>

      <div class="input-field col s12 l6 m12">
        <label for="inputEmail1">Enfermedad</label>
        <textarea name="sick"  ><?php echo $reservation->sick;?></textarea>
      </div>

      <div class="input-field col s12 l6 m12">
        <label for="inputEmail1">Sintomas</label>
        <textarea name="symtoms"  ><?php echo $reservation->symtoms;?></textarea>
      </div>
      
      <div class="input-field col s12 l6 m12">
        <label for="inputEmail1">Medicamentos</label>
        <textarea name="medicaments"  ><?php echo $reservation->medicaments;?></textarea>
      </div>

      <div class="input-field col s12 l6 m12">
        <select name="status_id" required>
          <?php foreach($statuses as $p):?>
            <option value="<?php echo $p->id; ?>" <?php if($p->id==$reservation->status_id){ echo "selected"; }?>><?php echo $p->name; ?></option>
          <?php endforeach; ?>
        </select>
        <label for="inputEmail1">Estado de la cita</label>
      </div>

      <div class="input-field col s12 l6 m12">
        <select name="payment_id" required>
          <?php foreach($payments as $p):?>
            <option value="<?php echo $p->id; ?>" <?php if($p->id==$reservation->payment_id){ echo "selected"; }?>><?php echo $p->name; ?></option>
          <?php endforeach; ?>
        </select>
        <label for="inputEmail1">Estado del pago</label>
      </div>

      <div class="input-field col s12 l6 m12">
        <label for="inputEmail1">Costo</label>
          <input type="text" value="<?php echo $reservation->price;?>" name="price">
      </div>

      <div class="input-field col s12 l12 m6"> 
        <input type="hidden" name="id" value="<?php echo $reservation->id; ?>">
          <button type="submit" class="btn btn-default">Actualizar Cita</button>
      </div>

    </form>

</div> 