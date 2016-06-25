<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CITAS MEDICAS</title>

    <!-- Bootstrap core CSS -->
    <link href="res/bootstrap3/css/bootstrap.css" rel="stylesheet">
    <link href="res/materialize/css/materialize.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <link rel="stylesheet" href="fonts/css/font.css">
    <script src="js/jquery-1.10.2.js"></script>
    <script src='res/js/moment.min.js'></script>
    <?php if(isset($_GET["view"]) && $_GET["view"]=="home"):?>
    <link href='res/fullcalendar.min.css' rel='stylesheet'>
    <link href='res/fullcalendar.print.css' rel='stylesheet' media='print'>
    <script src='res/fullcalendar.min.js'></script>
    <?php endif; ?>

  </head>

  <body>
    <div class="row s12 l12 no-margin">
        <?php 
          $u = null ;
          if(Session::getUID()!=""):
            $u = UserData::getById(Session::getUID());
            $user = $u->name."".$u->lastname;
        ?> 
       <div class="col l2">  
        <ul id="slide-out" class="side-nav fixed">
          <li class="logo">
            <a   href="index.php?view=home" id="logo-container">
                <img width="125px" style="padding:0.7rem 0 0 0 ;" src="img/logo-gohan-line.png" />
            </a>
          </li>
          <li><a class="waves waves-effect" href="index.php?view=home"><i class="az-home"></i> Inicio</a></li>
          <li><a class="waves waves-effect" href="index.php?view=reservations"><i class="az-calendar3"></i> Citas</a></li>
          <li><a class="waves waves-effect" href="index.php?view=pacients"><i class="az-wc"></i> Pacientes</a></li>
          <li><a class="waves waves-effect" href="index.php?view=medics"><i class="az-user-tie"></i> Medicos</a></li>
          <li><a class="waves waves-effect" href="index.php?view=categories"><i class="az-books"></i> Areas Medicas</a></li>
          <li><a class="waves waves-effect" href="index.php?view=reports"><i class="az-stats-dots"></i> Reportes</a></li>
          
        </ul> 
        <a href="#" data-activates="slide-out" class="button-collapse"><span class="az-menu"></span></a>
 
      </div> 
       
      <div class="col l10 s12 m12 no-padding">
        <div class="perfil">
          <div class="cont-img">
            <img src="img/user.jpg">
          </div> 
          <ul>
              <?php if($u->is_admin):?> 
              <li><a href="index.php?view=users"><i class="az-user"></i> Usuarios </a></li>
              <?php endif;?>
              <li><a href="index.php?view=configuration"><i class="az-equalizer"></i> Configuracion</a></li>
              <li><a href="logout.php"><i class="az-exit"></i> Salir</a></li>
              
            </ul>
        </div> 
        <?php else:?> 
      <?php endif;?> 
        <div class="padding">
          
            
            <?php 
         
              View::load("login");

            ?>  
          </div>
      </div> 
    </div>

    <script src="res/bootstrap3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="res/materialize/js/materialize.js"></script>
    <script type="text/javascript" src="res/general/js/general.js"></script>
    <!--DATETIMEPICKER-->
    <script type="text/javascript" src="res/bootstrap3/js/bootstrap-datetimepicker.js"></script>
    <link rel="stylesheet" href="res/bootstrap3/css/bootstrap-datetimepicker.css" />
    
  </body>
</html>
