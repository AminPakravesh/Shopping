@extends('client.layout.master')

@section('content')

    <!-- slider-main--------------------------->
    <div class="container-main">
        <div class="d-block">
            <div class="col-lg-8 col-xs-12 pr">
                <div class="slider-main-container d-block">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($slides as $slide)
                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                    @if($isActive == $slide->id) class="active" @endif></li>
                            @endforeach
                        </ol>

                        <div class="carousel-inner">
                            @foreach($slides as $slide)
                                <div class="carousel-item @if($isActive == $slide->id) active @endif  ">
                                    <a href="{{$slide->link}}">
                                        <img src="{{str_replace('public','/storage',$slide->image)}}"
                                             class="d-block w-100" alt="...">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                       data-slide="prev">
                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                       data-slide="next">
                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- adplacement--------------------------->
        <div class="col-lg-4 col-md-4 col-xs-12 pl mt-1">
            <div class="adplacement-container-column">
                <a href="#" class="adplacement-item">
                    <div class="adplacement-sponsored-box">
                        <img src="client/images/adplacement/a-1.jpg">
                    </div>
                </a>
                <a href="#" class="adplacement-item">
                    <div class="adplacement-sponsored-box">
                        <img src="client/images/adplacement/a-2.jpg">
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12 pr">
            <div class="adplacement-container-column mt-4">
                <a href="#" class="adplacement-item img-banner">
                    <div class="adplacement-sponsored-box">
                        <img src="client/images/adplacement/a-3.jpg">
                    </div>
                </a>
            </div>
        </div>
        <!-- adplacement--------------------------->

        <!-- slider-amazing------------------------>
        <div class="slider-widget-products slider-content-tabs slider-amazing-product">
            <div class="widget widget-product card slider-content-tabs">
                <header class="card-header">
                    <span class="title-one">?????????????? ???????? ??????????</span>
                    <h3 class="card-title"></h3>
                </header>
                <div class="product-carousel product-amazing owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                             style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1162px;">
                            <div class="owl-item tab-item active" style="width: 222.313px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#" class="d-block hover-img-link">
                                        <img src="client/images/slider-amazing/as-1.jpg" class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            ???? ?????? ???? ?????????? ?????????? ?????? VivoBook Flip TP510UQ ??? C
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del><span>12,000,000<span>??????????</span></span></del>
                                        <ins><span>11,180,000<span>??????????</span></span></ins>
                                    </div>
                                    <div class="countdown-timer">
                                        <div class="countdown h4" data-date-time="10/10/2025 12:00"
                                             data-labels="{&quot;label-day&quot;: &quot;??????&quot;, &quot;label-hour&quot;: &quot;????????&quot;, &quot;label-minute&quot;: &quot;??????????&quot;, &quot;label-second&quot;: &quot;??????????&quot;}">
                                            <div class="countdown-item">
                                                <div class="countdown-value">155</div>
                                                <div class="countdown-label">??????</div>
                                            </div>
                                            <div class="countdown-item">
                                                <div class="countdown-value">10</div>
                                                <div class="countdown-label">????????</div>
                                            </div>
                                            <div class="countdown-item">
                                                <div class="countdown-value">16</div>
                                                <div class="countdown-label">??????????</div>
                                            </div>
                                            <div class="countdown-item">
                                                <div class="countdown-value">01</div>
                                                <div class="countdown-label">??????????</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item tab-item active" style="width: 222.313px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#" class="d-block hover-img-link">
                                        <img src="client/images/slider-amazing/as-2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            ?????????? ?? ?????????? ?????????????? ?????? HM34
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del><span>9,000,000<span>??????????</span></span></del>
                                        <ins><span>8,500,000<span>??????????</span></span></ins>
                                    </div>
                                    <div class="countdown-timer">
                                        <div class="countdown h4" data-date-time="10/10/2025 12:00"
                                             data-labels="{&quot;label-day&quot;: &quot;??????&quot;, &quot;label-hour&quot;: &quot;????????&quot;, &quot;label-minute&quot;: &quot;??????????&quot;, &quot;label-second&quot;: &quot;??????????&quot;}">
                                            <div class="countdown-item">
                                                <div class="countdown-value">155</div>
                                                <div class="countdown-label">??????</div>
                                            </div>
                                            <div class="countdown-item">
                                                <div class="countdown-value">10</div>
                                                <div class="countdown-label">????????</div>
                                            </div>
                                            <div class="countdown-item">
                                                <div class="countdown-value">16</div>
                                                <div class="countdown-label">??????????</div>
                                            </div>
                                            <div class="countdown-item">
                                                <div class="countdown-value">01</div>
                                                <div class="countdown-label">??????????</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item tab-item active" style="width: 222.313px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#" class="d-block hover-img-link">
                                        <img src="client/images/slider-amazing/as-3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            ???????????????? ?????? ???????? 21.5 ?????????? ?????????? ?????? AIO V222UAK-B
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del><span>12,000,000<span>??????????</span></span></del>
                                        <ins><span>11,180,000<span>??????????</span></span></ins>
                                    </div>
                                    <div class="countdown-timer">
                                        <div class="countdown h4" data-date-time="10/10/2025 12:00"
                                             data-labels="{&quot;label-day&quot;: &quot;??????&quot;, &quot;label-hour&quot;: &quot;????????&quot;, &quot;label-minute&quot;: &quot;??????????&quot;, &quot;label-second&quot;: &quot;??????????&quot;}">
                                            <div class="countdown-item">
                                                <div class="countdown-value">155</div>
                                                <div class="countdown-label">??????</div>
                                            </div>
                                            <div class="countdown-item">
                                                <div class="countdown-value">10</div>
                                                <div class="countdown-label">????????</div>
                                            </div>
                                            <div class="countdown-item">
                                                <div class="countdown-value">16</div>
                                                <div class="countdown-label">??????????</div>
                                            </div>
                                            <div class="countdown-item">
                                                <div class="countdown-value">01</div>
                                                <div class="countdown-label">??????????</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item tab-item active" style="width: 222.313px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#" class="d-block hover-img-link">
                                        <img src="client/images/slider-amazing/as-4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            ?????????? ???? ?????? ?????? EP-NG930
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del><span>8,000,000<span>??????????</span></span></del>
                                        <ins><span>6,500,000<span>??????????</span></span></ins>
                                    </div>
                                    <div class="countdown-timer">
                                        <div class="countdown h4" data-date-time="10/10/2025 12:00"
                                             data-labels="{&quot;label-day&quot;: &quot;??????&quot;, &quot;label-hour&quot;: &quot;????????&quot;, &quot;label-minute&quot;: &quot;??????????&quot;, &quot;label-second&quot;: &quot;??????????&quot;}">
                                            <div class="countdown-item">
                                                <div class="countdown-value">155</div>
                                                <div class="countdown-label">??????</div>
                                            </div>
                                            <div class="countdown-item">
                                                <div class="countdown-value">10</div>
                                                <div class="countdown-label">????????</div>
                                            </div>
                                            <div class="countdown-item">
                                                <div class="countdown-value">16</div>
                                                <div class="countdown-label">??????????</div>
                                            </div>
                                            <div class="countdown-item">
                                                <div class="countdown-value">01</div>
                                                <div class="countdown-label">??????????</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item tab-item" style="width: 222.313px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#" class="d-block hover-img-link">
                                        <img src="client/images/slider-amazing/as-5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            ???????????????? ???? ???? ???? ???????????? ?????????????? ?????? 55NU7900 ???????? 55 ????????
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del><span>14,500,000<span>??????????</span></span></del>
                                        <ins><span>13,500,000<span>??????????</span></span></ins>
                                    </div>
                                    <div class="countdown-timer">
                                        <div class="countdown h4" data-date-time="10/10/2025 12:00"
                                             data-labels="{&quot;label-day&quot;: &quot;??????&quot;, &quot;label-hour&quot;: &quot;????????&quot;, &quot;label-minute&quot;: &quot;??????????&quot;, &quot;label-second&quot;: &quot;??????????&quot;}">
                                            <div class="countdown-item">
                                                <div class="countdown-value">155</div>
                                                <div class="countdown-label">??????</div>
                                            </div>
                                            <div class="countdown-item">
                                                <div class="countdown-value">10</div>
                                                <div class="countdown-label">????????</div>
                                            </div>
                                            <div class="countdown-item">
                                                <div class="countdown-value">16</div>
                                                <div class="countdown-label">??????????</div>
                                            </div>
                                            <div class="countdown-item">
                                                <div class="countdown-value">01</div>
                                                <div class="countdown-label">??????????</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-xs-12 pl">
            <div class="content-widget-amazing pb-4 mt-2">
                <section id="amazing-slider" class="carousel slide carousel-fade card" data-ride="carousel">
                    <div class="row m-0">
                        <ol class="carousel-indicators pr-0">
                            <li class="active" data-target="#amazing-slider" data-slide-to="0">
                                <img src="client/images/slider-amazing/as-1.jpg" class="img-fluid">
                            </li>
                            <li data-target="#amazing-slider" data-slide-to="1" class="">
                                <img src="client/images/slider-amazing/as-2.jpg" class="img-fluid">
                            </li>
                            <li data-target="#amazing-slider" data-slide-to="2" class="">
                                <img src="client/images/slider-amazing/as-3.jpg" class="img-fluid">
                            </li>
                            <li data-target="#amazing-slider" data-slide-to="3" class="">
                                <img src="client/images/slider-amazing/as-4.jpg" class="img-fluid">
                            </li>
                            <li data-target="#amazing-slider" data-slide-to="4" class="">
                                <img src="client/images/slider-amazing/as-5.jpg" class="img-fluid">
                            </li>
                            <a class="carousel-control-prev" href="#amazing-slider" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#amazing-slider" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </ol>
                        <div class="carousel-inner p-0 col-12">
                            <div class="carousel-item active">
                                <div class="row m-0">
                                    <div class="right-col col-5 d-flex align-items-center">
                                        <a class="w-100 text-center img-link-amazing" href="#">
                                            <img src="client/images/slider-amazing/as-1.jpg" class="img-fluid"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="col-7">
                                        <div class="carousel-content">
                                            <div class="discount">
                                                    <span class="discount-percent">6.2
                                                        <i class="fa fa-percent"></i>
                                                    </span>
                                            </div>
                                            <h2 class="product-title">
                                                <a href="#"> ???? ?????? ???? ?????????? ?????????? ?????? VivoBook Flip TP510UQ ??? C
                                                </a>
                                            </h2>
                                            <div class="price text-center">
                                                <del><span>12,000,000<span>??????????</span></span></del>
                                                <ins><span>11,180,000<span>??????????</span></span></ins>
                                            </div>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <i class="mdi mdi-check text-success"></i>
                                                    <span class="title">?????????? ?????????? ??????????: </span>
                                                    <span class="text">???? ?????????????? </span>
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="mdi mdi-check text-success"></i>
                                                    <span class="title">?????????? ?????????? ????: </span>
                                                    <span class="text">8 ???????????????? </span>
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="mdi mdi-check text-success"></i>
                                                    <span class="title">?????? ????????????????: </span>
                                                    <span class="text">Core i5 </span>
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="mdi mdi-check text-success"></i>
                                                    <span class="title">?????? ???????? ??????????: </span>
                                                    <span class="text"> 1080 ?? 1920 </span>
                                                </li>
                                            </ul>
                                            <div class="countdown-timer">
                                                <div class="countdown h4" data-date-time="10/10/2025 12:00"
                                                     data-labels='{"label-day": "??????", "label-hour": "????????", "label-minute": "??????????", "label-second": "??????????"}'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row m-0">
                                    <div class="right-col col-5 d-flex align-items-center">
                                        <a class="w-100 text-center img-link-amazing" href="#">
                                            <img src="client/images/slider-amazing/as-2.jpg" class="img-fluid"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="col-7">
                                        <div class="carousel-content">
                                            <div class="discount">
                                                    <span class="discount-percent">3.2
                                                        <i class="fa fa-percent"></i>
                                                    </span>
                                            </div>
                                            <h2 class="product-title">
                                                <a href="#"> ?????????? ?? ?????????? ?????????????? ?????? HM34 </a>
                                            </h2>
                                            <div class="price text-center">
                                                <del><span>9,000,000<span>??????????</span></span></del>
                                                <ins><span>8,500,000<span>??????????</span></span></ins>
                                            </div>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <i class="mdi mdi-check text-success"></i>
                                                    <span class="title">?????? ????????: </span>
                                                    <span class="text">????????</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="mdi mdi-check text-success"></i>
                                                    <span class="title">?????????? ?????? ?????????? ??????: </span>
                                                    <span class="text">??????</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="mdi mdi-check text-success"></i>
                                                    <span class="title">??????????????: </span>
                                                    <span class="text">????????</span>
                                                </li>
                                            </ul>
                                            <div class="countdown-timer">
                                                <div class="countdown h4" data-date-time="10/10/2025 12:00"
                                                     data-labels='{"label-day": "??????", "label-hour": "????????", "label-minute": "??????????", "label-second": "??????????"}'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row m-0">
                                    <div class="right-col col-5 d-flex align-items-center">
                                        <a class="w-100 text-center img-link-amazing" href="#">
                                            <img src="client/images/slider-amazing/as-3.jpg" class="img-fluid"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="col-7">
                                        <div class="carousel-content">
                                            <div class="discount">
                                                    <span class="discount-percent">2.2
                                                        <i class="fa fa-percent"></i>
                                                    </span>
                                            </div>
                                            <h2 class="product-title">
                                                <a href="#">???????????????? ?????? ???????? 21.5 ?????????? ?????????? ?????? AIO V222UAK-B</a>
                                            </h2>
                                            <div class="price text-center">
                                                <del><span>12,000,000<span>??????????</span></span></del>
                                                <ins><span>11,180,000<span>??????????</span></span></ins>
                                            </div>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <i class="mdi mdi-check text-success"></i>
                                                    <span class="title">?????????? ?????????? ??????????: </span>
                                                    <span class="text">500 ????????????????</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="mdi mdi-check text-success"></i>
                                                    <span class="title">?????????? ?????????? ????: </span>
                                                    <span class="text">4 ???????????????? </span>
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="mdi mdi-check text-success"></i>
                                                    <span class="title">?????? ????????????????: </span>
                                                    <span class="text">Pentium </span>
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="mdi mdi-check text-success"></i>
                                                    <span class="title">?????? ???????? ??????????: </span>
                                                    <span class="text"> 1080 ?? 1920 </span>
                                                </li>
                                            </ul>
                                            <div class="countdown-timer">
                                                <div class="countdown h4" data-date-time="10/10/2025 12:00"
                                                     data-labels='{"label-day": "??????", "label-hour": "????????", "label-minute": "??????????", "label-second": "??????????"}'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row m-0">
                                    <div class="right-col col-5 d-flex align-items-center">
                                        <a class="w-100 text-center img-link-amazing" href="#">
                                            <img src="client/images/slider-amazing/as-4.jpg" class="img-fluid"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="col-7">
                                        <div class="carousel-content">
                                            <div class="discount">
                                                    <span class="discount-percent">4.2
                                                        <i class="fa fa-percent"></i>
                                                    </span>
                                            </div>
                                            <h2 class="product-title">
                                                <a href="#">
                                                    ?????????? ???? ?????? ?????? EP-NG930
                                                </a>
                                            </h2>
                                            <div class="price text-center">
                                                <del><span>8,000,000<span>??????????</span></span></del>
                                                <ins><span>6,500,000<span>??????????</span></span></ins>
                                            </div>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <i class="mdi mdi-check text-success"></i>
                                                    <span class="title">?????? ?????????? ??????????: </span>
                                                    <span class="text"> 2.0 ???????? ?????????? ???????? ?? ???????????? </span>
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="mdi mdi-check text-success"></i>
                                                    <span class="title">?????????? ?????????? ??????????: </span>
                                                    <span class="text">1</span>
                                                </li>
                                            </ul>
                                            <div class="countdown-timer">
                                                <div class="countdown h4" data-date-time="10/10/2025 12:00"
                                                     data-labels='{"label-day": "??????", "label-hour": "????????", "label-minute": "??????????", "label-second": "??????????"}'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item  finished">
                                <div class="row m-0">
                                    <div class="right-col col-5 d-flex align-items-center">
                                        <a class="w-100 text-center img-link-amazing" href="#">
                                            <img src="client/images/slider-amazing/as-5.jpg" class="img-fluid"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="col-7">
                                        <div class="carousel-content">
                                            <div class="discount">
                                                    <span class="discount-percent">5.2
                                                        <i class="fa fa-percent"></i>
                                                    </span>
                                            </div>
                                            <h2 class="product-title">
                                                <a href="#">
                                                    ???????????????? ???? ???? ???? ???????????? ?????????????? ?????? 55NU7900 ???????? 55 ????????
                                                </a>
                                            </h2>
                                            <div class="price text-center">
                                                <del><span>14,500,000<span>??????????</span></span></del>
                                                <ins><span>13,500,000<span>??????????</span></span></ins>
                                            </div>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <i class="mdi mdi-check text-success"></i>
                                                    <span class="title">?????????? USB: </span>
                                                    <span class="text">???????? </span>
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="mdi mdi-check text-success"></i>
                                                    <span class="title">?????????? ??????????: </span>
                                                    <span class="text">Ultra HD - 4K</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="mdi mdi-check text-success"></i>
                                                    <span class="title">???????? ????????????: </span>
                                                    <span class="text">???????? </span>
                                                </li>
                                            </ul>
                                            <div class="countdown-timer">
                                                <div class="countdown h4" data-date-time="10/10/2025 12:00"
                                                     data-labels='{"label-day": "??????", "label-hour": "????????", "label-minute": "??????????", "label-second": "??????????"}'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- slider-amazing------------------------>
    </div>
    </div>
    <!-- adplacement--------------------------->
    <div class="container-main">
        <div class="d-block">
            <div class="adplacement-container-row">
                <div class="col-12">
                    <a href="#" class="adplacement-item mb-4">
                        <div class="adplacement-sponsored_box">
                            <img src="client/images/adplacement/a-8.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 pr">
                    <a href="#" class="adplacement-item">
                        <div class="adplacement-sponsored_box">
                            <img src="client/images/adplacement/a-4.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 pr">
                    <a href="#" class="adplacement-item">
                        <div class="adplacement-sponsored_box">
                            <img src="client/images/adplacement/a-5.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 pr">
                    <a href="#" class="adplacement-item">
                        <div class="adplacement-sponsored_box">
                            <img src="client/images/adplacement/a-6.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 pr">
                    <a href="#" class="adplacement-item">
                        <div class="adplacement-sponsored_box">
                            <img src="client/images/adplacement/a-7.jpg">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- adplacement--------------------------->

    <!-- slidre-product------------------------>
    <div class="container-main">
        <div class="d-block">
            <div class="col-lg-9 col-md-9 col-xs-12 pr order-1 d-block">
                <div class="slider-widget-products">
                    <div class="widget widget-product card">
                        <header class="card-header">
                            <span class="title-one">????????????</span>
                            <h3 class="card-title"></h3>
                        </header>
                        <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                    <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#" class="d-block hover-img-link" data-toggle="modal"
                                               data-target="#exampleModal">
                                                <img src="/client/images/slider-product/camera-canon-4000D.jpg"
                                                     class="img-fluid" alt="">
                                                <span class="icon-view">
                                                    <strong><i class="fa fa-eye"></i></strong>
                                                </span>
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    ???????????? ?????????????? ???????? ?????? EOS 4000D ???? ?????????? ?????? 18-55 ???????? ?????? IS II
                                                </a>
                                            </h2>
                                            <div class="price">
                                                <del><span>????,??????,????<span>??????????</span></span></del>
                                                <ins><span>????,??????,??????<span>??????????</span></span></ins>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li class="action-item like">
                                                        <button class="btn btn-light add-product-wishes" type="submit">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item compare">
                                                        <button class="btn btn-light btn-compare" type="submit">
                                                            <i class="fa fa-random"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item add-to-cart">
                                                        <button class="btn btn-light btn-add-to-cart" type="submit">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#" class="d-block hover-img-link" data-toggle="modal"
                                               data-target="#exampleModal">
                                                <img src="/client/images/slider-product/camera-samsung.jpg"
                                                     class="img-fluid" alt="">
                                                <span class="icon-view">
                                                    <strong><i class="fa fa-eye"></i></strong>
                                                </span>
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    ???????????? ?????????????? ?????????????? ?????? ST150F
                                                </a>
                                            </h2>
                                            <div class="price">
                                                <del><span>??,??????,??????<span>??????????</span></span></del>
                                                <ins><span>??,??????,??????<span>??????????</span></span></ins>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li class="action-item like">
                                                        <button class="btn btn-light add-product-wishes" type="submit"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Tooltip on top">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item compare">
                                                        <button class="btn btn-light btn-compare" type="submit">
                                                            <i class="fa fa-random"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item add-to-cart">
                                                        <button class="btn btn-light btn-add-to-cart" type="submit">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#" class="d-block hover-img-link" data-toggle="modal"
                                               data-target="#exampleModal">
                                                <img src="/client/images/slider-product/camera-nikon-3500D.jpg"
                                                     class="img-fluid" alt="">
                                                <span class="icon-view">
                                                    <strong><i class="fa fa-eye"></i></strong>
                                                </span>
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    ???????????? ?????????????? ?????????? ?????? D3500 ???? ?????????? ?????? 18-55 ???????? ?????? VR AF-P
                                                </a>
                                            </h2>
                                            <div class="price">
                                                <del><span>??,??????,??????<span>??????????</span></span></del>
                                                <ins><span>??,??????,??????<span>??????????</span></span></ins>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li class="action-item like">
                                                        <button class="btn btn-light add-product-wishes" type="submit"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Tooltip on top">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item compare">
                                                        <button class="btn btn-light btn-compare" type="submit">
                                                            <i class="fa fa-random"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item add-to-cart">
                                                        <button class="btn btn-light btn-add-to-cart" type="submit">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#" class="d-block hover-img-link" data-toggle="modal"
                                               data-target="#exampleModal">
                                                <img src="/client/images/slider-product/camera-instax-mini-70.jpg"
                                                     class="img-fluid" alt="">
                                                <span class="icon-view">
                                                    <strong><i class="fa fa-eye"></i></strong>
                                                </span>
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    ???????????? ?????????? ?????? ???????? ???????? ???????? ?????? Instax mini 70
                                                </a>
                                            </h2>
                                            <div class="price">
                                                <del><span>??,??????,??????<span>??????????</span></span></del>
                                                <ins><span>??,??????,??????<span>??????????</span></span></ins>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li class="action-item like">
                                                        <button class="btn btn-light add-product-wishes" type="submit"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Tooltip on top">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item compare">
                                                        <button class="btn btn-light btn-compare" type="submit">
                                                            <i class="fa fa-random"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item add-to-cart">
                                                        <button class="btn btn-light btn-add-to-cart" type="submit">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#" class="d-block hover-img-link" data-toggle="modal"
                                               data-target="#exampleModal">
                                                <img src="/client/images/slider-product/camera-nikon.jpg"
                                                     class="img-fluid" alt="">
                                                <span class="icon-view">
                                                    <strong><i class="fa fa-eye"></i></strong>
                                                </span>
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    ???????????? ?????????????? ???????? ???????? ?????????? ?????? Z6 ???? ?????????? ?????? 24-70 ???????? ??????
                                                    f/4 S
                                                </a>
                                            </h2>
                                            <div class="price">
                                                <del><span>??,??????,??????<span>??????????</span></span></del>
                                                <ins><span>??,??????,??????<span>??????????</span></span></ins>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li class="action-item like">
                                                        <button class="btn btn-light add-product-wishes" type="submit"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Tooltip on top">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item compare">
                                                        <button class="btn btn-light btn-compare" type="submit">
                                                            <i class="fa fa-random"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item add-to-cart">
                                                        <button class="btn btn-light btn-add-to-cart" type="submit">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-lg-6 pr">
                                        <div class="thum-img">
                                            <div class="widget widget-product card mb-0">
                                                <div
                                                    class="product-carousel-more owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                                                    <div class="owl-stage-outer">
                                                        <div class="owl-stage"
                                                             style="transform: translate3d(1652px, 0px, 0px); transition: all 0.25s ease 0s; width: 2065px;">
                                                            <div class="owl-item"
                                                                 style="width: 403px; margin-left: 10px;">
                                                                <div class="item">
                                                                    <a href="#" class="d-block hover-img-link"
                                                                       data-toggle="modal" data-target="#exampleModal">
                                                                        <div class="zoom-box">
                                                                            <img src="/client/images/slider-product/computer-appel.jpg"
                                                                                 width="200" height="150" />
                                                                            <div class="discount-m">
                                                                                <span>10%</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item"
                                                                 style="width: 403px; margin-left: 10px;">
                                                                <div class="item">
                                                                    <a href="#" class="d-block hover-img-link"
                                                                       data-toggle="modal" data-target="#exampleModal">
                                                                        <div class="zoom-box">
                                                                            <img src="/client/images/slider-product/computer-appel.jpg"
                                                                                 width="200" height="150" />
                                                                            <div class="discount-m">
                                                                                <span>10%</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item"
                                                                 style="width: 403px; margin-left: 10px;">
                                                                <div class="item">
                                                                    <a href="#" class="d-block hover-img-link"
                                                                       data-toggle="modal" data-target="#exampleModal">
                                                                        <div class="zoom-box">
                                                                            <img src="/client/images/slider-product/computer-appel.jpg"
                                                                                 width="200" height="150" />
                                                                            <div class="discount-m">
                                                                                <span>10%</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item"
                                                                 style="width: 403px; margin-left: 10px;">
                                                                <div class="item">
                                                                    <a href="#" class="d-block hover-img-link"
                                                                       data-toggle="modal" data-target="#exampleModal">
                                                                        <div class="zoom-box">
                                                                            <img src="/client/images/slider-product/computer-appel.jpg"
                                                                                 width="200" height="150" />
                                                                            <div class="discount-m">
                                                                                <span>10%</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item active"
                                                                 style="width: 403px; margin-left: 10px;">
                                                                <div class="item">
                                                                    <a href="#" class="d-block hover-img-link"
                                                                       data-toggle="modal" data-target="#exampleModal">
                                                                        <div class="zoom-box">
                                                                            <img src="/client/images/slider-product/computer-appel.jpg"
                                                                                 width="200" height="150" />
                                                                            <div class="discount-m">
                                                                                <span>10%</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pr">
                                        <div class="product-box-modal-title">
                                            <h2 class="post-title">
                                                <a href="#">
                                                    ???????????????? ?????? ???????? 27 ?????????? ?????? ?????? iMac CTO - A 2019 ???? ???????? ??????????
                                                    ?????????? 5K
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="small-gutters align-items-stretch mb-4">
                                            <div class="col-lg-12 pr-0 pl-0 pr">
                                                <div class="product-box-modal_price mt-12 mt-auto">
                                                    <div class="price">
                                                        <del><span>??,??????,??????<span>??????????</span></span></del>
                                                        <ins><span>??,??????,??????<span>??????????</span></span></ins>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="small-gutters">
                                                <div class="col-lg-12 mb-8 pr-0 pl-0 pr mt-3">
                                                    <div class="product-box_action">
                                                        <button class="btn btn-gradient-primary add-to-cart"
                                                                type="submit">???????????? ???? ??????</button>
                                                        <a href="#" class="btn btn-outline-dark btn-block">????????????
                                                            ????????????</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-moment------------------------->
            <div class="col-lg-3 col-md-3 col-xs-12 pl order-1 d-block">
                <div class="slider-moments">
                    <div class="widget-suggestion widget card">
                        <header class="card-header promo-single-headline">
                            <h3 class="card-title float-none">?????????????? ???????????????</h3>
                        </header>
                        <div id="suggestion-slider" class="owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(1369px, 0px, 0px); transition: all 0.25s ease 0s; width: 2190px;">
                                    <div class="owl-item cloned" style="width: 273.75px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="client/images/slider-moment/sm-1.jpg" class="w-100" alt="">
                                            </a>
                                            <h3 class="product-title">
                                                <a href="#"> ?????????? ?????????? ?????????? ???????????? ?????? T41 </a>
                                            </h3>
                                            <div class="price">
                                                <span class="amount">????,??????
                                                    <span>??????????</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 273.75px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="client/images/slider-moment/sm-2.jpg" class="w-100" alt="">
                                            </a>
                                            <h3 class="product-title">
                                                <a href="#">???? ?????? ?????????? ?????????? ???????????? ???? btt 152-1</a>
                                            </h3>
                                            <div class="price">
                                                <span class="amount">????,??????
                                                    <span>??????????</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 273.75px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="client/images/slider-moment/sm-3.jpg" class="w-100" alt="">
                                            </a>
                                            <h3 class="product-title">
                                                <a href="#"> ???? ?????? 17 ?????????? ?????????? ?????? VivoBook A712FB-P </a>
                                            </h3>
                                            <div class="price">
                                                <span class="amount">????,??????,??????
                                                    <span>??????????</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 273.75px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="client/images/slider-moment/sm-4.jpg" class="w-100" alt="">
                                            </a>
                                            <h3 class="product-title">
                                                <a href="#"> ???? ?????? 16 ?????????? ?????? ?????? MacBook Pro MVVK2 2019 ?????????? ???? ??????
                                                    ??????
                                                </a>
                                            </h3>
                                            <div class="price">
                                                <span class="amount">????,??????,??????
                                                    <span>??????????</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 273.75px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="client/images/slider-moment/sm-5.jpg" class="w-100" alt="">
                                            </a>
                                            <h3 class="product-title">
                                                <a href="#">???????? ???????????? ?????????????? ?????? Galaxy S10 SM-G973F/DS ???? ?????? ????????
                                                    ?????????? 128 ????????????????
                                                </a>
                                            </h3>
                                            <div class="price">
                                                <span class="amount">????,??????,??????
                                                    <span>??????????</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="progressBar">
                            <div class="slide-progress" style="width: 100%; transition: width 5000ms ease 0s;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-moment------------------------->


            @foreach($categories as $category)

                <div class="col-lg-12 col-md-12 col-xs-12 pr order-1 d-block">
                    <div class="slider-widget-products">
                        <div class="widget widget-product card">
                            <header class="card-header">
                                <span class="title-one">{{$category->title}}</span>
                                <h3 class="card-title"></h3>
                            </header>
                            <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                         style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                        @foreach($category->getAllSubCategoryProduct() as $product)
                                            <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                                <div class="item">

                                                    <a href="{{route('client.products.show',$product)}}"
                                                       class="d-block hover-img-link" data-toggle="modal"
                                                       data-target="#exampleModal">
                                                        <img src="{{str_replace('public','/storage', $product->image)}}"
                                                             class="img-fluid" alt="">
                                                        <span class="icon-view">
                                                    <strong><i href="{{route('client.products.show',$product)}}"
                                                               class="fa fa-eye"></i></strong>
                                                </span>
                                                    </a>
                                                    @if($product->discount()->exists())
                                                        <span
                                                            class="save-price">{{$product->discount->value}} % ?????????? </span>
                                                    @endif
                                                    <h2 class="post-title">
                                                        <a href="{{route('client.products.show',$product)}}">
                                                            {{$product->name}}
                                                        </a>
                                                    </h2>
                                                    <div class="price">
                                                        @if ($product->has_discount)
                                                            <del><span>{{$product->cost}}<span>??????????</span></span></del>
                                                            <ins>
                                                                <span>{{$product->cost_with_discount}}<span>??????????</span></span>
                                                            </ins>
                                                        @else
                                                            <ins>
                                                                <span>{{$product->cost_with_discount}}<span>??????????</span></span>
                                                            </ins>
                                                        @endif
                                                    </div>
                                                    <div class="actions">
                                                        <ul>

                                                            <li class="action-item like">
                                                                <button onclick="like({{$product->id}});"
                                                                        class="btn btn-light add-product-wishes"
                                                                        type="submit"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="???????????? ???? ?????????? ????????"
                                                                        id="like-{{$product->id}}">
                                                                    <i class="fa fa-heart-o @if($product->is_liked) like @endif "></i>
                                                                </button>
                                                            </li>

                                                            <li class="action-item compare">
                                                                <button class="btn btn-light btn-compare" type="submit">
                                                                    <i class="fa fa-random"></i>
                                                                </button>
                                                            </li>
                                                            <li class="action-item add-to-cart">
                                                                <button onclick="addToCart({{$product->id}});" title="???????????? ???? ?????? ????????" class="btn btn-light btn-add-to-cart"
                                                                        type="submit">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach




            <!-- adplacement--------------------------->
            <div class="container-fluid">
                <div class="row">
                    <div class="adplacement-container-row">
                        <div class="col-6 col-lg-3 pr">
                            <a href="#" class="adplacement-item">
                                <div class="adplacement-sponsored_box">
                                    <img src="client/images/adplacement/a-4.jpg">
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-lg-3 pr">
                            <a href="#" class="adplacement-item">
                                <div class="adplacement-sponsored_box">
                                    <img src="client/images/adplacement/a-5.jpg">
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-lg-3 pr">
                            <a href="#" class="adplacement-item">
                                <div class="adplacement-sponsored_box">
                                    <img src="client/images/adplacement/a-6.jpg">
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-lg-3 pr">
                            <a href="#" class="adplacement-item">
                                <div class="adplacement-sponsored_box">
                                    <img src="client/images/adplacement/a-7.jpg">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- adplacement--------------------------->
            <div class="col-lg-12 col-md-12 col-xs-12 pr order-1 d-block">
                <div class="slider-widget-products">
                    <div class="widget widget-product card">
                        <header class="card-header">
                            <span class="title-one">?????????? ??????????</span>
                            <h3 class="card-title"></h3>
                        </header>
                        <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                    <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#" class="d-block hover-img-link" data-toggle="modal"
                                               data-target="#exampleModal">
                                                <img src="client/images/slider-product/Stove-lopez.jpg"
                                                     class="img-fluid" alt="">
                                                <span class="icon-view">
                                                    <strong><i class="fa fa-eye"></i></strong>
                                                </span>
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    ???????? ?????? ?????? ???? ???????? ?????? 10000S
                                                </a>
                                            </h2>
                                            <div class="price">
                                                <del><span>????,??????,??????<span>??????????</span></span></del>
                                                <ins><span>????,??????,??????<span>??????????</span></span></ins>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li class="action-item like">
                                                        <button class="btn btn-light add-product-wishes" type="submit"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Tooltip on top">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item compare">
                                                        <button class="btn btn-light btn-compare" type="submit">
                                                            <i class="fa fa-random"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item add-to-cart">
                                                        <button class="btn btn-light btn-add-to-cart" type="submit">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#" class="d-block hover-img-link" data-toggle="modal"
                                               data-target="#exampleModal">
                                                <img src="client/images/slider-product/SWF-40R.jpg" class="img-fluid"
                                                     alt="">
                                                <span class="icon-view">
                                                    <strong><i class="fa fa-eye"></i></strong>
                                                </span>
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    ?????? ?????????? ?????? ?????? ?????? SWF-40R
                                                </a>
                                            </h2>
                                            <div class="price">
                                                <del><span>??,??????,??????<span>??????????</span></span></del>
                                                <ins><span>??,??????,??????<span>??????????</span></span></ins>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li class="action-item like">
                                                        <button class="btn btn-light add-product-wishes" type="submit"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Tooltip on top">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item compare">
                                                        <button class="btn btn-light btn-compare" type="submit">
                                                            <i class="fa fa-random"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item add-to-cart">
                                                        <button class="btn btn-light btn-add-to-cart" type="submit">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#" class="d-block hover-img-link" data-toggle="modal"
                                               data-target="#exampleModal">
                                                <img src="client/images/slider-product/ECM2013.jpg" class="img-fluid"
                                                     alt="">
                                                <span class="icon-view">
                                                    <strong><i class="fa fa-eye"></i></strong>
                                                </span>
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    ?????????????????? ?????????? ?????? ECM2013
                                                </a>
                                            </h2>
                                            <div class="price">
                                                <del><span>??,??????,??????<span>??????????</span></span></del>
                                                <ins><span>??,??????,??????<span>??????????</span></span></ins>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li class="action-item like">
                                                        <button class="btn btn-light add-product-wishes" type="submit"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Tooltip on top">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item compare">
                                                        <button class="btn btn-light btn-compare" type="submit">
                                                            <i class="fa fa-random"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item add-to-cart">
                                                        <button class="btn btn-light btn-add-to-cart" type="submit">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#" class="d-block hover-img-link" data-toggle="modal"
                                               data-target="#exampleModal">
                                                <img src="client/images/slider-product/DNR 290T-366T.jpg"
                                                     class="img-fluid" alt="">
                                                <span class="icon-view">
                                                    <strong><i class="fa fa-eye"></i></strong>
                                                </span>
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    ?????????? ?? ?????????? ???? ???????? ?????????? ?????? DNR 290T-366T
                                                </a>
                                            </h2>
                                            <div class="price">
                                                <del><span>??,??????,??????<span>??????????</span></span></del>
                                                <ins><span>??,??????,??????<span>??????????</span></span></ins>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li class="action-item like">
                                                        <button class="btn btn-light add-product-wishes" type="submit"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Tooltip on top">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item compare">
                                                        <button class="btn btn-light btn-compare" type="submit">
                                                            <i class="fa fa-random"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item add-to-cart">
                                                        <button class="btn btn-light btn-add-to-cart" type="submit">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#" class="d-block hover-img-link" data-toggle="modal"
                                               data-target="#exampleModal">
                                                <img src="client/images/slider-product/Avocado.jpg" class="img-fluid"
                                                     alt="">
                                                <span class="icon-view">
                                                    <strong><i class="fa fa-eye"></i></strong>
                                                </span>
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    ???? ???????? ???????? ???????? ?????? ?????? Avocado
                                                </a>
                                            </h2>
                                            <div class="price">
                                                <del><span>??,??????,??????<span>??????????</span></span></del>
                                                <ins><span>??,??????,??????<span>??????????</span></span></ins>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li class="action-item like">
                                                        <button class="btn btn-light add-product-wishes" type="submit"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Tooltip on top">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item compare">
                                                        <button class="btn btn-light btn-compare" type="submit">
                                                            <i class="fa fa-random"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item add-to-cart">
                                                        <button class="btn btn-light btn-add-to-cart" type="submit">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 pr order-1 d-block">
                <div class="slider-widget-products">
                    <div class="widget widget-product card">
                        <header class="card-header">
                            <span class="title-one">???????????????? ?? ???? ??????</span>
                            <h3 class="card-title"></h3>
                        </header>
                        <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                    <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#" class="d-block hover-img-link" data-toggle="modal"
                                               data-target="#exampleModal">
                                                <img src="client/images/slider-product/mitbook.jpg" class="img-fluid"
                                                     alt="">
                                                <span class="icon-view">
                                                    <strong><i class="fa fa-eye"></i></strong>
                                                </span>
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    ???????????? ?????? ?????? X ?????? 13.9 ????????
                                                </a>
                                            </h2>
                                            <div class="price">
                                                <del><span>????,??????,??????<span>??????????</span></span></del>
                                                <ins><span>????,??????,??????<span>??????????</span></span></ins>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li class="action-item like">
                                                        <button class="btn btn-light add-product-wishes" type="submit"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Tooltip on top">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item compare">
                                                        <button class="btn btn-light btn-compare" type="submit">
                                                            <i class="fa fa-random"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item add-to-cart">
                                                        <button class="btn btn-light btn-add-to-cart" type="submit">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#" class="d-block hover-img-link" data-toggle="modal"
                                               data-target="#exampleModal">
                                                <img src="client/images/slider-product/SL1200_-300x300.jpg"
                                                     class="img-fluid" alt="">
                                                <span class="icon-view">
                                                    <strong><i class="fa fa-eye"></i></strong>
                                                </span>
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    ???? ?????? ???????? ???????????????? 14 ???????? ??????
                                                </a>
                                            </h2>
                                            <div class="price">
                                                <del><span>??,??????,??????<span>??????????</span></span></del>
                                                <ins><span>??,??????,??????<span>??????????</span></span></ins>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li class="action-item like">
                                                        <button class="btn btn-light add-product-wishes" type="submit"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Tooltip on top">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item compare">
                                                        <button class="btn btn-light btn-compare" type="submit">
                                                            <i class="fa fa-random"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item add-to-cart">
                                                        <button class="btn btn-light btn-add-to-cart" type="submit">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#" class="d-block hover-img-link" data-toggle="modal"
                                               data-target="#exampleModal">
                                                <img src="client/images/slider-product/zenbook.jpg" class="img-fluid"
                                                     alt="">
                                                <span class="icon-view">
                                                    <strong><i class="fa fa-eye"></i></strong>
                                                </span>
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    ???? ?????? 13 ?????????? ?????????? ?????? ZenBook S13 UX392FN - A
                                                </a>
                                            </h2>
                                            <div class="price">
                                                <del><span>??,??????,??????<span>??????????</span></span></del>
                                                <ins><span>??,??????,??????<span>??????????</span></span></ins>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li class="action-item like">
                                                        <button class="btn btn-light add-product-wishes" type="submit"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Tooltip on top">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item compare">
                                                        <button class="btn btn-light btn-compare" type="submit">
                                                            <i class="fa fa-random"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item add-to-cart">
                                                        <button class="btn btn-light btn-add-to-cart" type="submit">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#" class="d-block hover-img-link" data-toggle="modal"
                                               data-target="#exampleModal">
                                                <img src="client/images/slider-product/computer-appel.jpg"
                                                     class="img-fluid" alt="">
                                                <span class="icon-view">
                                                    <strong><i class="fa fa-eye"></i></strong>
                                                </span>
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    ???????????????? ?????? ???????? 27 ?????????? ?????? ?????? iMac CTO - A 2019 ???? ???????? ??????????
                                                    ?????????? 5K
                                                </a>
                                            </h2>
                                            <div class="price">
                                                <del><span>??,??????,??????<span>??????????</span></span></del>
                                                <ins><span>??,??????,??????<span>??????????</span></span></ins>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li class="action-item like">
                                                        <button class="btn btn-light add-product-wishes" type="submit"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Tooltip on top">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item compare">
                                                        <button class="btn btn-light btn-compare" type="submit">
                                                            <i class="fa fa-random"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item add-to-cart">
                                                        <button class="btn btn-light btn-add-to-cart" type="submit">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#" class="d-block hover-img-link" data-toggle="modal"
                                               data-target="#exampleModal">
                                                <img src="client/images/slider-product/asus-laptop.jpg"
                                                     class="img-fluid" alt="">
                                                <span class="icon-view">
                                                    <strong><i class="fa fa-eye"></i></strong>
                                                </span>
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    ???? ?????? ?????????? ???????????? 14
                                                </a>
                                            </h2>
                                            <div class="price">
                                                <del><span>??,??????,??????<span>??????????</span></span></del>
                                                <ins><span>??,??????,??????<span>??????????</span></span></ins>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li class="action-item like">
                                                        <button class="btn btn-light add-product-wishes" type="submit"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Tooltip on top">
                                                            <i class="fa fa-heart-o"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item compare">
                                                        <button class="btn btn-light btn-compare" type="submit">
                                                            <i class="fa fa-random"></i>
                                                        </button>
                                                    </li>
                                                    <li class="action-item add-to-cart">
                                                        <button class="btn btn-light btn-add-to-cart" type="submit">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand--------------------------------------->
            <div class="col-lg-12 col-md-12 col-xs-12 pr order-1 d-block">
                <div class="slider-widget-products">
                    <div class="widget widget-product card mb-0">
                        <div class="product-carousel-brand owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                    @foreach($brands as $brand)
                                        <div class="owl-item active" style="width: 190.75px; margin-left: 10px;">
                                            <div class="item">
                                                <a href="#" class="d-block hover-img-link">
                                                    <img src="{{str_replace('public','/storage',$brand->image)}}"
                                                         class="img-fluid img-brand"
                                                         alt="{{$brand->title}}" style="border-radius: 5px">
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand----------------------------------------->
        </div>
    </div>
