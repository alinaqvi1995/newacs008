@extends('frontend.layouts.app')
@section('title', 'Home Page')
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
            <h2>Cart</h2>
        </div>
    </div>
</section>
<!--Page Header End-->
<!--Start Cart Page-->
<section class="cart-page">
    <div class="container">
        <div class="table-responsive">
            <table class="table cart-table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>
                            <div class="product-box">
                                <div class="img-box">
                                    <img src="frontend/assets/images/shop/cart-page-img-1.jpg" alt="">
                                </div>
                                <h3><a href="product-details.html">Brown bread</a></h3>
                            </div>
                        </td>
                        <td>$10.99</td>
                        <td>
                            <div class="quantity-box">
                                <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                <input type="number" id="product-1" value="1" />
                                <button type="button" class="add"><i class="fa fa-plus"></i></button>
                            </div>
                        </td>
                        <td>
                            $10.99
                        </td>
                        <td>
                            <div class="cross-icon">
                                <i class="icon-close remove-icon"></i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="product-box">
                                <div class="img-box">
                                    <img src="frontend/assets/images/shop/cart-page-img-2.jpg" alt="">
                                </div>
                                <h3><a href="product-details.html">Broccoli</a></h3>
                            </div>
                        </td>
                        <td>$10.99</td>
                        <td>
                            <div class="quantity-box">
                                <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                <input type="number" id="product-2" value="1" />
                                <button type="button" class="add"><i class="fa fa-plus"></i></button>
                            </div>
                        </td>
                        <td>
                            $10.99
                        </td>
                        <td>
                            <div class="cross-icon">
                                <i class="icon-close remove-icon"></i>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <form action="#" class="default-form cart-cupon__form">
                    <input type="text" placeholder="Enter coupon code" class="cart-cupon__input">
                    <button class="thm-btn" type="submit">
                        <span>Apply coupon</span>
                    </button>
                </form>
            </div>
            <div class="col-xl-4 col-lg-5">
                <ul class="cart-total list-unstyled">
                    <li>
                        <span>Subtotal</span>
                        <span>$20.98 USD </span>
                    </li>
                    <li>
                        <span>Shipping cost</span>
                        <span>$0.00 USD</span>
                    </li>
                    <li>
                        <span>Total</span>
                        <span class="cart-total-amount">$20.98 USD</span>
                    </li>
                </ul>
                <div class="cart-page__buttons">
                    <div class="cart-page__buttons-1">
                        <a href="#" class="thm-btn">Update</a>
                    </div>
                    <div class="cart-page__buttons-2">
                        <a href="checkout.html" class="thm-btn">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Cart Page-->
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