<nav class="header-main-nav">
    <div class="d-block">
        <div class="align-items-center">
            <ul class="menu-ul mega-menu-level-one">
                <li id="nav-menu-item" class="menu-item nav-overlay">
                    <a href="#" class="current-link-menu">
                        دسته ها
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu is-mega-menu mega-menu-level-two">
                        @foreach($categories as $category)
                            <li class="menu-mega-item menu-item-type-mega-menu">
                                <a href="#" class="mega-menu-link">
                                    {{$category->title}}
                                </a>
                                <ul class="sub-menu mega-menu-level-three">
                                    @foreach($category->children as $childCategory)
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                {{$childCategory->title}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                        <li class="bg-image">
                            <img src="/client/images/menu-main/digital.png" alt="">
                        </li>
                    </ul>
                </li>
                <li id="nav-menu-item" class="menu-item nav-overlay">
                    <a href="#" class="current-link-menu">
                        برند ها
                        <i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="sub-menu is-mega-menu mega-menu-level-two">
                        @foreach($brands as $brand)

                            <li class="menu-mega-item menu-item-type-mega-menu">
                                <div class="">
                                    <a href="">
                                        <img src="{{str_replace('public','/storage',$brand->image)}}" alt="{{$brand->name}}" title="{{$brand->name}}" width="70px" style="border-radius: 50px">
                                    </a>
                                    <a href="#" class="mega-menu-link">
                                        {{$brand->name}}
                                    </a>
                                </div>

                            </li>
                        @endforeach

                    </ul>

                </li>

                <li id="nav-menu-item" class="menu-item nav-overlay">
                <li id="nav-menu-item" class="menu-item">
                    <a href="#" class="current-link-menu">
                        ابزار و اداری
                    </a>
                </li>
                <li id="nav-menu-item" class="menu-item">
                    <a href="#" class="current-link-menu">
                        مد و پوشاک
                    </a>
                </li>
                <li id="nav-menu-item" class="menu-item nav-overlay">
                    <a href="#" class="current-link-menu">
                        خانه و آشپزخانه
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu is-mega-menu mega-menu-level-two">
                        <li class="menu-mega-item menu-item-type-mega-menu">
                            <a href="#" class="mega-menu-link">
                                لوازم آرایشی
                            </a>
                            <ul class="sub-menu mega-menu-level-three">
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        آرایش چشم و ابرو
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        آرایش لب
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        آرایش صورت
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        تجهیزات جانبی آرایش
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        سنگ پا و زیبایی ناخن
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        مواد آرایش مو
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        کرم و مراقبت پوست
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        شامپو و مراقبت مو
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-mega-item menu-item-type-mega-menu">
                            <a href="#" class="mega-menu-link">
                                لوازم شخصی برقی
                            </a>
                            <ul class="sub-menu mega-menu-level-three">
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        ماشین اصلاح صورت
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        ماشین اصلاح سر
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        سشوار
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        اصلاح بدن آقایان
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        اصلاح موی گوش، بینی و ابرو
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        برس پاک سازی
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        اتو مو و حالت دهنده
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-mega-item menu-item-type-mega-menu">
                            <a href="#" class="mega-menu-link">
                                لوازم بهداشتی
                            </a>
                            <ul class="sub-menu mega-menu-level-three">
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        کرم و مراقبت پوست
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        شامپو و مراقبت مو
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        بهداشت دهان و دندان
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        بهداشت و مراقبت بدن
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        ضد تعریق
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-mega-item menu-item-type-mega-menu">
                            <a href="#" class="mega-menu-link">
                                ابزار سلامت و طبی
                            </a>
                            <ul class="sub-menu mega-menu-level-three">
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        مچ بند و ساعت هوشمند
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        ترازو
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        کالای خواب و استراحت طبی
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        تست قند خون
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        تب سنج
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        فشارسنج
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        ابزار مراقبت پا
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        نمایشگر ضربان قلب
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="bg-image">
                            <img src="/client/images/menu-main/kitchen.png" alt="">
                        </li>
                    </ul>
                </li>
                <li id="nav-menu-item" class="menu-item nav-overlay">
                    <a href="#" class="current-link-menu">
                        لوازم تحریر و هنر
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu is-mega-menu-small">
                        <li class="menu-mega-item menu-item-type-mega-menu item-small">
                            <a href="#" class="mega-menu-link">
                                کتاب و مجله
                            </a>
                        </li>
                        <li class="menu-mega-item menu-item-type-mega-menu item-small">
                            <a href="#" class="mega-menu-link">
                                کتاب صوتی
                            </a>
                        </li>
                        <li class="menu-mega-item menu-item-type-mega-menu item-small">
                            <a href="#" class="mega-menu-link">
                                محتوای آموزشی
                            </a>
                        </li>
                        <li class="menu-mega-item menu-item-type-mega-menu item-small">
                            <a href="#" class="mega-menu-link">
                                لوازم تحریر
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu is-mega-menu-small-three">
                                <li class="menu-mega-item menu-item-type-mega-menu item-small-three">
                                    <a href="#">
                                        چراغ مطالعه
                                    </a>
                                </li>
                                <li class="menu-mega-item menu-item-type-mega-menu item-small-three">
                                    <a href="#">
                                        نوشت افزار
                                    </a>
                                </li>
                                <li class="menu-mega-item menu-item-type-mega-menu item-small-three">
                                    <a href="#">
                                        دفتر و کاغذ
                                    </a>
                                </li>
                                <li class="menu-mega-item menu-item-type-mega-menu item-small-three">
                                    <a href="#">
                                        میز تحریر
                                    </a>
                                </li>
                                <li class="menu-mega-item menu-item-type-mega-menu item-small-three">
                                    <a href="#">
                                        البوم عکس
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-mega-item menu-item-type-mega-menu item-small">
                            <a href="#" class="mega-menu-link">
                                نرم افزار
                            </a>
                        </li>
                    </ul>
                </li>
                <li id="nav-menu-item" class="menu-item">
                    <a href="#" class="current-link-menu">
                        کودک و نوزاد
                    </a>
                </li>
                <li class="divider-space-card">
                    <div class="header-cart-basket">
                        <a href="#" class="cart-basket-box">
                                        <span class="icon-cart">
                                            <i class="mdi mdi-shopping"></i>
                                        </span>
                            <span class="title-cart">سبد خرید</span>
                            <span class="price-cart" id="total-amount">
                                {{\App\Models\Cart::totalAmount()}}
                                            <span style="opacity: 1 !important; padding-left: 2px;">تومان</span>
                                        </span>
                            <span class="count-cart" id="total-items">
                                {{\App\Models\Cart::totalItems()}}
                            </span>
                        </a>

                        <div class="widget-shopping-cart">
                            <div class="widget-shopping-cart-content">
                                <div class="wrapper">
                                    <div class="scrollbar" id="style-1">
                                        <div class="force-overflow">

                                            <ul class="product-list-widget" id="menu-cart">

                                                @foreach(\App\Models\Cart::getItems() as $item)

                                                    @php
                                                    $product=$item['product'];
                                                    $productQty=$item['quantity'];
                                                    @endphp
                                                    <li class="mini-cart-item" id="mini-cart-{{$product->id}}">
                                                        <div class="mini-cart-item-content">
                                                            <a class="mini-cart-item-close" >
                                                                <i class="mdi mdi-close"   onclick="removeFromCart({{$product->id}})">
                                                                </i>
                                                            </a>
                                                            <a href="#" class="mini-cart-item-image d-block">
                                                                <img style="border-radius: 20px; padding-top: 5px" src="{{$product->image_path}}">
                                                            </a>
                                                            <span class="product-name-card">{{$product->name}}</span>
                                                            <div class="variation">
                                                                        <span class="variation-n"> : مدل
                                                                        </span>
                                                                <p class="mb-0">{{$product->brand->name}}</p>
                                                            </div>
                                                            <div class="header-basket-list-item-color-badge" style="padding-right: 10px; padding-top: 3px;">
                                                                {{$productQty}} : تعداد
                                                            </div>
                                                            <div class="quantity">
                                                                        <span class="quantity-Price-amount">
                                                                            {{$product->cost_with_discount}}
                                                                            <span>تومان</span>
                                                                        </span>
                                                            </div>
                                                        </div>
                                                    </li>

                                                @endforeach

                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="mini-card-total">
                                    <strong>قیمت کل : </strong>
                                    <span class="price-total"> {{\App\Models\Cart::totalAmount()}}
                                                    <span>تومان</span>
                                                </span>
                                </div>
                                <div class="mini-card-button">
                                    <a href="{{route('client.cart.index')}}" class="view-card">مشاهده سبد خرید</a>
                                    <a href="{{route('client.orders.create')}}" class="card-checkout">تسویه حساب</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @auth()

                        <div class="header-cart-interest">
                            <a href="{{route('client.likes.index')}}" class="d-block">
                                <i class="fa fa-heart"></i>
                                <span class="counter" id="likes_count">{{auth()->user()->likes()->count()}}</span>
                            </a>
                        </div>


                    @endauth

                </li>
            </ul>
        </div>
    </div>
</nav>
<!--    responsive-megamenu-mobile----------------->
<nav class="sidebar">
    <div class="nav-header">
        <div class="header-cover"></div>
        <div class="logo-wrap">
            <a class="logo-icon" href="#"><img alt="logo-icon" src="/client/images/logo.png" width="40"></a>
        </div>
    </div>
    <ul class="nav-categories ul-base">
        <li>
            <a href="#" class="collapsed" type="button" data-toggle="collapse" data-target="#collapseOne"
               aria-expanded="false" aria-controls="collapseOne"><i class="mdi mdi-chevron-down"></i>کالای
                دیجیتال</a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                 data-parent="#accordionExample" style="">
                <ul>
                    <li class="has-sub"><a href="#" class="category-level-2">لوازم جانبی گوشی</a>
                        <ul>
                            <li><a href="#" class="category-level-3">کیف و کاور گوشی</a></li>
                            <li><a href="#" class="category-level-3">پاور بانک(شارژر همراه)</a></li>
                            <li><a href="#" class="category-level-3">پایه نگهدارنده گوشی</a></li>
                            <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="#" class="category-level-2">گوشی موبایل</a>
                        <ul>
                            <li><a href="#" class="category-level-3">سامسونگ</a></li>
                            <li><a href="#" class="category-level-3">هوآوی</a></li>
                            <li><a href="#" class="category-level-3">اپل</a></li>
                            <li><a href="#" class="category-level-3">شیائومی</a></li>
                            <li><a href="#" class="category-level-3">آنر</a></li>
                            <li><a href="#" class="category-level-3">نوکیا</a></li>
                            <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="#" class="category-level-2">دوربین</a>
                        <ul>
                            <li><a href="#" class="category-level-3">دوربین عکاسی دیجیتال</a></li>
                            <li><a href="#" class="category-level-3">دوربین ورزشی و فیلم برداری</a></li>
                            <li><a href="#" class="category-level-3">دوربین چاپ سریع</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </li>
        <li><a href="#" class="collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="false" aria-controls="collapseTwo"><i class="mdi mdi-chevron-down"></i>آرایشی
                و بهداشتی</a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                 data-parent="#accordionExample" style="">
                <ul>
                    <li class="has-sub"><a href="#" class="category-level-2">لوازم جانبی گوشی</a>
                        <ul>
                            <li><a href="#" class="category-level-3">کیف و کاور گوشی</a></li>
                            <li><a href="#" class="category-level-3">پاور بانک(شارژر همراه)</a></li>
                            <li><a href="#" class="category-level-3">پایه نگهدارنده گوشی</a></li>
                            <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="#" class="category-level-2">گوشی موبایل</a>
                        <ul>
                            <li><a href="#" class="category-level-3">سامسونگ</a></li>
                            <li><a href="#" class="category-level-3">هوآوی</a></li>
                            <li><a href="#" class="category-level-3">اپل</a></li>
                            <li><a href="#" class="category-level-3">شیائومی</a></li>
                            <li><a href="#" class="category-level-3">آنر</a></li>
                            <li><a href="#" class="category-level-3">نوکیا</a></li>
                            <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="#" class="category-level-2">دوربین</a>
                        <ul>
                            <li><a href="#" class="category-level-3">دوربین عکاسی دیجیتال</a></li>
                            <li><a href="#" class="category-level-3">دوربین ورزشی و فیلم برداری</a></li>
                            <li><a href="#" class="category-level-3">دوربین چاپ سریع</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </li>
        <li><a href="#">ابزار و اداری</a></li>
        <li><a href="#">مد و پوشاک</a></li>
        <li><a href="#" class="collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
               aria-expanded="false" aria-controls="collapseThree"><i class="mdi mdi-chevron-down"></i>خانه
                و آشپزخانه</a>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                 data-parent="#accordionExample" style="">
                <ul>
                    <li class="has-sub"><a href="#" class="category-level-2">لوازم جانبی گوشی</a>
                        <ul>
                            <li><a href="#" class="category-level-3">کیف و کاور گوشی</a></li>
                            <li><a href="#" class="category-level-3">پاور بانک(شارژر همراه)</a></li>
                            <li><a href="#" class="category-level-3">پایه نگهدارنده گوشی</a></li>
                            <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="#" class="category-level-2">گوشی موبایل</a>
                        <ul>
                            <li><a href="#" class="category-level-3">سامسونگ</a></li>
                            <li><a href="#" class="category-level-3">هوآوی</a></li>
                            <li><a href="#" class="category-level-3">اپل</a></li>
                            <li><a href="#" class="category-level-3">شیائومی</a></li>
                            <li><a href="#" class="category-level-3">آنر</a></li>
                            <li><a href="#" class="category-level-3">نوکیا</a></li>
                            <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="#" class="category-level-2">دوربین</a>
                        <ul>
                            <li><a href="#" class="category-level-3">دوربین عکاسی دیجیتال</a></li>
                            <li><a href="#" class="category-level-3">دوربین ورزشی و فیلم برداری</a></li>
                            <li><a href="#" class="category-level-3">دوربین چاپ سریع</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </li>
        <li><a href="#">لوازم تحریر و هنر</a></li>
        <li><a href="#">کودک و نوزاد</a></li>
    </ul>
</nav>
<div class="nav-btn nav-slider">
    <span class="linee1"></span>
    <span class="linee2"></span>
    <span class="linee3"></span>
</div>
<div class="overlay"></div>
<!-- bottom-menu-joomy -->
<!--    responsive-megamenu-mobile----------------->
<div class="bottom-menu-joomy">
    <ul class="mb-0">
        <li>
            <a href="home-1.html">
                <i class="mdi mdi-home"></i>
                صفحه اصلی
            </a>
        </li>
        <li>
            <a href="#">
                <div class="nav-btn nav-slider">
                    <i class="mdi mdi-menu" aria-hidden="true"></i>
                </div>
                دسته بندی ها
            </a>
        </li>
        <li>
            <a href="cart.html">
                <i class="mdi mdi-cart"></i>
                سبد خرید
                <div class="shopping-bag-item">2</div>
            </a>
        </li>
        <li>
            <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="mdi mdi-magnify"></i>
                جستجو
            </a>
        </li>
        <li>
            <a href="login.html">
                <i class="mdi mdi-account"></i>
                حساب کاربری
            </a>
        </li>
    </ul>
</div>


