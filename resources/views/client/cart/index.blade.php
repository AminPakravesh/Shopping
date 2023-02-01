@extends('client.layout.master')

@section('content')



    <div class="container-main">
        <div class="d-block">
            <div class="main-row">
                <div id="breadcrumb">
                    <i class="mdi mdi-home"></i>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active" aria-current="page">سبد خرید</li>
                        </ol>
                    </nav>
                </div>
                <section class="cart-home">
                    <div class="post-item-cart d-block order-2">
                        <div class="content-page">
                            <div class="cart-form">
                                <form action="#" class="c-form">
                                    <table class="table-cart cart table table-borderless">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="product-cart-name">نام محصول</th>
                                            <th scope="col" class="product-cart-price">قیمت</th>
                                            <th scope="col" class="product-cart-quantity">تعداد مورد نیاز</th>
                                            <th scope="col" class="product-cart-Total">مجموع</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($items as $item)

                                            @php
                                            $product=$item['product'];
                                            $productQty=$item['quantity'];
                                            @endphp

                                        <tr>
                                            <th scope="row" class="product-cart-name">
                                                <div class="product-thumbnail-img">
                                                    <a href="#">
                                                        <img style="border-radius: 15px" src="{{str_replace('public','/storage', $product->image)}}">
                                                    </a>
                                                    <div class="product-remove">
                                                        <a href="#" class="remove">
                                                            <i class="mdi mdi-close"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="#">
                                                        {{$product->name}}
                                                    </a>
                                                    <div class="variation">
                                                        <div class="variant-color">
                                                            <span class="variant-color-title">{{$product->brand->name}}</span>
                                                            <div class="variant-shape"></div>
                                                        </div>
                                                        <div class="variant-guarantee">
                                                            <i class="mdi mdi-check"></i>
                                                            گارانتی ۱۸ ماهه
                                                        </div>
                                                        <div class="seller">
                                                            <i class="mdi mdi-storefront"></i>
                                                            فروشنده :
                                                            <span>کالا مارکت</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="product-cart-price">
                                                    <span class="amount">{{$product->cost_with_discount}}
                                                        <span>تومان</span>
                                                    </span>
                                            </td>
                                            <td class="product-cart-quantity">
                                                <div class="required-number before">
                                                    <div class="quantity">
                                                        <input id="inpute-quantity" type="number" min="1" max="100" step="1" value="{{$productQty}}">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-cart-Total">
                                                    <span class="amount">{{$product->cost_with_discount * $productQty}}
                                                        <span>تومان</span>
                                                    </span>
                                            </td>
                                        </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </form>
                                <div class="cart-collaterals">
                                    <div class="totals d-block">
                                        <h3 class="Total-cart-total">مجموع کل سبد خرید</h3>
                                        <div class="checkout-summary">
                                            <ul class="checkout-summary-summary">
                                                <li class="cart-subtotal">
                                                    <span class="amount">قیمت کل</span>
                                                    <span> {{$totalAmount}} تومان</span>
                                                </li>
                                                <li class="shipping-totals">
                                                    <span class="amount">حمل و نقل</span>
                                                    <div class="shipping-totals-item">
                                                        <div class="shipping-totals-outline">
                                                            <label for="#" class="outline-radio">
                                                                <input type="radio" name="payment_method"
                                                                       id="payment-option-online" checked="checked">
                                                                <span class="outline-radio-check"></span>
                                                            </label>
                                                            <label for="#" class="shipping-totals-title-row">
                                                                <div class="shipping-totals-title">حمل و نقل رایگان
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class="shipping-totals-outline">
                                                            <label for="#" class="outline-radio">
                                                                <input type="radio" name="payment_method"
                                                                       id="payment-option-online">
                                                                <span class="outline-radio-check"></span>
                                                            </label>
                                                            <label for="#" class="shipping-totals-title-row">
                                                                <div class="shipping-totals-title">حمل و نقل معمولی:
                                                                    20,000 تومان</div>
                                                            </label>
                                                        </div>
                                                        <span class="shipping-destination">حمل و نقل به خراسان
                                                            شمالی</span>
                                                    </div>
                                                </li>
                                                <li class="order-total">
                                                    <span class="amount"> مجموع</span>
                                                    <span> {{$totalAmount}}</span>
                                                </li>
                                                <li class="discount-code">
                                                    <div class=" align-items-center">
                                                        <div class="col-md-7 pr mt-5">
                                                            <div class="coupon">
                                                                <form action="#">
                                                                    <input type="text" name="input-coupon"
                                                                           class="input-coupon-code"
                                                                           placeholder="كد تخفیف:">
                                                                    <button class="btn btn-coupon"
                                                                            type="submit">اعمال</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 pl mt-5">
                                                            <div class="proceed-to-checkout">
                                                                <a href="{{route('client.orders.create')}}" class="checkout-button d-block">تسویه
                                                                    حساب</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>





@endsection
