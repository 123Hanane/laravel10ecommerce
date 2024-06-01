@extends('layouts.base')
@section('content')
    <!-- Breadcrumb section start -->
    <section class="breadcrumb-section section-b-space">
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
                    <h3>User Dashboard</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">User Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- user dashboard section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs custome-nav-tabs flex-column category-option" id="myTab">
                        <li class="nav-item mb-2">
                            <button class="nav-link font-light active" id="tab" data-bs-toggle="tab" data-bs-target="#dash" type="button"><i class="fas fa-angle-right"></i>Dashboard</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="1-tab" data-bs-toggle="tab" data-bs-target="#order" type="button"><i class="fas fa-angle-right"></i>Orders</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="2-tab" data-bs-toggle="tab" data-bs-target="#wishlist" type="button"><i class="fas fa-angle-right"></i>Wishlist</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="3-tab" data-bs-toggle="tab" data-bs-target="#save" type="button"><i class="fas fa-angle-right"></i>Saved
                                Address</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="4-tab" data-bs-toggle="tab" data-bs-target="#pay" type="button"><i class="fas fa-angle-right"></i>Payment</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="5-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"><i class="fas fa-angle-right"></i>Profile</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link font-light" id="6-tab" data-bs-toggle="tab" data-bs-target="#security" type="button"><i class="fas fa-angle-right"></i>Security</button>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="filter-button dash-filter dashboard">
                        <button class="btn btn-solid-default btn-sm fw-bold filter-btn">Show Menu</button>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="dash">
                            <div class="dashboard-right">
                                <div class="dashboard">
                                    <div class="page-title title title1 title-effect">
                                        <h2>My Dashboard</h2>
                                    </div>

                                    <div class="order-box-contain my-4">
                                        <div class="row g-4">
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets/images/svg/box.png" class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets/images/svg/box1.png" class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">total order</h5>
                                                            <h3>3648</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets/images/svg/sent.png" class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets/images/svg/sent1.png" class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">pending orders</h5>
                                                            <h3>215</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets/images/svg/wishlist.png" class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets/images/svg/wishlist1.png" class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">wishlist</h5>
                                                            <h3>63874</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane fade table-dashboard dashboard wish-list-section" id="wishlist">
                            <div class="box-head mb-3">
                                <h3>My Wishlish</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table cart-table">
                                    <thead>
                                        <tr class="table-head">
                                            <th scope="col">image</th>
                                            <th scope="col">Order Id</th>
                                            <th scope="col">Product Details</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="details.php">
                                                    <img src="assets/images/fashion/product/front/1.jpg" class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#125021</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Outwear & Coats</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">$49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="details.php">
                                                    <img src="assets/images/fashion/product/front/2.jpg" class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#125367</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Outwear & Coats</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">$49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="details.php">
                                                    <img src="assets/images/fashion/product/front/3.jpg" class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#125948</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Men's Sweatshirt</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">$49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="details.php">
                                                    <img src="assets/images/fashion/product/front/4.jpg" class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#127569</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Men's Hoodie t-shirt</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">$49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="details.php">
                                                    <img src="assets/images/fashion/product/front/5.jpg" class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#127569</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Men's Hoodie t-shirt</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">$49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="details.php">
                                                    <img src="assets/images/fashion/product/front/6.jpg" class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#125021</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Men's Sweatshirt</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">$49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        

                       

                        
                </div>
            </div>
        </div>
    </section>
    <!-- user dashboard section end -->

    <!-- Subscribe Section Start -->
    <section class="subscribe-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="subscribe-details">
                        <h2 class="mb-3">Subscribe Our News</h2>
                        <h6 class="font-light">Subscribe and receive our newsletters to follow the news about our fresh
                            and fantastic Products.</h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                    <div class="subsribe-input">
                        <div class="input-group">
                            <input type="text" class="form-control subscribe-input" placeholder="Your Email Address">
                            <button class="btn btn-solid-default" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Section End -->
@endsection