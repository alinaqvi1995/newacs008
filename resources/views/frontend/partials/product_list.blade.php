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
                                href="{{ route('frontend.products.detail') }}">{{ $product->name }}</a></h4>
                        <p class="product__all-price">RS {{ number_format($product->price, 2) }}</p>
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
