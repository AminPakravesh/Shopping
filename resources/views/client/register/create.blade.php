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
                                <a href="login.html" class="login-ds">
                                    <span class="title">ورود</span>
                                    <span class="sub-title">به میم شاپینگ</span>
                                </a>
                                <a href="register.html" class="register-ds active">
                                    <span class="title">ثبت نام</span>
                                    <span class="sub-title">در میم شاپینگ</span>
                                </a>
                            </div>
                            <div class="Login-to-account mt-4">
                                <div class="account-box-content">
                                    <h4>ثبت نام در میم شاپینگ</h4>
                                    <h6 style="color: red ; font-size: 12px" >برای دریافت کد یکبار مصرف ایمیل خود را وارد نمایید</h6>
                                    <form action="{{route('client.register.sendmail')}}" class="form-account text-right" method="post">
                                        @csrf

                                        <div class="form-account-title">
                                            <label for="email-phone">ایمیل</label>
                                            <input type="email" class="number-email-input" id="email-phone" name="email" placeholder="آدرس ایمیل">
                                        </div>
                                        <div class="form-auth-row">
                                            <label for="#" class="ui-checkbox mt-1">
                                                <input type="checkbox" value="1" name="login" id="remember">
                                                <span class="ui-checkbox-check"></span>
                                            </label>
                                            <label for="remember" class="remember-me mr-0"><a href="#">حریم خصوصی</a> و <a href="#">شرایط قوانین </a>استفاده از سرویس های سایت دیجی‌اسمارت را مطالعه نموده و با کلیه موارد آن موافقم.</label>
                                        </div>
                                        <div class="form-row-account">
                                            <button class="btn btn-primary btn-register">ثبت نام در میم شاپینگ</button>
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
