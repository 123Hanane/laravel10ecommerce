@extends('layouts.base')
@section('content')
@push('styles')
    <link id="color-link" rel="stylesheet" type="text/css" href="{{asset('assets/css/demo2.css')}}">
    <style>
        nav svg{
            height: 20px;
        }
        .product-box .product-details h5 {            
            width: 100%;	
        }
    </style>
@endpush

<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>{{$product->name}}</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('app.index')}}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section> <!-- Shop Section start -->

<section>
    <div class="container">
        <div class="row gx-4 gy-5">
            <div class="col-lg-12 col-12">
                <div class="details-items">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="details-image-vertical black-slide rounded">
                                        <div>
                                            <img src="{{asset('assets/images/fashion/product/front')}}/{{$product->image}}" class="img-fluid blur-up lazyload" alt="{{$product->name}}">
                                        </div>
                                        @if($product->images) 
                                        @php 
                                            $images = explode(',',$product->images);
                                        @endphp  
                                        @foreach ($images as $image)
                                            <div>
                                                <img src="{{asset('assets/images/fashion/product/front')}}/{{$image}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        @endforeach 
                                        @endif                                       
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="details-image-1 ratio_asos">
                                        <div>
                                            <img src="{{asset('assets/images/fashion/product/front')}}/{{$product->image}}" class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="{{$product->name}}">
                                        </div>

                                        @if($product->images) 
                                        @php 
                                            $images = explode(',',$product->images);
                                        @endphp  
                                        @foreach ($images as $image)
                                            <div>
                                                <img src="{{asset('assets/images/fashion/product/front')}}/{{$image}}" class="img-fluid w-100 image_zoom_cls-1 blur-up lazyload" alt="">
                                            </div>                                            
                                        @endforeach 
                                        @endif                                                                                  
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="cloth-details-size">
                                <div class="product-count">
                                    <ul>
                                        <li>
                                            <img src="../assets/images/gif/fire.gif"
                                                class="img-fluid blur-up lazyload" alt="image">
                                            <span class="p-counter">37</span>
                                            <span class="lang">orders in last 24 hours</span>
                                        </li>
                                        <li>
                                            <img src="../assets/images/gif/person.gif"
                                                class="img-fluid user_img blur-up lazyload" alt="image">
                                            <span class="p-counter">44</span>
                                            <span class="lang">active view this</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="details-image-concept">
                                    <h3>{{ optional($product)->name }}</h3>
                                </div>

                                <div class="label-section">
                                    <span class="badge badge-grey-color">#1 Best seller</span>
                                    <span class="label-text">in fashion</span>
                                </div>

                                <h3 class="price-detail">
                                    @if($product->sale_price)
                                        ${{$product->sale_price}}
                                    <del>${{$product->regular_price}}</del><span>
                                        {{ round((($product->regular_price - $product->sale_price)/$product->regular_price)*100) }}
                                        % off</span>
                                    @else
                                        {{$product->regular_price}}
                                    @endif
                                
                                </h3>



                                <div id="selectSize" class="addeffect-section product-description border-product">
                                    
                                    <h6 class="product-title product-title-2 d-block">quantity</h6>

                                    <div class="qty-box">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </span>
                                            <input type="text" name="quantity" id="quantity"
                                                class="form-control input-number" value="1">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-buttons">
                                    <a href="javascript:void(0)" class="btn btn-solid">
                                        <i class="fa fa-bookmark fz-16 me-2"></i>
                                        <span>Wishlist</span>
                                    </a>
                                    <a href="javascript:void(0)"  onclick="event.preventDefault();document.getElementById('addtocart').submit();" id="cartEffect" class="btn btn-solid hover-solid btn-animation">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Add To Cart</span>
                                        <form id="addtocart" method="post" action="{{route('cart.store')}}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$product->id}}">                                             
                                            <input type="hidden" name="quantity" id="qty" value="1">
                                        </form>
                                    </a>
                                </div>

                                <ul class="product-count shipping-order">
                                    <li>
                                        <img src="../assets/images/gif/truck.png" class="img-fluid blur-up lazyload"
                                            alt="image">
                                        <span class="lang">Free shipping for orders above $500 USD</span>
                                    </li>
                                </ul>

                                <div class="mt-2 mt-md-3 border-product">
                                    <h6 class="product-title hurry-title d-block">
                                        @if($product->stock_status=='instock')
                                            InStock
                                        @else
                                            Out Of Stock
                                        @endif
                                    </h6>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 78%"></div>
                                    </div>
                                    <div class="font-light timer-5">
                                        <h5>Order in the next to get</h5>
                                        <ul class="timer1">
                                            <li class="counter">
                                                <h5 id="days">␣</h5> Days :
                                            </li>
                                            <li class="counter">
                                                <h5 id="hours">␣</h5> Hour :
                                            </li>
                                            <li class="counter">
                                                <h5 id="minutes">␣</h5> Min :
                                            </li>
                                            <li class="counter">
                                                <h5 id="seconds">␣</h5> Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="border-product">
                                    <h6 class="product-title d-block">share it</h6>
                                    <div class="product-icon">
                                        <ul class="product-social">
                                            <li>
                                                <a href="https://www.facebook.com/">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.google.com/">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="pe-0">
                                                <a href="https://www.google.com/">
                                                    <i class="fas fa-rss"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="cloth-review">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"data-bs-target="#desc" type="button">Description</button>

                            <button class="nav-link" id="nav-question-tab" data-bs-toggle="tab"
                                data-bs-target="#question" type="button">Q & A</button>

                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                data-bs-target="#review" type="button">Review</button>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="desc">
                            <div class="shipping-chart">
                                {{$product->description}}
                            </div>
                        </div>

                        <div class="tab-pane fade" id="question">
                            <div class="question-answer">
                                <ul>
                                    <li>
                                        <div class="que">
                                            <i class="fas fa-question"></i>
                                            <div class="que-details">
                                                <h6>Is it compatible with all WordPress themes?</h6>
                                                <p class="font-light">If you're interested in seeing a demo version of our premium plugin,
                                                     you can find it on this page. Explore how it enhances your floral experience!
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="que">
                                            <i class="fas fa-question"></i>

                                        </div>
                                    </li>

                                    <li>
                                        <div class="que">
                                            <i class="fas fa-question"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="review">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="customer-rating">
                                        <h2>Customer reviews</h2>
                                        <ul class="rating my-2 d-inline-block">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                        <ul class="rating-progess">
                                            <li>
                                                <h5 class="me-3">5 Star</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 78%"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <h5 class="ms-3">78%</h5>
                                            </li>
                                            <li>
                                                <h5 class="me-3">4 Star</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 62%"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <h5 class="ms-3">62%</h5>
                                            </li>
                                            <li>
                                                <h5 class="me-3">3 Star</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 44%"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <h5 class="ms-3">44%</h5>
                                            </li>
                                            <li>
                                                <h5 class="me-3">2 Star</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 30%"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <h5 class="ms-3">30%</h5>
                                            </li>
                                            <li>
                                                <h5 class="me-3">1 Star</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 18%"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <h5 class="ms-3">18%</h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <p class="d-inline-block me-2">Rating</p>
                                    <ul class="rating mb-3 d-inline-block">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <div class="review-box">
                                        <form class="row g-4">
                                            <div class="col-12 col-md-6">
                                                <label class="mb-1" for="name">Name</label>
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Enter your name" required="">
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label class="mb-1" for="id">Email Address</label>
                                                <input type="email" class="form-control" id="id"
                                                    placeholder="Email Address" required="">
                                            </div>

                                            <div class="col-12">
                                                <label class="mb-1" for="comments">Comments</label>
                                                <textarea class="form-control" placeholder="Leave a comment here"
                                                    id="comments" style="height: 100px" required=""></textarea>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit"
                                                    class="btn default-light-theme default-theme default-theme-2">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section end -->



