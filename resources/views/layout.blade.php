<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Temir Trans Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--End Favicon-->

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">
    @stack('page_css')
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="67">
<!-- start navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top sticky" id="navbar">
    <div class="container">
        <a href="#" class="navbar-brand me-5">
            <img src="images/logo.png" class="logo-light" alt=""/>
            <img src="images/logo.png" class="logo-dark" alt=""/>

        </a>
        <a href="javascript:void(0)" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"><i data-feather="menu"></i></span>
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav navbar-center me-auto mt-lg-0 mt-2">
                <li class="nav-item">
                    <a class="nav-link fw-700" href="{{route('main')}}#home">О КОМПАНИИ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-700" href="{{route('main')}}#feature">СЕРВИСНОЕ ОБСЛУЖИВАНИЕ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-700" href="{{route('main')}}#structure">СТРУКТУРА</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-700" href="{{route('main')}}#partner">ПАРТНЕРЫ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-700" href="{{route('main')}}#contact">КОНТАКТЫ</a>
                </li>
            </ul>
            <div class="mb-4 mb-lg-0">
                <a href="#" class="btn btn-sm nav-btn btn-primary mb-4 mb-lg-0 ms-auto fw-700" data-bs-toggle="modal" data-bs-target="#exampleModal">ВОЙТИ</a>
            </div>
        </div>
    </div>
    <!-- end container -->
</nav>
<!-- end navbar -->

@yield('content')

<!-- start footer -->
<footer class="footer bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6 mb-sm-2">
                <div class="row">
                    <div class="col-3 text-center">
                        <a href="#">
                            <img src="images/logo-footer.png" alt="logo" style="width: 100%"/>
                        </a>
                    </div>
                    <div class="col-9">
                        <span class="fs-16 text-white">
                            ТОО "ТемирТрансСервис" - компания осуществляющая деятельность по Сервисному обслуживанию грузовых вагонов на территории Республики Казахстан и за его пределами.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 d-flex justify-content-center">
                <ul class="list-unstyled footer-list text-white fw-700 pl-3">
                    <li class="pb-1"><a class="fs-15" href="{{route('main')}}#home"><span class="icon fs-12 me-2"></span> О компании</a></li>
                    <li class="pb-1"><a class="fs-15" href="{{route('main')}}#feature"><span class="icon fs-12 me-2"></span> Сервисное обслуживание</a></li>
                    <li class="pb-1"><a class="fs-15" href="{{route('main')}}#structure"><span class="icon fs-12 me-2"></span> Структура</a></li>
                    <li class="pb-1"><a class="fs-15" href="{{route('main')}}#partner"><span class="icon fs-12 me-2"></span> Партнеры</a></li>
                    <li class="pb-1"><a class="fs-15" href="{{route('main')}}#contact"><span class="icon fs-12 me-2"></span> Контакты</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-6 d-flex justify-content-center">
                <ul class="list-unstyled footer-list text-white fw-700">
                    <li class="pb-1"><a class="fs-15" href="{{route('management')}}"><span class="icon fs-12 me-2"></span> Руководство</a></li>
                    <li class="pb-1"><a class="fs-15" href="{{route('docs')}}"><span class="icon fs-12 me-2"></span> Документы</a></li>
                </ul>
                {{--                <div class="card rounded border-0 mt-sm-0 mt-4">--}}
                {{--                    <div class="map rounded">--}}
                {{--                        <div class="bg-overlay rounded position-absolute top-0 right-0 bottom-0 left-0"></div>--}}
                {{--                        <iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" width="100%" height="230" style="border: 0" allowfullscreen></iframe>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</footer>
<!-- end footer -->

<!-- start footer alter -->
<div class="footer-alt bg-footer">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <a href="#" class="text-muted">21tech.kz</a> all rights reserved
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end footer alter -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Войти</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" name="myForm" onsubmit="return validateForm()">
                    <span id="error-msg"></span>
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label class="fw-medium form-label" for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="Email *" id="email" />
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="fw-medium form-label" for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Password *"/>
                                </div>
                                <!-- end col -->
                                <div class="col-12">
                                    <input type="button" id="submit" name="send" class="btn btn-primary mt-2" value="Войти" />
                                </div>
                                <!-- end col -->
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </form>
                <!-- end form -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<script src="{{asset('js/app.js')}}"></script>

@stack('page_js')
</body>

</html>

