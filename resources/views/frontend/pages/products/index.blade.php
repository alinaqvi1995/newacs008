@extends('frontend.layouts.app')
@section('title', 'Shop All Products - Indigo Grocery Store')
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
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>Shop</li>
                </ul>
                <h2>Products list</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Product List Start-->
    <section class="product-list">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3">
                    <div class="product__sidebar">
                        <div class="shop-search product__sidebar-single">
                            <form action="#">
                                <input type="text" id="search" placeholder="Search">
                            </form>
                        </div>
                        <div class="product__price-ranger product__sidebar-single">
                            <h3 class="product__sidebar-title">Price</h3>
                            <div class="price-ranger">
                                <div id="slider-range"></div>
                                <div class="ranger-min-max-block">
                                    <div class="ranger-min-max-block-box">
                                        <input type="text" id="min_price" readonly class="min">
                                        <span>-</span>
                                        <input type="text" id="max_price readonly class="max">
                                    </div>
                                    <div class="product__price-ranger-filter">
                                        <input type="submit" value="Filter">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-category product__sidebar-single">
                            <h3 class="product__sidebar-title">Categories</h3>
                            <ul class="list-unstyled">
                                <li class="{{ request('category') ? '' : 'active' }}">
                                    <a href="javascript:void(0);" data-category="">All Categories
                                        <span>({{ count($totalProducts) }})</span>
                                    </a>
                                </li>
                                @foreach ($categories as $category)
                                    <li class="{{ request('category') == $category->id ? 'active' : '' }}">
                                        <a href="javascript:void(0);" data-category="{{ $category->id }}">
                                            {{ $category->name }} <span>({{ $category->products_count }})</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <div class="product-list__right">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="product__showing-result">
                                    <div class="product__showing-text-box">
                                        <p class="product__showing-text">Showing 1–9 of 12 Results</p>
                                    </div>
                                    <div class="product__menu-showing-sort">
                                        <ul class="nav nav-tabs product__list-grid-tabs" id="productListGridTab"
                                            role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="product-grid-tab" data-bs-toggle="tab"
                                                    data-bs-target="#product-grid" type="button" role="tab"
                                                    aria-controls="product-grid" aria-selected="true"><span
                                                        class="icon-menu"></span></button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="product-list-tab" data-bs-toggle="tab"
                                                    data-bs-target="#product-list" type="button" role="tab"
                                                    aria-controls="product-list" aria-selected="false"><span
                                                        class="icon-list"></span></button>
                                            </li>
                                        </ul>


                                        <div class="product__showing-sort">
                                            <div class="select-box">
                                                <select class="wide" id="sort_by">
                                                    <option value="latest">Latest</option>
                                                    <option value="price_low_high">Price: Low to High</option>
                                                    <option value="price_high_low">Price: High to Low</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="productListGridTabContent">
                            <div class="tab-pane fade show active" id="product-grid" role="tabpanel"
                                aria-labelledby="product-grid">
                                <div class="product__all" id="product__all">
                                    <div class="row">
                                        <!--Product All Single Start-->
                                        @foreach ($products as $product)
                                            <div class="col-xl-4 col-lg-4 col-md-6">
                                                <div class="product__all-single">
                                                    <div class="product__all-single-inner">
                                                        <div class="product__all-img">
                                                            <img src="{{ asset($product->image) }}" alt="">
                                                        </div>
                                                        <div class="product__all-content">
                                                            <div class="product__all-review">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <h4 class="product__all-title"><a
                                                                    href="{{ route('frontend.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                            </h4>
                                                            <p class="product__all-price">RS
                                                                {{ number_format($product->price, 2) }}</p>
                                                            <div class="product__all-btn-box">
                                                                <a href="cart.html" class="thm-btn product__all-btn">Add
                                                                    to
                                                                    cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="products__all-icon-boxes">
                                                            <a href="#"><i class="far fa-heart"></i></a>
                                                            <a href="#"><i class="fas fa-eye"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <!--Product All Single End-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        {{-- <div class="shop-page__pagination">
                                            <ul class="pg-pagination list-unstyled">
                                                <li class="count"><a href="#">01</a></li>
                                                <li class="count"><a href="#">02</a></li>
                                                <li class="count"><a href="#">....</a></li>
                                                <li class="count"><a href="#">05</a></li>
                                                <li class="next">
                                                    <a href="#" aria-label="Next"><i
                                                            class="fa fa-angle-right"></i></a>
                                                </li>
                                            </ul>
                                        </div> --}}
                                        <div class="shop-page__pagination">
                                            <ul class="pg-pagination list-unstyled" id="pagination">
                                                {!! $products->links() !!}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.tab-pane -->
                            <div class="tab-pane fade " id="product-list" role="tabpanel"
                                aria-labelledby="product-list">
                                <div class="product-list__inner">
                                    <!--Products List Single Start-->
                                    @foreach ($products as $product)
                                        <div class="product-list__single">
                                            <div class="product-list__single-inner">
                                                <div class="product-list__img-box">
                                                    <div class="product-list__img">
                                                        <img src="{{ asset($product->image) }}" alt="">
                                                    </div>
                                                    <div class="product-list__icon-boxes">
                                                        <a href="#"><i class="far fa-heart"></i></a>
                                                        <a href="#"><i class="fas fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-list__content">
                                                    <div class="product-list__review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product-list__title"><a
                                                            href="{{ route('frontend.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                    </h4>
                                                    <p class="product-list__price">RS
                                                        {{ number_format($product->price, 2) }}</p>
                                                    <p class="product-list__text">{{ $product->short_description }}</p>
                                                    <div class="product-list__btn-box">
                                                        <a href="cart.html" class="thm-btn product-list__btn">Add to
                                                            cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!--Products List Single End-->
                                </div><!-- /.product-list__inner -->
                                <div class="row">
                                    <div class="col-xl-12">
                                        {{-- <div class="shop-page__pagination">
                                            <ul class="pg-pagination list-unstyled">
                                                <li class="count"><a href="#">01</a></li>
                                                <li class="count"><a href="#">02</a></li>
                                                <li class="count"><a href="#">....</a></li>
                                                <li class="count"><a href="#">05</a></li>
                                                <li class="next">
                                                    <a href="#" aria-label="Next"><i
                                                            class="fa fa-angle-right"></i></a>
                                                </li>
                                            </ul>
                                        </div> --}}
                                        <div class="shop-page__pagination">
                                            <ul class="pg-pagination list-unstyled" id="pagination">
                                                {!! $products->links() !!}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.tab-pane -->
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Product List End-->

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
@section('script')
    <script>
        $(document).ready(function() {
            function fetchFilteredData(page = 1) {
                let search = $("#search").val();
                let minPrice = $("#min_price").val();
                let maxPrice = $("#max_price").val();
                let category = $(".shop-category ul li a.active").data("category");
                let sortBy = $("#sort_by").val();

                $.ajax({
                    url: "{{ route('frontend.products') }}?page=" + page,
                    method: "GET",
                    data: {
                        search: search,
                        min_price: minPrice,
                        max_price: maxPrice,
                        category: category,
                        sort_by: sortBy
                    },
                    success: function(response) {
                        $("#product__all").html($(response).find("#product__all").html());
                        $("#pagination").html($(response).find("#pagination").html());
                    }
                });
            }

            $("#search, #min_price, #max_price, #sort_by").on("input change", function() {
                fetchFilteredData();
            });

            $(".shop-category ul li a").on("click", function() {
                $(".shop-category ul li a").removeClass("active");
                $(this).addClass("active");
                fetchFilteredData();
            });

            $(document).on("click", "#pagination a", function(e) {
                e.preventDefault();
                let page = $(this).attr("href").split("page=")[1];
                fetchFilteredData(page);
            });
        });
    </script>
    {{-- <script>
        $(document).ready(function() {
            function fetchFilteredData() {
                let search = $("#search").val();
                let minPrice = $("#min_price").val();
                let maxPrice = $("#max_price").val();
                let category = $(".shop-category ul li a.active").data("category");
                let sortBy = $("#sort_by").val();

                $.ajax({
                    url: "{{ route('frontend.products') }}",
                    method: "GET",
                    data: {
                        search: search,
                        min_price: minPrice,
                        max_price: maxPrice,
                        category: category,
                        sort_by: sortBy
                    },
                    success: function(response) {
                        $("#productListGridTabContent").html(response);
                    }
                });
            }

            $("#search, #min_price, #max_price, #sort_by").on("input change", function() {
                fetchFilteredData();
            });

            $(".shop-category ul li a").on("click", function() {
                $(".shop-category ul li a").removeClass("active");
                $(this).addClass("active");
                fetchFilteredData();
            });
        });
    </script> --}}
@endsection
