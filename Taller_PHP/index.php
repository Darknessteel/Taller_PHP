<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Taller WEB PHP</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Taller de PHP</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Calculadora</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Gimnasio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#zap">Zapatos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#edad">Edad</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Nota!</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Taller PHP</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Grupo cerrado intersoftware.</h2>
                    <a class="btn btn-primary js-scroll-trigger" href="#about">Comenzemos</a>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center ltw" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-white mb-4">Ejercicio 1 Calculadora</h2>
                        <p class="text-white" style="text-align: justify">
                        1.Hacer un programa en PHP que permita mostrar en pantalla la
suma, resta, multiplicación y división de dos números enteros
almacenados en 2 variables diferentes (utilice formularios
HTML).
                        </p>
                        <form action="index.php#about" method="POST">
<!-- Nota importante: al agregar index.php#about nos reubica en el ejercicio del momento al calcular -->
			<select name="operador" class="ltb">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multiplicacion">Multiplicaci&oacute;n</option>
				<option value="division">Divisi&oacute;n</option>
			</select><br />
			<h4 class="text-white mb-4">Ingresa tu primer valor:</h4>
			<input type="text" name="valor1"><br />
			<h4 class="text-white mb-4">Ingresa tu segundo valor:</h4>
			<input type="text" name="valor2"><br>
			<input type="reset" value="Borrar">
			<input type="submit" value="Enviar">
			
        </form>
        <?php if(isset($_POST["operador"])):?>
        <?php 
      
	if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
		if ($_POST["operador"] == "suma") {
			print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
			print ('<br /><a font href="#about"></a>');
		} elseif ($_POST["operador"] == "resta") {
			print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
			print ('<br /><a href="#about"></a>');
		} elseif ($_POST["operador"] == "multiplicacion") {
			print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
			print ('<br /><a href="#about"></a>');
		} elseif ($_POST["operador"] == "division") {
			print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
			print ('<br /><a href="#about"></a>');
		}
	} else {
		print('<font color="red">Ingresa alg&uacute;n valor</font>');
		print ('<br /><a href="#about"></a>');
	}
?>
<?php endif?>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section text-center bg-light ltb" id="projects">
            <div class="container">
            <div class="col-lg-8 mx-auto">
                        <h2 class="text-black mb-4">Ejercicio 2 Gimnasio</h2>
                        <p class="text-black" style="text-align: justify">
                        2.El gimnasio Bodytech, lo contrata para desarrollar una
aplicación web que permita a sus usuarios calcular el índice
de masa corporal basado en el formula:
𝐼𝑀𝐶 =
𝑃𝐸𝑆𝑂/
(𝐴𝐿𝑇𝑈𝑅𝐴 ∗ 𝐴𝐿𝑇𝑈𝑅𝐴)
Tenga en cuenta que la clasificación del IMC es la siguiente:
                        </p>
                        </div>
                <img class="img-fluid" src="assets/img/Peso.png" alt="" />
            </div>
                        <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <form action="index.php#projects" method="POST">
