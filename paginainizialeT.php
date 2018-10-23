
<?php

session_start();
include "conn.php"; //ho un altro file che si chiama config.php dove ho inserito i dati per fare la connessione al DB


if(!isset($_SESSION["id"])){
    echo 'non connesso';
    //header("Location: accessoVersioni.php");
}
$id= $_SESSION["id"];
$username= $_SESSION["userid"];
$sql= "SELECT id, userid FROM persone WHERE id = '$id'"; //per specificare l'id dell'alunno
$risultati = mysqli_query($conn, $sql);
$row = $risultati->fetch_assoc();



$id_utente = $id;
	$sql="SELECT nome,dose,pill,quando,timepicker,dataI,dataF FROM medicine WHERE id_utente=  '$id'";
		
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

?>




<!DOCTYPE html>
<html lang="IT">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pagina Iniziale-Color Light Control</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

   
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type= "text/css" href="css1.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins-->
        
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  

   

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
            
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
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
                            
                            <li class="user-header">
                                <img src="dist/img/img_avatar2.png" class="img-circle" alt="User Image">

                                <p>
                                  <input id="userid" type="hidden" value="<?php echo ($row['userid']);?>"/>
									<h1 id="userid">Ciao <?php echo ($row['userid']);?>!</h1>
                                </p>
                            </li><!-- dropdown-menu -->
                          
                    <li class="user-body">
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat text-center">Profilo</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Scollegati</a>
                                </div>
                            </li>
                        </ul><!--dropdown-menu-->
                    </li><!--user-body-->
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class=" glyphicon glyphicon-text-size"></i></a>
                    </li>
					</li> <!---dropdown user user-menu-->
                </ul>
            </div> <!--navbar-custom-menu-->
        </nav>
    </header>
    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper1" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <a href="paginainizialeT.php"  class="titolo"><i class="fa fa-home"></i>Pagina Inziale</a>
                <small>Pannello di controllo</small>
            </h1>

        </section> <!--- content-header--->
        
      
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row"> 

                <div class="col-lg-3 col-xs-6">
                  
                    <div class="small-box bg-purple2">

							<div class="inner">
                            <a href="lightT.php">
                                <h3 class="bianco"> Luci</h3>
                                <p  class="bianco">Controllo</p>
							</div><!--inner-->
                        <div class="icon1">
                            <i class="ion-ios-lightbulb-outline"></i>
                        </div>
                        <a href="lightT.php" class="small-box-footer1">Aggiungi luci <i class="fa fa-arrow-circle-right"></i></a>
                        </a>
                    </div><!--small-box bg-yellow-->
                </div> <!-- col-lg-3 col-xs-6-->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red2">
                        <div class="inner">
                            <a href="allarmiT.php">
                                <h3  class="bianco">Allarmi</h3>

                                <p  class="bianco">Impostazioni</p>
                        </div>
                        <div class="icon1">
                            <i class="ion-ios-clock-outline"></i>
                        </div>
                        <a href="allarmiT.php" class="small-box-footer1">Aggiungi allarme<i class="fa fa-arrow-circle-right"></i></a>
							</a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box  bg-aqua2">
                        <div class="inner">
                            <a href="pillT.php">
                                <h3  class="bianco">Medicine</h3>

                                <p  class="bianco"> Organizzazione </p>
                        </div>
                        <div class="icon1">
                            <i class="ion-heart"></i>
                        </div>
                        <a href="pillT.php" class="small-box-footer1">Aggiungi medicina <i class="fa fa-arrow-circle-right"></i></a>
                        </a></div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-blu">
                        <div class="inner">
                            <a href="appuntamentiT.php">
                                <h3  class="bianco">Calendario</h3>

                                <p  class="bianco"> Organizzazione</p>
                        </div>
                        <div class="icon1">
                            <i class="ion-ios-calendar-outline"></i>
                        </div>
                        <a href="appuntamentiT.php" class="small-box-footer1">Aggiungi evento <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                
            </div> <!-- /.row -->
          
		  
		  
		  
		  
