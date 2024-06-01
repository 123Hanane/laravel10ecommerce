@extends('layouts.base')
@section('content')

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
                    <h3>About Us</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.htm">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- team leader section Start -->
    <section class="overflow-hidden">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-5 offset-xl-1">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <img src="assets/images/inner-page/review-image/6.jpg"
                                class="img-fluid rounded-3 about-image" alt="">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/images/inner-page/review-image/7.jpg"
                                class="img-fluid rounded-3 about-image" alt="">
                        </div>
                        <div class="col-12 ratio_40">
                            <div>
                                <img src="assets/images/inner-page/review-image/8.jpg"
                                    class="img-fluid rounded-3 team-image bg-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="about-details">
                        <div>
                            <h2>WHO WE ARE</h2>
                            <h3>largest Online fashion destination</h3>
                            <p>At HD flowers, we are dedicated to bringing the beauty and elegance of flowers to your doorstep.
                                 With a team of passionate florists and designers, we curate stunning floral arrangements that capture the essence of every occasion.
                                  Our commitment to excellence drives us to deliver fresh,
                                 vibrant flowers that brighten up your day and create unforgettable moments.</p>

                            <h2>About Our Flower E-commerce Platform</h2>
                            <p>Our flower e-commerce platform is your go-to destination for all things floral. From exquisite bouquets to charming floral arrangements, we offer a wide variety of options to suit every taste and style.
                                 Whether you're celebrating a special milestone, expressing love and gratitude,
                                 or simply brightening someone's day, our flowers are the perfect choice.

                            With easy browsing, secure payment options, and efficient delivery services, our platform ensures a seamless and enjoyable shopping experience. We understand the importance of reliability and quality, which is why we source our flowers from trusted growers and suppliers to guarantee freshness and longevity.

                            <p>At HD flowers, we are more than just a flower shop – we are storytellers, creating beautiful narratives with every bloom.
                                 Join us on our journey to spread joy, love, and beauty through the timeless art of floral design.</p>
                                 <button onclick="redirectToShop()" type="button" class="btn btn-solid-default">Shop Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script>
    function redirectToShop() {
        window.location.href = '{{ route('shop.index') }}';
    }
</script>
