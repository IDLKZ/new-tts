@extends('layout')
@push('page_css')
    <link rel="stylesheet" href="{{asset('css/icofont/icofont.min.css')}}">
    <style>
        .tam-est {
            background: url("/images/bg/a7R9h6merfRDT07F.jpg") no-repeat;
            background-size: cover;
        }
    </style>
@endpush
@section('content')

    <section class="section mt-5 tam-est d-flex align-items-center">
        <div class="container">
            <h2 class="text-white text-center mb-5">Документы</h2>
            <div class="container">
                <div class="row mt-4 ">
                    <div class="col-md-8 docs p-3 offset-md-2">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 text-center docs-div-icon d-none d-sm-block"><i
                                    class="icofont-file-document docs-icon-left text-primary"></i></div>
                            <div class="col-md-4 col-sm-12 d-flex justify-content-center align-items-center"><h4
                                    class="text-center docs-text-main">Калькуляция</h4></div>
                            <div class="col-md-4 col-sm-12 text-center docs-div-icon">
                                <div class="d-flex justify-content-center"><a class="text-dark"
                                                                           href="/doc/kalkulyaciya1602562952.pdf"
                                                                           download=""><i
                                            class="text-danger icofont-file-pdf docs-icon"></i><br>Скачать</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 ">
                    <div class="col-md-8 docs p-3 offset-md-2">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 text-center docs-div-icon d-none d-sm-block"><i
                                    class="icofont-file-document docs-icon-left text-primary"></i></div>
                            <div class="col-md-4 col-sm-12 d-flex justify-content-center align-items-center"><h4
                                    class="text-center docs-text-main">Договор</h4></div>
                            <div class="col-md-4 col-sm-12 text-center docs-div-icon">
                                <div class="d-flex justify-content-around"><a class="text-dark"
                                                                           href="/doc/dogovor1602563140.docx"
                                                                           download=""><i
                                            class="text-primary icofont-file-word docs-icon"></i><br>Скачать</a><a
                                        class="text-dark"
                                        href="/doc/dogovor1603731786.pdf"
                                        download=""><i class="text-danger icofont-file-pdf docs-icon"></i><br>Скачать</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 ">
                    <div class="col-md-8 docs p-3 offset-md-2">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 text-center docs-div-icon d-none d-sm-block"><i
                                    class="icofont-file-document docs-icon-left text-primary"></i></div>
                            <div class="col-md-4 col-sm-12 d-flex justify-content-center align-items-center"><h4
                                    class="text-center docs-text-main">Форма</h4></div>
                            <div class="col-md-4 col-sm-12 text-center docs-div-icon">
                                <div class="d-flex justify-content-center"><a class="text-dark"
                                                                           href="/doc/forma1603731829.xlsx"
                                                                           download=""><i
                                            class="text-success icofont-file-excel docs-icon"></i><br>Скачать</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
