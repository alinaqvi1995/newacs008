@extends('frontend.layouts.app')
@section('title', 'User Account')
@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(frontend/assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="page-header__ripped-paper"
        style="background-image: url(frontend/assets/images/shapes/page-header-ripped-paper.png);"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Shop</li>
            </ul>
            <h2>My account</h2>
        </div>
    </div>
</section>
<!--Page Header End-->
<!--Account Start-->
{{-- <section class="account">
    <div class="container">
        <div class="account__main-tab-box tabs-box">
            <ul class="tab-buttons clearfix list-unstyled">
                <li data-tab="#login" class="tab-btn"><span>Login</span></li>
                <li data-tab="#register" class="tab-btn active-btn"><span>Register</span></li>
            </ul>
            <div class="tabs-content">
                <!--tab-->
                <div class="tab" id="login">
                    <div class="account__main-tab-inner">
                        <form class="account__form">
                            <div class="account__form-input-box">
                                <input type="text" placeholder="Username">
                            </div>
                            <div class="account__form-input-box">
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="account__form-btn-box">
                                <button type="submit" class="thm-btn account__form-btn">Login now</button>
                                <div class="checked-box">
                                    <input type="checkbox" name="skipper2" id="skipper2" checked="">
                                    <label for="skipper2"><span></span>Remember me?</label>
                                </div>
                            </div>
                            <div class="account__form-forgot-password">
                                <a href="#">Forgot your password?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!--tab-->
                <div class="tab active-tab" id="register">
                    <div class="account__main-tab-inner">
                        <form class="account__form">
                            <div class="account__form-input-box">
                                <input type="text" placeholder="Username">
                            </div>
                            <div class="account__form-input-box">
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="account__form-btn-box">
                                <button type="submit" class="thm-btn account__form-btn">Login now</button>
                                <div class="checked-box">
                                    <input type="checkbox" name="skipper3" id="skipper3" checked="">
                                    <label for="skipper3"><span></span>Remember me?</label>
                                </div>
                            </div>
                            <div class="account__form-forgot-password">
                                <a href="#">Forgot your password?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!--tab-->
            </div>
        </div>
    </div>
</section> --}}
<section class="account">
    <div class="container">
        <div class="account__main-tab-box tabs-box">
            <ul class="tab-buttons clearfix list-unstyled">
                <li data-tab="#login" class="tab-btn"><span>Login</span></li>
                <li data-tab="#register" class="tab-btn active-btn"><span>Register</span></li>
            </ul>
            <div class="tabs-content">
                <!-- Login Tab -->
                <div class="tab" id="login">
                    <div class="account__main-tab-inner">
                        <form class="account__form">
                            <div class="account__form-input-box">
                                <input type="text" placeholder="Username">
                            </div>
                            <div class="account__form-input-box">
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="account__form-btn-box">
                                <button type="submit" class="thm-btn account__form-btn">Login now</button>
                                <div class="checked-box">
                                    <input type="checkbox" name="skipper2" id="skipper2" checked>
                                    <label for="skipper2"><span></span>Remember me?</label>
                                </div>
                            </div>
                            <div class="account__form-forgot-password">
                                <a href="#">Forgot your password?</a>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Register Tab -->
                <div class="tab active-tab" id="register">
                    <div class="account__main-tab-inner">
                        <form class="account__form">
                            <div class="account__form-input-box">
                                <input type="text" placeholder="Full Name">
                            </div>
                            <div class="account__form-input-box">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="account__form-input-box">
                                <input type="text" placeholder="Username">
                            </div>
                            <div class="account__form-input-box">
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="account__form-input-box">
                                <input type="password" placeholder="Confirm Password">
                            </div>
                            <div class="account__form-btn-box">
                                <button type="submit" class="thm-btn account__form-btn">Register now</button>
                                <div class="checked-box">
                                    <input type="checkbox" name="skipper3" id="skipper3" checked>
                                    <label for="skipper3"><span></span>Remember me?</label>
                                </div>
                            </div>
                            {{-- <div class="account__form-forgot-password">
                                <a href="#">Forgot your password?</a>
                            </div> --}}
                        </form>
                    </div>
                </div>
                <!--tab-->
            </div>
        </div>
    </div>
</section>

<!--Account End-->
<!--Subscribe One Start-->
<section class="subscribe-one">
    <div class="container">
        <div class="subscribe-one__inner">
            <div class="subscribe-one__shape-1 float-bob-x">
                <img src="frontend/assets/images/shapes/subscribe-one-shape-1.png" alt="">
            </div>
            <div class="subscribe-one__shape-2 float-bob-y">
                <img src="frontend/assets/images/shapes/subscribe-one-shape-2.png" alt="">
            </div>
            <div class="subscribe-one__shape-4 float-bob-y">
                <img src="frontend/assets/images/shapes/subscribe-one-shape-4.png" alt="">
            </div>
            <div class="subscribe-one__shape-5 zoominout">
                <img src="frontend/assets/images/shapes/subscribe-one-shape-5.png" alt="">
            </div>
            <div class="subscribe-one__inner-content">
                <div class="subscribe-one__shape-3 float-bob-x">
                    <img src="frontend/assets/images/shapes/subscribe-one-shape-3.png" alt="">
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="subscribe-one__left">
                            <div class="icon">
                                <span class="icon-folder"></span>
                            </div>
                            <div class="subscribe-one__title-box">
                                <span class="subscribe-one__tagline">Quisque vel ortor</span>
                                <h2 class="subscribe-one__title">Subscribe to newsletter</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="subscribe-one__right">
                            <div class="subscribe-one__shape-6 float-bob-x">
                                <img src="frontend/assets/images/shapes/subscribe-one-shape-6.png" alt="">
                            </div>
                            <div class="subscribe-one__form-box">
                                <form class="subscribe-one__form mc-form" data-url="MC_FORM_URL">
                                    <div class="subscribe-one__input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                        <button type="submit" class="subscribe-one__btn"><i
                                                class="fas fa-paper-plane"></i></button>
                                    </div>
                                </form>
                                <div class="mc-form__response"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Subscribe One End-->
@endsection