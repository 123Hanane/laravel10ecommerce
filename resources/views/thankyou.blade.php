@extends('layouts.base')
@section('content')
<section class="pt-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="success-icon">
                        <div class="main-container">
                            <div class="check-container">
                                <div class="check-background">
                                    <svg viewbox="0 0 65 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 25L27.3077 44L58.5 7" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="check-shadow"></div>
                            </div>
                        </div>

                        <div class="success-contain">
                            <h4>Order Success</h4>
                            <h5 class="font-light">Payment Is Successfully Processsed And Your Order Is On The Way</h5>
                            <h6 class="font-light">Transaction ID:267676GHERT105467</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Order Success Section End -->

    <section class="section-b-space cart-section order-details-table">
    <div class="container">
        <div class="title title1 title-effect mb-1 title-left">
            <h2 class="mb-3">Order Details</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="col-sm-12 table-responsive">
                    <table class="table cart-table table-borderless">
                        <tbody>
                            <!-- Iterate through $items -->
                            @foreach ($items as $item)
                            <tr class="table-order">
                                <!-- Item Details -->
                                @if ($item->model)
                                    <a href="{{ route('shop.product.details', ['slug' => $item->model->slug]) }}">
                                        <img src="{{ asset('storage/' . $item->model->image) }}" alt="{{ $item->model->name }}">
                                    </a>
                                @endif
                                <td>
                                    <p>Product Name: {{ $item->name }}</p>
                                    <p>Category: {{ $item->category }}</p>
                                </td>
                                <td>
                                    <p>Quantity: {{ $item->qty }}</p>
                                </td>
                                <td>
                                    <p> Price: {{ $item->price }}</p>
                                </td>
                                <!-- Add more columns as needed -->
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <!-- Subtotal -->
                            <tr class="table-order">
                                <td colspan="3">
                                    <h5 class="font-light">Subtotal :</h5>
                                </td>
                                <td>
                                    <h4>${{ Cart::instance('cart')->subtotal() }}</h4>
                                </td>
                            </tr>

                            <!-- Shipping Cost -->
                            <tr class="table-order">
                                <td colspan="3">
                                    <h5 class="font-light">Shipping :</h5>
                                </td>
                                <td>
                                    <h4>${{ isset($shippingCost) ? $shippingCost : 'N/A' }}</h4>
                                </td>
                            </tr>

                            <!-- Tax -->
                            <tr class="table-order">
                                <td colspan="3">
                                    <h5 class="font-light">Tax :</h5>
                                </td>
                                <td>
                                    <h4>${{ Cart::instance('cart')->tax() }}</h4>
                                </td>
                            </tr>

                            <!-- Total Price -->
                            <tr class="table-order">
                                <td colspan="3">
                                    <h4 class="theme-color fw-bold">Total Price :</h4>
                                </td>
                                <td>
                                    <h4 class="theme-color fw-bold">${{ Cart::instance('cart')->total() }}</h4>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Order Details Section End -->

<!-- Subscribe Section Start -->
<section class="subscribe-section section-b-space">
    <!-- Your existing code for subscribe section -->
</section>
@endsection
