@extends('frontend.layouts.app')
@section('title', "Indigo - Pakistan's Favorite Grocery Store for Best Prices & Free Delivery")
@section('content')
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <section class="main-slider-three">
        <div class="main-slider-three__bg-shape-2"
            style="background-image: url(frontend/assets/images/shapes/main-slider-three-bg-shape-2.png);"></div>
        <div class="main-slider-three__ripped-paper"
            style="background-image: url(frontend/assets/images/shapes/main-slider-three-pipped-paper.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="main-slider-three__categories-box">
                        <div class="main-slider-three__categories">
                            <h3 class="main-slider-three__categories-title">All Categories</h3>
                            <ul class="main-slider-three__categories-list list-unstyled">
                                @foreach ($categories as $item)
                                    <li><a href="{{ route('frontend.products', ['category' => $item->id]) }}"><i
                                                class="icon-groceries"></i>
                                            {{ $item->name }}<span class="fas fa-angle-right"></span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="main-slider-three__right">
                        <div class="swiper-container thm-swiper__slider"
                            data-swiper-options='{"slidesPerView": 1, "loop": true,
                                "effect": "fade",
                                "pagination": {
                                "el": "#main-slider-pagination",
                                "type": "bullets",
                                "clickable": true
                                },
                                "navigation": {
                                "nextEl": "#main-slider__swiper-button-next",
                                "prevEl": "#main-slider__swiper-button-prev"
                                },
                                "autoplay": {
                                "delay": 5000
                                }}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="image-layer-three">
                                        <img src="frontend/assets/images/backgrounds/main-slider-3-1.webp" alt="">
                                    </div>
                                    <div class="main-slider-three__bg-shape-1"
                                        style="background-image: url(frontend/assets/images/shapes/main-slider-three-bg-shape-1.jpg);">
                                    </div>
                                    <div class="main-slider-three__content">
                                        <h4 class="main-slider-three__sub-title">Organic Market
                                        </h4>
                                        <h2 class="main-slider-three__title">Eat local & healthy <br>
                                            organic food
                                        </h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="product-details.html" class="thm-btn main-slider-three__btn">Shop
                                                now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-layer-three image-layer-three--2">
                                        <img src="frontend/assets/images/backgrounds/main-slider-3-2.webp" alt="">
                                    </div>
                                    <div class="main-slider-three__bg-shape-1"
                                        style="background-image: url(frontend/assets/images/shapes/main-slider-three-bg-shape-1.jpg);">
                                    </div>
                                    <div class="main-slider-three__content">
                                        <h4 class="main-slider-three__sub-title">Organic Market
                                        </h4>
                                        <h2 class="main-slider-three__title">Eat local & healthy <br>
                                            organic food
                                        </h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="product-details.html" class="thm-btn main-slider-three__btn">Shop
                                                now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-layer-three image-layer-three--3">
                                        <img src="frontend/assets/images/backgrounds/main-slider-3-3.webp" alt="">
                                    </div>
                                    <div class="main-slider-three__bg-shape-1"
                                        style="background-image: url(frontend/assets/images/shapes/main-slider-three-bg-shape-1.jpg);">
                                    </div>
                                    <div class="main-slider-three__content">
                                        <h4 class="main-slider-three__sub-title">Organic Market
                                        </h4>
                                        <h2 class="main-slider-three__title">Eat local & healthy <br>
                                            organic food
                                        </h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="product-details.html" class="thm-btn main-slider-three__btn">Shop
                                                now</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-pagination" id="main-slider-pagination"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature-three">
        <div class="container">
            <div class="feature-three__inner">
                <ul class="list-unstyled feature-three__list">
                    <!--feature Two Single Start-->
                    <li>
                        <div class="feature-three__single">
                            <div class="feature-three__icon">
                                <span class="icon-global-shipping"></span>
                            </div>
                            <div class="feature-three__content">
                                <h3 class="feature-three__title">Return Policy</h3>
                                <p class="feature-three__subtitle">Money back guarantee</p>
                            </div>
                        </div>
                    </li>
                    <!--feature Two Single End-->
                    <!--feature Two Single Start-->
                    <li>
                        <div class="feature-three__single">
                            <div class="feature-three__icon">
                                <span class="icon-free-delivery"></span>
                            </div>
                            <div class="feature-three__content">
                                <h3 class="feature-three__title">Free shipping</h3>
                                <p class="feature-three__subtitle">On all orders over RS 60.00</p>
                            </div>
                        </div>
                    </li>
                    <!--feature Two Single End-->
                    <!--feature Two Single Start-->
                    <li>
                        <div class="feature-three__single">
                            <div class="feature-three__icon">
                                <span class="icon-store"></span>
                            </div>
                            <div class="feature-three__content">
                                <h3 class="feature-three__title">Store locator</h3>
                                <p class="feature-three__subtitle">Find your nearest store</p>
                            </div>
                        </div>
                    </li>
                    <!--feature Two Single End-->
                </ul>
            </div>
        </div>
    </section>
    <section class="hot-products-three">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Checkout New Products</span>
                <h2 class="section-title__title">Today’s new hotest products
                    <br> available now
                </h2>
            </div>
            <div class="row">
                <!-- Hot Products Two Single Start -->
                @foreach ($products as $product)
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="hot-products__single">
                            <div class="hot-products__single-inner">
                                <div class="hot-products__img-box">
                                    <div class="hot-products__img">
                                        {{-- <img src="frontend/assets/images/resources/hot-product-1-1.webp" alt=""> --}}
                                        <img src="{{ asset($product->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="hot-products__content">
                                    <div class="hot-products__rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="hot-products__title"><a
                                            href="product-details.html">{{ $product->name }}</a></h3>
                                    <p class="hot-products__price">RS {{ number_format($product->price, 2) }}</p>
                                    <div class="hot-products__btn-box">
                                        <a href="javascript:void(0);" class="hot-products__btn thm-btn add-to-cart"
                                            data-id="{{ $product->id }}"
                                            data-auth="{{ auth()->check() ? '1' : '0' }}">Add
                                            to cart</a>
                                    </div>
                                </div>
                                <div class="hot-products__icon-boxes">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Hot Products Two Single End -->
            </div>
        </div>
    </section>
    <section class="banner-three">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="banner-three__left">
                        <div class="banner-three__inner">
                            <div class="banner-three__inner-bg"
                                style="background-image: url(frontend/assets/images/backgrounds/banner-three-bg-1.webp);">
                            </div>
                            <p class="banner-three__tagline">Organic Food</p>
                            <h3 class="banner-three__title">Fresh <br> Avocado</h3>
                            <div class="banner-three__btn-box">
                                <a href="product-details.html" class="banner-three__btn thm-btn">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="banner-three__middle">
                        <div class="banner-three__middle-inner">
                            <div class="banner-three__img-2">
                                <img src="frontend/assets/images/resources/banner-three-img-2.webp" alt="">
                            </div>
                            <div class="banner-three__shape-1">
                                <img src="frontend/assets/images/shapes/banner-three-middel-shape-1.png" alt="">
                            </div>
                            <div class="banner-three__middle-offer">
                                <p>off</p>
                            </div>
                            <div class="banner-three__middle-title-box">
                                <p class="banner-three__middle-tagline">20%</p>
                                <h3 class="banner-three__middle-title">on All Healthy
                                    <br> Beverages
                                </h3>
                            </div>
                            <div class="banner-three__middle-btn-box">
                                <a href="product-details.html" class="banner-three__middle-btn thm-btn">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="banner-three__right">
                        <div class="banner-three__right-inner">
                            <div class="banner-three__right-shape-1">
                                <img src="frontend/assets/images/shapes/banner-three-right-shape-1.png" alt="">
                            </div>
                            <div class="banner-three__img-3">
                                <img src="frontend/assets/images/resources/banner-three-img-3.webp" alt="">
                            </div>
                            <div class="banner-three__right-title-box">
                                <p class="banner-three__right-tagline">100% Healthy</p>
                                <h3 class="banner-three__right-title">Healthy <br> Organic Food</h3>
                            </div>
                            <div class="banner-three__right-btn-box">
                                <a href="product-details.html" class="banner-three__right-btn thm-btn">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="brand-one">
        <div class="container">
            <div class="thm-swiper__slider swiper-container"
                data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="frontend/assets/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </section>

    <section class="counter-one">
        <div class="counter-one__bg"
            style="background-image: url(frontend/assets/images/backgrounds/counter-one-bg-img.png);"></div>
        <div class="container">
            <ul class="counter-one__inner list-unstyled">
                <li class="counter-one__single">
                    <div class="counter-one__icon">
                        <i class="icon-customer-service"></i>
                    </div>
                    <div class="counter-one__content count-box">
                        <h3 class="count-text" data-stop="154" data-speed="1500">00</h3>
                        <p class="counter-one__text">Happy customers</p>
                    </div>
                </li>
                <li class="counter-one__single">
                    <div class="counter-one__icon">
                        <i class="icon-farmer-1"></i>
                    </div>
                    <div class="counter-one__content count-box">
                        <h3 class="count-text" data-stop="163" data-speed="1500">00</h3>
                        <p class="counter-one__text">Expert farmers</p>
                    </div>
                </li>
                <li class="counter-one__single">
                    <div class="counter-one__icon">
                        <i class="icon-agriculture"></i>
                    </div>
                    <div class="counter-one__content count-box">
                        <h3 class="count-text" data-stop="360" data-speed="1500">00</h3>
                        <p class="counter-one__text">New products</p>
                    </div>
                </li>
                <li class="counter-one__single">
                    <div class="counter-one__icon">
                        <i class="icon-trophy"></i>
                    </div>
                    <div class="counter-one__content count-box">
                        <h3 class="count-text" data-stop="22" data-speed="1500">00</h3>
                        <p class="counter-one__text">Awards winning</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="news-two">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">From the Blog Posts</span>
                <h2 class="section-title__title">Latest news updates
                    <br> & articles
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img src="frontend/assets/images/blog/news-1-1.webp" alt="">
                            </div>
                        </div>
                        <div class="news-one__content-box">
                            <ul class="news-one__meta list-unstyled">
                                <li>
                                    <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                                </li>
                                <li>
                                    <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title"><a href="news-details.html">Which healthy food growth
                                    strategies required</a></h3>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="news-details.html">Read More</a>
                                </div>
                                <div class="news-one__comment">
                                    <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>20 Sep</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img src="frontend/assets/images/blog/news-1-2.webp" alt="">
                            </div>
                        </div>
                        <div class="news-one__content-box">
                            <ul class="news-one__meta list-unstyled">
                                <li>
                                    <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                                </li>
                                <li>
                                    <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title"><a href="news-details.html">Donec aliquet blandit enim
                                    feugiat Suspendisse</a></h3>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="news-details.html">Read More</a>
                                </div>
                                <div class="news-one__comment">
                                    <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>20 Sep</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img src="frontend/assets/images/blog/news-1-3.webp" alt="">
                            </div>
                        </div>
                        <div class="news-one__content-box">
                            <ul class="news-one__meta list-unstyled">
                                <li>
                                    <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                                </li>
                                <li>
                                    <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title"><a href="news-details.html">luctus sit amet eu nibh tempus
                                    turpis.</a></h3>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="news-details.html">Read More</a>
                                </div>
                                <div class="news-one__comment">
                                    <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>20 Sep</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
            </div>
        </div>
    </section>
    @include('frontend.partials.subscribe')
@endsection
