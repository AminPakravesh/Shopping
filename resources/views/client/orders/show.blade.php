@extends('client.layout.master')

@section('content')


    @if($order->payment_status == 'OK')


        <div class="d-block">
            <section class="blog-checkout d-block order-1">
                <div class="col-lg">
                    <div class="checkout woocommerce-checkout">
                        <div class="content-checkout">
                            <div class="middle-container">
                        <div class="col2-set" id="customer-details">
            <div class="col-12">
                <div class="billing-fields mt-4">
                    <h4 class="text-success">سفارش دریافت شد</h4>
                    <p class="thankyou-order-received">پرداخت با موفقیت انجام شد. سفارش شما
                        با موفقیت ثبت شد و در زمان تعیین شده برای شما ارسال خواهد شد.
                        از اینکه دیجی استور را برای خرید انتخاب کردید از شما سپاسگزاریم.</p>
                    <ul class="order-overview">
                        <li class="order-overview-item">
                            کد سفارش :
                            <span>{{$order->id}}</span>
                        </li>
                        <li class="order-overview-item">
                            تاریخ :
                            <span>{{$order->created_at}}</span>
                        </li>
                        <li class="order-overview-item">
                            آدرس :
                            <span>{{$order->address}}</span>
                        </li>
                        <li class="order-overview-item">
                            روش پرداخت :
                            <span>پرداخت اینترنتی هوشمند</span>
                        </li>
                        <li class="order-overview-item">
                            قیمت نهایی :
                            <span class="amount">{{$order->amount}}
                                <span>تومان</span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


    @else


        <div class="d-block">
            <section class="blog-checkout d-block order-1">
                <div class="col-lg">
                    <div class="checkout woocommerce-checkout">
                        <div class="content-checkout">
                            <div class="middle-container">
                              <div class="col2-set" id="customer-details">
                                <div class="col-12">
                                    <div class="billing-fields mt-4">
                                        <h4 class="text-danger">سفارش دریافت نشد</h4>
                                        <p class="thankyou-order-received">پرداخت ناموفقیت انجام شد. برای
                                            جلوگیری از لغو سیستمی سفارش،تا 24 ساعت آینده پرداخت را انجام دهید.
                                            چنانچه طی این فرایند مبلغی از حساب شما کسر شده است،طی 72 ساعت آینده
                                            به حساب شما باز خواهد گشت.
                                        </p>
                                        <ul class="order-overview">
                                            <li class="order-overview-item">
                                                کد سفارش :
                                                <span>{{$order->id}}</span>
                                            </li>
                                            <li class="order-overview-item">
                                                تاریخ :
                                                <span>{{$order->created_at}}</span>
                                            </li>
                                            <li class="order-overview-item">
                                                آدرس :
                                                <span>{{$order->address}}</span>
                                            </li>
                                            <li class="order-overview-item">
                                                روش پرداخت :
                                                <span>پرداخت اینترنتی هوشمند</span>
                                            </li>
                                            <li class="order-overview-item">
                                                قیمت نهایی :
                                                <span class="amount">{{$order->amount}}
                                                 <span>تومان</span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


    @endif


@endsection
