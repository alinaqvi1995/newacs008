@extends('frontend.layouts.app')
@section('title', 'Shop All Products - Indigo Grocery Store')
@section('content')
    <style>
        .pagination a {
            padding: 8px 12px;
            /* Adjusts button size */
            font-size: 14px;
            /* Adjusts text size */
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 0 5px;
            text-decoration: none;
            color: #333;
        }

        .pagination a:hover {
            background-color: #f5f5f5;
        }

        .pagination .active a {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .pagination a svg {
            width: 16px;
            /* Adjusts arrow size */
            height: 16px;
            vertical-align: middle;
        }
    </style>
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(frontend/assets/images/backgrounds/new-header-01.jpeg)">
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
                                        <input type="text" id="max_price readonly" class="max">
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
                                        <p class="product__showing-text">
                                            Showing {{ $products->firstItem() }}–{{ $products->lastItem() }} of
                                            {{ $products->total() }} Results
                                        </p>
                                    </div>
                                    <div class="product__menu-showing-sort">
                                        {{-- <ul class="nav nav-tabs product__list-grid-tabs" id="productListGridTab"
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
                                        </ul> --}}

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
                            @include('frontend.partials.product_list')
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="shop-page__pagination">
                                    <ul class="pg-pagination list-unstyled" id="pagination">
                                        {!! $products->links() !!}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Product List End-->
    <!--Subscribe One Start-->
    @include('frontend.partials.subscribe')
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
    <script>
        $(document).on('click', '.pg-pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];

            $.ajax({
                url: "{{ route('frontend.products') }}?page=" + page,
                type: "GET",
                success: function(data) {
                    $("#product__all").html($(data.html).find("#product__all").html());
                    $("#pagination").html(data.pagination);

                    // Update the showing results text dynamically
                    updateShowingText(data.firstItem, data.lastItem, data.total);
                }
            });
        });

        // Function to update the showing text dynamically
        function updateShowingText(firstItem, lastItem, totalItems) {
            $(".product__showing-text").text(`Showing ${firstItem}–${lastItem} of ${totalItems} Results`);
        }
    </script>
@endsection
