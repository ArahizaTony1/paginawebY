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
                                    <li><a class="icon fa-home" href="index.html"><span>Inicio</span></a></li>
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

            
                              
<?
    require_once('conexion.php');
   if(isset($_POST['uname']) && !empty($_POST['uname'])){
        $uname=$_POST['uname'];
        $apellido1=$_POST['ap1'];
        $apellido2=$_POST['ap2'];
        $mail=$_POST['email'];
        $psw=$_POST['psw'];
        
        
        $sql="INSERT INTO administrador (nombre,apellidoP,apeliidoM,correo,contrasena)
        values('$uname','$apellido1','$apellido2','$mail','$psw')";
        $con=new mysqli(servidorbd,usuariobd,psw,nombrebd);
        
        if($con->connect_error)
        {
            echo 'Error'.$con->connect_error;
        }

        $result=$con->query($sql);

        if($result->num_rows>0){

            echo "Redirigir";
            $con->close();
            
            
            

        }else
        {
            $con->close();
            echo 'Revise su usuario o su contrasena';
            session_start();
            $_SESSION['uname']=$uname;
            header("Location: /youtube/crearcuenta.php");
            echo $uname;
        }
    }
    ?>
            <!-- Footer -->

            
                <div id="footer-wrapper">
                    <div id="footer" class="container">
                        <center>
                        <header>
                            <h2>Iniciar sesion <strong>Registrate!!</strong></h2>
                        </header>
                        
                            <div class="6u 12u(mobile)">
                                <section>
                                    <form method="post" action="crearcuenta.php">
                                            <input name="uname" placeholder="nombre" type="text" required />
                                            <br>
                                            <input name="ap1" placeholder="apellido paterno" type="text" required />
                                            <br>
                                            <input name="ap2" placeholder="apellido materno" type="text" required />
                                            <br>
                                            <input name="email" placeholder="Correo Electronico" type="text" required />
                                            <br>
                                            <input id="ejemplo" name="psw" placeholder="contraseña" type="password" required>
                                            <br>
                                            </div>
                                            <br>
                                            <div class="row 50%">
                                            <div class="12u">
                                            
                                            <input  class="form-button-submit button icon fa-envelope" type="submit" value="Registrarse">
                                            
                                            <br>
                                            
                                            </div>
                                    
                                    </form>
                                </section>
                                </center>       
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
