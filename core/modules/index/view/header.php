      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">BookMedik <sup><small><span class="label label-info">v2.0</span></small></sup> </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
<?php 
$u=null;
if(Session::getUID()!=""):
  $u = UserData::getById(Session::getUID());
?>
         <ul class="nav navbar-nav">
          <li><a href="index.php?view=newreservation"><i class="fa fa-asterisk"></i> Nueva Cita</a></li>
          </ul> 
          <ul class="nav navbar-nav side-nav">
          <li><a href="index.php?view=home"><i class="fa fa-home"></i> Inicio</a></li>
          <li><a href="index.php?view=reservations"><i class="fa fa-calendar"></i> Citas</a></li>
          <li><a href="index.php?view=pacients"><i class="fa fa-male"></i> Pacientes</a></li>
          <li><a href="index.php?view=medics"><i class="fa fa-support"></i> Medicos</a></li>
          <li><a href="index.php?view=categories"><i class="fa fa-th-list"></i> Areas Medicas</a></li>
          <li><a href="index.php?view=reports"><i class="fa fa-area-chart"></i> Reportes</a></li>
          <?php if($u->is_admin):?>
          <li><a href="index.php?view=changelog"><i class="fa fa-filter"></i> Log de cambios </a></li>
          <li><a href="index.php?view=users"><i class="fa fa-users"></i> Usuarios </a></li>
        <?php endif;?>
          </ul>




<?php endif;?>


      <ul class="nav navbar-nav navbar-right navbar-user">
 
      <?php if(Session::getUID()!=""):?>
      <?php 
      $u=null;
      if(Session::getUID()!=""){
        $u = UserData::getById(Session::getUID());
        $user = $u->name." ".$u->lastname;

        }?>
          <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php echo $user; ?> <b class="caret"></b>
              </a>
            <ul class="dropdown-menu">
              <li><a href="index.php?view=configuration">Configuracion</a></li>
              <li><a href="logout.php">Salir</a></li>
            </ul>
          </li>
<?php else:?>
<?php endif; ?>
        </ul>



        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">