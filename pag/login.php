	<?PHP	
		error_reporting(0);	/*Desactiva cualquier notificacion*/

		if(isset($_POST["enviar"])){

			if(isset($_POST["usuario"])){
				$usuario = $_POST["usuario"];
					
					if(ereg("^[a-zA-Z0-9]", $usuario)){
						if((strlen($usuario)>=4)&&(strlen($usuario)<=10)){

							if(isset($_POST["password"])){
								$password = $_POST["password"];

								if(ereg("^[a-zA-Z0-9]", $password)){

									if((($usuario == jedi)&&($password == 1234))||(($usuario == yoda)&&($password == 4321))){
										session_start();
										$_SESSION["unaVariable"] = "true";
										$_SESSION["usuario"] = $usuario;
										header("Location:miPagina.php"); 
									
									} else {
										echo "El usuario no esta registrado";
										session_destroy();									
										$usuario = $_POST["usuario"];	
											}
								} else {
									echo "La password contiene caracteres invalidos";
								}
							} else {
								echo "Debe ingresar un password";
									}
						} else {
							echo "El usuario debe contener entre 5 y 10 caracteres";
						}
					} else {
						echo "Solo deben ingresarse letras y/o numeros";
					}
			} else {	
				echo "Debe ingresar un usuario";;	
			}			
		}	
	?>


<html>
	<head>
	<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="../js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="../css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!---- animated-css ---->
		<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script type="text/javascript" src="../js/jquery.corner.js"></script> 
		<script src="../js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
		<!---- animated-css ---->
		<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="../js/move-top.js"></script>
		<script type="text/javascript" src="../js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
	<title>Viba Music!</title>
	</head>

<body>
		<div class="bg">
		<!----- start-header---->
		<div class="container">
			<div id="home" class="header wow bounceInDown" data-wow-delay="0.4s">
					<div class="top-header">
						<div class="logo">
							<a href="#">VIBA!</a>
						</div>
						<!----start-top-nav---->
						 <nav class="top-nav">
							<ul class="top-nav">
								<li><a href="..\index.html">Home</a></li>
								<li><a href="fijatevos.php">Fijate vos</a></li>
								<li><a href="nosotros.php">Nosotros</a></li>
								<li class="page-scroll"><a href="singin.php">Sign in</a></li>
							</ul>
							<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!----- //End-header---->

			<!---- banner-info ---->
			<div class="banner-info">
				<div class="container">

				<div class="wow bounceIn login">&nbsp; LOGIN</div>
					<form class="formulario wow bounceIn" data-wow-delay="0.4s" method="POST" action="login.php">
						<h3>Usuario</h3><input type="text" name="usuario" placeholder=" Ingrese el Usuario" size="20"></input></br>
						<h3>Pais</h3><input type="text" name="pais" placeholder=" Ingrese el Pais"></input></br>
						<h3>Provincia</h3><input type="text" name="provincia" placeholder=" Ingrese la Provincia"></input></br>
						<h3>Contraseña</h3><input type="password" name="contraseña" placeholder=" Ingrese la contraseña"></input></br>
						<h3>Repita contraseña</h3><input type="password" name="repitaContraseña" placeholder=" Repita la contraseña"></input></br></br>
						<input class="botonlogin" type="submit" name="enviar" value="Enviar"></input>
					</form>
				
				</div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</body>	
</html>