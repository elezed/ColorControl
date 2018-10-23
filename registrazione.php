<?php
include "conn.php"; //ho un altro file che si chiama config.php dove ho inserito i dati per fare la connessione al DB
?>
<?php
session_start();

if(isset($_POST['submit'])){

	
    $sql = "INSERT INTO persone (userid, email, pass, visione)
    VALUES ('".$_POST["userid"]."','".$_POST["email"]."','".$_POST["pass"]."','".$_POST["visione"]."')";

$result = mysqli_query($conn, $sql); //Esegue la query. I due paramatri sono il database e cosa deve selezionare

//$result = $conn->query($sql); l'ho commentato se no miinseriva i dati due volte
 
 if ($result==1)
 {
	echo 'Registration OK'; 
	header("location: ../Sito/accessoVersioni.php");
  exit();
 }
 else
 {
	 echo'Registration Failed'; 
 }
}

?>

<!DOCTYPE html>
<html lang="it">
  <head>
 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registrazione-Color Light Control</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" type= "text/css" href="css1.css">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<script src='../fullcalendar.min.js'></script
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	
  </head>
  <body class="hold-transition skin-yellow-light sidebar-mini">
<div class="wrapper">
 <header class="main-header">
    <!-- Logo -->
    <div class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i class="fa fa-home"></i><b>CCL</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><i class="fa fa-home"></i><b> Color Control </b></span>
    </div>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
     <ul class="nav navbar-nav"  id="orizzontale"> 
	<div class="m"><a href ="registrazione.php" class="menu"> Registrazione</a> </div>
	<div class="m"><a href ="accessoVersioni.php" class="menu"> Entra</a> </div>
	<div class="m"><a href ="about.html" class="menu"> Informazioni</a> </div>
	
      </ul><div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
        
              
            
            <ul class="dropdown-menu">
              
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
				
                
                 
                  
                  
                </ul>
              </li>
            
            </ul>
        
          
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              
              <!-- Menu Body -->
              <li class="user-body">
               <!-- il bianco tra Member sinc e i pulsanti profile e sign out
              </li>
              Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat text-center">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <body>
  
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<div class="container">
		<form class="form-signin" action="" method= "POST">
		<h1 class="form-signin-heading">Registrazione</h1>
		<label for="userid" class="sr-only">Nome Utente</label>
		<input type="text" name="userid" id="userid" class="form-control" placeholder="Nome Utente" required autofocus>
		<label for="email" class="sr-only">Email</label>
		<input type="email" name="email" id="email" class="form-control" placeholder="Inserire email" required>
		<label for="password" class="sr-only">Password</label>
		<input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
		<label for="visione" >Quali colori ti danno fastidio?</label>
                                                         
																		<select class="form-control" name="visione" id="visione"  >
																		<option value="normale">Nessuno</option>
																		<option value="daltonismo">Rosso/Verde</option>
																		<option value="trinatopia">Verde/Giallo</option>
					
															</select>
														 
		<button class="btn btn-lg btn-primary btn-block" name="submit" id="submit" type="submit">Invia</button>
		</form>
	</div>
	  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	<script src="event_logger/logger.js"></script>
	
  </body>
  
</html>