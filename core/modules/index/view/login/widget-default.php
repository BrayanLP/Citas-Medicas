<?php

if(Session::getUID()!=""){
		print "<script>window.location='index.php?view=home';</script>";
}

?>
	<div class="absolute">
		<div class="fondo"></div>
		<div class="degradado"></div>

		<div class="form">
			<!-- <h1>Iniciar Sesión</h1>
			<h1>Registrate</h1> -->
			<form class="row" accept-charset="UTF-8" role="form" method="post" action="index.php?view=processlogin">
				<div class="col s12">
					<img width="150px" src="img/logo-gohan.png">
				</div>
				<div class="col s12">
					<input class="form-control" placeholder="Correo Electronico" name="mail" type="text">
				</div>
				<div class="col s12">
					<input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
				</div>
				<?php if(isset($_COOKIE['password_updated'])):?>
		    		<div class="alert alert-success">
		    		<p><i class='glyphicon glyphicon-off'></i> Se ha cambiado la contraseña exitosamente !!</p>
		    		<p>Pruebe iniciar sesion con su nueva contraseña.</p>

		    		</div>
		    	<?php setcookie("password_updated","",time()-18600);
		    	 endif; ?>		
				<div class="col s12">
					<button class="login">
						<span class="az-check"></span>
					</button>
				</div>
			</form>
		</div>
	</div>
<!-- <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    	<?php if(isset($_COOKIE['password_updated'])):?>
    		<div class="alert alert-success">
    		<p><i class='glyphicon glyphicon-off'></i> Se ha cambiado la contraseña exitosamente !!</p>
    		<p>Pruebe iniciar sesion con su nueva contraseña.</p>

    		</div>
    	<?php setcookie("password_updated","",time()-18600);
    	 endif; ?>
    		<div class="panel panel-primary">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Iniciar Sesion</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="index.php?view=processlogin">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Usuario" name="mail" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-lg btn-primary btn-block" type="submit" value="Iniciar Sesion">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div> -->
