<?php

session_start();
include "conn.php"; //ho un altro file che si chiama config.php dove ho inserito i dati per fare la connessione al DB


if(!isset($_SESSION["id"])){
    echo 'non connesso';
  //  header("Location: accessoVersioni.php");
}
$id= $_SESSION["id"];
$username= $_SESSION["userid"];
$sql= "SELECT id, userid FROM persone WHERE id = '$id'"; //per specificare l'id dell'alunno
$risultati = mysqli_query($conn, $sql);
$row = $risultati->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Allarmi-Color Light Control</title>
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
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
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
    <a href="paginainiziale.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i class="fa fa-home"></i><b>CCL</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><i class="fa fa-home"></i><b> Color Control </b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
     <ul class="nav navbar-nav"  id="orizzontale"> 
	<div class="m"><a href ="paginainiziale.php" class="menu"> Pagina Iniziale</a> </div>
	
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
              <img src="dist/img/img_avatar2.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo ($row['userid']);?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/img_avatar2.png" class="img-circle" alt="User Image">

                <p>
                                  <input id="userid" type="hidden" value="<?php echo ($row['userid']);?>"/>
									<h1 id="userid">Ciao <?php echo ($row['userid']);?>!</h1>
                                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
               <!-- il bianco tra Member sinc e i pulsanti profile e sign out
              </li>
              Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat text-center">Profilo</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Scollegati</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class=" glyphicon glyphicon-text-size"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
<div class="content-wrapper1" >
    <!-- Content Header (Page header) -->
   <section class="content-header">
	  <div class="col-lg-3 col-xs-3">
          <!-- small box -->
          <div class="small-box bg-yellow">
           
		   <div class="inner">
		    <a href="light.php">
              <h3 class="bianco"> Luci</h3>

              <p  class="bianco">Controllo</p>
            </div>
            <div class="icon2">
              <i class="ion-ios-lightbulb-outline"></i>
            </div>
           
          </a>
		  </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-3">
          <!-- small box -->
          <div class="small-box bg-red2">
            <div class="inner">
			<a href="allarmi.php">
              <h3  class="bianco">Allarmi</h3>

              <p  class="bianco">Impostazioni</p>
            </div>
            <div class="icon2">
              <i class="ion-ios-clock-outline"></i>
            </div>
           
          </a>
		  </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-3">
          <!-- small box -->
          <div class="small-box  bg-aqua2">
            <div class="inner">
			<a href="pill.php">
              <h3  class="bianco">Medicine</h3>

              <p  class="bianco"> Organizzazione </p>
            </div>
            <div class="icon2">
              <i class="ion-heart"></i>
            </div>
            
          </a></div>
        </div>
        <!-- ./col -->
       
			 <div class="col-lg-3 col-xs-3">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
 <a href="appuntamenti.php">             
			 <h3  class="bianco">Calendario</h3>

              <p  class="bianco"> Organizzazione</p>
            </div>
            <div class="icon2">
              <i class="ion-ios-calendar-outline"></i>
            </div>
            
          </a></div>
        </div>
	

    </section>
	<br>
	<br>
	
	
      <!-- Small boxes (Stat box) -->
      
	   
	   <div class="row">
	    <h1 class="h1m">
         
        <strong>Pannello Controllo Allarmi</strong>
      </h1>
	 
	</div><!-- /.row -->
	   

  <!-- Content Wrapper. Contains page content -->
   <section class="content">
     
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        
       

         

          <section class="col-lg-10 ">   

                <!-- general form elements -->
        
		<div class="container-fluid">
		
		<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Allarmi attivi Medicine</h3>

        </div>
        <div class="box-body">
        
        
		
	 
          
	
	
   <table class="table table-striped">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Medicine</th>
				  
                  <th>Attivo/Sospeso</th>
                  <th style="width: 40px">Colore Luce</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Aspirina</td>
                  <td>
                    
                      <input type="checkbox" data-toggle="toggle" data-on="Attivo" data-off="Sospeso">
					
                   
                  </td>
                  <td>
				<input type="color" name="favcolor" value="#00ffff">
				  </td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Acetadote</td>
                  <td>
                    <input type="checkbox" data-toggle="toggle" data-on="Attivo" data-off="Sospeso">
                  </td>
                  <td><input type="color" name="favcolor" value="#ff0450"></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Atropine</td>
                  <td>
                    <input type="checkbox" data-toggle="toggle" data-on="Attivo" data-off="Sospeso">
                  </td>
                  <td><input type="color" name="favcolor" value="#00ff00"></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Donepezil</td>
                  <td>
                    <input type="checkbox" data-toggle="toggle" data-on="Attivo" data-off="Sospeso">
                  </td>
                  <td><input type="color" name="favcolor" value="#0000ff"></td>
                </tr>
				<tr>
                  <td>5.</td>
                  <td>Cortisone</td>
                  <td>
                   <input type="checkbox" data-toggle="toggle" data-on="Attivo" data-off="Sospeso">
                  </td>
                  <td><input type="color" name="favcolor" value="#ffff00"></td>
                </tr>
              </tbody></table>
	
      
	  
        
          <!-- /.box -->
 </div>      
</div>

		<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Allarmi attivi Appuntamenti</h3>

        </div>
        <div class="box-body">
        
        
		
	 
          
	
	
   <table class="table table-striped">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Appuntamenti</th>
				  
                  <th>Attivo/Sospeso</th>
                  <th style="width: 40px">Colore Luce</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Medico</td>
                  <td>
                    
                      <input type="checkbox" data-toggle="toggle" data-on="Attivo" data-off="Sospeso">
					
                   
                  </td>
                  <td>
				<input type="color" name="favcolor" value="#00ffff">
				  </td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Cena con Luca</td>
                  <td>
                    <input type="checkbox" data-toggle="toggle" data-on="Attivo" data-off="Sospeso">
                  </td>
                  <td><input type="color" name="favcolor" value="#ff0450"></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Incontro Lucia</td>
                  <td>
                    <input type="checkbox" data-toggle="toggle" data-on="Attivo" data-off="Sospeso">
                  </td>
                  <td><input type="color" name="favcolor" value="#00ff00"></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Fisioterapista</td>
                  <td>
                    <input type="checkbox" data-toggle="toggle" data-on="Attivo" data-off="Sospeso">
                  </td>
                  <td><input type="color" name="favcolor" value="#0000ff"></td>
                </tr>
				<tr>
                  <td>5.</td>
                  <td>Asl</td>
                  <td>
                   <input type="checkbox" data-toggle="toggle" data-on="Attivo" data-off="Sospeso">
                  </td>
                  <td><input type="color" name="favcolor" value="#ffff00"></td>
                </tr>
              </tbody></table>
	
      
	  
        
          <!-- /.box -->
 </div>      
</div>
</div>
</div>
</div>
</div>


    </section>
	
       
        
        
     
	
	
	
	
	
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <footer class="main-footer1">
  
    <div class="freccias"><a href="light.php"><i class="fa fa-arrow-left" style="font-size:36px;color:white"></i></a></div>
	<div class="frecciad"><a href="pill.php"><i class="fa fa-arrow-right" style="font-size:36px;color:white"></i></a></div>
   
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
     
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        
        <!-- /.control-sidebar-menu -->

       
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
       
         

         

          

         

          

          

          

          
       
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
 <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>


<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Enabled',
      off: 'Disabled'
    });
  })
</script>
 
</body>
</html>
