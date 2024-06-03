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
                    <h3>Checkout</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section Start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                <form id="checkout-form" action="{{ route('checkout.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div id="billingAddress" class="row g-4">
                        <h3 class="mb-3 theme-color">Billing address</h3>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name">
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                        </div>
                        <div class="col-md-6">
                            <label for="locality" class="form-label">Locality</label>
                            <input type="text" class="form-control" id="locality" name="locality" placeholder="Locality">
                        </div>
                        <div class="col-md-6">
                            <label for="landmark" class="form-label">Landmark</label>
                            <input type="text" class="form-control" id="landmark" name="landmark" placeholder="Landmark">
                        </div>
                        <div class="col-md-12">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" name="address"></textarea>
                        </div>
                        <div class="col-md-3">
                            <label for="city" class="form-label">City</label>
                            <select class="form-select custome-form-select" id="city" name="city">
                                <option value="">Select a city</option>
                                <option value="Agadir">Agadir</option>
                                <option value="Al Hoceima">Al Hoceima</option>
                                <option value="Asilah">Asilah</option>
                                <option value="Beni Mellal">Beni Mellal</option>
                                <option value="Berkane">Berkane</option>
                                <option value="Boujdour">Boujdour</option>
                                <option value="Casablanca">Casablanca</option>
                                <option value="Chefchaouen">Chefchaouen</option>
                                <option value="Dakhla">Dakhla</option>
                                <option value="El Jadida">El Jadida</option>
                                <option value="Errachidia">Errachidia</option>
                                <option value="Essaouira">Essaouira</option>
                                <option value="Fes">Fes</option>
                                <option value="Guelmim">Guelmim</option>
                                <option value="Ifrane">Ifrane</option>
                                <option value="Kenitra">Kenitra</option>
                                <option value="Khemisset">Khemisset</option>
                                <option value="Khenifra">Khenifra</option>
                                <option value="Khouribga">Khouribga</option>
                                <option value="Laayoune">Laayoune</option>
                                <option value="Larache">Larache</option>
                                <option value="Marrakech">Marrakech</option>
                                <option value="Meknes">Meknes</option>
                                <option value="Mohammedia">Mohammedia</option>
                                <option value="Nador">Nador</option>
                                <option value="Ouarzazate">Ouarzazate</option>
                                <option value="Oujda">Oujda</option>
                                <option value="Rabat">Rabat</option>
                                <option value="Safi">Safi</option>
                                <option value="Sale">Sale</option>
                                <option value="Tanger">Tanger</option>
                                <option value="Taza">Taza</option>
                                <option value="Temara">Temara</option>
                                <option value="Tetouan">Tetouan</option>
                                <option value="Tiznit">Tiznit</option>
                            </select>

                            <div class="invalid-feedback">
                                Please select a valid city.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="????">
                        </div>
                    </div>
                        <div class="form-check ps-0 mt-3 custome-form-check">
                            <input class="checkbox_animated check-it" type="checkbox" name="saveAddress"
                                id="saveAddress">
                            <label class="form-check-label checkout-label" for="saveAddress">Save this information for next time</label>
                        </div>
                        <hr class="my-lg-5 my-4">
                        <h3 class="mb-3">Payment</h3>
                        <div class="d-block my-3">
                            <div class="form-check custome-radio-box">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" checked=""
                                    id="cod">
                                <label class="form-check-label" for="cod">COD</label>
                            </div>
                            <div class="form-check custome-radio-box">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="debit">
                                <label class="form-check-label" for="debit">Debit card</label>
                            </div>

                            <div class="form-check custome-radio-box">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="paypal">
                                <label class="form-check-label" for="paypal">PayPal</label>
                            </div> 
                        </div>
                        <div class="row g-4" style="display: none;">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Name on card</label>
                                <input type="text" class="form-control" id="cc-name">
                                <div id="emailHelp" class="form-text">Full name as displayed on card</div>
                            </div>
                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number">
                                <div class="invalid-feedback">Credit card number is required</div>
                            </div>
                            <div class="col-md-3">
                                <label for="expiration" class="form-label">Expiration</label>
                                <input type="text" class="form-control" id="expiration">
                            </div>
                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv">
                            </div>
                        </div>
                        <button onclick="placeOrder()" class="btn btn-solid-default mt-4" type="button">Place Order</button>
                    </div>
                </form>

                <!--<div class="col-lg-4">
                    <div class="your-cart-box">
                        <h3 class="mb-3 d-flex text-capitalize">Your cart<span class="badge bg-theme new-badge rounded-pill ms-auto bg-dark">0</span></h3>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-condensed active">
                                <div class="text-dark">
                                    <h6 class="my-0">Tax</h6>
                                    <small></small>
                                </div>
                                <span>$0.00</span>
                            </li>
                            <li class="list-group-item d-flex lh-condensed justify-content-between">
                                <span class="fw-bold">Total (USD)</span>
                                <strong>$0.00</strong>
                            </li>
                        </ul>

                        <form class="card border-0">
                            <div class="input-group custome-imput-group">
                                <input type="text" class="form-control" placeholder="Promo code">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-solid-default rounded-0">Redeem</button>
                                </div>
                            </div>
                        </form> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
  function placeOrder() {
    // Perform any necessary actions before redirecting (e.g., form validation)

    // Redirect the user to the /thankyou route
    window.location.href = "{{ route('checkout.placeOrder') }}";
  }
</script>

