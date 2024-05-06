<?php
require("php/mail.php");
function validate($name, $email, $subject, $message){

return !empty(trim($name)) && !empty(trim($email)) && !empty(trim($subject)) && !empty(trim($message)); ;
}

$status = "";

if(isset($_POST["form"])){
    if(validate($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $body = "$name <$email> te envia el siguiente mensaje: <br><br> $message";
        sendMail($subject, $body, $email, $name, true);
        $status = "success";
    }else{
        $status = "danger";
    }
    // *Mandar el correo

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robert Luque Portafoleo</title>
    <link rel="stylesheet" href="scss/estilos.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bg-primary">
    <?php if($status == "danger"):?>
    <div class="container-fluid padre-alert" id="padre-alert">
        <div class="alert alert-success alert-dismissible" onclick="eliminarMessage()" role="alert">Parece que hubo un
            problema.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    <?php endif;?>

    <?php if($status == "success"):?>
    <div class="container-fluid padre-alert" id="padre-alert">
        <div class="alert alert-success alert-dismissible" onclick="eliminarMessage()" role="alert">Se ha enviado el
            mensaje con éxito.<button type="button" class="btn-close" data-bs-dismiss="alert"
                aria-label="Close"></button>
        </div>
    </div>
    <?php endif;?>
    <header id="header" class="sticky-top align-baseline position-fixed bg-secondary">
        <div class="profile">
            <img src="img/perfil.webp" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light">
                <a href="index.html">Robert Luque</a>
            </h1>
            <div class="cv text-center">
                <a href="Luque_Torres_Robert_CV.pdf" download="Luque Torres Robert CV.pdf"
                    class="btn btn-outline-light">Descargar CV</a>
            </div>
        </div>
        <ul class="nav flex-column col-9">
            <li class="icon nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <i class='bx bx-home'></i>
                    <span>Inicio</span>
                </a>
            </li>
            <li class="icon nav-item">
                <a class="nav-link" href="#Portfolio">
                    <i class='bx bx-book-content'></i>
                    <span>Proyectos</span>
                </a>
            </li>
            <li class="icon nav-item">
                <a class="nav-link" href="#Habilidades">
                    <i class='bx bx-spreadsheet'></i>
                    <span>Habilidades</span>
                </a>
            </li>
            <li class="icon nav-item">
                <a class="nav-link" href="#Sobremi">
                    <i class='bx bx-user'></i>
                    <span>Sobre Mi</span>
                </a>
            </li>
            <li class="icon nav-item">
                <a class="nav-link" href="#Contacto">
                    <i class='bx bx-envelope'></i>
                    <span>Contacto</span>
                </a>
            </li>
        </ul>
    </header>
    <section class="principal d-flex justify-content-center align-items-center">
        <div class="fondo"></div>
        <div class="datos position-absolute" id="caja-texto">
            <h1>Robert Luque</h1>
            <span id="typed"></span>
        </div>
    </section>
    <section class="main ">
        <section id="Portfolio">
            <div class="container">
                <div class="titulo">
                    <h2>Proyectos</h2>
                </div>
                <div class="proyectos">
                    <div class="row d-flex row-cols-md-3 g-5">
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/proyecto_osifersac.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">OsiferSac</h5>
                                    <p class="card-text">El diseño y desarrollo de este sitio web se llevó a cabo
                                        utilizando WordPress. Se trata de un ecommerce de una ferretería, con un sistema
                                        integrado de cotización.</p>
                                    <div class="botones row w-100">
                                        <a href="https://osifersac.com/"
                                            class="col btn btn-outline-info mx-3">Pagina</a>
                                        <a href="#" class="col btn btn-outline-info mx-3">ver mas</a>
                                    </div>
                                </div>
                                <div class="card-footer d-flex row-cols-4">
                                    <i class='bx bxl-wordpress'></i>
                                    <i class='bx bxl-html5'></i>
                                    <i class='bx bxl-css3'></i>
                                    <i class='bx bxl-javascript'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/proyecto_ledcolombia.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">LedColombia</h5>
                                    <p class="card-text">Fui responsable del apartado de personalización de letras LED,
                                        implementada con JavaScript. Esta función incluye un sistema integrado para
                                        enviar las personalizaciones a través de WhatsApp, además de guardar las
                                        opciones seleccionadas mediante URLs.</p>
                                    <div class="botones row w-100">
                                        <a href="https://ledcolombia.com.co/producto/personalizacion-de-letras-led/"
                                            class="col btn btn-outline-info mx-3">Pagina</a>
                                        <a href="#" class="col btn btn-outline-info mx-3">ver mas</a>
                                    </div>
                                </div>
                                <div class="card-footer d-flex row-cols-4">
                                    <i class='bx bxl-wordpress'></i>
                                    <i class='bx bxl-html5'></i>
                                    <i class='bx bxl-css3'></i>
                                    <i class='bx bxl-javascript'></i>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <img src="img/robertportafoleo.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Portafoleo</h5>
                                    <p class="card-text">Este sitio web fue diseñado para exhibir todos mis
                                        proyectos,
                                        habilidades y datos personales de una manera visualmente atractiva y fácil
                                        de
                                        navegar.</p>
                                    <div class="botones row w-100">
                                        <a href="#" class="col btn btn-outline-info mx-3">Pagina</a>
                                        <a href="#" class="col btn btn-outline-dark">
                                            <i class='bx bxl-github'></i>
                                        </a>
                                        <a href="#" class="col btn btn-outline-info mx-3">ver mas</a>
                                    </div>
                                </div>
                                <div class="card-footer d-flex row-cols-6">
                                    <i class='bx bxl-html5'></i>
                                    <i class='bx bxl-css3'></i>
                                    <i class='bx bxl-javascript'></i>
                                    <i class='bx bxl-bootstrap'></i>
                                    <i class='bx bxl-sass'></i>
                                    <i class='bx bxl-php'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/proyecto_pizzerialagula.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">PizzeriaLaGula</h5>
                                    <p class="card-text">Landing Page de una pizzería, donde puse en práctica mis
                                        habilidades en JavaScript con elementos interactivos.</p>
                                    <div class="botones row w-100">
                                        <a href="https://robertluque.github.io/PizzeriaLaGula/"
                                            class="col btn btn-outline-info mx-3">Pagina</a>
                                        <a href="https://github.com/RobertLuque/PizzeriaLaGula"
                                            class="col btn btn-outline-dark">
                                            <i class='bx bxl-github'></i>
                                        </a>
                                        <a href="#" class="col btn btn-outline-info mx-3">ver mas</a>
                                    </div>
                                </div>
                                <div class="card-footer d-flex row-cols-4">
                                    <i class='bx bxl-html5'></i>
                                    <i class='bx bxl-css3'></i>
                                    <i class='bx bxl-javascript'></i>
                                    <i class='bx bxl-less'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Habilidades" class="vh-100">
            <div class="container h-100">
                <div class="titulo">
                    <h2>Habilidades</h2>
                </div>
                <div class="section-skill row  row-cols-2 text-center h-100">
                    <div class="col h-50">
                        <div class="container">
                            <h3>Front-End</h3>
                        </div>
                        <div class="skills row-cols-3">
                            <div class="box-skill col">
                                <i class='bx bxl-html5'></i>
                            </div>
                            <div class="box-skill col">
                                <i class='bx bxl-css3'></i>
                            </div>
                            <div class="box-skill col">
                                <i class='bx bxl-javascript'></i>
                            </div>
                        </div>
                        <div class="skills row-cols-3">
                            <div class="box-skill col">
                                <i class='bx bxl-less'></i>
                            </div>
                            <div class="box-skill col">
                                <i class='bx bxl-sass'></i>
                            </div>
                            <div class="box-skill col">
                                <i class='bx bxl-bootstrap'></i>
                            </div>
                        </div>
                    </div>
                    <div class="col h-50">
                        <div class="container">
                            <h3>Back-End</h3>
                        </div>
                        <div class="skills">
                            <div class="box-skill">
                                <i class='bx bxl-php'></i>
                            </div>
                            <img class="mysql" src="svg/mysql.svg" alt="">
                        </div>
                    </div>
                    <div class="col h-50">
                        <div class="container">
                            <h3>Aprendiendo</h3>
                        </div>
                        <div class="skills">
                            <i class='bx bxl-nodejs'></i>
                            <img src="svg/laravel.svg" alt="">
                        </div>
                    </div>
                    <div class="col h-50">
                        <div class="container">
                            <h3>Herramientas</h3>
                        </div>
                        <div class="skills">
                            <i class='bx bxl-wordpress'></i>
                            <i class='bx bxl-visual-studio'></i>
                            <i class='bx bxl-github'></i>
                            <i class='bx bxl-git'></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Sobremi" class="vh-100">
            <div class="container h-100">
                <div class="titulo">
                    <h2>Sobre Mi</h2>
                </div>
                <div class="info h-100 pt-4">
                    <div class="row d-flex justify-content-center align-items-center ">
                        <div class="col-lg-4 aos-init aos-animate" data-aos="fade-right">
                            <img src="img/robert-foto.webp" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-8 pt-4 pt-lg-0" data-aos="fade-left">
                            <p>¡Hola! Soy Robert Luque, un apasionado desarrollador web en camino a convertirme en un
                                desarrollador full-stack. Me encanta enfrentarme a desafíos y encontrar soluciones
                                creativas a problemas complejos.</p>
                            <h3>Estudios</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <i class='bx bx-chevron-right'></i><strong>Instituto de Educacion Superior Publica
                                        Simon Bolivar - Callao (2020 - 2022)</strong>
                                    <p>Carrera de Desarrollo de Sistemas de la Informacion.</p>
                                </div>
                                <div class="col-lg-12">
                                    <i class='bx bx-chevron-right'></i><strong>Escuela Secundaria Raúl Porras
                                        Barrenechea (2015-2019)</strong>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <h3>Datos</h3>
                                <div>
                                    <i class='bx bx-chevron-right'></i><strong>Email:</strong>
                                    <span>rluquetorres2021@gmail.com</span>
                                </div>
                                <div>
                                    <i class='bx bx-chevron-right'></i></i><strong>Cumpleaños:</strong> <span>20 Marzo
                                        2004</span>
                                </div>
                                <div>
                                    <i class='bx bx-chevron-right'></i></i><strong>Telefono:</strong> <span>+51 972 177
                                        617</span>
                                </div>
                                <div>
                                    <i class='bx bx-chevron-right'></i></i><strong>Edad:</strong> <span>21</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Contacto" class="vh-100">
            <div class="container">
                <div class="titulo">
                    <h2>Contacto</h2>
                </div>
                <div class="info px-5 mt-5">
                    <form action="./" method="POST" class="formulario needs-validation p-4 mx-5 rounded-2 shadow"
                        novalidate>
                        <div class="row">
                            <div class="form-group  col-md-6">

                                <label for="name">Nombre</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor, escriba su nombre.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Correo</label>
                                <input type="email" class="form-control" name="email" id="email" required="">
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor, escriba su correo.
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Asunto</label>
                            <input type="text" class="form-control" name="subject" id="subject" required="">
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor, escriba el Asunto.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Mensaje</label>
                            <textarea class="form-control" name="message" rows="8" required=""></textarea>
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor, escriba un mensaje.
                            </div>
                        </div>

                        <div class="box-button d-flex justify-content-center align-items-center">
                            <button name="form" type="submit" class="btn btn-outline-success px-5 mt-3">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </section>

    <footer id="footer"
        class="sticky-bottom position-fixed bg-secondary d-flex align-content-center align-items-center">
        <div class="container">
            <i class='bx bxl-gmail'></i>
            <span>rluquetorres2021@gmail.com</span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="js/eliminateAlert.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/validForm.js"></script>
</body>

</html>