<!-- Nota importante: al agregar index.php#projects nos reubica en el ejercicio del momento al calcular -->
                    <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                            <table>
                                <tr>
                                    <td>Ingrese masa</td>
                                    <td><input type="text" placeholder='Ingresa tu masa' name='masa' require=""></td>
                                </tr>
                                <tr>
                                    <td>Ingresa altura</td>
                                    <td><input type="text" placeholder='Ingresa tu altura' name='altura'></td>
                                </tr>
                                <tr>
                                   <!-- <td><input type="submit" value='calcular'></td> -->
                                   <td><button type="submit" class="btn btn-primary mt-2 btn-block" name="botonCalcular">Calcular</button></td>
                                    <td><input type="reset" value='Borrar'></td>
                                </tr>
                            </table>
                            
                        </form>
                        <?php if(isset($_POST["botonCalcular"])): ?>
                        <?php 
                        if ($_POST ["altura"] !="" and $_POST ["masa"]!=""){
                        $altura = $_POST['altura'];//cm
                        $masa = $_POST['masa'];//kg
                        //$altura = $altu/100;//convirtiendo de cm a m
                        $imc = $masa/($altura*$altura);//IMC = masa(kg)/altura"2(m)
                        
                        if ($imc<=18.5){
                            //echo "Peso insuficiente";
                            print('<br>Su indice de masa corporal es de: '.$imc.'. Por la tanto usted tiene Insuficiencia de peso');
                        }else if ($imc>=18.5 && $imc<=24.9){
                           // echo "Peso Normal";
                           print('<br>Su indice de masa corporal es de: '.$imc.'. Por la tanto usted tiene peso normal');
                        }else if ($imc>=25 && $imc<=26.9){
                           // echo "Sobrepeso grado I";
                           print('<br>Su indice de masa corporal es de: '.$imc.'. Por la tanto usted tiene sobrepeso grado I');
                        }else if ($imc>=27 && $imc<=29.9){
                           // echo "Sobrepeso grado II (PreObesidad)";
                           print('<br>Su indice de masa corporal es de: '.$imc.'. Por la tanto usted tiene sobrepeso grado II (PreObesidad)');
                        }else if ($imc>=30 && $imc<=34.9){
                           // echo "Obesidad de tipo I";
                           print('<br>Su indice de masa corporal es de: '.$imc.'. Por la tanto usted tiene Obesidad Grado I');
                        }else if ($imc>=35 && $imc<=39.9){
                           // echo "Obesidad de tipo II";
                           print('<br>Su indice de masa corporal es de: '.$imc.'. Por la tanto usted tiene Obesidad Grado II');
                        }else if ($imc>=40 && $imc<=49.9){
                           // echo "Obesidad de tipo III(Mórbida)";
                           print('<br>Su indice de masa corporal es de: '.$imc.'. Por la tanto usted tiene Obesidad Grado III');
                        }else if ($imc>=50){
                           // echo "Obesidad de tipo IV(extrema)";
                           print('<br>Su indice de masa corporal es de: '.$imc.'. Por la tanto usted tiene Obesidad Extrema');
                        }
                    }else{
                            
                            print ('<br /><br /><font color="red">Ingresa los datos</font>');
		                    print ('<br /><a href="#projects"></a>');
                         }
                        
                         ?>
                         <?php endif ?>
                        </div> 
                    </div>
                
                </div> 
                <!-- Featured Project Row-->
                
                
            </div>
        </section>
        <br />
        <HR>
<HR width="80%">
<HR width="60%">
<HR width="40%">
<HR width="20%">


<br>
        <br />
        <section class="zap-section text-center ltw" id="zap">
            <div class="container">
            <div class="col-lg-4 mx-auto">
                        <h2 class="text-white mb-4">Ejercicio 3 Zapateria</h2>
                        <p class="text-white" style="text-align: justify">
                       3. Codificar un programa en PHP para la tienda Spring Step que
