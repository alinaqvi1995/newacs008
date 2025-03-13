<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('frontend/assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('frontend/assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('frontend/assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('frontend/assets/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="ogenix HTML 5 Template " />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500&family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/ogenix-icons/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('frontend/assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/timepicker/timePicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/nice-select/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/ogenix.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/ogenix-responsive.css') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="ogenix HTML 5 Template " />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500&family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <div class="page-wrapper">
        @include('frontend.includes.header')
        <main>
            @yield('content')
        </main>
        @include('frontend.includes.footer')
    </div>
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{ route('index') }}" aria-label="logo image"><img
                        src="frontend/assets/images/resources/logo-1.png" width="104" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@indigoshopify.com">info@indigoshopify.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+923095320000">+ 92 ( 309 ) 53 - 20000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form action="{{ route('frontend.products') }}" method="GET">
                <label for="search" class="sr-only">search here</label>
                <input type="text" id="search" name="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </div>
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on("click", ".add-to-cart", function(e) {
                e.preventDefault();

                var isAuthenticated = $(this).data('auth');
                let productId = $(this).data("id");
                let quantity = $(this).closest(".product-details__buttons")
                    .prev(".product-details__quantity")
                    .find(".quantity-input").val();

                quantity = quantity && !isNaN(quantity) && quantity > 0 ? parseInt(quantity, 10) : 1;

                if (isAuthenticated == 0) {
                    window.location.href = "{{ route('user.account') }}";
                    return false;
                }

                $.ajax({
                    url: "{{ route('cart.add') }}",
                    method: "POST",
                    data: {
                        product_id: productId,
                        quantity: quantity,
                    },
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content") // Fetch CSRF token
                    },
                    success: function(response) {
                        alert(response.message);
                    },
                    error: function(xhr) {
                        alert("Error adding to cart. Please try again.");
                    }
                });
            });

            $(document).on("click", ".add-to-wishlist", function(e) {
                e.preventDefault();

                var isAuthenticated = $(this).data('auth');
                let productId = $(this).data("id");

                if (isAuthenticated == 0) {
                    window.location.href = "{{ route('user.account') }}";
                    return false;
                }

                $.ajax({
                    url: "{{ route('wishlist.add') }}",
                    type: "POST",
                    data: {
                        product_id: productId
                    },
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content") // Fetch CSRF token
                    },
                    success: function(response) {
                        alert(response.message);
                    },
                    error: function(xhr) {
                        alert("Error.");
                    }
                });
            });

            $(document).on('click', '.shop-category ul li a', function() {
                $('.shop-category ul li').removeClass('active');
                $(this).parent().addClass('active');
            });

            $(".subscribe-one__form").submit(function(e) {
                e.preventDefault();

                let form = $(this);
                let email = $("#subscriberEmail").val();
                let responseBox = form.closest(".subscribe-one__form-box").find(".mc-form__response");

                responseBox.html(""); // Clear previous messages

                $.ajax({
                    url: "{{ route('subscribe.store') }}",
                    method: "POST",
                    data: {
                        email: email,
                    },
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content") // Fetch CSRF token
                    },
                    beforeSend: function() {
                        responseBox.html('<span style="color: blue;">Processing...</span>');
                    },
                    success: function(response) {
                        responseBox.html('<span style="color: green;">' + response.message +
                            '</span>');
                        form.trigger("reset"); // Reset form
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON?.errors;
                        let errorMessage = errors ? errors.email[0] : "Something went wrong!";
                        responseBox.html('<span style="color: red;">' + errorMessage +
                            '</span>');
                    }
                });
            });
        });
    </script>
    @yield('script')
    <script src="{{ asset('frontend/assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/countdown/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/circleType/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
    <!-- template js -->
    <script src="{{ asset('frontend/assets/js/ogenix.js') }}"></script>
</body>

</html>
