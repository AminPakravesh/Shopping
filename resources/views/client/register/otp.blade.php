<!DOCTYPE html>
<html lang="fa" dir="rtl">
@extends('client.layout.head')
<body>

<!-- login----------------------------------->
<div class="container">
    <div class="row">
        <div class="col-lg">
            <section class="page-account-box">
                <div class="col-lg-6 col-md-6 col-xs-12 mx-auto">
                    <div class="ds-userlogin">
                        <a href="#" class="account-box-logo">Mimshopping</a>
                        <div class="account-box">
                            <div class="account-box-headline">
                                <a href="register.html" class="register-ds active" style="width: 100%">
                                    <span class="title">ثبت نام</span>
                                    <span class="sub-title">در میم شاپینگ</span>
                                </a>
                            </div>
                            <div class="Login-to-account mt-4">
                                <div class="account-box-content" >
                                    <h4>اعتبار سنجی کد یکبار مصرف</h4>
                                    <h6 style="color: red ; font-size: 12px" >کد یکبار مصرف</h6>
                                    <form action="{{route('client.register.verifyOtp',$user)}}" class="form-account text-right" method="post">
                                        @csrf

                                        <div class="form-account-title">
                                            <label for="input-otp">کد یکبار مصرف</label>
                                            <input type="text" class="number-email-input" maxlength="5" minlength="5" max="99999" min="10000" id="otp" name="otp" placeholder=" کد ارسالی به ایمبلتان را وارد نمایید">
                                        </div>
                                        <div class="form-row-account">
                                            <button class="btn btn-primary btn-register">تایید</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- login----------------------------------->

<!-- scroll_Progress------------------------->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>
<!-- scroll_Progress------------------------->

</body>
<!-- file js---------------------------------------------------->
@extends('client.layout.footer')

<!-- main js---------------------------------------------------->

</html>
