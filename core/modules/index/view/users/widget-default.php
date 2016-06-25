<h1>Lista de Usuarios</h1>
<br>
<div class="cont-total">
		<?php
		/*
		$u = new UserData();
		print_r($u);
		$u->name = "Agustin";
		$u->lastname = "Ramos";
		$u->email = "evilnapsis@gmail.com";
		$u->password = sha1(md5("l00lapal00za"));
		$u->add();


		$f = $u->createForm();
		print_r($f);
		echo $f->label("name")." ".$f->render("name");
		*/
		?>
		<?php

		$users = UserData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>
			<table class="responsive-table table table-bordered table-hover">
			<thead>
			<th>Nombre completo</th>
			<th>Nick</th>
			<th>Email</th>
			<th>Activo</th>
			<th>Admin</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<td><?php echo $user->email; ?></td>
				<td><?php echo $user->username; ?></td>
				<td>
					<?php if($user->is_active):?>
						<i class="glyphicon glyphicon-ok"></i>
					<?php endif; ?>
				</td>
				<td>
					<?php if($user->is_admin):?>
						<i class="glyphicon glyphicon-ok"></i>
					<?php endif; ?>
				</td>
				<td style="width:30px;"><a href="index.php?view=edituser&id=<?php echo $user->id;?>" class="btn-funct"><span class="az-mode_edit"></span></td>
				</tr>
				<?php

			}



		}else{
			// no hay usuarios
		}


		?>
</div>		
 <?php 
 	include 'new-user.php';    
 ?>


<!--BOTON RESERVACION-->
<div class="fixed-action-btn vertical" style="bottom: 45px; right: 24px;">
	<a class="btn-floating btn-large red">
		<span class="az-menu6"></span>
	</a>
	<ul> 
		<li> 
			<button class="btn-floating" data-toggle="modal" data-target=".bd-example-modal-lg" alt="Nuevo Paciente" title="Nuevo Paciente"><span class="az-user-plus"></span></button>
		</li>
	</ul>
</div>

 