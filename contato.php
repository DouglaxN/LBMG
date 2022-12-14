<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Laboratório de Biologia Molecular e Genômica</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="LBMG"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="sobre.html">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="publicacoes.html">Publicações</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="noticias.html">Notícias</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contato.php">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('img/contato_backgroud.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Contato</h1>
                        <!-- <span class="subheading">Have questions? I have answers.</span> -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="my-5">
                        <form action="envio.php" method="post" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <div class="form-floating">
                                <input class="form-control" id="name" type="text" placeholder="Digite seu nome" data-sb-validations="required" />
                                <label for="name" name="nome">Nome</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Campo obrigatório</div>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="email" type="email" placeholder="Digite seu e-mail" data-sb-validations="required,email" />
                                <label for="email" name="email">E-mail</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Campo obrigatório</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Esse e-mail não é válido</div>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" id="message" placeholder="Escreva a sua mensagem" style="height: 12rem" data-sb-validations="required"></textarea>
                                <label for="message" name="mensagem">Menssagem</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Campo obrigatório</div>
                            </div>
                            <br />
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Enviado com sucesso</div>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Erro, menssagem não enviada</div>
                            </div>
                            <!-- Submit Button-->
                            <!-- <button type="submit" class="btn btn-primary mb-3">Confirm identity</button> -->

                            <button class="btn btn-primary" id="submitButton" type="submit" name="enviar" >Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer-->
    <footer class="border-top">
        <div class="container px-4 px-lg-5">
            <div class=" redes_sociais row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <img src="img/logo_footer.png" alt="LBMG">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/lbmg_ufrn/" target="_blank">
                                <span class="fa-stack fa-sm">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                            </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/Laborat%C3%B3rio-de-Biologia-Molecular-e-Gen%C3%B4mica-UFRN-1132304963460171" target="_blank">
                                <span class="fa-stack fa-sm">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                            </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/channel/UCK7bLpjv9tbxl9R0lj1JP0A" target="_blank">
                                <span class="fa-stack fa-sm">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                            </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-3">
                    <h6 class="text-muted">Contato</h6>
                    <p class="text-muted local">nucleodegenomica@gmail.com </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-3">
                    <h6 class="text-muted">Localização</h6>
                    <p class="text-muted local">Centro de Biociências da UFRN<br/>Campus Central, Natal - RN</p>
                </div>
                <hr/>
                <div class="copy small text-center text-muted ">Todos os direitos reservados &copy; LBMG 2022</div>
            </div>
        </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js "></script>
</body>

</html>