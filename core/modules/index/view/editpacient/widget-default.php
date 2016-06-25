<?php $user = PacientData::getById($_GET["id"]);?>
 
	<h1>Editar Paciente</h1>
	<br>
  <div class="cont-total">
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatepacient" role="form">


  <div class="input-field col s12 m6 l6">
    <label for="inputEmail1">Nombre*</label> 
      <input type="text" name="name" value="<?php echo $user->name;?>"  id="name" >
  </div>

  <div class="input-field col s12 m6 l6">
    <label for="inputEmail1">Apellido*</label>
      <input type="text" name="lastname" value="<?php echo $user->lastname;?>" required  id="lastname">
  </div>

  <div class="input-field col s6 m3 l3"> 
     <p>
      <input type="radio" name="gender" id="test2" required <?php if($user->gender=="h"){ echo "checked"; }?> value="h"> 
      <label for="test2">Hombre</label>
    </p>
  </div>
   <div class="input-field col s6 m3 l3"> 
     <p>
      <input type="radio"  name="gender" id="test3" required <?php if($user->gender=="m"){ echo "checked"; }?> value="m"> 
      <label for="test3">Mujer</label>
    </p>  
  </div>

  <div class="input-field col s12 m6 l6"> 
      <label for="day_of_birth" class="">Birthdate</label>
      <input type="date" class="datepicker" name="day_of_birth"  value="<?php echo $user->day_of_birth; ?>"  id="address1">
  </div>

  <div class="input-field col s12 m6 l6">
    <label for="inputEmail1">Direccion*</label> 
      <input type="text" name="address" value="<?php echo $user->address;?>" required id="username">
  </div>

  <div class="input-field col s12 m6 l6">
    <label for="inputEmail1">Email*</label>
      <input type="text" name="email" value="<?php echo $user->email;?>"  id="email" >
  </div>

  <div class="input-field col s12 m6 l6">
    <label for="inputEmail1">Telefono</label>
      <input type="text" name="phone"  value="<?php echo $user->phone;?>"   id="inputEmail1">
  </div>

  <div class="input-field col s12 m6 l6">
    <label for="inputEmail1">Enfermedad</label>
      <textarea name="sick" id="sick"><?php echo $user->sick;?></textarea>
  </div>

  <div class="input-field col s12 m6 l6">
    <label for="inputEmail1">Medicamentos</label>
      <textarea name="medicaments"  id="sick"><?php echo $user->medicaments;?></textarea>
  </div>

  <div class="input-field col s12 m6 l6">
    <label for="inputEmail1">Alergia</label>
      <textarea name="alergy"  id="sick" ><?php echo $user->alergy;?></textarea>
  </div>
  <div class="input-field col s12 m12 l12"> 
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Paciente</button>
  </div>
  <div class="input-field col s12 ">
  <p class="alert alert-info">* Campos obligatorios</p>
  </div>
</form>
	</div>
</div>