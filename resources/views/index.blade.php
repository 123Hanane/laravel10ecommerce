@extends('layouts.base')
@section('content')
<section class="pt-0 poster-section">
        

        <div class="left-side-contain">
            <div class="banner-left">
                <h4>Sale <span class="theme-color">35% Off</span></h4>
                <h1>Nouveaux Fleurs <span>Fraîches</span></h1>
                <p>BUY ONE GET ONE <span class="theme-color">FREE</span></p>
                <h2>$57.00 <span class="theme-color"><del>$75.00</del></span></h2>
                <p class="poster-details mb-0">Découvrez notre sélection exclusive de fleurs fraîches. Offre spéciale : achetez-en une, obtenez-en une gratuite !</p>
            </div>
        </div>

        <div class="right-side-contain">
            <div class="social-image">
                <h6>Facebook</h6>
            </div>

            <div class="social-image">
                <h6>Instagram</h6>
            </div>

            <div class="social-image">
                <h6>Twitter</h6>
            </div>
        </div>
    </section>
    <!-- banner section start -->
    <section class="ratio2_1 banner-style-2">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="shop-left-sidebar.html" class="banner-img">
                            <img src="assets/images/fashion/banner/1.jpg" class="bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="banner-detail">
                            <a href="javacript:void(0)" class="heart-wishlist">
                                <i class="far fa-heart"></i>
                            </a>
                            <span class="font-dark-30">26% <span>OFF</span></span>
                        </div>
                        <a href="shop-left-sidebar.html" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Fleurs pour Femme : </h2>
                                <span>NOUVELLE OFFRE, 50% DE REDUCTION</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="shop-left-sidebar.html" class="banner-img">
                            <img src="assets/images/fashion/banner/2.jpg" class="bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="banner-detail">
                            <a href="javacript:void(0)" class="heart-wishlist">
                                <i class="far fa-heart"></i>
                            </a>
                            <span class="font-dark-30">50% <span>OFF</span></span>
                        </div>
                        <a href="shop-left-sidebar.html" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Nouveau Bouquet : </h2>
                                <span>ACHETEZ-EN UN, OBTENEZ-EN UN GRATUIT</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="shop-left-sidebar.html" class="banner-img">
                            <img src="assets/images/fashion/banner/3.jpg" class="bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="banner-detail">
                            <a href="javacript:void(0)" class="heart-wishlist">
                                <i class="far fa-heart"></i>
                            </a>
                            <span class="font-dark-30">36% <span>OFF</span></span>
                        </div>
                        <a href="shop-left-sidebar.html" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Nouvelles Box de Fleurs Fraîchest</h2>
                                <span>BUY ONE GET ONE FREE</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <section class="ratio_asos overflow-hidden">
        <div class="container p-sm-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="title-3 text-center">
                        <h2>Fresh Arrivals</h2>
                        <h5 class="theme-color">Our Floral Collection</h5>
                    </div>
                </div>
            </div>
            <style>
                .r-price {
                    display: flex;
                    flex-direction: row;
                    gap: 20px;
                }

                .r-price .main-price {
                    width: 100%;
                }

                .r-price .rating {
                    padding-left: auto;
                }

                .product-style-3.product-style-chair .product-title {
                    text-align: left;
                    width: 100%;
                }

                @media (max-width:600px) {

                    .product-box p,
                    .product-box a {
                        text-align: left;
                    }

                    .product-style-3.product-style-chair .main-price {
                        text-align: right !important;
                    }
                }
            </style>
            <div class="row g-sm-4 g-3">

                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/10.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('wishlist.list') }}" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$40</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
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
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>Sweet Bloom Delight</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/10.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme">10% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('wishlist.list') }}" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$45</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
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
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>Floral Gourmet Box</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/17.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('wishlist.list') }}" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$50</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
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
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>Bloom & Gift Haven</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/3.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('wishlist.list') }}" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$30</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
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
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>Blossom Bliss</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/2.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('wishlist.list') }}" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$37</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
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
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>Floral Surprise Box</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/12.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
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
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$55</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
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
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>Flower Gift Ensemble</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/3.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('wishlist.list') }}" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$40</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
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
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>Floral Treasures Box</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/8.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
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
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$70</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
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
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>Floral Charm Box</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/23.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('wishlist.list') }}" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$70</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
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
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>Petals & Chocolates Box</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/11.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('wishlist.list') }}" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$66</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
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
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>Flower & Treats Delight</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/20.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('wishlist.list') }}" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$77</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
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
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>Oceanic Blue Blossoms</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/20.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('wishlist.list') }}" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$21</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
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
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>Excepturi Et In Cum</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- category section start -->
    <section class="category-section ratio_40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title title-2 text-center">
                        <h2>Our Category</h2>
                        <h5 class="text-color">Our Floral Collection</h5>
                    </div>
                </div>
            </div>
            <div class="row gy-3">
                <div class="col-xxl-2 col-lg-3">
                    <div class="category-wrap category-padding category-block theme-bg-color">
                        <div>
                            <h2 class="light-text">Top</h2>
                            <h2 class="top-spacing">Our Top</h2>
                            <span>Categories</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 col-lg-9">
                    <div class="category-wrapper category-slider1 white-arrow category-arrow">
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="assets/images/fashion/category/1.jpg" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Purple</h3>
                                    <span class="text-dark">Fashion</span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="assets/images/fashion/category/2.jpg" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Red </h3>
                                    <span class="text-dark">Fashion</span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="assets/images/fashion/category/3.jpg" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Flowers Purple with chocolat</h3>
                                    <span class="text-dark">Fashion</span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="assets/images/fashion/category/4.jpg" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Yellow</h3>
                                    <span class="text-dark">Fashion</span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="assets/images/fashion/category/5.jpg" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Pink</h3>
                                    <span class="text-dark">Fashion</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category section end -->



    <style>
        .products-c .bg-size {
            background-position: center 0 !important;
        }
    </style>

    <section class="ratio_asos overflow-hidden pb-5">
        <div class="px-0 container-fluid p-sm-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="title-3 text-center">
                        <h2>Blossom Bargains</h2>
                        <h5 class="theme-color">Our Collection</h5>
                    </div>
                </div>

                <div class="our-product products-c">
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product/details.html">
                                    <img src="assets/images/fashion/product/front/25.jpg"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Fashion</span>
                                <div class="label-block">
                                    <span class="label label-theme">30% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">$88</div>
                                        <div class="main-price">
                                            <ul class="rating mb-1 mt-0">
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
                                    </div>
                                    <a href="product/details.html" class="font-default">
                                        <h5>Green flowers</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product/details.html">
                                    <img src="assets/images/fashion/product/front/26.jpg"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Fashion</span>
                                <div class="label-block">
                                    <span class="label label-theme">30% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">$77</div>
                                        <div class="main-price">
                                            <ul class="rating mb-1 mt-0">
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
                                    </div>
                                    <a href="product/details.html" class="font-default">
                                        <h5>Flower Hamper</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product/details.html">
                                    <img src="assets/images/fashion/product/front/27.jpg"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Fashion</span>
                                <div class="label-block">
                                    <span class="label label-theme">30% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">$80</div>
                                        <div class="main-price">
                                            <ul class="rating mb-1 mt-0">
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
                                    </div>
                                    <a href="product/details.html" class="font-default">
                                        <h5>Floral Gift Box</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product/details.html">
                                    <img src="assets/images/fashion/product/front/28.jpg"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Fashion</span>
                                <div class="label-block">
                                    <span class="label label-theme">30% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">$90</div>
                                        <div class="main-price">
                                            <ul class="rating mb-1 mt-0">
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
                                    </div>
                                    <a href="product/details.html" class="font-default">
                                        <h5>Floral Crate</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product/details.html">
                                    <img src="assets/images/fashion/product/front/29.jpg"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Fashion</span>
                                <div class="label-block">
                                    <span class="label label-theme">30% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">$65</div>
                                        <div class="main-price">
                                            <ul class="rating mb-1 mt-0">
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
                                    </div>
                                    <a href="product/details.html" class="font-default">
                                        <h5>Bloom Basket</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product/details.html">
                                    <img src="assets/images/fashion/product/front/30.jpg"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Fashion</span>
                                <div class="label-block">
                                    <span class="label label-theme">30% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">$70</div>
                                        <div class="main-price">
                                            <ul class="rating mb-1 mt-0">
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
                                    </div>
                                    <a href="product/details.html" class="font-default">
                                        <h5>Orange Flowers</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product/details.html">
                                    <img src="assets/images/fashion/product/front/31.jpg"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Fashion</span>
                                <div class="label-block">
                                    <span class="label label-theme">30% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">59</div>
                                        <div class="main-price">
                                            <ul class="rating mb-1 mt-0">
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
                                    </div>
                                    <a href="product/details.html" class="font-default">
                                        <h5>Petal Package</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product/details.html">
                                    <img src="assets/images/fashion/product/front/32.jpg"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Fashion</span>
                                <div class="label-block">
                                    <span class="label label-theme">30% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">$90</div>
                                        <div class="main-price">
                                            <ul class="rating mb-1 mt-0">
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
                                    </div>
                                    <a href="product/details.html" class="font-default">
                                        <h5>Petal Parcel</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection