
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "colorcontrol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php

session_start();
if(!isset($_SESSION["id"])){
	//header("Location: accesso.php");
	echo 'non esiste';
}
//prende la sessione attuale, l'id dell'utente appena loggato
$id= $_SESSION["id"];
$userid= $_SESSION["userid"];
$sql= "SELECT userid  FROM persone WHERE userid = '$userid'"; //per specificare l'id dell'alunno
$risultati = mysqli_query($conn, $sql);
$row = $risultati->fetch_assoc();
?>
 
<?php
 if(isset($_POST['submit'])){
	$data= $_POST["reservation"];
	//echo "<h2>" . $data . "</h2>";
	$data_explode=explode(" - ",$data);
	$dataI = $data_explode[0]; // dataI
	$dataF = $data_explode[1]; // dataF
	$arrayData1 = split("/",$dataI);
	$dataI_ = $arrayData1[2]."-".$arrayData1[0]."-".$arrayData1[1];
	
	$arrayData2 = split("/", $dataF);
	$dataF_ = $arrayData2[2]."-".$arrayData2[0]."-".$arrayData2[1];

		//echo "<h2>" . $dataI . "</h2>";*/
	//	echo "<h2>" . $dataF . "</h2>";
	
	$nome= $_POST["nome"];
	$dose= $_POST["dose"];
	$pill= $_POST["pill"];
	$quando= $_POST["quando"];
	$timepicker= $_POST["timepicker"];
	

 
	
	
	
	//$id lo va a prendere dalla tabella persona
	$id_utente = $id;
	$sql = "INSERT INTO medicine (nome, dose, pill, quando, timepicker, dataI, dataF, id_utente) VALUES ('$nome', '$dose', '$pill', '$quando','$timepicker','$dataI_','$dataF_','$id_utente')";
   // echo $sql;
	$result = mysqli_query($conn,$sql);

	

}



