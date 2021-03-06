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
							<h1 id="logo"><a href="index.php">Juega con la Noticia</a></h1>
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
											
										</ul>
									</li>
									<li><a class="icon fa-cog" href="left-sidebar.html"><span>Acerca de</span></a></li>
									
								</ul>
							</nav>

					</div>
				</div>

			<!-- Features -->
				<div id='features-wrapper'>
						<header>
							<h2>Noticias de  <strong>Hoy</strong>!</h2>
						</header>
						
							<center>
							<?
						    require_once ('conexion.php');
						    
						    $conn = new mysqli(servidorbd, usuariobd, psw, nombrebd);
						    
						    // Check connection
						    if ($conn->connect_error) {
						        die("Error de conexión: " . $conn->connect_error);
						    } 
						    
						    $sql="SELECT * from efemerides_completas where fecha=CURDATE()";
						    $result = $conn->query($sql);
						    if ($result->num_rows > 0) {
						    
						    while($row = $result->fetch_assoc()) {
						        
						        
						        $html.="<section id='features' class='container'>";
						        $html.="<a href='#' class='image featured'><img src='images/pic01.jpg' alt='' /></a>";
						        
						        $html.="<p> titulo  <strong>".$row['titulo']."</strong> </p>";
								$html.="<p> la fecha es <strong>".$row['fecha']."</strong> </p>";
						        $html.="<p>".utf8_encode($row['contenido'])."</p>";
						        $html.="</section>";
						       
						        echo $html;
						    }
						    } else {
						        echo "0 results";
						    }  
						    
    

							?>
						
								<!-- Feature -->
									

							
							</center>
							
				</div>



			<!-- Banner -->
				<div id="banner-wrapper">
					<div class="inner">
						<section id="banner" class="container">
							<p>este espacio se destina a noticas <strong>anteriores</strong>.<br /></p>
						</section>
					</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div id="main" class="container">
						<div class="row">

							<!-- Content -->
								<div id="content" class="8u 12u(mobile)">

									<!-- Post -->
										<article class="box post">
											<header>
												<h2><a href="#">I don’t want to say <strong>it’s the aliens</strong> ...<br />
												but it’s the aliens.</a></h2>
											</header>
											<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
											<h3>I mean isn't it possible?</h3>
											<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit
											ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris
											sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada
											in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat
											magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros
											consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id
											justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet
											mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique.
											Curabitur leo nibh, rutrum eu malesuada in, tristique at erat.</p>
											<ul class="actions">
												<li><a href="#" class="button icon fa-file">Continue Reading</a></li>
											</ul>
										</article>

									<!-- Post -->
										

								</div>

							<!-- Sidebar -->
								<div id="sidebar" class="4u 12u(mobile)">

									<!-- Excerpts -->
										<section>
											<ul class="divided">
												<li>

													<!-- Excerpt -->
														<article class="box excerpt">
															<header>
																<span class="date">July 30</span>
																<h3><a href="#">Just another post</a></h3>
															</header>
															<p>Lorem ipsum dolor odio facilisis convallis. Etiam non nunc vel est
															suscipit convallis non id orci lorem ipsum sed magna consequat feugiat lorem dolore.</p>
														</article>

												</li>
												<li>

													<!-- Excerpt -->
														<article class="box excerpt">
															<header>
																<span class="date">July 28</span>
																<h3><a href="#">And another post</a></h3>
															</header>
															<p>Lorem ipsum dolor odio facilisis convallis. Etiam non nunc vel est
															suscipit convallis non id orci lorem ipsum sed magna consequat feugiat lorem dolore.</p>
														</article>

												</li>
												<li>

													<!-- Excerpt -->
														<article class="box excerpt">
															<header>
																<span class="date">July 24</span>
																<h3><a href="#">One more post</a></h3>
															</header>
															<p>Lorem ipsum dolor odio facilisis convallis. Etiam non nunc vel est
															suscipit convallis non id orci lorem ipsum sed magna consequat feugiat lorem dolore.</p>
														</article>

												</li>
											</ul>
										</section>

									<!-- Highlights -->

								</div>

						</div>
					</div>
				</div>

			<!-- Footer -->
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
</html>