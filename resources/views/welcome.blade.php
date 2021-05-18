@extends('layout')
@push('page_css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <style>
        .play-btn {
            width: 80px;
            height: 80px;
            background: radial-gradient( rgba(62, 100, 246, 0.8) 60%, rgba(255, 255, 255, 1) 62%);
            border-radius: 50%;
            position: relative;
            display: block;
            /*margin: 100px auto;*/
            box-shadow: 0 0 25px 3px rgba(62, 100, 246, 0.8);
        }

        /* triangle */
        .play-btn::after {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translateX(-40%) translateY(-50%);
            transform: translateX(-40%) translateY(-50%);
            transform-origin: center center;
            width: 0;
            height: 0;
            border-top: 15px solid transparent;
            border-bottom: 15px solid transparent;
            border-left: 25px solid #fff;
            z-index: 100;
            -webkit-transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
            transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

        /* pulse wave */
        .play-btn:before {
            content: "";
            position: absolute;
            width: 150%;
            height: 150%;
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
            -webkit-animation: pulsate1 2s;
            animation: pulsate1 2s;
            -webkit-animation-direction: forwards;
            animation-direction: forwards;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: steps;
            animation-timing-function: steps;
            opacity: 1;
            border-radius: 50%;
            border: 5px solid rgba(255, 255, 255, .75);
            top: -25%;
            left: -25%;
            background: rgba(198, 16, 0, 0);
        }

        @-webkit-keyframes pulsate1 {
            0% {
                -webkit-transform: scale(0.6);
                transform: scale(0.6);
                opacity: 1;
                box-shadow: inset 0px 0px 25px 3px rgba(255, 255, 255, 0.75), 0px 0px 25px 10px rgba(255, 255, 255, 0.75);
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0;
                box-shadow: none;

            }
        }

        @keyframes pulsate1 {
            0% {
                -webkit-transform: scale(0.6);
                transform: scale(0.6);
                opacity: 1;
                box-shadow: inset 0px 0px 25px 3px rgba(255, 255, 255, 0.75), 0px 0px 25px 10px rgba(255, 255, 255, 0.75);
            }
            100% {
                -webkit-transform: scale(1, 1);
                transform: scale(1);
                opacity: 0;
                box-shadow: none;

            }
        }
    </style>
@endpush
@section('content')

    <!-- start hero -->
    <section class="hero-2 position-relative overflow-hidden" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-start text-left">
                <div class="col-lg-6">
                    <h1 class="hero-2-title fw-700 text-white mb-3 pb-2">Темир Транс Сервис</h1>
                    <h6 class="text-white lh-base fw-700 mb-4 pb-3">
                        ТОО «ТемирТрансСервис» предоставляет полный комплекс услуг по ремонту грузовых вагонов и поставке запасных частей, как на территории Республики Казахстан, так и на территории СНГ.
                    </h6>
{{--                    <a class="fancybox button button-play" data-fancybox="" href="https://vimeo.com/248419121"></a>--}}
                    <a data-fancybox href="https://www.youtube.com/watch?v=YHf35s1hPZw" class="play-btn"></a>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end hero -->

    <!-- start solution -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12 mb-4">
                    <h4 class="fw-700 mb-3">
                        <br class="d-md-none d-lg-none d-sm-block">
                        Преимущества сотрудничества:</h4>
                </div>
            </div>
            <div class="row adv">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-3 row justify-content-center align-items-center">
                            <img src="{{asset('images/advant-1.png')}}" alt="" width="45" height="45">
                        </div>
                        <div class="col-md-9 col-lg-9 col-9 text-left fw-semibold">
                            10 региональных участков охватывают всю территорию Казахстана;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-3 row justify-content-center align-items-center">
                            <img src="{{asset('images/advant-2.png')}}" alt="" width="45" height="45">
                        </div>
                        <div class="col-md-9 col-lg-9 col-9 text-left fw-semibold pt-2">
                            В собственности 4 вагоноремонтных депо, 14 цехов текущего отцепочного ремонта вагонов и 1 пункт подготовки вагонов;
                        </div>
                    </div>
                    <div class="row mb-sm-2">
                        <div class="col-md-3 col-lg-3 col-3 row justify-content-center align-items-center">
                            <img src="{{asset('images/advant-3.png')}}" alt="" width="45" height="45">
                        </div>
                        <div class="col-md-9 col-lg-9 col-9 text-left fw-semibold pt-2">
                            Представители нашей компании присутствуют на 60-ти основных станциях для организации контроля качества ремонта вагонов;
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-3 row justify-content-center align-items-center">
                            <img src="{{asset('images/advant-4.png')}}" class="mb-4" alt="" width="45" height="45">
                        </div>
                        <div class="col-md-9 col-lg-9 col-9 text-left fw-semibold">
                            Имеется более 50-ти специализированных вагонов для перевозки колесных пар и запасных частей;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-3 row justify-content-center align-items-center">
                            <img src="{{asset('images/advant-5.png')}}" class="mb-4 mt-3" alt="" width="45" height="45">
                        </div>
                        <div class="col-md-9 col-lg-9 col-9 text-left fw-semibold pt-2">
                            Имеются материальные базы на всех ВРД РК с широкой номенклатурой комплектующих;
                        </div>
                    </div>
                    <div class="row mb-sm-2">
                        <div class="col-md-3 col-lg-3 col-3 row justify-content-center align-items-center">
                            <img src="{{asset('images/advant-6.png')}}" class="mb-3 mt-3" alt="" width="45" height="45">
                        </div>
                        <div class="col-md-9 col-lg-9 col-9 text-left fw-semibold">
                            Создан диспетчерский центр круглосуточно осуществляет контроль за вагонами на сервисном обслуживании.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-3 row justify-content-center align-items-center">
                            <img src="{{asset('images/advant-7.png')}}" class="mb-4" alt="" width="45" height="45">
                        </div>
                        <div class="col-md-9 col-lg-9 col-9 text-left fw-semibold">
                            Нашими партнерами являются все вагоноремонтные предприятия Республики Казахстана и СНГ в части проведения КР, ДР, ТОР;
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end solution -->

    <!-- start feature -->
    <section class="section bg-light overflow-hidden" id="feature">
        <div class="container">
            <div class="row align-items-center">
                <h3 class="fw-semibold lh-base mb-4 text-center">Сервисное обслуживание</h3>
                <div class="col-lg-7 mt-lg-0 mt-5 pt-lg-0 pt-4 m-m-0">

                    <p class="fw-semibold">
                        Сервисное обслуживание - это комплексная услуга, включающая полный цикл работ ремонту вагонов, отслеживания технического состояния вагонов, поставку запчастей и другие услуги, связанные с содержанием вагонного парка в технически исправном состоянии.
                    </p><br>
                    <p>В сервисное обслуживание включены расходы на следующие виды работ:
                    </p>

                    <div class="row mt-5 service-img">
                        <div class="col-md-6 col-lg-6 col-sm-12 d-flex mb-sm-2">
                            <img src="/images/serv-7.png" alt="">
                            <span>Организация работ по ремонтам (деповской, текущий отцепочный ремонт)</span>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12 d-flex">
                            <img src="/images/serv-6.png" alt="">
                            <span>Ремонт запасных частей (колесные пары, литые детали тележек, автосцепки и т.д.)</span>
                        </div>
                    </div>
                    <div class="row mt-4 service-img">
                        <div class="col-md-6 col-lg-6 col-sm-12 d-flex mb-sm-2">
                            <img src="/images/serv-8.png" alt="">
                            <span>Обеспечение необходимыми запасными частями (колесные пары, литые детали тележек, автосцепки и т.д.)</span>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12 d-flex">
                            <img src="/images/serv-4.png" alt="">
                            <span>Доставка запасных частей к месту ремонта</span>
                        </div>
                    </div>
                    <div class="row mt-4 service-img">
                        <div class="col-md-6 col-lg-6 col-sm-12 d-flex mb-sm-2">
                            <img src="/images/serv-2.png" alt="">
                            <span>Круглосуточное слежение за вагонами</span>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12 d-flex">
                            <img src="/images/serv-5.png" alt="">
                            <span>Хранение и дальнейший выкуп металлолома у заказчика</span>
                        </div>
                    </div>
                    <div class="row mt-4 service-img">
                        <div class="col-md-6 col-lg-6 col-sm-12 d-flex mb-sm-2">
                            <img src="/images/serv-1.png" alt="">
                            <span>Хранение запасных частей</span>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12 d-flex">
                            <img src="/images/serv-3.png" alt="">
                            <span>Оплата простоя вагонов в ожидании ремонта на станционных путях</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 bg-service text-center m-mt-40">
                    <img src="{{asset('images/bg-service.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- end feature -->

    <!-- start services -->
    <section class="section" id="service">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-5 bg-service2 text-left">
                    <img src="{{asset('images/bg-service2.png')}}" alt="">
                </div>
                <div class="col-lg-7 mt-lg-0 mt-md-5 mt-sm-0 pt-lg-0 pt-4">
                    <div class="row mt-sm-0 service-img">
                        <div class="col-md-6 col-lg-6 col-sm-12 d-flex mb-sm-2">
                            <img src="/images/serv-9.png" alt="">
                            <span>Организация передислокации вагонов от станции отцепки до станции ремонта</span>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 d-flex mb-sm-2">
                            <img src="/images/serv-10.png" alt="">
                            <span>Участие в расследованиях случаев нарушений безопасности движения</span>
                        </div>
                    </div>
                    <div class="row mt-md-5 mt-sm-0 service-img">
                        <div class="col-md-6 col-lg-6 col-sm-12 d-flex mb-sm-2">
                            <img src="/images/serv-11.png" alt="">
                            <span>Организация подачи/уборки грузовых вагонов в ремонт</span>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 d-flex mb-sm-2">
                            <img src="/images/serv-12.png" alt="">
                            <span>Оформление и раскредитовка перевозочных документов в системе АСУ ДКР</span>
                        </div>
                    </div>
                    <div class="row mt-md-5 mt-sm-0 service-img">
                        <div class="col-md-6 col-lg-6 col-sm-12 d-flex mb-sm-2">
                            <img src="/images/serv-13.png" alt="">
                            <span>Проведение рекламационно-претензионной работы</span>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 d-flex mb-sm-2">
                            <img src="/images/serv-14.png" alt="">
                            <span>Участие в расследованиях случаев разоборудования и хищения деталей на станционных и подъездных путях</span>
                        </div>
                    </div>
                    <div class="row mt-md-5 mt-sm-0 service-img">
                        <div class="col-md-6 col-lg-6 col-sm-12 d-flex">
                            <img src="/images/serv-15.png" alt="">
                            <span>Обеспечение сохранности вагонов на станционных и подъездных путях</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end servies -->

    <!-- start structure -->
    <section class="section" id="structure">
        <div class="container">
            <h3 class="fw-semibold lh-base mb-4 text-center">Структура</h3>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-sm-12 mb-3">
                    <div class="card h-auto">
                        <div class="card-body">
                            <h5 class="card-title text-center">ТОО «ТемирТрансСервис» - управляющая компания</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ТОО «Вагонный сервис» - дочерняя компания</h5>
                            <p class="card-text">
                                Компания предоставляет полный комплекс услуг по организации текущего отцепочного ремонта грузовых вагонов. В собственности имеется 14 цехов на станциях (Кандыагаш, Тобол, Есиль, Нур-Султан, Караганда-Сортировочная, Карабас, Екибастуз-2, Павлодар, Алматы-1, Алтынколь, Достык, Актогай)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ТОО «Торговый Дом ТТС» -  дочерняя компания</h5>
                            <p class="card-text">
                                Один из крупных трейдеров-поставщиков в железнодорожной отрасли Республики Казахстан. Основным видом деятельности компании является оказание комплексных услуг по обеспечению запасными частями грузовых вагонов, доставке и ремонту запасных частей с использование собственных материалов
                            </p>
                        </div>
                    </div>
                </div>
{{--                <div class="col-md-4 col-lg-4 col-sm-12 mb-3">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">ТОО «Astana Railway Services» -  дочерняя компания</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                Сеть вагоноремонтных предприятий на территории Республики Казахстан. В собственности находятся 4 вагоноремонтных депо на станциях Арысь, Балхаш, Кушмурун и Уральск. Силами ТОО «Astana Railway Services» проводится 16% всех плановых видов ремонта в Республики Казахстан. Клиентами являются крупнейшие операторы подвижного состава--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-md-4 col-lg-4 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ТОО «ITMD» - дочерняя компания</h5>
                            <p class="card-text">
                                Осуществляет автоматизацию и модернизацию устаревших бизнес процессов, модернизацию автоматизированных систем учета вагонов
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ТОО «Инспекторский Центр на железнодорожном транспорте» -  дочерняя компания</h5>
                            <p class="card-text">
                                Осуществляет инспекторскую приемку вагонов и комплектующих, а также оказывает консультационную поддержку по техническим вопросам отечественных товаропроизводителей и вагоноремонтных предприятий
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ТОО «Первая мультимодальная компания» - дочерняя компания</h5>
                            <p class="card-text">
                                Оказывает полный спектр транспортно-логистических услуг. Осуществляет лучший комплекс транспортно-логистических решений в Казахстане и СНГ. В парке имеется более 3 000 вагонов
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end structure -->

    <!-- start faq -->
    <section class="section border-top overflow-hidden" id="faq">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center text-white">
                <div class="col-md-8 col-lg-8">
                    <h4 class="fw-semibold lh-base mb-4">Алгоритм сотрудничества</h4>
                    <p class="card-text">
                        При сервисном обслуживании определяется ежесуточная ставка.
                        Ежесуточная сервисная ставка начисляется на каждый вагон находящийся в рабочем парке. В случае перевода вагона в нерабочий парк ставка не начисляется.
                        <br><br>
                        Мы устанавливаем вагону предельное время нахождения в неисправном состоянии. В случае превышения оговоренных сроков мы уплачиваем заказчику неустойку (пеню) за каждый день простоя вагонов в нерабочем парке.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- end faq -->

    <!-- Map -->
    <section id="about">
        <div class="bg-all map-section">
            <div class="container dt">
                <div class="row vm">
                    <div class="col-md-10 offset-md-1 text-center main-text"><h1
                            class="map-title">Карта Казахстана</h1>
                        <p>ТемирТрансСервис на карте Казахстана</p></div>
                    <div class="col-lg-12 p-0 px-md-3">
                        <div id="container"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="point-wrapper">
            <div class="kr-sidebar map-sidebar"></div>
            <div class="tor-sidebar map-sidebar"></div>
        </div>
    </section>
    <!-- End Map -->

    <!-- start testimonial -->
    <section class="section" id="partner">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12 mb-4">
                    <h4 class="fw-semibold mb-3">Партнеры</h4>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-lg-4 mb-5">
                    <div class="client-review">
                        <div class="name position-relative">
                            <img class="img-fluid" src="images/part-1.png" alt="">
                            <h6 class="mt-4 fw-semibold">АО «НК» «КТЖ»</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-5">
                    <div class="client-review">
                        <div class="name position-relative">
                            <img class="img-fluid" src="images/part-2.png" alt="">
                            <h6 class="mt-4 fw-semibold">Камкор Менеджмент</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-5">
                    <div class="client-review">
                        <div class="name position-relative">
                            <img class="img-fluid" src="images/part-3.png" alt="">
                            <h6 class="mt-4 fw-semibold">ТОО «Богатырь Транс»</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-5">
                    <div class="client-review">
                        <div class="name position-relative">
                            <img class="img-fluid" src="images/part-4.png" alt="">
                            <h6 class="mt-4 fw-semibold">АО «Қазтеміртранс»</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-5">
                    <div class="client-review">
                        <div class="name position-relative">
                            <img class="img-fluid" src="images/part-5.png" alt="">
                            <h6 class="mt-4 fw-semibold">ТОО «КТЖ - Грузовые перевозки»</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-5">
                    <div class="client-review">
                        <div class="name position-relative">
                            <img class="img-fluid" src="images/part-6.png" alt="">
                            <h6 class="mt-4 fw-semibold">Transgroup Systems OÜ</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-5">
                    <div class="client-review">
                        <div class="name position-relative">
                            <img class="img-fluid" src="images/part-7.png" alt="">
                            <h6 class="mt-4 fw-semibold">Акмолинский вагоноремонтный завод</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-5">
                    <div class="client-review">
                        <div class="name position-relative">
                            <img class="img-fluid" src="images/part-8.png" alt="">
                            <h6 class="mt-4 fw-semibold">ТОО «Astana Railway Services»</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-5">
                    <div class="client-review">
                        <div class="name position-relative">
                            <img class="img-fluid" src="images/part-9.png" alt="">
                            <h6 class="mt-4 fw-semibold">ТОО «Вагонсервис НС»</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- start testimonial -->
    <section class="section pt-0" id="client">
        <div class="container">
            <h2 class="text-center mb-5">Руководство</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <div class="row " id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="col-md-6 col-lg-6 col-sm-6 text-center">
                                    <h6>ЗАЙНУЛЛИН Павел Арсланович</h6>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 text-left">
                                    <p>Генеральный директор</p>
                                </div>
                            </div>

                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 text-center mb-sm-2"><img
                                                    src="/images/team/zphslXDKUOTJuo60.png" width=200 alt=""
                                                    class="page_speed_1782395957"></div>
                                            <div class="col-md-8 my-text pt-2"><p class="card-text">Образование: </p>
                                                <p class="card-text"></p>
                                                <p class="card-text">Казахский Государственный Национальный университет им.
                                                    Аль-Фараби, специальность - Правоведение (1996 год) </p>
                                                <p class="card-text">Новый Экономический университет имени Т. Рыскулова,
                                                    специальность - Экономика и бизнес (2015 год) </p>
                                                <p class="card-text"></p>
                                                <p class="card-text"></p>
                                                <p class="card-text"></p>
                                                <p class="card-text">Опыт работы: </p>
                                                <p class="card-text"></p>
                                                <p class="card-text">Коммерческие проекты, бизнесмен, собственник компании.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="row" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="col-md-6 col-lg-6 col-sm-6 text-center">
                                    <h6>БАЯЗИТОВА Расима Тлеубергеновна</h6>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 text-left">
                                    <p>Заместитель Генерального директора по корпоративному
                                        развитию, MBA, HRM, сертифицированный коуч ICF, сертифицированный менеджер по
                                        качеству (TUV) QB, QM</p>
                                </div>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 text-center mb-sm-2"><img
                                                    src="/images/team/l2dWwwuwcuStCHma.jpg" width=200 alt=""
                                                    class="page_speed_1782395957"></div>
                                            <div class="col-md-8 my-text pt-2"><p class="card-text">Образование: </p>
                                                <p class="card-text"></p>
                                                <p class="card-text">Казахский Гуманитарно-Юридический университет,
                                                    специальность - Правоведение (предпринимательское право) (2002 год) </p>
                                                <p class="card-text"></p>
                                                <p class="card-text">Магистратура при НОУ «Международная академия бизнеса»,
                                                    специальность – Корпоративный менеджмент, (МВА) (2007-2009 гг.) </p>
                                                <p class="card-text"></p>
                                                <p class="card-text">Докторант (PHD) образовательной программы «Актуальные
                                                    проблемы юриспруденции» Казахский Гуманитарно-Юридический Инновационный
                                                    Университет (2020 год) </p>
                                                <p class="card-text"></p>
                                                <p class="card-text">Опыт работы: </p>
                                                <p class="card-text"></p>
                                                <p class="card-text">17 лет профессиональной деятельности в государственных
                                                    корпорациях, национальных компаниях и в частных производственных
                                                    компаниях.</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="row" id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="col-md-6 col-lg-6 col-sm-6 text-center">
                                    <h6>КАЙРЕШЕВА Мира Владимировна</h6>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 text-left">
                                    <p>Заместитель Генерального директора по финансам, Доктор
                                        делового администрирования (DBA), МВА, сертифицированный профессиональный
                                        бухгалтер</p>
                                </div>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 text-center mb-sm-2"><img
                                                    src="/images/team/MiWHiusI0an8ByI3.jpg" width=200 alt=""
                                                    class="page_speed_1782395957"></div>
                                            <div class="col-md-8 my-text pt-2"><p class="card-text">Образование: </p>
                                                <p class="card-text"></p>
                                                <p class="card-text">Алма-Атинский институт народного хозяйства, специальность -
                                                    Экономика (1991 год) </p>
                                                <p class="card-text"></p>
                                                <p class="card-text">Опыт работы: </p>
                                                <p class="card-text"></p>
                                                <p class="card-text">28 лет профессиональной деятельности в государственных
                                                    органах, национальных компаниях и в частных производственных компаниях.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="row" id="headingFour" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <div class="col-md-6 col-lg-6 col-sm-6 text-center">
                                    <h6>КУРМАНОВ Аскар Жолдасбекович</h6>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 text-left">
                                    <p>Заместитель Генерального директора по производству</p>
                                </div>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 text-center mb-sm-2"><img
                                                    src="/images/team/5exlbtjcbFuc8F5t.JPG" width=200 alt=""
                                                    class="page_speed_1782395957"></div>
                                            <div class="col-md-8 my-text pt-2"><p class="card-text">Образование: </p>
                                                <p class="card-text"></p>
                                                <p class="card-text">Высший колледж транспорта и коммуникации </p>
                                                <p class="card-text">Казахстанский университет путей и сообщения </p>
                                                <p class="card-text">Казахстанский Государственный юридический университет </p>
                                                <p class="card-text"></p>
                                                <p class="card-text"></p>
                                                <p class="card-text">Опыт работы: </p>
                                                <p class="card-text"></p>
                                                <p class="card-text">Более 15 лет профессиональной деятельности в
                                                    государственных, производственных и частных компаниях, из них 10 лет в
                                                    железнодорожной отрасли в области планирования и организации ремонта
                                                    подвижного состава.</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="row" id="headingFive" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <div class="col-md-6 col-lg-6 col-sm-6 text-center">
                                    <h6>МУСИН Жандос Ерназарович</h6>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 text-left">
                                    <p>Коммерческий директор</p>
                                </div>
                            </div>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 text-center mb-sm-2"><img
                                                    src="/images/team/FIcHGTtCMLODH6sL.jpeg" width=200 alt=""
                                                    class="page_speed_1782395957"></div>
                                            <div class="col-md-8 my-text pt-2"><p class="card-text">Образование: </p>
                                                <p class="card-text">Костанайский государственный университет им. А.
                                                    Байтурсынова, специальность - Инженер транспорта (2011 год) </p>
                                                <p class="card-text">Казахская академия транспорта и коммуникаций имени М.
                                                    Тынышпаева, специальность - Вагонное хозяйство (2013 год) </p>
                                                <p class="card-text"></p>
                                                <p class="card-text"></p>
                                                <p class="card-text">Опыт работы: </p>
                                                <p class="card-text">Более 8 лет работы в железнодорожной отрасли</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- start subscription -->
    <section class="service-section overflow-hidden" id="contact">
        <div class="container">
            <div class="row align-items-center rounded p-4">
                <div class="col-lg-6">
                    <h3 class="mb-4 fw-semibold">Оставить заявку</h3>
                    <form method="post" name="myForm">
                        <span id="error-msg"></span>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <!-- end col -->
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" name="phone" placeholder="Телефон *"/>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <input type="button" id="submit" name="send" class="btn btn-primary mt-2 fw-semibold" value="Оставить заявку" />
                                    </div>
                                    <!-- end col -->
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </form>

                </div>
                <div class="col-lg-5 offset-lg-1">
                    <img class="img-fluid mt-sm-0 mt-5" src="images/subscribe-img2.png" alt="">
                </div>
            </div>
            <div class="row px-4">
                <div class="col-lg-8">
                    <h3 class="mt-5 mb-3 fw-semibold"><b>Контакты</b></h3>
                    <div class="row align-items-end">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 row justify-content-start align-items-center">
                                    <div class="col-3">
                                        <svg width="63" height="64" viewBox="0 0 63 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d)">
                                                <rect x="9" y="7" width="45" height="45" rx="22.5" fill="white"/>
                                            </g>
                                            <path d="M40.4727 32.9766L36.5352 31.2891C36.4297 31.2539 36.3242 31.2188 36.1836 31.2188C35.9375 31.2188 35.6914 31.3594 35.5508 31.5352L33.793 33.6797C31.0508 32.3789 28.8711 30.1992 27.5703 27.457L29.7148 25.6992C29.8906 25.5586 30.0312 25.3125 30.0312 25.0312C30.0312 24.9258 29.9961 24.8203 29.9609 24.7148L28.2734 20.7773C28.1328 20.4609 27.8164 20.25 27.4648 20.25C27.4297 20.25 27.3594 20.2852 27.2891 20.2852L23.6328 21.1289C23.2461 21.2344 23 21.5508 23 21.9375C23 30.9727 30.2773 38.25 39.3125 38.25C39.6992 38.25 40.0156 38.0039 40.1211 37.6172L40.9648 33.9609C40.9648 33.8906 40.9648 33.8203 40.9648 33.7852C40.9648 33.4336 40.7539 33.1172 40.4727 32.9766Z" fill="#343433"/>
                                            <defs>
                                                <filter id="filter0_d" x="0.25" y="0.75" width="62.5" height="62.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                                    <feOffset dy="2.5"/>
                                                    <feGaussianBlur stdDeviation="4.375"/>
                                                    <feColorMatrix type="matrix" values="0 0 0 0 0.0588235 0 0 0 0 0.682353 0 0 0 0 0.784314 0 0 0 0.25 0"/>
                                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                                </filter>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="col-9">
                                        <div><b>+7 (7172) 61-06-26</b></div>
                                    </div>
                                </div>
                                <div class="col-md-12 row justify-content-start align-items-center fw-700">
                                    <div class="col-3">
                                        <svg width="63" height="64" viewBox="0 0 63 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d)">
                                                <rect x="9" y="7" width="45" height="45" rx="22.5" fill="white"/>
                                            </g>
                                            <path d="M32 20.5312C27.1484 20.5312 23.2812 24.4336 23.2812 29.25C23.2812 34.1016 27.1484 37.9688 32 37.9688C33.6875 37.9688 35.3398 37.4766 36.7461 36.5625C37.168 36.2812 37.2734 35.7188 36.9219 35.332L36.5703 34.875C36.3242 34.5586 35.832 34.4883 35.4805 34.6992C34.4258 35.3672 33.2305 35.7188 32 35.7188C28.4141 35.7188 25.5312 32.8359 25.5312 29.25C25.5312 25.6992 28.4141 22.7812 32 22.7812C35.5156 22.7812 38.4688 24.8203 38.4688 28.4062C38.4688 29.7773 37.6953 31.2188 36.3945 31.3594C35.7969 31.3594 35.7969 30.9023 35.9375 30.3047L36.7461 26.0508C36.8516 25.5234 36.4648 25.0312 35.9375 25.0312H34.3555C34.1094 25.0312 33.8984 25.2422 33.8633 25.4531V25.4883C33.3711 24.8555 32.457 24.7148 31.7539 24.7148C29.1523 24.7148 26.9375 26.8945 26.9375 30.0234C26.9375 32.3438 28.2031 33.75 30.3125 33.75C31.2266 33.75 32.3164 33.2227 32.9141 32.4141C33.2656 33.6094 34.3555 33.6094 35.4102 33.6094C39.2422 33.6094 40.7188 31.0781 40.7188 28.4062C40.7188 23.625 36.8516 20.5312 32 20.5312ZM31.2266 31.2539C30.4531 31.2539 29.9609 30.6914 29.9609 29.8125C29.9609 28.2305 31.0508 27.2461 32 27.2461C32.8086 27.2461 33.2656 27.8086 33.2656 28.6875C33.2656 30.2695 32.0703 31.2539 31.2266 31.2539Z" fill="#343433"/>
                                            <defs>
                                                <filter id="filter0_d" x="0.25" y="0.75" width="62.5" height="62.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                                    <feOffset dy="2.5"/>
                                                    <feGaussianBlur stdDeviation="4.375"/>
                                                    <feColorMatrix type="matrix" values="0 0 0 0 0.0588235 0 0 0 0 0.682353 0 0 0 0 0.784314 0 0 0 0.25 0"/>
                                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                                </filter>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="col-9">
                                        <b>tts@ttservice.kz</b>
                                    </div>
                                </div>
                                <div class="col-md-12 row justify-content-start align-items-center fw-700">
                                    <div class="col-3">
                                        <svg width="63" height="64" viewBox="0 0 63 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d)">
                                                <rect x="9" y="7" width="45" height="45" rx="22.5" fill="white"/>
                                            </g>
                                            <path d="M32 19.5C27.8203 19.5 24.5 22.8984 24.5 27C24.5 29.8125 25.3984 30.6719 30.3984 38.6406C31.1406 39.8125 32.8203 39.8125 33.5625 38.6406C38.5625 30.6719 39.5 29.8125 39.5 27C39.5 22.8594 36.1016 19.5 32 19.5ZM32 37.625C27 29.6562 26.375 29.1484 26.375 27C26.375 23.9141 28.875 21.375 32 21.375C35.0859 21.375 37.625 23.9141 37.625 27C37.625 29.1484 37 29.5781 32 37.625ZM28.875 27C28.875 28.7578 30.2422 30.125 32 30.125C33.7188 30.125 35.125 28.7578 35.125 27C35.125 25.2812 33.7188 23.875 32 23.875C30.2422 23.875 28.875 25.2812 28.875 27Z" fill="#343433"/>
                                            <defs>
                                                <filter id="filter0_d" x="0.25" y="0.75" width="62.5" height="62.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                                    <feOffset dy="2.5"/>
                                                    <feGaussianBlur stdDeviation="4.375"/>
                                                    <feColorMatrix type="matrix" values="0 0 0 0 0.0588235 0 0 0 0 0.682353 0 0 0 0 0.784314 0 0 0 0.25 0"/>
                                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                                </filter>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="col-9">
                                        <b>Республика Казахстан,
                                            г.Нур-Султан, ул.Кунаева 10, 26 этаж.</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-end justify-content-around mt-3">
{{--                    <div class="col-md-4 pb-4">--}}
                        <a href="#"><img src="https://img.icons8.com/carbon-copy/40/000000/facebook-new.png"/></a>
                        <a href="#"><img src="https://img.icons8.com/carbon-copy/40/000000/twitter--v1.png"/></a>
                        <a href="#"><img src="https://img.icons8.com/carbon-copy/40/000000/instagram-new.png"/></a>
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- end subscription -->

@endsection
@push('page_js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{asset('js/mapdata.js')}}"></script>
    <script src="{{asset('js/map.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-lazy@1.7.10/jquery.lazy.min.js" defer></script>
    <script defer>
        $(function (){
            $('.play-btn').Lazy();
        })

        $('[data-fancybox]').fancybox({
            youtube : {
                controls : 0,
                showinfo : 0
            },
            vimeo : {
                color : 'f00'
            }
        });
    </script>
    <script>
        $('.navbar-nav>li>a').on('click', function(){
            $('.navbar-collapse').collapse('hide');
        });

        $(window).scroll(function (){
            $('.navbar-collapse').collapse('hide');
        })
    </script>
@endpush
