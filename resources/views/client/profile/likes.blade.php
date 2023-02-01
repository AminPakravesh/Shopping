@extends('client.layout.master')


@section('content')

    <div class="container-main">
        <div class="d-block">
            <section class="profile-home">
                <div class="col-lg">
                    <div class="post-item-profile order-1 d-block">
                        <div class="col-lg-3 col-md-3 col-xs-12 pr">
                            <div class="sidebar-profile sidebar-navigation">
                                <section class="profile-box">
                                    <header class="profile-box-header-inline">
                                        <div class="profile-avatar user-avatar profile-img">
                                            <img src="/client/images/man.png">
                                        </div>
                                    </header>
                                    <footer class="profile-box-content-footer">
                                        <span class="profile-box-nameuser">حسن شجاعی</span>
                                        <span class="profile-box-registery-date">عضویت در سایت 2 پیش</span>
                                        <span class="profile-box-phone">شماره همراه : *******0991</span>
                                        <div class="profile-box-tabs">
                                            <a href="#" class="profile-box-tab-sign-out"><i
                                                    class="mdi mdi-logout-variant"></i>خروج از حساب</a>
                                        </div>
                                    </footer>
                                </section>
                                <section class="profile-box">
                                    <ul class="profile-account-navs">
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a href="#" class=""><i class="mdi mdi-account-outline"></i>
                                                پروفایل
                                            </a>
                                        </li>
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a href="#" class=""><i class="mdi mdi-cart"></i>
                                                همه سفارش ها
                                            </a>
                                        </li>
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a href="#" class="active"><i class="mdi mdi-heart"></i>
                                                لیست علاقه مندی
                                            </a>
                                        </li>
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a href="#" class=""><i class="mdi mdi-map-outline"></i>
                                                آدرس ها
                                            </a>
                                        </li>
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a href="#" class=""><i class="mdi mdi-email-open-outline"></i>
                                                نظرات
                                            </a>
                                        </li>
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a href="#" class=""><i class="mdi mdi-tooltip-text-outline"></i>
                                                اطلاعات حساب
                                            </a>
                                        </li>
                                    </ul>
                                </section>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-xs-12 pl">
                            <div class="profile-content">
                                <div class="profile-stats">
                                    <div class="table-favorites">
                                        <table class="table ns-table table-profile-favorites">
                                            <thead>
                                            <tr>
                                                <th scope="col" width="50"></th>
                                                <th scope="col">نام محصول</th>
                                                <th scope="col">قیمت</th>
                                                <th class="actions-th"></th>
                                                <th class="actions-th"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($products as $product)

                                                <tr>
                                                    <th scope="row">
                                                        <div class="favorites-product-img">
                                                            <img alt="{{$product->name}}" title="{{$product->name}}"
                                                                 src="{{str_replace('public','/storage', $product->image)}}">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <a href="{{route('client.products.show',$product)}}">
                                                            {{$product->name}}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span class="amount">{{$product->cost}}
                                                            <span>تومان</span>
                                                        </span>
                                                    </td>


                                                     <td>
                                                         <a href="" style="background-color: #0dcaf0 ; border-radius: 10px">
                                                             <span class="icon-cart">
                                                             <i class="mdi mdi-shopping" style="color: greenyellow"></i>
                                                             </span>
                                                         </a>

                                                     </td>

                                                    <td class="text-left actions">
                                                        <form action="{{route('client.likes.destroy',$product)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')

                                                                <button type="submit" class="btn-danger" style="border-radius: 10px">
                                                                <i class="mdi mdi-close" style="color:#FFFFFF;"></i>
                                                                </button>


                                                        </form>
                                                    </td>

                                                </tr>

                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
