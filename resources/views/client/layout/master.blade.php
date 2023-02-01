<!DOCTYPE html>
<html lang="fa" dir="rtl">

<style>

    .like {
        color: red;
    }


</style>

@extends('client.layout.head')
<body>
<!-- header-------------------------------->
<header class="header-main">
    <div class="d-block">
        <section class="h-main-row">
            <div class="col-lg-9 col-md-12 col-xs-12 pr">
                <div class="header-right">
                    <div class="col-lg-3 pr">
                        <div class="header-logo row text-right">
                            <a href="#">
                                <img src="/client/images/logo.png" alt="کالامارکت">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 pr">
                        <div class="header-search row text-right">
                            <div class="header-search-box">
                                <form action="#" class="form-search">
                                    <input type="search" class="header-search-input" name="search-input"
                                           placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…">
                                    <div class="action-btns">
                                        <button class="btn btn-search" type="submit">
                                            <img src="/client/images/search.png" alt="search">
                                        </button>
                                        <div class="search-filter">
                                            <div class="form-ui">
                                                <div class="custom-select-ui">
                                                    <select class="right">
                                                        <option>همه دسته ها</option>
                                                        <option>کالای دیجیتال</option>
                                                        <option>آرایشی بهداشتی</option>
                                                        <option>ابزاری اداری</option>
                                                        <option>مد پوشاک</option>
                                                        <option>خانه آشپز خانه</option>
                                                        <option>لوازم تحریر و هنر</option>
                                                        <option>کودک و نوزاد</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="search-result">
                                    <ul class="search-result-list mb-0">
                                        <li>
                                            <a href="#"><i class="mdi mdi-clock-outline"></i>
                                                کالای دیجیتال
                                                <button class="btn btn-light btn-continue-search" type="submit">
                                                    <i class="fa fa-angle-left"></i>
                                                </button>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="mdi mdi-clock-outline"></i>
                                                آرایشی و بهداشتی
                                                <button class="btn btn-light btn-continue-search" type="submit">
                                                    <i class="fa fa-angle-left"></i>
                                                </button>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="mdi mdi-clock-outline"></i>
                                                گوشی موبایل
                                                <button class="btn btn-light btn-continue-search" type="submit">
                                                    <i class="fa fa-angle-left"></i>
                                                </button>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="mdi mdi-clock-outline"></i>
                                                تبلت
                                                <button class="btn btn-light btn-continue-search" type="submit">
                                                    <i class="fa fa-angle-left"></i>
                                                </button>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="mdi mdi-clock-outline"></i>
                                                لپ تاپ
                                                <button class="btn btn-light btn-continue-search" type="submit">
                                                    <i class="fa fa-angle-left"></i>
                                                </button>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="mdi mdi-clock-outline"></i>
                                                دوربین
                                                <button class="btn btn-light btn-continue-search" type="submit">
                                                    <i class="fa fa-angle-left"></i>
                                                </button>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="localSearchSimple"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-0 col-xs-12 pl">
                <div class="header-left">
                    <div class="header-account text-left">
                        <div class="d-block">
                            <div class="account-box">
                                <div class="nav-account d-block pl">
                                    @auth()

                                        <span class="icon-account">
                                            <img src="/client/images/man.png" class="avator">
                                        </span>
                                        <span class="title-account">حساب کاربری</span>
                                        <div class="dropdown-menu">
                                            <ul class="account-uls mb-0">
                                                <li class="account-item">
                                                    <a href="#" class="account-link">پنل کاربری</a>
                                                </li>
                                                <li class="account-item">
                                                    <a href="#" class="account-link">سفارشات من</a>
                                                </li>
                                                <li class="account-item">
                                                    <a href="#" class="account-link">تنظیمات</a>
                                                </li>
                                                <li class="account-item">
                                                    <form action="{{route('client.logout')}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" name="logout"
                                                               class="account-link btn-sm btn-outline-danger"
                                                               style="font-size: 12px" value="خروج"></form>
                                                </li>
                                            </ul>
                                        </div>

                                    @else

                                        <span class="icon-account">
                                            <a href="{{route('client.register')}}">
                                            <img src="/client/images/man.png" class="avator">
                                            </a>
                                        </span>
                                        <span class="title-account" style="color: mediumblue">
                                            <a href="{{route('client.register')}}">
                                                ورود / ثبت نام
                                            </a>
                                        </span>

                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        @include('client.layout.menu')

    </div>
