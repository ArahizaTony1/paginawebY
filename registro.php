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
                <?
    require_once('conexion.php');
    
    if(isset($_POST['uname']) && !empty($_POST['uname'])){
        $uname=$_POST['uname'];
        $psw=$_POST['psw'];



        $sql="SELECT * FROM administrador WHERE correo='$uname' AND contrasena='$psw' LIMIT 1";
        $con=new mysqli(servidorbd,usuariobd,psw,nombrebd);
        
        if($con->connect_error)
        {
            echo 'Error'.$con->connect_error;
        }

        $result=$con->query($sql);

        if($result->num_rows>0){

            echo "Redirigir";
            $con->close();
            session_start();
            $_SESSION['uname']=$uname;
            header("Location: /youtube/formulario.php");

        }else
        {
            $con->close();
            echo 'Revise su usuario o su contrasena';
        }
    }
    
    
    
    
        
    
    ?>
    

            
             <div id="footer-wrapper">
                    <div id="footer" class="container">
                        <header>
                            <h2>Iniciar sesion <strong>Registrate!!</strong></h2>
                        </header>
                        
                            
                                <section>
                                    <form method="post" action="registro.php">
                                        <div class="row 50%">
                                            <div class="6u 12u(mobile)">
                                                
                                                 <input name="uname" placeholder="usuario" type="text" />
                                            </div>
                                            <div class="6u 12u(mobile)">
                                                 <input name="psw" placeholder="password" type="password" />
                                            </div>
                                        </div>
                                        <div class="row 50%">
                                            <div class="12u">
                                                
                                            </div>
                                        </div>
                                        <center>
                                        <div class="row 50%">
                                            <div class="12u">
                                                <button type="submit">Iniciar Sesión</button>
                                            </div>
                                        </div>
                                        </center>
                                    </form>
                                </section>
                           



                            

                            <div >
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
