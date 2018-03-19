<?
session_start();
if($_SESSION['uname']!=null){
     
?>

<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Strongly Typed by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="index.html">Juega con la Noticia</a></h1>
							<p>Una pagina destinada a noticas Android </p>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a class="icon fa-home" href="index.php"><span>Inicio</span></a></li>
									<li>
										<a href="#" class="icon fa-bar-chart-o"><span>Presioname</span></a>
										<ul>
											<li><a href="registro.php">Iniciar sesion</a></li>
											<li><a href="crearcuenta.php">crear cuenta</a></li>
											<li><a href="cerra.php">cerrar Sesion</a></li>
											<li><a href="form.php">Agregar nota</a></li>
											
										</ul>
									</li>
									<li><a class="icon fa-cog" href="left-sidebar.html"><span>Acerca de</span></a></li>
									
								</ul>
							</nav>

					</div>
				</div>

			<!-- Features -->
				<div id="features-wrapper">
					<section id="features" class="container">
						<header>
							<h2>Hola  <strong><? echo $_SESSION['uname']?></strong>!</h2>

						</header>
						<div class="row">
							
							
<table id="myTable">
  <tr class="header">
    <th style="width:6%;">ID</th>  
    <th style="width:12%;">Titulo</th>
    <th style="width:20%;">Descripcion</th>
    <th style="width:12%;">Fecha</th>
      
    <th style="width:13%;">Remover</th>
      <th style="width:12%;">Editar</th>
  </tr>
<?
    require_once('conexion.php');
    $con=new mysqli(servidorbd,usuariobd,psw,nombrebd);
        
        if($con->connect_error)
        {
            echo 'Error'.$con->connect_error;
        }
        $sql="SELECT * FROM efemerides_completas";
        $result=$con->query($sql);

        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $html="<tr id='".$row['id']."'>";
                $html.="<td>".$row['id']."</td>";
                $html.="<td>".$row['titulo']."</td>";
                $html.="<td>".$row['contenido']."</td>";
                $html.="<td>".$row['fecha']."</td>";
                
                //$html.="<td><a href='formefe.php?id=".$row['id']."' ><img src='img/eraser.svg' title='Eliminar' width='15%'/></a></td>";
                $html.="<td><a href='#' onclick='eliminar(".$row['id'].")' >Eliminar</a></td>";
                
                $html.="<td><a href='form.php?id=".$row['id']."' >Editar</a></td>";
                
                
                $html.="</tr>";
                echo $html;
            }
            $con->close();
        }else
        {
            $con->close();
            echo '<h2>No hay informacion</h2>';
        }
    
?>
 
  
</table>

<script type="application/javascript" src="js/jquery-3.2.1.min.js">
</script>
<script>
    //http://librosweb.es/libro/fundamentos_jquery/capitulo_7/metodos_ajax_de_jquery.html
    $(document).ready(
        function(){
         //alert('Hola Jquery');
            $("#mensajes").hide();
        });
    
    function eliminar(info)
    {
        //alert('Dato seleccionado'+info);
        $.ajax({
            url: "del.php",
            data: {id:info},
            type: 'GET',
            dataType: 'text',
            success: function(response){
                //alert(response);
                //location.reload();
                $("#"+info).remove();
                $("#mensajes").show();
                $("#mensajes").html(response);
                $("#mensajes").fadeOut(2000);
                
            }
        });
    }
</script>	
</div>
</section>
</div>
</div>

		
			
				<div id="footer-wrapper">
					<div id="footer" class="container">
						<header>
							<h2>Questions or comments? <strong>Get in touch:</strong></h2>
						</header>
						<div class="row">
							<div class="6u 12u(mobile)">
								<section>
									<form method="post" action="#">
										<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input name="name" placeholder="Name" type="text" />
											</div>
											<div class="6u 12u(mobile)">
												<input name="email" placeholder="Email" type="text" />
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<textarea name="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<a href="#" class="form-button-submit button icon fa-envelope">Send Message</a>
											</div>
										</div>
									</form>
								</section>
							</div>
							<div class="6u 12u(mobile)">
								<section>
									<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phaselamet
									mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur
									leo nibh, rutrum eu malesuada.</p>
									<div class="row">
										<div class="6u 12u(mobile)">
											<ul class="icons">
												<li class="icon fa-home">
													1234 Somewhere Road<br />
													Nashville, TN 00000<br />
													USA
												</li>
												<li class="icon fa-phone">
													(000) 000-0000
												</li>
												<li class="icon fa-envelope">
													<a href="#">info@untitled.tld</a>
												</li>
											</ul>
										</div>
										<div class="6u 12u(mobile)">
											<ul class="icons">
												<li class="icon fa-twitter">
													<a href="#">@untitled-tld</a>
												</li>
												<li class="icon fa-instagram">
													<a href="#">instagram.com/untitled-tld</a>
												</li>
												<li class="icon fa-dribbble">
													<a href="#">dribbble.com/untitled-tld</a>
												</li>
												<li class="icon fa-facebook">
													<a href="#">facebook.com/untitled-tld</a>
												</li>
											</ul>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="links">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
	<?
}
else
    header("Location: /youtube/registro.php");
?>
</html>