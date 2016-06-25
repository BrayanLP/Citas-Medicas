 
		<h1>Categorias</h1>
		<br>
		<div class="cont-total">
		<?php

		$users = CategoryData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<td style="width:130px;">
				<a href="index.php?view=editcategory&id=<?php echo $user->id;?>" class="btn-funct"><span class="az-mode_edit"></span></a> 
				<a href="index.php?view=delcategory&id=<?php echo $user->id;?>" class="btn-funct"><span class="az-delete"></span></td>
				</tr>
				<?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay Categorias</p>";
		}


		?>

 <?php 
include 'newcategory.php';
 ?>

 <!--BOTON RESERVACION-->
<div class="fixed-action-btn vertical" style="bottom: 45px; right: 24px;">
	<a class="btn-floating btn-large red">
		<span class="az-menu6"></span>
	</a>
	<ul> 
		<li><button class="btn-floating" data-toggle="modal" data-target=".bd-example-modal-lg" alt="Nuevo Categoria" title="Nuevo Categoria"><span class="az-books"></span></button></li>
	</ul>
</div>

</div>
