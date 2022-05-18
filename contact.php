<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Albrecht</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css"> <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg bg-light">
                        <a class="navbar-brand" href="#"><img src="images/logo.svg" alt="logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fa fa-bars"></i>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">sobre nos</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Solucoes</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contato</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Buscar por produto ou serviço" aria-label="Search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            <div class="nav-item dropdown language">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe" aria-hidden="true"></i></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">PT</a>
                                    <a class="dropdown-item" href="#">ES</a>
                                    <a class="dropdown-item" href="#">EN</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="breadcrums-main orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">CONTATO </a></li>
                            <li class="breadcrumb-item active" aria-current="page">FALE CONOSCO</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-form orange section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="section-title orange-border">
                        <h2>FALE CONOSCO</h2>
                    </div>
                    <form action="#">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nome completo</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Empresa </label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Mensagem</label>
                                    <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="submit">
                                    <button type="submit" class="btn-submit">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="onda-estamos section-gap bg-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="section-title">
                        <h2>ONDE ESTAMOS</h2>
                    </div>
                    <div class="address-location">
                        <p>
                            <strong> Albrecht Equipamentos Industriais Ltda.</strong> <br>
                            BR 101, km 29 – Caixa Postal 7171<br>
                            CEP 89239-052 - Pirabeiraba<br>
                            Joinville/SC
                        </p>
                        <p>
                            PABX: +55 (47) 4009-3300 <br>
                            <a href="mailto:albrecht@albrecht.com.br">albrecht@albrecht.com.br</a>
                        </p>
                        <p>
                            <strong> Expediente: </strong> <br>
                            Segunda à sexta<br>
                            7h30 - 12h<br>
                            13h - 17h30
                        </p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21016.040401442777!2d2.45100533880156!3d48.819965081013905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60d0f4ce33b83%3A0xe6c94d8bdb122f8e!2sJoinville-le-Pont%2C%20France!5e0!3m2!1sen!2sin!4v1650805896274!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="">
        <div class="container">
            <div class="row ">
                <div class="col-sm-3">
                    <div class="footer-logo">
                        <a href="javascript:;"><img src="images/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="footer-grid">
                        <div class="footer-links">
                            <h3>SOBRE NÓS</h3>
                            <a href="javascript:;">Institucional</a>
                            <a href="javascript:;">Nossa história</a>
                            <a href="javascript:;">Casos de Sucesso</a>
                        </div>
                        <div class="footer-links">
                            <h3>SOLUÇÕES</h3>
                            <a href="javascript:;">Linha Verde</a>
                            <a href="javascript:;">Linha Azul</a>
                            <a href="javascript:;">Linha Amarela</a>
                            <a href="javascript:;">Saneamento</a>
                            <a href="javascript:;">Projetos Especiais</a>
                            <a href="javascript:;">Serviços</a>
                            <a href="javascript:;">Central de catálogos</a>
                        </div>
                        <div class="footer-links">
                            <h3>CONTATO</h3>
                            <a href="javascript:;">Fale conosco</a>
                            <a href="javascript:;">Representantes</a>
                            <a href="javascript:;">Trabalhe Conosco</a>
                            <a href="javascript:;">Assistência Técnica</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="desde-img">
                        <img src="images/footer-top.png" alt="footer-top">
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-sm-6">
                    <div class="left-img">
                        <div>
                            <img src="images/Selo_SGS.png" alt="Selo_SGS">
                        </div>
                        <div>
                            <img src="images/Abimaq_vertical.png" alt="Abimaq_vertical">
                        </div>
                        <div>
                            <img src="images/Ind_Bras.png" alt="Ind_Bras">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="right-img">
                        <a href="javascript:;"><i class="fa fa-facebook-square"></i></a>
                        <a href="javascript:;"><i class="fa fa-instagram"></i></a>
                        <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                        <a href="javascript:;"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-rights">
            <p> Copyright Albrecht 2021. Todos direitos reservados. </p>
        </div>
    </footer>
    <div class="sticky-icon">
        <a href="javascript:;"><img src="images/WhatsApp.png" alt="WhatsApp"></a>
    </div>
    <!-- jquery latest version -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
</body>

</html>