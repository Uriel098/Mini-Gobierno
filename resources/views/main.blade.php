@vite("styles.css")
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing Page - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#!">Gobierno</a>
                <style>
                    .btn-container {
                        text-align: right;
                    }
                    .btn {
                        display: inline-block;
                    }
                </style>
                
                <div class="btn-container">
                    <a class="btn btn-primary" href="#signup">Registrarse</a>
                    <a class="btn btn-secundary" href="#signin">Iniciar Sesion</a>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <style>
                                .text-normal {
                                    font-size: 20px; /* Cambia el tamaño de la letra a tu preferencia */
                                    font-weight: normal; /* Elimina el estilo en negrita */
                                }
                            </style>

                            <h1 class="mb-5">Gobierno del Estado de Sonora</h1>
                            <p class="mb-5 text-normal">El Gobierno del Estado de Sonora, ubicado en el centro del país, despliega una gestión enfocada en el progreso, la seguridad y el bienestar de sus habitantes.</p>
                            <!-- Signup form-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <!-- Email address input-->
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        <p>To activate this form, sign up at</p>
                                        <a class="text-white" href="https://startbootstrap.com/solution/contact-forms"\>https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
        <section class="features-icons bg-light">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                            <h3 class="text-center">Misión</h3>
                            <p class="lead mb-0">La misión del Gobierno del Estado de Sonora es promover el bienestar integral de todos sus habitantes, garantizando el acceso a servicios públicos de calidad, fomentando el desarrollo económico y social, y asegurando la seguridad y la justicia para todos. Busca construir un estado próspero, inclusivo y sustentable, donde cada persona tenga la oportunidad de alcanzar su máximo potencial y contribuir al progreso de la sociedad.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                            <h3 class="text-center">Visión</h3>
                            <p class="lead mb-0">La visión del Gobierno del Estado de Sonora es ser un referente nacional e internacional en materia de desarrollo humano, económico y social. Busca consolidar un estado moderno, innovador y competitivo, que brinde oportunidades de crecimiento y mejora continua para todos sus habitantes. Aspira a ser reconocido por su calidad de vida, su diversidad cultural y su liderazgo en la promoción del bienestar y la igualdad de oportunidades.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('https://i0.wp.com/lopezdoriga.com/wp-content/uploads/2018/11/imagen-gobierno.jpg?ssl=1'); background-size: contain; background-repeat: no-repeat; background-position: center;"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Poder Ejecutivo</h2>
                        <p class="lead mb-0">El poder ejecutivo del Estado de Sonora está encabezado por un gobernador, quien es el jefe del gobierno estatal y es elegido por voto popular para un período de seis años sin posibilidad de reelección inmediata. El gobernador es responsable de dirigir la administración pública estatal y de implementar políticas para el desarrollo y el bienestar de la población.</p> 
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('https://www.gob.mx/cms/uploads/image/file/169368/1.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Division Administrativa</h2>
                        <p class="lead mb-0">El Estado de Sonora se divide en municipios, cada uno con su propio gobierno local encabezado por un presidente municipal. Estos municipios son responsables de la gestión de los asuntos locales dentro de sus límites territoriales.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('https://st3.depositphotos.com/1483008/13043/i/450/depositphotos_130434532-stock-photo-national-palace-mexico-city.jpg');background-size: cover; background-repeat: no-repeat; background-position: center;"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Legislatura Estatal</h2>
                        <p class="lead mb-0">El poder legislativo del Estado de Sonora está representado por el Congreso del Estado, que es un órgano unicameral compuesto por diputados estatales elegidos por voto popular. El Congreso es responsable de legislar sobre asuntos de competencia estatal y fiscalizar las acciones del poder ejecutivo estatal.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials-->
        <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">Desarrolladores de la Página</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-1.jpg" alt="..." />
                            <h5>Karolina Arvizu</h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-2.jpg" alt="..." />
                            <h5>Uriel Arellano</h5>
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-3.jpg" alt="..." />
                            <h5>Giselle Souffle</h5>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action-->
        <section class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="mb-4">Estas listo para realizar algun tramite? Registrate ahora!!</h2>
                        <!-- Signup form-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <p>To activate this form, sign up at</p>
                                    <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">About</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Contact</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2023. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="https://www.facebook.com/GobiernoSonora"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="https://twitter.com/gobiernosonora?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/segobsonora/"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