</header>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">جستجو</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="header-search text-right">
                    <div class="header-search-box">
                        <form action="#" class="form-search">
                            <input type="search" class="header-search-input" name="search-input"
                                   placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…">
                            <div class="action-btns">
                                <button class="btn btn-search" type="submit">
                                    <img src="client/images/search.png" alt="search">
                                </button>
                                <div class="search-filter">
                                    <div class="form-ui">
                                        <div class="custom-select-ui">
                                            <select class="right">
                                                <option>همه دسته ها</option>
                                                <option>کالای دیجیتال</option>
                                                <option>آرایشی بهداشتی</option>
                                                <option>ابزاری اداری</option>
                                                <option>مد پوشاک</option>
                                                <option>خانه آشپز خانه</option>
                                                <option>لوازم تحریر و هنر</option>
                                                <option>کودک و نوزاد</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="search-result">
                            <ul class="search-result-list mb-0">
                                <li>
                                    <a href="#"><i class="mdi mdi-clock-outline"></i>
                                        کالای دیجیتال
                                        <button class="btn btn-light btn-continue-search" type="submit">
                                            <i class="fa fa-angle-left"></i>
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="mdi mdi-clock-outline"></i>
                                        آرایشی و بهداشتی
                                        <button class="btn btn-light btn-continue-search" type="submit">
                                            <i class="fa fa-angle-left"></i>
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="mdi mdi-clock-outline"></i>
                                        گوشی موبایل
                                        <button class="btn btn-light btn-continue-search" type="submit">
                                            <i class="fa fa-angle-left"></i>
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="mdi mdi-clock-outline"></i>
                                        تبلت
                                        <button class="btn btn-light btn-continue-search" type="submit">
                                            <i class="fa fa-angle-left"></i>
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="mdi mdi-clock-outline"></i>
                                        لپ تاپ
                                        <button class="btn btn-light btn-continue-search" type="submit">
                                            <i class="fa fa-angle-left"></i>
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="mdi mdi-clock-outline"></i>
                                        دوربین
                                        <button class="btn btn-light btn-continue-search" type="submit">
                                            <i class="fa fa-angle-left"></i>
                                        </button>
                                    </a>
                                </li>
                            </ul>
                            <div class="localSearchSimple"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="nav-categories-overlay"></div>
<div class="overlay-search-box"></div>
<!-- header-------------------------------->
@yield('content')

