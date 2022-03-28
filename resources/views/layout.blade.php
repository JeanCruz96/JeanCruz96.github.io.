<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> {{--para que el navegador no reduzca los elementos de nuestra pagina a medidad que disminuimos los pixeles--}}
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Inicio</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

    <script defer src="/fontawesome-free-5.15.4-web/js/all.js"></script> <!--load all styles para fontawesone con svg js -->
    <link href="/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet"> <!--load all style con css para fontawesome (ya no se usa)-->

 <!-- Style -->
 <link rel="stylesheet" href="assets/css/styles.css">
 <link rel="stylesheet" href="assets/css/bootstrap.css">


 <!-- Google fonts -->
 <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

 <!-- Ionic icons-->
 <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Link Necesario para crear tus propios iconos favicon de tamaño 32x32 -->
    <link rel="shortcut icon" href="iconos_propios/icono_logo_piso.png">
    <!-- Favicons -->
    <!-- <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico"> -->
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>

<body>

    <header class="nav-fijo">
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Acerca de nosotros</h4>
                        <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact
                            information.
                        </p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://www.facebook.com/Inversionesdecofloor/"  target="_blank" class="text-white">Síguenos en Facebook</a></li>
                            <li><a href="#" class="text-white">Síguenos en Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=" navbar navbar-dark bg-dark  ">
                {{-- <a href="#" class="navbar-brand d-flex align-items-center album" style="float:left"  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                    <strong>Album</strong>
                </a> --}}

                <a href="#"><img src="{{asset('iconos_propios/logo_tamano_reducido.png')}}" style="padding-left: 20px" class="img-fluid" width="100%" alt=""></a>
            <div class="container justify-content-end d-flex" >
                <ul class="ul">

                    <li class="li">

                <a class=" navbar-brand d-flex align-items-center sombreado" style="font-size: 15px" href="#portada">Inicio</a>
                    </li>
                    <li class="li">

                <a class=" navbar-brand d-flex align-items-center sombreado"style="font-size: 15px" href="#portfolio">Productos</a>
                    </li>
                    <li class="li">

                <a class="nav-link navbar-brand d-flex align-items-center sombreado" style="font-size: 15px" href="#servicios">Servicios</a>
                    </li>
                    <li class="li">

                <a class="nav-link navbar-brand d-flex align-items-center sombreado" style="font-size: 15px" href="#contact">Contáctanos</a>
                    </li>
            </ul>


     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <nav class="navbar navbar-expand-lg fixed-top collapse navbar-collapse"" id="navbarSupportedContent" >

            </div>
            </div>
      </nav>
    </header>

    <main class="main">
{{-- contenido --}}
@yield('content')

    </main>




    <div id="map"></div>
    {{-- <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaamRJqYdyA_fhrKnjmeikSBVFFLojaMs&callback=iniciarMap"></script> --}}


    <footer class="text-muted py-5 bgDark ">
        <div class="container ">

            <ul class="list-inline ">
                <li class="list-inline-item footer-menu "><a href="# ">Inicio</a></li>
                <li class="list-inline-item footer-menu "><a href="# ">Portfolio</a></li>
                <li class="list-inline-item footer-menu "><a href="# ">About us</a></li>
                <li class="list-inline-item footer-menu "><a href="# ">Pricing</a></li>
                <li class="list-inline-item footer-menu "><a href="# ">Contáctanos</a></li>
            </ul>
            <ul class="list-inline ">
                <li class="list-inline-item ">
                    <a href="https://api.whatsapp.com/send?phone=51928110761&text=Enlace%3A%0Ahttps%3A%2F%2Ffb.me%2Fl2jpqPwlU%0A%0AHe%20visto%20esto%20en%20Facebook...&source_url=https%3A%2F%2Ffb.me%2Fl2jpqPwlU&icebreaker=He%20visto%20esto%20en%20Facebook...&app=facebook&entry_point=post_cta&jid=51928110761%40s.whatsapp.net&context=ARAxAuEjFqgo0KDg4KlXAbJ3cZa1N9KlQFnkF7KENIsT1YzibI7G56ubXHvni7Hmps0YJYc6SRDD1r3HaYVkiE7YkSFfIQrIpDkkmjpv8lOZIVdBA2qW8b21FMw09-tdHFyKm8NfsRgmou6I23XwlZrEeeVyIb91w7XnuajmBMk1Wed8DNqkB7u3nc052yTVSuzekoye41Tv8Y5tEXLF6sbQLzgE3SPuZdLQ_Uc8AqP067HwWj___so&fbclid=IwAR3Zs6Dkjzylr_f95jk3QWRLchccV6qxivETFEKKTrfgQi4NIv3YSBHxdu8" target="_blank "><img src="images/whatsapp(4).svg " class="img-fluid "></a>

                </li>
                <li class="list-inline-item ">
                    <a href="https://www.facebook.com/Inversionesdecofloor/" target="_blank "><img src="images/facebook(2).svg " class="img-fluid "></a>
                </li>
            </ul>
            <ul class="list-inline ">
                <li class="list-inline-item nav-fijo-ws">
                    <a href="https://api.whatsapp.com/send?phone=51928110761&text=Enlace%3A%0Ahttps%3A%2F%2Ffb.me%2Fl2jpqPwlU%0A%0AHe%20visto%20esto%20en%20Facebook...&source_url=https%3A%2F%2Ffb.me%2Fl2jpqPwlU&icebreaker=He%20visto%20esto%20en%20Facebook...&app=facebook&entry_point=post_cta&jid=51928110761%40s.whatsapp.net&context=ARAxAuEjFqgo0KDg4KlXAbJ3cZa1N9KlQFnkF7KENIsT1YzibI7G56ubXHvni7Hmps0YJYc6SRDD1r3HaYVkiE7YkSFfIQrIpDkkmjpv8lOZIVdBA2qW8b21FMw09-tdHFyKm8NfsRgmou6I23XwlZrEeeVyIb91w7XnuajmBMk1Wed8DNqkB7u3nc052yTVSuzekoye41Tv8Y5tEXLF6sbQLzgE3SPuZdLQ_Uc8AqP067HwWj___so&fbclid=IwAR3Zs6Dkjzylr_f95jk3QWRLchccV6qxivETFEKKTrfgQi4NIv3YSBHxdu8" target="_blank "><img src="images/whatsapp(4).svg " class="img-fluid "></a>

                </li>
            </ul>
            <small>©2022 Todos los derechos reservados por O & C Inversiones Decor Floor S.A.C</small>
        </div>
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="/docs/5.1/getting-started/introduction/">getting started guide</a>.</p>
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>