<!-- product section start -->
<section class="ratio_asos section-b-space overflow-hidden width: 100%">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-lg-4 mb-3">Flower Basket</h2>
                <div class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space">
                    @foreach ($rproducts as $rproduct)
                                            
                    <div>
                        <div class="product-box ">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="{{route('shop.product.details',['slug'=>$rproduct->slug])}}">
                                        <img src="{{asset('assets/images/fashion/product/front')}}/{{$rproduct->image}}"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="{{route('shop.product.details',['slug'=>$rproduct->slug])}}">
                                        <img src="{{asset('assets/images/fashion/product/back')}}/{{$rproduct->image}}"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                <i data-feather="shopping-bag"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">
                                    <span class="font-light grid-content">Bloom Bouquet Box</span>
                                    <ul class="rating mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                            <a href="{{route('shop.product.details',['slug'=>$rproduct->slug])}}" class="font-default">
                                <h5>{{$rproduct->name}}</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">{{$rproduct->category->name}}</span>
                                <p class="font-light">{{$rproduct->short_description}}</p>
                            </div>
                            <h3 class="theme-color">@if($rproduct->sale_price) {{ $product->sale_price }} @else {{$rproduct->regular_price}} @endif</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                            </div>
                        </div>
                    </div>
                    @endforeach                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product section end -->
@endsection