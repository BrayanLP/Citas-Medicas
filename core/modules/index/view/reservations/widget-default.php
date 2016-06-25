<h1>Citas</h1>
<br>
<div class="cont-total">
<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="reservations">
        <?php
$pacients = PacientData::getAll();
$medics = MedicData::getAll();
        ?>

  	<div class="input-field col s6 m6 l2">  
		  <label >Palabra Clave</label>	
		  <input type="text" name="q" value="<?php if(isset($_GET["q"]) && $_GET["q"]!=""){ echo $_GET["q"]; } ?>" class="form-control"  > 
    </div>
    <div class="input-field col s6 m6 l3">  
			<select name="pacient_id"  >
			<option value="">Buscar Paciente</option>
			  <?php foreach($pacients as $p):?>
			    <option value="<?php echo $p->id; ?>" <?php if(isset($_GET["pacient_id"]) && $_GET["pacient_id"]==$p->id){ echo "selected"; } ?>><?php echo $p->id." - ".$p->name." ".$p->lastname; ?></option>
			  <?php endforeach; ?>
			</select>  		
    </div>
    <div class="input-field col s6 m6 l3"> 
    		<select name="medico_id"  >  
			<option value="">Buscar Médico</option>
			  <?php foreach($medics as $p):?>
			    <option value="<?php echo $p->id; ?>" <?php if(isset($_GET["medic_id"]) && $_GET["medic_id"]==$p->id){ echo "selected"; } ?>><?php echo $p->id." - ".$p->name." ".$p->lastname; ?></option>
			  <?php endforeach; ?>
			</select>  
    </div>
    <div class="input-field col s6 m6 l2"> 
    	<input type="date" name="date_at" value="<?php if(isset($_GET["date_at"]) && $_GET["date_at"]!=""){ echo $_GET["date_at"]; } ?>" class="form-control" placeholder="Palabra clave"> 
    </div>

    <div class="input-field col s6 m6 l2">
    <button class="btn btn-primary btn-block">Buscar</button>
    </div> 
</form>
<br>
<div class="cont-total">
		<?php
$users= array();
if((isset($_GET["q"]) && isset($_GET["pacient_id"]) && isset($_GET["medic_id"]) && isset($_GET["date_at"])) && ($_GET["q"]!="" || $_GET["pacient_id"]!="" || $_GET["medic_id"]!="" || $_GET["date_at"]!="") ) {
$sql = "select * from reservation where ";
if($_GET["q"]!=""){
	$sql .= " title like '%$_GET[q]%' and note like '%$_GET[q] %' ";
}

if($_GET["pacient_id"]!=""){
if($_GET["q"]!=""){
	$sql .= " and ";
}
	$sql .= " pacient_id = ".$_GET["pacient_id"];
}

if($_GET["medic_id"]!=""){
if($_GET["q"]!=""||$_GET["pacient_id"]!=""){
	$sql .= " and ";
}

	$sql .= " medic_id = ".$_GET["medic_id"];
}



if($_GET["date_at"]!=""){
if($_GET["q"]!=""||$_GET["pacient_id"]!="" ||$_GET["medic_id"]!="" ){
	$sql .= " and ";
}

	$sql .= " date_at = \"".$_GET["date_at"]."\"";
}

		$users = ReservationData::getBySQL($sql);

}else{
		$users = ReservationData::getAll();

}
		if(count($users)>0){
			// si hay usuarios
			?>
			<table class="responsive-table table table-bordered table-hover">
			<thead>
			<th>Asunto</th>
			<th>Paciente</th>
			<th>Medico</th>
			<th>Fecha</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				$pacient  = $user->getPacient();
				$medic = $user->getMedic();
				?>
				<tr>
				<td><?php echo $user->title; ?></td>
				<td><?php echo $pacient->name." ".$pacient->lastname; ?></td>
				<td><?php echo $medic->name." ".$medic->lastname; ?></td>
				<td><?php echo $user->date_at." ".$user->time_at; ?></td>
				<td style="width:130px;">
				<a href="index.php?view=editreservation&id=<?php echo $user->id;?>" class="btn-funct"><span class="az-mode_edit"></span></a>
				<a href="index.php?action=delreservation&id=<?php echo $user->id;?>" class="btn-funct"><span class="az-delete"></span></a>
				</td>
				</tr>
				<?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay pacientes</p>";
		}


		?>
</div>
 <?php 
include 'newreservation.php';
 ?>

<!--BOTON RESERVACION-->
<div class="fixed-action-btn vertical" style="bottom: 45px; right: 24px;">
	<a class="btn-floating btn-large red">
		<span class="az-menu6"></span>
	</a>
	<ul>
		<li><a class="btn-floating" href="./index.php?view=oldreservations" alt="Paciente Antiguo" title="Paciente Antiguo"><span class="az-users"></span></a></li>
		<li><a class="btn-floating" href="report/clients-word.php"  alt="Descargar Word" title="Descargar Word"><span class="az-file_download"></span></a></li>
		<li><button class="btn-floating" data-toggle="modal" data-target=".bd-example-modal-lg" alt="Nuevo Paciente" title="Nuevo Paciente"><span class="az-user-plus"></span></button></li>
	</ul>
</div>
</div>


 