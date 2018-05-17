
<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fitness City - Reservation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
  <style>
            .face {
        background: url(data:image/jpg;base64,<?php echo base64_encode($_SESSION["photo"]);?>);
    display: block;
    background-size:100% 100% ;
    border-radius: 70%;

}

        </style>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                                                <h1 id="fh5co-logo"><a href="Accueil.php">Fit<span>ness</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li>
									<a href="Accueil.php">Accueil</a>
								</li>
								
								<li>
                                    <a href="schedule.php" >Planning</a>
								</li>
                                                                <li>
									<a href="cours.php" class="fh5co-sub-ddown">Cours</a>
									
								</li>
                                                                <li>
                                                                    <a href="tarif.php">Tarifs</a>
								</li>
                                                                <li><a href="entraineurs.php">Entraineurs</a></li>
								<li class="active"><a href="client.php">Espace Client</a></li>
                                                                <li><a href="produits.php">Espace Magasin</a></li>
								
								<li><a href="contact.php">Contact</a></li>
							
                                                                <li><a style="color:whitesmoke"> <u><b>Salut <?php  echo $_SESSION["login"]." !"; ?></u>
                                                                        </b></a></li>
                                                                        
                                 
<li> 
	
									<button class="face" type="button" >
                                                                    <span style="color: transparent;">____</span>
                                                                                                      </button>
									<ul class="fh5co-sub-menu">
									 	<li><a href="signout.php">se deconnecter</a></li>
									 	
									</ul>
								</li>
                                                        
                                                        </ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		<!-- end:fh5co-header -->
		<div class="fh5co-parallax" style="background-image: url(images/client1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Espace Client</h1>
                                                        <p>Réserver</p>
                                                        
                                                       
                                                        <p><h2 style="color:whitesmoke">   </h2></p>
                                                
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
		<!-- end:fh5co-hero -->
		<div id="fh5co-team-section" class="fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
                                                    <form method="post" action="<?php echo"reserv.php?nom=".$_GET["nom"]?>"><h2>Reservation pour le cours <span style="color:green" > <?php echo $_GET["nom"]."</span> sous le nom de <span style=color:green >".$_SESSION["nom"]?></span></h2>
							
                                                    <p> Pour la séance de  : <SELECT name="jour"  id="jour" size="1">
                                                            
                                                                                       
    <?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness city";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * From schedule where cours='".$_GET["nom"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
  echo"time";      
    $time=$row["days"]." de ".$row["begin"]." a ".$row["end"];
     echo $time;  
?>
                                                            <OPTION value='<?php echo $time ."'>".$time."</OPTION>" ?>
<?php }}?>
</SELECT> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" class="btn btn-success" value="Je Reserve">	 </p>
                                                </div></form>
					</div>
				</div>
<?php 

 if(isset($_POST['jour'])) {
     echo $_POST['jour'];
      $servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness city";
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "INSERT INTO reservation (nom_cours, login_client, jour)
VALUES ('".$_GET["nom"]."', '".$_SESSION["login"]."', '".$_POST["jour"]."')";

if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('Reservation est prise en consideration');
window.location='reserver.php';
</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
     
     
     
     
     
     
     
     
 };

?>  '                          
					
				
			</div>
		</div>   <br>
                <div align="center"><span><a href="service_client.php" class="btn btn-send-message">Retour</a></span></div>
                </div>
						</div>
						</div>
         	
            	<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animate-box">
							<h3 class="section-title">A Propos de nous
</h3>
							<p>Chez Fitness, nous croyons que tout le monde devrait avoir la possibilite de profiter d'un style de vie sain et en forme. Nous l'avons donc rendu simple, abordable et pratique pour que chacun puisse atteindre ses objectifs de sante personnels. Que vous soyez un débutant ou un pro, jeune ou vieux, nous sommes la pour tout le monde.</p>
						</div>

						<div class="col-md-4 animate-box">
							<h3 class="section-title">Notre Adresse </h3>
							<ul class="contact-info">
								<li><i class="icon-map-marker"></i>Tunis , Tunisia</li>
								<li><i class="icon-phone"></i>+ 1235 2355 98</li>
								<li><i class="icon-envelope"></i>fitnesscitytn@gmail.com</li>
								<li><i class="icon-globe2"></i>www.yoursite.com</li>
                                                                
							</ul>
						</div>
						<div class="col-md-4 animate-box">
							<h3 class="section-title">Heures d'ouverture : </h3>
							<ul class="contact-info">
								<li>Lundi à Vendredi : 9:00 à 22h00</li>
								<li>Samedi et Dimanche : 9h00 à 19h00</li>
								
                                                                
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</footer>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>