/*$sql = 'SELECT * 
		FROM medicine';*/
	$id_utente = $id;
	$sql="SELECT nome,dose,pill,quando,timepicker,dataI,dataF FROM medicine WHERE id_utente=  '$id'";
		
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Medicine-Color Light Control</title>
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
	
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

    <header class="main-header">
    <!-- Logo -->
    <a href="paginainizialeT.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i class="fa fa-home"></i><b>CCL</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><i class="fa fa-home"></i><b> Color Control </b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
     <ul class="nav navbar-nav"  id="orizzontale"> 
	<div class="m"><a href ="paginainizialeT.php" class="menu"> Pagina Iniziale</a> </div>
	
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
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
  
  <!--- BOX---->
    <!-- Main content -->
    <div class="content-wrapper1" >
   <section class="content-header">
	  <div class="col-lg-3 col-xs-3">
          <!-- small box -->
          <div class="small-box bg-purple2">
           
		   <div class="inner">
		    <a href="lightT.php">
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
			<a href="allarmiT.php">
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
			<a href="pillT.php">
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
          <div class="small-box bg-blu">
            <div class="inner">
 <a href="appuntamentiT.php">             
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
         
        <strong>Pannello Controllo Medicine</strong>
      </h1>
	 
	</div><!-- /.row -->
	   
      <!-- Main row -->
   
        
       

         

          <section class="col-lg-10 ">   

                <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Aggiungi la medicina</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form"  method="POST">
              <div class="boxMedicine">
                <div class="form-group">
                  <label for="MedicineName">Nome Medicina</label>
                  <input type="text" class="form-control" name="nome" placeholder="Inserisci nome della medicina">
                </div>
                <div class="form-group">
                  <label for="Dose">Dose</label>
                  <input type="number" class="form-control" name="dose" placeholder=" es. 50 mg">
                </div>
                
                <div class="form-group">
                  <label>Unità</label>
                  <select class="form-control" name="pill">
                    <option value="pillole">pillole</option>
					<option value="mg">mg</option>
					<option value="cc">cc</option>
					<option value="cc">ml</option>
					<option value="cc">gr</option>
					
                  </select>
                </div>
				
				 <div class="form-group">
                  <label>Quando prenderle:</label>
                  <select class="form-control" name="quando">
				  <option value="prima di colazione">Prima Colazione</option>
				  <option value="dopo colazione">Dopo Colazione</option>
				  <option value="metà mattina">Metà mattina</option>
                   <option value="prima di pranzo">Prima di pranzo</option>
				   <option value="dopo pranzo">Dopo Pranzo</option>
					<option value="pomeriggio">Pomeriggio</option>
					<option value="prima di cena">Prima di cena</option>
					<option value="dopo cena">Dopo Cena</option>
                  </select>
                </div>
			
				
				
				 <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Orario:</label>

                  <div class="input-group">
                    <input type="time" class="form-control timepicker" name="timepicker" id="timepicker" >

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
			   <div class="form-group">
                <label>Data:</label>

                <div class="input-group">
                  <div class="input-group-addon" >
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right"  name="reservation" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
			
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name ="submit" class="btn btn-primary">Aggiungi medicina</button>
              </div>
            </form>
          </div>

    </section>
	
       
        
        
     <section class="col-lg-10 ">    
          
	<div class="box">
            <div class="box-header">
              <h3 class="box-title">Piano delle medicine</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
			  <thead>
                <tr>
				
                  <th>Nome</th>
                  <th>Dose</th>
                  <th>N pillole</th>
				  <th>Quando</th>
				  <th>Orario</th>
				  <th>Data Iniziale</th>
				  <th>Data Finale</th>
                
               
                </tr>
                </thead>
       <tbody>
		<?php
		$no 	= 0;
		//$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			//$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					
					
					<td>'.$row['nome'].'</td>
					<td>'.$row['dose'].'</td>
					<td>'.$row['pill'].'</td>
					<td>'.$row['quando'].'</td>
					<td>'.$row['timepicker'].'</td>
					<td>'.$row['dataI'].'</td>
					<td>'.$row['dataF'].'</td>
					
					
				</tr>';
			//$total += $row['amount'];
			$no++;
		}
		
		/*
		
		
			$data = mysql_query("SELECT nome,dose,pill,quando,timepicker,dataI,dataF FROM medicine WHERE id = '$id_utente'") ;
	
			Print "<table border cellpadding=3>"; 
			while($info = mysql_fetch_array( $data )) 
					{ 
				Print "<tr>"; 
				Print "<th>Nome:</th> <td>".$info['nome'] . "</td> "; 
				Print "<th>Dose:</th> <td>".$info['dose'] . " </td></tr>"; 
				Print "<th>Formato:</th> <td>".$info['pill'] . "</td> "; 
				Print "<th>Quando prenderle:</th> <td>".$info['quando'] . " </td></tr>"; 
				Print "<th>Orario:</th> <td>".$info['timepicker'] . " </td></tr>"; 
				Print "<th>data Iniziale:</th> <td>".$info['dataI'] . "</td> "; 
				Print "<th>Data:</th> <td>".$info['quando'] . " </td></tr>"; 
			} 
			Print "</table>"; */
 ?> 
		</tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

	
	</section>
	
	
	
	
	
	
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <footer class="main-footer2">
  
    <div class="freccias"><a href="allarmiT.php"><i class="fa fa-arrow-left" style="font-size:36px;color:white"></i></a></div>
	<div class="frecciad"><a href="appuntamentiT.php"><i class="fa fa-arrow-right" style="font-size:36px;color:white"></i></a></div>
   
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
<script >
$(function () {
  //Date range picker
    $('#reservation').daterangepicker()({ dateFormat: 'yyyy-mm-dd' })
	 //Timepicker
    $('.timepicker').timepicker()
  })
	
	
	</script>
		


</body>
</html>