<div class="row">
               
                <div class="box1" >
                    <div class="testo" >SE sono le 23:30 E sono sdraito in camera da letto E le luci della cucina sono ancora accese ALLORA spegni le luci</div>
                </div>
                

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
		
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					
					
					<td>'.$row['nome'].'</td>
					<td>'.$row['dose'].'</td>
					<td>'.$row['pill'].'</td>
					<td>'.$row['quando'].'</td>
					<td>'.$row['timepicker'].'</td>
					<td>'.$row['dataI'].'</td>
					<td>'.$row['dataF'].'</td>
					
					
				</tr>';
			
			$no++;
		}
		
		
 ?> 
			</tbody>
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
       

	
	</section> <!-- col-lg-10-->


 </div><!--row LASCIALO QUI-->
 </section><!-- content -->

      
    </div><!-- /.content-wrapper -->
	
	
    <footer class="main-footer2">

        <div class="freccias"><a href="paginainizialeT.php"><i class="fa fa-arrow-left" style="font-size:36px;color:white"></i></a></div>
        <div class="frecciad"><a href="lightT.php"><i class="fa fa-arrow-right" style="font-size:36px;color:white"></i></a></div>

    </footer>

    <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  
<style>
.bottone1{
        font-size:18px !important;
        background-color: white !important;
        color:black !important;
		margin-left: 1em !important;
		margin-top:2em !important;}
</style>	
<button type="button" onclick="resizeText(1)" class="bottone1">Allarga</button>
<button type="button" onclick="resizeText(-1)" class="bottone1">Diminuisci</button>

<script>
function resizeText(multiplier) {
  if (document.body.style.fontSize == "") {
    document.body.style.fontSize = "1.0em";
  }
  document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + "em";
}

$("plustext").addEvent("click", function() {resizeText(1);});
$("minustext").addEvent("click", function() {resizeText(-1);});
</script>

<!--
<button type="button" onclick="Ingiallisci()">Ingiallisci</button>
 
<script>
function Ingiallisci() {
     //document.box1.classList.add('giallo');
	 document.body.style.backgroundColor = "red";
	 document.getElementByClassName("nav").style.backgroundColor = "lightblue";

	 
	 
}
</script>
 <input type="range" id="opacity-slider" min=".4" max="10" step=".01" value="1">
 <script>
 document.getElementById('opacity-slider').addEventListener('input', function (e) {
	//document.body.style.opacity = this.value;
 //document.body.style.filter = "contrast(" + this.value + "%)";
 //document.getElementsById("1").style.filter="contrast(" + this.value + "%)";
 //document.getElementsById("1").style.opacity = this.value;
	
});
</script>







<div>
    <ul>
        <li><a>Font</a>
			<div class="slidecontainer">
			<input type="range" min="1" max="100"  step ="1" value="50" class="checked" id="font">

            
        </li>
        <li><a>Brightness</a>
<input type="range" min="1" max="100" value="50" step ="1" class="checked" id="brightness">
            
        </li>
        <li><a>Contrast</a>
<input type="range" min="1" max="100" value="50"  step ="1" class="checked" id="contrast">
            
        </li>
    </ul>
	</div>
</div>
<script>
$(document).ready(function () {
    $("ul").on("click", "a", function () {
        $(this).next(".checked").toggle();
    });
    $(".checked").each(function () {
        $(this).slider({
            orientation: "vertical",
            min: 1,
            step: parseFloat($(this).attr("step")),
            max: parseInt($(this).attr("max")),
            slide: function (event, ui) {
                var value = ui.value;
                var type = $(this).attr("id");
                console.log(type)
                switch (type) {
                    
                    case "brightness":
                        {
                            console.log(value);
                            $(".box1").css("background-color", "rgba(0,0,0," + value + ")");
                            break;
                        }
                    case "contrast":
                        {
                            //Your code
                            break;
                        }
                }
            }

        });
    })
});
</script>
-->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
     
    </ul>
    <!-- Tab panes -->
    
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




<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->


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
</body>
</html>
