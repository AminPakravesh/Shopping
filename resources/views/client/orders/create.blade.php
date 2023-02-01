@extends('client.layout.master')


@section('content')


    <!-- checkout------------------------------>
    <div class="container-main">
        <div class="d-block">
            <section class="blog-checkout d-block order-1">
                <div class="col-lg">
                    <div class="checkout woocommerce-checkout">
                        <div class="content-checkout container">
                            <div class="notices-wrapper">
                                <div class="col-12">
                                    <div class="form-coupon-toggle">
                                        <div class="info">
                                            کد تخفیف دارید؟
                                            <a href="#" class="showcoupon">برای نوشتن کد اینجا کلیک کنید</a>
                                        </div>
                                        <div class="checkout-coupon form-coupon">
                                            <p>اگر کد تخفیف دارید، لطفا وارد کنید.</p>
                                            <form action="#" class="form-coupon">
                                                <div class="form-row">
                                                    <input type="text" name="offer-code" id="offer-code" class="checkout-discount-code"
                                                           placeholder="کد تخفیف">
                                                    <div class="append pl">
                                                        <button class="btn-append btn btn-primary" type="submit">اعمال
                                                            تخفیف</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="middle-container">
                                <form action="{{route('client.orders.store')}}" method="post" class="form-checkout">

                                    @csrf


                                    <div class="col2-set" id="customer-details">
                                        <div class="col-12">
                                            <div class="billing-fields mt-4">
                                                <h4>جزئیات صورتحساب</h4>
                                                <div class="form-checkout-row">
                                                    <div class="validate-required">
                                                        <label for="name">نام تحویل گیرنده <abbr class="required"
                                                                                                 title="ضروری" style="color:red;">*</abbr></span></label>
                                                        <input type="text" id="name"
                                                               class="input-name-checkout form-control">
                                                    </div>

                                                    <div class="validate-required">
                                                        <label for="phone-number">شماره موبایل <abbr class="required"
                                                                                                     title="ضروری" style="color:red;">*</abbr></label>
                                                        <input type="number" id="phone-number"
                                                               class="input-name-checkout form-control text-left">
                                                    </div>

                                                    <div class="validate-required">
                                                        <label for="post-code">کد پستی <abbr class="required"
                                                                                             title="ضروری" style="color:red;">*</abbr></label>
                                                        <input type="text" id="post-code"
                                                               class="input-name-checkout form-control"
                                                               placeholder="کد پستی را بدون خط تیره بنویسید">
                                                    </div>

                                                    <div class="validate-required">
                                                        <label for="address">خیابان
                                                            <abbr  class="required" title="ضروری"
                                                                 style="color:red;">
                                                                *</abbr></label>
                                                        <input id="address" name="address" type="text" id="post-code"
                                                               class="input-name-checkout form-control">
                                                    </div>

                                                    <label for="description">توضیحات سفارش
                                                        <span class="optional">(اختیاری)</span>
                                                    </label>
                                                    <textarea rows="5" cols="30" id="description" name="description"
                                                              class="textarea-name-checkout form-control"
                                                              placeholder="یادداشت ها درباره سفارش شما ، برای مثال نکات مهم برای تحویل بار "></textarea>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="order-review-heading">سفارش شما</h3>
                                    <div class="checkout-review-order">
                                        <table class="checkout-review-order-table table table-borderless">
                                            <thead>
                                            <tr>
                                                <th scope="col" class="product-name">محصول</th>
                                                <th scope="col" class="product-price">قیمت کل</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($items as $item)

                                                @php
                                                    $product=$item['product'];
                                                    $productQty=$item['quantity'];
                                                @endphp

                                                <tr class="checkout-cart-item">

                                                <td class="product-name">{{$product->name}}</td>
                                                <td class="product-price text-info">
                                                        <span class="amount">{{$product->cost}}
                                                            <span>تومان</span>
                                                        </span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>

                                            <tr class="cart-subtotal">
                                                <th>مجموع</th>
                                                <td>
                                                    <ins>
                                                        <div class="price">
                                                                <ins>
                                                                    <span class="amount">{{$totalAmount}}
                                                                    <span>تومان</span>
                                                                </span>
                                                                </ins>
                                                            </div>
                                                    </ins>
                                                </td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>حمل ونقل</th>
                                                <td>
                                                    <div class="shipping-totals-item">
                                                            <span class="shipping-destination">حمل و نقل به خراسان
                                                                شمالی</span>
                                                    </div>
                                                </td>
                                            </tr>


                                            </tfoot>

                                        </table>
                                        <ul class="checkout-payment-methods">

                                            <li class="checkout-payment-method-item d-block">
                                                <label for="#" class="outline-radio">
                                                    <input type="radio" name="payment_method"
                                                           id="payment-option-online">
                                                    <span class="outline-radio-check"></span>
                                                </label>
                                                <label for="#" class="shipping-totals-title-row">
                                                    <div class="shipping-totals-title">پرداخت اینترنتی هوشمند</div>
                                                </label>
                                            </li>

                                        </ul>
                                        <div class="form-auth-row">
                                            <label for="#" class="ui-checkbox mt-1">
                                                <input type="checkbox" value="1" name="login" id="remember">
                                                <span class="ui-checkbox-check"></span>
                                            </label>
                                            <label for="remember" class="remember-me mr-0"><a href="#">حریم خصوصی</a> و
                                                <a href="#">شرایط قوانین </a>استفاده از سرویس های سایت دیجی‌اسمارت را
                                                مطالعه نموده و با کلیه موارد آن موافقم <abbr class="required"
                                                                                             title="ضروری" style="color:red;">*</abbr></label>
                                        </div>
                                        <button class="btn-Order btn btn-primary mt-4 mb-3" type="submit">ثبت
                                            سفارش</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- checkout------------------------------>


@endsection