<!-- footer-------------------------------->
<footer class="footer-main-site">
    <section class="d-block d-xl-block d-lg-block d-md-block d-sm-block order-1">
        <div class="footer-shopping-features">
            <div class="container-fluid">
                <div class="col-12">
                    <div class="item">
                            <span class="icon-shopping">
                                <img src="/client/images/footer/features/delivery-truck.svg" width="50"
                                     alt="تحویل اکسپرس" class="img-shopping">
                            </span>
                        <span class="title-shopping">تحویل اکسپرس</span>
                        <span class="desc-shopping">در کمترین زمان دریافت کنید</span>
                    </div>
                    <div class="item">
                            <span class="icon-shopping">
                                <img src="/client/images/footer/features/24-hours-support.svg" width="50"
                                     alt="پشتیبانی ۲۴ ساعته" class="img-shopping">
                            </span>
                        <span class="title-shopping">پشتیبانی ۲۴ ساعته</span>
                        <span class="desc-shopping">پشتیبانی هفت روز هفته</span>
                    </div>
                    <div class="item">
                            <span class="icon-shopping">
                                <img src="/client/images/footer/features/income.svg" width="50" alt="پرداخت در محل"
                                     class="img-shopping">
                            </span>
                        <span class="title-shopping">پرداخت در محل</span>
                        <span class="desc-shopping">هنگام دریافت پرداخت کنید</span>
                    </div>
                    <div class="item">
                            <span class="icon-shopping">
                                <img src="/client/images/footer/features/easy-return.svg" width="50"
                                     alt="۷ روز ضمانت بازگشت" class="img-shopping">
                            </span>
                        <span class="title-shopping">۷ روز ضمانت بازگشت</span>
                        <span class="desc-shopping">هفت روز مهلت دارید </span>
                    </div>
                    <div class="item">
                            <span class="icon-shopping">
                                <img src="/client/images/footer/features/original.svg" width="50"
                                     alt="ضمانت اصل‌بودن کالا" class="img-shopping">
                            </span>
                        <span class="title-shopping">ضمانت اصل‌بودن کالا</span>
                        <span class="desc-shopping">تایید اصالت کالا</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="d-block d-xl-block d-lg-block d-md-block d-sm-block order-1">
        <div class="container-fluid">
            <div class="col-12">
                <div class="footer-middlebar">
                    <div class="col-lg-8 d-block pr">
                        <div class="footer-links">
                            <div class="col-lg-3 col-md-3 col-xs-12 pr">
                                <div class="row">
                                    <section class="footer-links-col">
                                        <div class="headline-links">
                                            <a href="#">
                                                با کالامارکت
                                            </a>
                                        </div>
                                        <ul class="footer-menu-ul">
                                            <li class="menu-item-type-custom">
                                                <a href="#">
                                                    اتاق خبر کالامارکت
                                                </a>
                                            </li>
                                            <li class="menu-item-type-custom">
                                                <a href="#">
                                                    فروش در کالامارکت
                                                </a>
                                            </li>
                                            <li class="menu-item-type-custom">
                                                <a href="#">
                                                    همکاری با سازمان‌ها
                                                </a>
                                            </li>
                                            <li class="menu-item-type-custom">
                                                <a href="#">
                                                    فرصت‌های شغلی
                                                </a>
                                            </li>
                                        </ul>
                                    </section>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-12 pr">
                                <div class="row">
                                    <section class="footer-links-col">
                                        <div class="headline-links">
                                            <a href="#">
                                                خدمات مشتریان
                                            </a>
                                        </div>
                                        <ul class="footer-menu-ul">
                                            <li class="menu-item-type-custom">
                                                <a href="#">
                                                    پاسخ به پرسش‌های متداول
                                                </a>
                                            </li>
                                            <li class="menu-item-type-custom">
                                                <a href="#">
                                                    رویه‌های بازگرداندن کالا
                                                </a>
                                            </li>
                                            <li class="menu-item-type-custom">
                                                <a href="#">
                                                    شرایط استفاده
                                                </a>
                                            </li>
                                            <li class="menu-item-type-custom">
                                                <a href="#">
                                                    حریم خصوصی
                                                </a>
                                            </li>
                                        </ul>
                                    </section>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-12 pr">
                                <div class="row">
                                    <section class="footer-links-col">
                                        <div class="headline-links">
                                            <a href="#">
                                                راهنمای خرید از کالامارکت
                                            </a>
                                        </div>
                                        <ul class="footer-menu-ul">
                                            <li class="menu-item-type-custom">
                                                <a href="#">
                                                    نحوه ثبت سفارش
                                                </a>
                                            </li>
                                            <li class="menu-item-type-custom">
                                                <a href="#">
                                                    رویه ارسال سفارش
                                                </a>
                                            </li>
                                            <li class="menu-item-type-custom">
                                                <a href="#">
                                                    شیوه‌های پرداخت
                                                </a>
                                            </li>
                                        </ul>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-block pl">
                        <div class="shortcode-widget-area">
                            <form action="#" class="form-newsletter">
                                <fieldset>
                                        <span class="form-newsletter-title"> با عضویت در خبرنامه از آخرین اخبار و
                                            محصولات سایت مطلع شوید...</span>
                                    <div class="input-group-newsletter">
                                        <input type="email" class="input-field form-control"
                                               placeholder="آدرس ایمیل خود را وارد کنید">
                                        <button class="btn btn-info btn-secondary" type="submit">ارسال</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="footer-more-info">
                        <div class="col-lg-10 pr">
                            <div class="footer-content d-block">
                                <div class="text pr-1">
                                    <h2 class="title">فروشگاه اینترنتی کالامارکت</h2>
                                    <p class="desc"> کالامارکت به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با
                                        بیش از یک دهه تجربه، با پایبندی به سه اصل کلیدی، پرداخت در محل، 7 روز ضمانت
                                        بازگشت کالا و تضمین اصل‌بودن کالا، موفق شده تا همگام با فروشگاه‌های معتبر
                                        جهان، به بزرگ‌ترین فروشگاه اینترنتی ایران تبدیل شود. به محض ورود به دیجی
                                        اسمارت با یک سایت پر از کالا رو به رو می‌شوید! هر آنچه که نیاز دارید و به
                                        ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 pl">
                            <div class="footer-safety-partner">
                                <div class="widget widget-product card mb-0">
                                    <div
                                        class="product-carousel-symbol owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage"
                                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                                <div class="owl-item active"
                                                     style="width: 300.75px; margin-left: 10px;">
                                                    <div class="item">
                                                        <a href="#" class="d-block hover-img-link">
                                                            <img src="/client/images/footer/license/L-1.png"
                                                                 class="img-fluid img-brand" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="owl-item active"
                                                     style="width: 300.75px; margin-left: 10px;">
                                                    <div class="item">
                                                        <a href="#" class="d-block hover-img-link mt-0">
                                                            <img src="/client/images/footer/license/L-2.png"
                                                                 class="img-fluid img-brand" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-copyright">
                            <div class="footer-copyright-text">
                                <p>تمامی مطالب، عکس ها و... متعلق به سایت فروشگاهی کالامارکت می باشد.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<!-- footer------------------------------------------->