tiene una promoción de descuento, esta dependerá del número de
zapatos que se compren.<br>
- Si son 3 pares se les dará un 10% de descuento al cliente
sobre el total de la compra;<br>
- Si el número de zapatos es mayor 3 pares, pero menor o
igual de 8 pares, se le otorga un 20% de descuento.<br>
- si son más 8 pares de zapatos se otorgará un 50% de
descuento. Defina la cantidad de variables que necesite,
el costo de cada par de zapatos y establezca el valor
total de la compra de zapatos.

                        </p>
                        
                        <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <form action="index.php#zap" method="POST">
                    <br />
			<h4 class="text-white mb-4">Ingresa el valor del par de zapatos:</h4>
			<input type="text" name="precioParZapatos"><br />
			<h4 class="text-white mb-4">Ingresa cantidad Vendida:</h4>
			<input type="text" name="cantidadVendida"><br>
            <input type="reset" value="Borrar">
            <td><button type="submit" class="btn btn-primary mt-2 btn-block" name="botonCal">Calcular</button></td>
			<!--<input type="submit" value="Enviar">-->
                        </form>
                        <?php  
                        
                            if(isset($_POST["botonCal"])){
                                $precioParZapatos=$_POST["precioParZapatos"]; 
                                $cantidadVendida =$_POST["cantidadVendida"];
                                if ($cantidadVendida>=1 && $cantidadVendida<=2){
                                   
                            $costoNeto=$cantidadVendida*$precioParZapatos;
                                                
                        echo ("Cantidad Vendida: ".$cantidadVendida."<br>");
                        echo ("Costo Neto: ".$costoNeto."<br>");
                        echo ("Descuento: debes de comprar mas de 2 unidades "."<br>");
                        echo ("Valor del Descuento: No tiene descuento "."<br>");
                        echo ("Valor Total a pagar: ".$costoNeto);
                            }elseif ($cantidadVendida==3){
                                    $descuento=0.1;
                            $costoNeto=$cantidadVendida*$precioParZapatos;
                        $costoDescuento=$costoNeto*$descuento;
                        $costoTotal=($cantidadVendida*$precioParZapatos)-$costoDescuento;
                        echo ("Cantidad Vendida: ".$cantidadVendida."<br>");
                        echo ("Costo Neto: ".$costoNeto."<br>");
                        echo ("Descuento: ".($descuento*100)."%<br>");
                        echo ("Valor del Descuento: ".$costoDescuento."<br>");
                        echo ("Valor Total a pagar: ".$costoTotal);
                                }elseif ($cantidadVendida>=4 && $cantidadVendida<=8){
                                    $descuento=0.2;
                                    $costoNeto=$cantidadVendida*$precioParZapatos;
                                $costoDescuento=$costoNeto*$descuento;
                                $costoTotal=($cantidadVendida*$precioParZapatos)-$costoDescuento;
                                echo ("Cantidad Vendida: ".$cantidadVendida."<br>");
                                echo ("Costo Neto: ".$costoNeto."<br>");
                                echo ("Descuento: ".($descuento*100)."%<br>");
                                echo ("Valor del Descuento: ".$costoDescuento."<br>");
                                echo ("Valor Total a pagar: ".$costoTotal);
                                }elseif ($cantidadVendida>=9){
                                    $descuento=0.5;
                                    $costoNeto=$cantidadVendida*$precioParZapatos;
                                $costoDescuento=$costoNeto*$descuento;
                                $costoTotal=($cantidadVendida*$precioParZapatos)-$costoDescuento;
                                echo ("Cantidad Vendida: ".$cantidadVendida."<br>");
                                echo ("Costo Neto: ".$costoNeto."<br>");
                                echo ("Descuento: ".($descuento*100)."%<br>");
                                echo ("Valor del Descuento: ".$costoDescuento."<br>");
                                echo ("Valor Total a pagar: ".$costoTotal);
                            }elseif ($cantidadVendida ==0){
                                echo ("Ingresa los valores y la cantidad");
                                    
                            }
                                
                            }


                        ?>
                        
                        
                    </div>
                </div>
                              
            </div>
        </section>
        <br />
        <HR>
<HR width="80%">
<HR width="60%">
<HR width="40%">
<HR width="20%">


<br>
        <br />
        <section class="zap-section text-center ltw" id="edad">
            <div class="container">
            <div class="col-lg-4 mx-auto">
                        <h2 class="text-white mb-4">Ejercicio 8 Edad</h2>
                        <p class="text-white" style="text-align: justify">
                        8. La federación nacional de fútbol necesita de sus servicios
como desarrollador de software, para codificar una función en
PHP que permita calcular la edad de los jugadores, de acuerdo
al año de nacimiento de estos. Declare la función
calcularEdad() y pruebe su funcionamiento.


                        </p>
                        
                        <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <form action="index.php#edad" method="POST">
                    <br />
                    
			<h4 class="text-blue mb-4">Ingresa el año de nacimiento:</h4>
			<input type="text" name="fecha"><br />
            <input type="reset" value="Borrar">
            <td><button type="submit" class="btn btn-primary mt-2 btn-block" name="botoCal">Calcular</button></td>
			<!--<input type="submit" value="Enviar">-->
                        </form>
                        
                        <?php
                                    
                        ?>
                        <?php if(isset($_POST["botoCal"])):?>
                            <?php
                               if ($_POST ["fecha"] !=""){
                                ($edad = date("Y") - $_POST ["fecha"]);
                               
                                print('<br>Su edad actual es: '.$edad); 
                            }else{ 
                                    print('<font color="red">Ingresa alg&uacute;na fecha</font>');
                                    print ('<br /><a href="#edad"></a>');
                            }
                            ?>
                            
                        <?php endif?>

                    </div>
                </div>
                              
            </div>
        </section>
        <br />
        <HR>
<HR width="80%">
<HR width="60%">
<HR width="40%">
<HR width="20%">


<br>
        <br />
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Por favor una buena NOTA!</h2>
                        <form class="form-inline d-flex">
                            <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" type="email" placeholder="Coloca aqui la nota!..." />
                            <button class="btn btn-primary mx-auto" type="submit">Inscribe la nota!</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Dirección</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">Carrera 75 # 48 - 25</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Taller</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="https://educaciondigital.cesde.edu.co/pluginfile.php/741717/mod_resource/content/1/Taller%201%20WEB1%20IS.pdf">link del taller</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Telefono</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">3016296056</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Taller PHP 2020</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
