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


                                        {{-- <button class="btn btn-sm btn-outline-primary">Make Payment</button> --}}
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


