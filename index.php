<?php
 
// grab recaptcha library
require_once "recaptchalib.php";
 

// your secret key
$secret = "6Lffql4gAAAAAFRovLdHnX-S_pApzRUPAujfHp7O";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta name="google-site-verification" content="XMG1JerMtK1KqeYGRMduaVEXiVh0tlorh6pJVfdaIrs" />

        <meta name="robots" content="index,follow">
  
        <meta name="description" content="Nacer con otro ser es un espacio para validar las emociones y poner en palabras lo que sentimos cuando nos atraviesa la maternidad.">

        <meta name="keywords" content="Escritura terapéutica, Maternidad, Puerperio, Emociones, Crianza">

        <meta name="author" content="Maximiliano Effron">
  
        <meta name="copyright" content="Daniela Effron">
  
        <link rel="canonical" href="https://www.nacerconotroser.com/">

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />

        <link href="assets/images/favicon.png" rel="icon" />

        <link rel="stylesheet" href="assets/css/normalize.css" />

        <link rel="stylesheet" href="assets/css/style.css" />
        
        <script defer src='https://www.google.com/recaptcha/api.js' async></script>

        <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script defer
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>

        <!-- Este script es necesario para poder enviar correctamente el mail
   y debe ir justo ANTES de llamar a la función que envía el mail-->
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <!-- <script defer src="https://code.jquery.com/jquery-2.2.2.min.js"></script>-->
         

        <script defer src="./assets/js/main.js"></script>

        <script defer src="./assets/js/formValidations.js"></script>

        <title>Nacer Con Otro Ser</title>
    </head>
    <body>
        <header>
            <!-- Barra de Navegación -->
            <nav class="fixed-top navbar navbar-expand-lg navbar-light">
                <div class="container-fluid menu-container">
                    <a class="menu-logo navbar-brand" href="/"
                        ><div>
                            <img src="assets/images/logo.png" alt="Logo" />
                        </div>
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#menuNavegacion"
                        aria-controls="menuNavegacion"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse menu-nav_bar"
                        id="menuNavegacion"
                    >
                        <ul class="navbar-nav">
                            <li class="nav-item menu-list active">
                                <a class="nav-link" href="#inicio">Inicio</a>
                            </li>

                            <li class="nav-item menu-list">
                                <a class="nav-link" href="#quien-soy"
                                    >¿Quién Soy?</a
                                >
                            </li>

                            <li class="nav-item menu-list">
                                <a class="nav-link" href="#mi-taller"
                                    >Mi Taller</a
                                >
                            </li>

                            <li class="nav-item menu-list">
                                <a class="nav-link" href="#faq"
                                    >Preguntas Frecuentes</a
                                >
                            </li>

                            <li class="nav-item menu-list">
                                <a class="nav-link" href="#inscribirme"
                                    >Inscribirme</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <!-- ****** INDEX ****** -->
            <div id="inicio" class="container-index">
                <!-- Carousel-->
                <div
                    id="carouselExampleIndicators"
                    class="carousel slide services-carousel"
                    data-bs-ride="carousel"
                >
                    <!-- Se ocultan las posiciones (rayas) de las fotos
                    <div class="carousel-indicators">
                        <button
                            type="button"
                            data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="0"
                            class="active"
                            aria-current="true"
                            aria-label="Slide 1"
                        ></button>
                        <button
                            type="button"
                            data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="1"
                            aria-label="Slide 2"
                        ></button>
                        <button
                            type="button"
                            data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="2"
                            aria-label="Slide 3"
                        ></button>

                        <button
                            type="button"
                            data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="3"
                            aria-label="Slide 4"
                        ></button>

                        <button
                            type="button"
                            data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="4"
                            aria-label="Slide 5"
                        ></button>
                    </div>
                    -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img
                                src="assets/images/section-index/intro-1.jpg"
                                class="d-block w-100"
                                alt="Carousel Foto 1"
                            />
                        </div>
                        <div class="carousel-item">
                            <img
                                src="assets/images/section-index/intro-2.jpg"
                                class="d-block w-100"
                                alt="Carousel Foto 2"
                            />
                        </div>
                        <div class="carousel-item">
                            <img
                                src="assets/images/section-index/intro-3.jpg"
                                class="d-block w-100"
                                alt="Carousel Foto 3"
                            />
                        </div>

                        <div class="carousel-item">
                            <img
                                src="assets/images/section-index/intro-4.jpg"
                                class="d-block w-100"
                                alt="Carousel Foto 4"
                            />
                        </div>

                        <div class="carousel-item">
                            <img
                                src="assets/images/section-index/intro-5.jpg"
                                class="d-block w-100"
                                alt="Carousel Foto 5"
                            />
                        </div>
                    </div>

                    <!--Flecha Anterior-->
                    <button
                        class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev"
                    >
                        <span
                            class="carousel-control-prev-icon"
                            aria-hidden="true"
                        ></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <!--Flecha Siguiente-->
                    <button
                        class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next"
                    >
                        <span
                            class="carousel-control-next-icon"
                            aria-hidden="true"
                        ></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="index-info">
                    <h1>Nacer Con Otro Ser</h1>

                    <h2>
                        <i class="bi bi-heart-fill"></i> Acompaño maternidades y
                        decisiones.
                    </h2>

                    <h2>
                        <i class="bi bi-heart-fill"></i> Te invito a hablar de
                        lo que sentís.
                    </h2>

                    <p>
                        "Al nacer con otro ser, no dejamos de existir. Más bien
                        re-nacemos junto a este nuevo ser que está por llegar...
                        <br />
                        Y nos descubrimos en un nuevo rol."
                    </p>
                </div>
            </div>

            <!-- ****** QUIÉN SOY ****** -->
            <div id="quien-soy" class="container-quien-soy">
                <section class="description">
                    <h2>
                        <i class="bi bi-heart-fill"></i>
                    </h2>
                </section>

                <div class="container-flyer">
                    <img
                        src="assets/images/section-quien-soy/flyer.jpg"
                        alt=""
                    />
                </div>

                <div class="quien-soy-icons">
                    <img
                        src="assets/images/section-quien-soy/quien-soy-iconos.jpg"
                        alt="Quién Soy - Iconos"
                    />
                </div>
            </div>

            <!-- ****** MI TALLER ****** -->
            <div id="mi-taller" class="container-fluid container-mi-taller">
                <section class="description">
                    <img
                        src="assets/images/section-mi-taller/taller-portada.svg"
                        class="image-portada"
                        alt="Portada de Mi Taller"
                    />
                </section>

                <!-- Folleto Izquierda -->
                <!-- <div class="container-folleto col-12 col-md-6 col-lg-4"> -->
                <div class="container-folleto col-12">
                    <div class="folleto">
                        <!--
                        <div class="icon-folleto">
                            <img
                                src="assets/images/section-mi-taller/Icono-izq.png"
                                alt="Icono Medio"
                            />
                        </div>

                        <img
                            src="assets/images/section-mi-taller/flyer-izq.svg"
                            class="folleto-image"
                            alt="Flyer 'Tiempos de Cambio'"
                        />
                        -->

                        <p>
                            Es un tiempo de cambios. ⏰ <br />
                            Escribir nos permite poner en palabras aquello que
                            no podemos decir.
                            <span class="p-underline-weight">
                                Escribir nos ordena pensamientos y
                                sentimientos</span
                            >
                            que ni siquiera sabíamos que estaban allí. 🖌
                        </p>

                        <p>
                            Al escribir creamos nuevas conexiones, asociamos
                            anécdotas y experiencias y liberamos un pequeño
                            lugar en nuestra cabeza.
                            <span class="p-underline-weight"
                                >Así el papel funciona de soporte.</span
                            >
                            <br />
                            ¿Qué más podemos pedir durante el puerperio? <br />
                            Alguien que nos soporte y que no juzgue. 🗒
                        </p>

                        <p>
                            No es sencillo encontrarse con una misma y menos
                            cuando
                            <span class="p-underline-weight"
                                >pasamos por tanto el último tiempo </span
                            >que casi ni nosotras nos reconocemos. 🙈 <br />
                            <span class="p-underline-weight"
                                >Nacer con otro ser es todo un desafío</span
                            >, con estos ejercicios te propongo acompañarte a
                            clarificar ideas, expresar lo que sentís, contrastar
                            lo que esperabas y lo que sucedió,
                            <span class="p-underline-weight"
                                >para así poder caminar más liviana.</span
                            >
                            💪🏽
                        </p>

                        <p>
                            También te invito a
                            <span class="p-underline-weight"
                                >tomar consciencia del proceso</span
                            >
                            que acabas de transitar,
                            <span class="p-underline-weight"
                                >de la transformación de tu cuerpo</span
                            >
                            para dar vida, del vínculo que día a día construis
                            con quien supo habitar dentro tuyo. 💕
                        </p>

                        <p>
                            Por último te comparto esta frase con la ilusión de
                            encontrarnos pronto: “Es un hecho, al menos para mí,
                            que mientras escribo encuentro. Esto no quiere decir
                            que si no escribiera no encontraría nada, sin
                            embargo tal vez, no me percataría de ello.” Lacan,
                            Seminario XVI <br />
                            ¡Nos vemos! ✍🏽
                        </p>
                    </div>
                </div>

                <!-- Folleto Derecha -->
                <!-- <div class="container-folleto col-12 col-md-6 col-lg-4"> -->
                <div class="container-folleto col-12">
                    <div class="folleto">
                        <!--
                        <div class="icon-folleto">
                            <img
                                src="assets/images/section-mi-taller/Icono-der.png"
                                alt="Icono Medio"
                            />
                        </div>

                        <img
                            src="assets/images/section-mi-taller/flyer-der.svg"
                            class="folleto-image"
                            alt="Flyer 'Preguntas Frecuentes'"
                        />
                        -->

                        <p>
                            <span class="p-underline-weight"
                                >¿A quien está dirigido el taller? </span
                            ><br />
                            Este taller está dirigido a mujeres madres, que
                            estén atravesando o hayan atravesado un puerperio
                            “reciente”. También para aquellas mujeres madres que
                            la propuesta las interpele y decidan ser parte de
                            ésta aventura.
                        </p>

                        <p>
                            <span class="p-underline-weight"
                                >¿Necesito algún conocimiento previo?</span
                            >
                            <br />
                            Ninguno. Solo es necesario dejarse llevar. Con un
                            celu o una compu es suficiente para ver la
                            propuesta. Luego para escribir te recomiendo un
                            cuaderno o papel.
                        </p>

                        <p>
                            <span class="p-underline-weight">
                                ¿Qué van a encontrar en este taller?
                            </span>
                            <br />
                            El taller de escritura terapéutica es un espacio de
                            encuentro con otras mujeres y con vos misma. A
                            través de consignas disparadoras te propongo
                            reflexionar sobre tu propia maternidad, repensarte,
                            reencontrarte y reconocerte.. Tomar consciencia del
                            período que estás transitando y ordenar algunos
                            pensamientos. Luego, en un marco de mucho respeto te
                            invito a compartir lo que escribas formando una
                            pequeña tribu, intercambiando miradas, acompañándose
                            entre ustedes.
                        </p>
                        <p>
                            La propuesta es totalmente virtual para que la hagas
                            a tu ritmo y tu tiempo. Recibirás los videos
                            divididos en cuatro encuentros y allí mismo
                            encontrarás los ejercicios que te propongo para
                            comenzar a escribir. También comparto algunos textos
                            míos, y dejo preguntas abiertas para pensar juntas.
                        </p>
                        <p>
                            Finalmente habrá un encuentro sincrónico a través de
                            un zoom de carácter optativo. Podes sumarte, y solo
                            escuchar, o si te animas podes compartir algo de lo
                            que escribiste, sentiste, descubriste en el proceso
                            de escritura con otras participantes.
                        </p>


                        <p>
                            <span class="p-underline-weight">
                                Temario
                            </span>
                            <br />
                            <span class="text-weight">1er encuentro:</span> Mi yo pre maternidad y mi yo hoy. <br />
                            <span class="text-weight">2do encuentro:</span> Mi maternidad, mi puerperio. Encontrarse en la singularidad. <br />
                            <span class="text-weight">3er encuentro:</span> Los vínculos cambian, yo también. <br />
                            <span class="text-weight">4to encuentro:</span> Mi bebé y yo.<br />
                        </p>

                    </div>
                </div>

                <!-- Folleto del Medio -->
                <!-- <div class="container-folleto col-12 col-md-6 col-lg-4"> -->
                <div class="container-folleto col-12">
                    <div class="folleto">
                        <div class="icon-folleto">
                            <img
                                src="assets/images/section-mi-taller/Icono-medio.png"
                                alt="Icono Medio"
                            />
                        </div>

                        <img
                            src="assets/images/section-mi-taller/flyer-medio.svg"
                            class="folleto-image"
                            alt="Flyer 'A puño y letra'"
                        />
                    </div>
                </div>
            </div>

            <!-- ****** PREGUNTAS FRECUENTES ****** -->
            <div id="faq" class="container-faq">
                <section class="description">
                    <h2>Preguntas Frecuentes</h2>
                    <p>
                        Acá te voy a responder las consultas más frecuentes que
                        recibo.
                    </p>
                </section>

                <div
                    class="container-faq-questions accordion accordion-flush"
                    id="accordionFaq"
                >
                    <!-- Pregunta Nº1 -->
                    <div class="faq-item accordion-item">
                        <h3 class="faq-header accordion-header" id="headingOne">
                            <button
                                class="accordion-button faq-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseOne"
                                aria-expanded="false"
                                aria-controls="collapseOne"
                            >
                                ¿A quién está dirigido el taller?
                            </button>
                        </h3>
                        <div
                            id="collapseOne"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingOne"
                            data-bs-parent="#accordionFaq"
                        >
                            <div class="accordion-body">
                                <p>
                                    Este taller está dirigido a mujeres madres,
                                    que estén atravesando o hayan atravesado un
                                    puerperio “reciente”. También para aquellas
                                    mujeres madres que la propuesta las
                                    interpele y decidan ser parte de esta
                                    aventura.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pregunta Nº2 -->
                    <div class="faq-item accordion-item">
                        <h3 class="faq-header accordion-header" id="headingTwo">
                            <button
                                class="accordion-button faq-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo"
                            >
                                ¿Necesito algún conocimiento previo?
                            </button>
                        </h3>
                        <div
                            id="collapseTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingTwo"
                            data-bs-parent="#accordionFaq"
                        >
                            <div class="accordion-body">
                                <p>
                                    Ninguno. Solo es necesario dejarse llevar.
                                    Con un celu o una compu es suficiente para
                                    ver la propuesta. Luego para escribir te
                                    recomiendo un cuaderno o papel.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pregunta Nº3 -->
                    <div class="faq-item accordion-item">
                        <h3
                            class="faq-header accordion-header"
                            id="headingThree"
                        >
                            <button
                                class="accordion-button faq-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseThree"
                                aria-expanded="false"
                                aria-controls="collapseThree"
                            >
                                ¿Qué van a encontrar en este taller?
                            </button>
                        </h3>
                        <div
                            id="collapseThree"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-bs-parent="#accordionFaq"
                        >
                            <div class="accordion-body">
                                <p>
                                    El taller de escritura terapéutica es un
                                    espacio de encuentro con otras mujeres y con
                                    vos misma. A través de consignas
                                    disparadoras te propongo reflexionar sobre
                                    tu propia maternidad, repensarte,
                                    reencontrarte y reconocerte. Tomar
                                    consciencia del período que estás
                                    transitando y ordenar algunos pensamientos.
                                    Luego, en un marco de mucho respeto te
                                    invito a compartir lo que escribas formando
                                    una pequeña tribu, intercambiando miradas,
                                    acompañándose entre ustedes.
                                </p>

                                <p>
                                    La propuesta es totalmente virtual para que
                                    la hagas a tu ritmo y tu tiempo. recibirás
                                    los videos divididos en cuatro encuentros y
                                    allí mismo encontrarás los ejercicios que te
                                    propongo para comenzar a escribir. También
                                    comparto algunos textos míos, y dejo
                                    preguntas abiertas para pensar juntas.
                                </p>

                                <p>
                                    Finalmente habrá un encuentro sincrónico a
                                    través de Zoom, de caracter optativo. Podes
                                    sumarte, y solo escuchar, o si te animas
                                    podes compartir algo de lo que escribiste,
                                    sentiste, descubriste en el proceso de
                                    escritura con otras participantes.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pregunta Nº4 -->
                    <div class="faq-item accordion-item">
                        <h3
                            class="faq-header accordion-header"
                            id="headingFour"
                        >
                            <button
                                class="accordion-button faq-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseFour"
                                aria-expanded="false"
                                aria-controls="collapseFour"
                            >
                                ¿Cómo me anoto?
                            </button>
                        </h3>
                        <div
                            id="collapseFour"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingFour"
                            data-bs-parent="#accordionFaq"
                        >
                            <div class="accordion-body">
                                <br />
                                <p>
                                    Te podes anotar haciendo click
                                    <a href="#inscribirme"> aquí </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pregunta Nº5 -->
                    <div class="faq-item accordion-item">
                        <h3
                            class="faq-header accordion-header"
                            id="headingFive"
                        >
                            <button
                                class="accordion-button faq-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseFive"
                                aria-expanded="false"
                                aria-controls="collapseFive"
                            >
                                ¿Cuánto vale y qué medios de pagos hay?
                            </button>
                        </h3>
                        <div
                            id="collapseFive"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingFive"
                            data-bs-parent="#accordionFaq"
                        >
                            <div class="accordion-body">
                                <p>
                                    El valor del taller es de 2.300 pesos para
                                    los residentes en Argentina. El mismo se
                                    abonará a través de Mercado Pago, hasta 3
                                    cuotas sin interés.
                                </p>

                                <p>
                                    El valor del taller es de 13 Dólares para
                                    los residentes en el resto del mundo. El
                                    mismo se abonará a través de Paypal.
                                </p>

                                <p>
                                    En cualquiera de los dos casos, una vez
                                    enviado el formulario de inscripción, la
                                    página te redireccionará a Mercado Pago o
                                    Paypal, según tu lugar de residencia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ****** INSCRIBIRME ****** -->
            <div id="inscribirme" class="container-contacto">
                <section class="description contacto-description">
                    <h2>Inscripción</h2>
                    <p>
                        Para inscribirte al taller completá el formulario con
                        tus datos. Luego de unos segundos la página te
                        direccionará a Mercado pago o Paypal, según tu lugar de
                        residencia.
                    </p>
                </section>

                <div class="container-contacto-form">
                    <form
                        id="formdata"
                        name="formulario"
                        onsubmit="return false"
                        method="post"
                        class="php-email-form"
                    >
                        <div class="form-fields">
                            <!--Nombre-->
                            <div class="form-control_field name">
                                <input
                                    type="text"
                                    name="name"
                                    placeholder="Nombre y Apellido"
                                    required
                                    tabindex="1"
                                />

                                <div
                                    class="validate"
                                    id="validate_Nombre"
                                    style="display: none"
                                >
                                    El campo Nombre es obligatorio.
                                </div>

                                <div
                                    class="validate"
                                    id="validate_Len_Nombre"
                                    style="display: none"
                                >
                                    Por favor, ingrese al menos 4 caracteres.
                                </div>
                            </div>

                            <!--Teléfono-->
                            <div class="form-control_field phone">
                                <input
                                    type="tel"
                                    name="phone"
                                    placeholder="Teléfono"
                                    required
                                    tabindex="2"
                                />

                                <div
                                    class="validate"
                                    id="validate_Telefono"
                                    style="display: none"
                                >
                                    El campo Teléfono es obligatorio.
                                </div>

                                <div
                                    class="validate"
                                    id="validate_Len_Telefono"
                                    style="display: none"
                                >
                                    Por favor, ingrese al menos 8 caracteres.
                                </div>
                            </div>

                            <!--Email-->
                            <div class="form-control_field email">
                                <input
                                    type="email"
                                    name="email"
                                    placeholder="Email"
                                    required
                                    tabindex="3"
                                />

                                <div
                                    class="validate"
                                    id="validate_Email"
                                    style="display: none"
                                >
                                    El campo Email es obligatorio
                                </div>

                                <div
                                    class="validate"
                                    id="validate_Email_OK"
                                    style="display: none"
                                >
                                    Por favor, ingrese un Email válido.
                                </div>
                            </div>

                            <!--Nacionalidad-->
                            <div class="form-control_field nationality">
                                <select
                                    name="nationality"
                                    id=""
                                    required
                                    tabindex="4"
                                >
                                    <option
                                        value="residencia"
                                        selected="selected"
                                    >
                                        Residencia
                                    </option>

                                    <option value="Argentina">Argentina</option>

                                    <option value="Otro">Otro</option>
                                </select>

                                <div
                                    class="validate"
                                    id="validate_Residencia"
                                    style="display: none"
                                >
                                    Debe seleccionar su lugar de residencia.
                                </div>
                            </div>

                            <!--Mensaje-->
                            <div class="form-control_field message">
                                <textarea
                                    name="message"
                                    id=""
                                    cols="30"
                                    rows="10"
                                    placeholder="Mensaje"
                                    tabindex="5"
                                ></textarea>

                                <div
                                    class="validate"
                                    id="validate_Msj"
                                    style="display: none"
                                >
                                    El campo Mensaje es obligatorio.
                                </div>
                            </div>

                            <!--Captcha-->
                            <div id="re_captcha">
                                <div class="g-recaptcha" data-sitekey="6Lffql4gAAAAAP_dTuaxcTaqmllM9PQcKPlDRgi3">
                                </div> 
                            </div>
                            


                            <!--Botones-->
                            <div class="form-control_field buttons">
                               
                                <button type="reset" tabindex="6">
                                    Borrar
                                </button>

                                <button
                                    id="btn-enviar"

                                    tabindex="7"
                                >
                                    Inscribirme
                                </button>
                            </div>
                         </div>
                    </form>
                </div>
            </div>
        </main>

        <!-- FLECHA -->
        <a href="#" class="back-to-top">
            <i>
                <img class="arrow-up" src="assets/images/simple-up.png" />
            </i>
        </a>

        
    </body>

    <footer>
        <div class="container-footer">
            <div class="footer-menu">
                <h4>Menu</h4>
                <ul>
                    <li>
                        <a href="#inicio">Inicio</a>
                    </li>

                    <li>
                        <a href="#quien-soy">¿Quién Soy?</a>
                    </li>

                    <li>
                        <a href="#mi-taller">Mi Taller</a>
                    </li>

                    <li>
                        <a href="#faq">Preguntas Frecuentes</a>
                    </li>

                    <li>
                        <a href="#inscribirme">Inscribirme</a>
                    </li>
                </ul>
            </div>

            <div class="footer-data">
                <h4>Contacto</h4>
                <p><span> Daniela Effron </span></p>
                <p>Psicóloga (UBA) M.N.: 70306</p>
                <p>Consultora en Crianza</p>
            </div>

            <div class="footer-social_media">
                <h4>Sigamos en contacto</h4>

                <div class="redes-sociales">
                    <div class="footer-info">
                        <a href="mailto:nacerconotroser@gmail.com">
                            <i class="bi bi-envelope"></i>

                            <p>
                                <span> Email:</span> nacerconotroser@gmail.com
                            </p>
                        </a>
                    </div>

                    <div class="footer-info">
                        <a
                            href="https://www.instagram.com/nacer.con.otro.ser/"
                            target="_blank"
                            ><i class="bi bi-instagram"></i>
                            <p><span> Instagram:</span> Nacer con otro ser</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- COPYRIGHT -->
            <div class="footer-copyright">
                &copy; Copyright 2022
                <strong><span>Maximiliano Effron</span></strong
                >. Todos los derechos reservados
            </div>
        </div>
    </footer>
</html>
