@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            @foreach ($orders as $order)
                <div class="col-lg-8 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Truck No: {{ $order->truck_number }}</h5>
                                    <p class="mb-4">
                                        Plate number is <span class="fw-bold">{{ $order->plate_number }}</span> <br>
                                        Amount billed <span class="fw-bold">{{ $order->currency . ' ' . $order->amount_billed }}</span>


                                    </p>
                                    <form id="makePaymentForm" action="#">
                                        @csrf 
                                        {{-- <input type="hidden" name="currency" id="currency" value="UGX"> --}}
                                        <input type="hidden" name="country" id="country" value="UG">
                                        <input type="hidden" name="currency" value="{{ $order->currency }}">
                                        <input type="hidden" name="amount" value="{{ $order->amount_billed }}">
                                        <input type="hidden" name="name" value="{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}">
                                        <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                                        <input type="hidden" name="contact" value="{{ auth()->user()->contact }}">

                                        <input type="hidden" name="truck_order_id" value="{{ $order->id }}">

                                        <input type="hidden" name="details" value="{{ auth()->user()->email . ' payment for a Truck Order' }}">


                                        <button class="btn btn-sm btn-outline-primary">Make Payment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {!! $orders->links() !!}
    </div>

    

@endsection

@section('js')
<script src="https://checkout.flutterwave.com/v3.js" defer></script>

<script>
    
    $(function() {             
        $("#makePaymentForm").submit(function(e) {
            e.preventDefault();
            console.log("Form clicked!");
            var name = $("#name").val();
            var email = $("#email").val();
            var phone_number = $("#contact").val();
            var amount = $("#amount").val();
            var truck_order_id = $("#truck_order_id").val();
            var country = $("#country").val();
            var currency = $("#currency").val();
            var details = $("#details").val();
            // make our payment
            makePayment(amount, email, country, currency, phone_number,  name, details,truck_order_id);
        });
    });
    function makePayment(amount, email, country, currency, phone_number, name, details,truck_order_id) {
        var _token = $("input[name='_token']").val();
        console.log("Make Payment called!");
        FlutterwaveCheckout({
            public_key: "{{ config('flutterwave.public') }}",
            tx_ref: "ETRUCK_{{ substr(rand(0, time()), 0, 7) }}",
            amount,
            currency,
            country,
            payment_options: " ",
            customer: {
                email,
                phone_number,
                name,
            },
            callback: function(data) {
                var transaction_id = data.transaction_id;
                console.log(data);
                // Make Ajax Request 
                if (data.status !== "successful") {
                    window.location.href =
                        "{{ url('/my-orders') }}";
                } else {
                    $.ajax({
                        type: "POST",
                        url: "{{ URL::to('verify-truck-order-payment') }}",
                        data: JSON.stringify({
                            transaction_id,
                            truck_order_id,
                            amount,
                            currency,
                            details,
                            name,
                            email,
                            phone_number,
                            _token
                        }),
                        success: function(response) {
                            console.log(response);
                            if (response == "success") {
                                alert('Transaction successful! Thank You!');
                                window.location.href =
                                    "{{ url('/my-orders') }}";
                            } else {
                                alert('Transaction has failed!');
                                window.location.href =
                                    "{{ url('/my-orders') }}";
                            }
                        }
                    });
                }
            },
            onclose: function() {
            },
            customizations: {
                title: "e-TRUCK Service",
                description: "Payment for an E-truck order with truck order ID" + truck_order_id,
                logo: "{{ asset('website/logo-one.png') }}",
            },
        });
    }
</script>
@endsection
