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

            
 
            <!-- Footer -->
<?
    require_once ('conexion.php');
    
    if(isset($_POST['info']))
    {
        $t=$_POST['titulo'];
        $c=$_POST['contenido'];
        $f=$_POST['fecha'];
        $foto=$_FILES["user_image"]["name"];
        $ruta=$_FILES["user_image"]["tmp_name"];
        $destino="/".$user_image;
        $conn = new mysqli(servidorbd, usuariobd, psw, nombrebd);
       
        if(isset($_POST['num']) && $_POST['num']>0){ //-modificada
            $id1=$_POST['num'];
            $sql="UPDATE muestra SET titulo='$t' , contenido='$c', fecha='$f', foto='$foto' WHERE IDmuestra=$id1";
            $conn->query($sql);
            $conn->close();
            header('Location: /youtube/formulario.php');
        }
        else
        {
            if($_POST['num']==null){ //-modificada
        
                if ($conn->connect_error) {
                    die("Error de conexión: " . $conn->connect_error);
                } 
                $sql="INSERT INTO muestra(titulo,contenido,fecha,foto) VALUES('$t','$c','$f','$foto')";
                if($conn->query($sql)===TRUE){
                    header('Location: /youtube/formulario.php');
                }
                else {
                    echo "0 results";
                }  
            }
        }
    }
    
    if(isset($_GET['IDmuestra'])){
        $id=$_GET['IDmuestra'];
        $conn = new mysqli(servidorbd, usuariobd, psw, nombrebd);
        // Check connection
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        } 
        $sql="SELECT * FROM muestra WHERE IDmuestra=$id";
        
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
            $id=$row['IDmuestra'];
            $titulo=$row['titulo'];
            $fecha=$row['fecha'];
            $contenido=$row['contenido'];
            $foto=$row['foto'];
        }
        
        $conn->close();
        
    }
?>

            
                <div id="footer-wrapper">
                    <div id="footer" class="container">
                        <center>
                        <header>
                            <h2>Formulario de  <strong>NOTICAS!!</strong></h2>
                        </header>
                        
                            <div class="6u 12u(mobile)">
                                <section>
                                    <form method="post" action="form.php">
                                           
                                            <input type="text" id="txtnum" name="num" value="<?echo $id?>" placeholder="..." readonly>
                                            <br>
                                            <input name="title" placeholder="titulo" type="text" required />
                                            <br>

                                            <div class="row 50%">
                                            <div class="12u">
                                            <textarea name="Noticia" placeholder="Noticia"></textarea>
                                            </div>
                                            </div>
                                            <br>
                                            <input type="text" id="txtfecha" name="fecha" value="<?echo $fecha?>" required placeholder="Fecha">
                                            <br>
                                            <input type="file" name="user_image" accept="/home/arahiza/Documentos/*" />
                                       
                                            <div class="row 50%">
                                            <div class="12u">
                                            
                                            <br>    
                                            <input  class="form-button-submit button icon fa-envelope" type="submit" value="info">
                                            <br>
                                            </div>
                                            </div>
                                      </form>
                                   </section>
                                </div>
                                </center>  
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
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script>
            $( function() {
            $( "#txtfecha" ).datepicker({
            dateFormat: "yy-mm-dd"
            });

            } );
            </script>


    </body>
</html>