@endsection




{{--    <div class="widget widget-product card">
        <header class="card-header">
            <span class="title-one">{{$featuredCategory->title}}</span>
            <h3 class="card-title"></h3>
        </header>
        <div class="category-level-2">
            <ul id="sub-cat" class="tabs">
                @foreach($featuredCategory->children as $subCategory)
                    <li>
                        <a href="#tab-cat{{$subCategory->id}}">{{$subCategory->title}}</a>
                    </li>
                @endforeach
            </ul>

            @foreach($featuredCategory->children as $subCategory)
                <div id="tab-cat{{$subCategory->id}}" class="tab-content">
                    <div class="owl-stage"
                         style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                        @foreach($subCategory->products as $product)
                            <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="#" class="d-block hover-img-link" data-toggle="modal"
                                       data-target="#exampleModal">
                                        <img src="/client/images/slider-product/camera-canon-4000D.jpg"
                                             class="img-fluid" alt="">
                                        <span class="icon-view">
                                                    <strong><i class="fa fa-eye"></i></strong>
                                                </span>
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            {{$product->title}}
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <del><span>????,??????,????<span>??????????</span></span></del>
                                        <ins><span>????,??????,??????<span>??????????</span></span></ins>
                                    </div>
                                    <div class="actions">
                                        <ul>
                                            <li class="action-item like">
                                                <button class="btn btn-light add-product-wishes" type="submit">
                                                    <i class="fa fa-heart-o"></i>
                                                </button>
                                            </li>
                                            <li class="action-item compare">
                                                <button class="btn btn-light btn-compare" type="submit">
                                                    <i class="fa fa-random"></i>
                                                </button>
                                            </li>
                                            <li class="action-item add-to-cart">
                                                <button class="btn btn-light btn-add-to-cart" type="submit">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>--}}