<!-- scroll_Progress------------------------->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>
<!-- scroll_Progress------------------------->
<!-- Page Loader----------------------------->
<div class="P-loader">
    <div class="P-loader-content">
        <div class="logo-loader">
            <img src="/client/images/logo.png" alt="logo">
        </div>
        <div class="pic-loader text-center">
            <img src="/client/images/three-dots.svg" width="50" alt="">
        </div>
    </div>
</div>
<!-- Page Loader----------------------------->

<script>
    function like(productId) {

        $.ajax({
            type:'post',
            url:'/likes/'+productId,
            data:{
            _token :"{{csrf_token()}}"
            },

            success:function (data) {
                var icon=$('#like-'+productId + ['>.mdi-heart-outline' , '>.fa fa-heart-o'])

               if (icon.hasClass('like'))
               {
                   icon.removeClass('like')
               }
               else
               {
                   icon.addClass('like')
               }

               $('#likes_count').text(data.likes_count)


            }
        })


    }
    function addToCart(productId)
    {
        var quantity=1;

        if($('#inpute-quantity').length)
        {
            quantity =$('#inpute-quantity').val();
        }
        $.ajax({
            type:'post',
            url:'/cart/'+productId,
            data:
                {
                    _token:"{{csrf_token()}}",
                    quantity:quantity
                },
            success:function (data)
            {
                $('#total-items').text(data.cart.total_items);
                $('#total-amount').text(data.cart.total_amount);



                if(!$('#mini-cart-'+ productId).length)
                {
                    var product=data.cart[productId]['product'];
                    var productQty=data.cart[productId]['quantity'];


                    $('#menu-cart:last-child').append(
                        ' <li class="mini-cart-item" id="mini-cart-'+product.id+'">'
                        + '<div class="mini-cart-item-content">'
                        + '<a class="mini-cart-item-close" > <i class="mdi mdi-close"   onclick="removeFromCart('+product.id+')"></i> </a>'
                        + '<a href="#" class="mini-cart-item-image d-block"><img style="border-radius: 20px; padding-top: 5px" src="'+ product.image_path +'"> </a>'
                        + '<span class="product-name-card">'+ product.name +'</span>'
                        + '<div class="variation"> <span class="variation-n"> : مدل</span> <p class="mb-0">توضیحات</p> </div> '
                        + '<div class="header-basket-list-item-color-badge" style="padding-right: 10px; padding-top: 3px;"> '+ productQty +' : تعداد  </div> '
                        + '<div class="quantity"><span class="quantity-Price-amount">'+ product.cost_with_discount +'<span>تومان</span></span></div>'
                        + '</div>'
                        + '</li>'
                    );
                }
            }
        })
    }

    function removeFromCart(productId)
    {

        $.ajax({
            type:'delete',
            url:'/cart/'+productId,
            data:
                {
                 _token:"{{csrf_token()}}"
                },
            success:function (data)
            {
                $('#total-items').text(data.cart.total_items);
                $('#total-amount').text(data.cart.total_amount);
                $('#mini-cart-'+productId).remove();
            }
        })
    }
</script>


</body>
@extends('client.layout.footer')
</html>
