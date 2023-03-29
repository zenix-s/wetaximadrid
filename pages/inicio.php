<?php

include_once '../includes/componentes.php';
$componentes = new componentes();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/inicio_style.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/icons/bootstrap-icons.css">
</head>

<body>
    <?php
    echo $componentes->header();
    ?>
    <main>
        <section class="slider">

        </section>

        <section class="servicios-section">
            <h2>Servicios</h2>
            <div class="services-container">
                <div class="service-container">
                    <div class="service">
                        <div class="service-img">
                            <img src="../assets/img/taller-taxis-.jpg" alt="escuela">
                        </div>
                        <div class="service-description">
                            <h3>Escuela de conductores</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                            <a href="#">Saber mas</a>
                        </div>
                    </div>
                </div>
                <div class="service-container">


                    <div class="service">
                        <div class="service-img">
                            <img src="../assets/img/taxis.png" alt="bucle">
                        </div>
                        <div class="service-description">
                            <h3>Bucle magnetico</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                            <a href="#">Saber mas</a>

                        </div>
                    </div>
                </div>
                <div class="service-container">
                    <div class="service">
                        <div class="service-img">
                            <img src="../assets/img/taxis.png" alt="asesoria">
                        </div>
                        <div class="service-description">
                            <h3>Asesoria</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                            <a href="#">Saber mas</a>

                        </div>
                    </div>
                </div>
                <div class="service-container">
                    <div class="service">
                        <div class="service-img">
                            <img src="../assets/img/taxis.png" alt="taller">
                        </div>
                        <div class="service-description">
                            <h3>Taller</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                            <a href="#">Saber mas</a>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="freenow-section">
            <div class="freenow-container">
                <div class="freenow-img">
                    <img src="../assets/img/freenow-inicio2.png" alt="freenow">
                </div>
                <div class="freenow-description">
                    <p>WeTaxi Madrid y Free Now se han unido en un acuerdo comercial para ofrecer servicios de mantenimiento y reparación de vehículos a precios inigualables para los taxistas de Madrid. Los conductores de la flota de Free Now que hayan alcanzado la categoría "Bronce" o superior pueden disfrutar de importantes descuentos en servicios de mantenimiento. <br>Además, los conductores con la misma categoría también obtienen descuentos en servicios de reparación de taxímetros y luminosos. También se otorgará un premio a los 50 mejores taxistas de la flota Free Now. ¡Reserva el tuyo ahora!</p>
                    <a href="#">Descargar</a>
                </div>
            </div>
        </section>
        <section class="formulario-contacto-section">
            <!-- datos del formulario nombre apellidos email telefono y mensaje -->
            <div class="formulario-contacto-container">
                <h2>Ponte en contacto</h2>
                <form action="" method="">
                    <div class="input-container">
                        <input type="text" name="nombre" id="nombre" placeholder=" ">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-container">
                        <input type="text" name="apellidos" id="apellidos" placeholder=" ">
                        <label for="apellidos">Apellidos</label>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" id="email" placeholder=" ">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-container">
                        <input type="text" name="telefono" id="telefono" placeholder=" ">
                        <label for="telefono">Telefono</label>
                    </div>
                    <div class="input-container">
                        <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder=" "></textarea>
                        <label for="mensaje">Mensaje</label>
                    </div>
                    <div class="input-container">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>
            <div class="datos-contacto-container">
                <div class="datos-contacto">
                    <div class="datos-contacto-item">
                        <div class="datos-contacto-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="datos-contacto-description">
                            <h3>Telefono</h3>
                            <p>91.141.2826</p>
                        </div>
                    </div>
                    <div class="datos-contacto-item">
                        <div class="datos-contacto-icon">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div class="datos-contacto-description">
                            <h3>Whatsapp</h3>
                            <p>679.823.295</p>
                        </div>
                    </div>
                    <div class="datos-contacto-item">
                        <div class="datos-contacto-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="datos-contacto-description">
                            <h3>Email</h3>
                            <p>info@wetaximadrid.com</p>
                        </div>
                    </div>
                    <div class="datos-contacto-item">
                        <div class="datos-contacto-icon">
                            <i class="bi bi-geo"></i>
                        </div>
                        <div class="datos-contacto-description">
                            <h3>Ubicacion</h3>
                            <p>Isaac Jiménez, 5 28037 Madrid</p>
                        </div>
                    </div>
                </div>
        </section>
        <?php
        echo $componentes->footer();
        ?>
    </main>
</body>

</html>