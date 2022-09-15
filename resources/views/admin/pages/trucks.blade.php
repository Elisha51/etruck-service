@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            @foreach ($trucks as $truck)
                <div class="col-lg-8 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <img src = "{{  asset('web/img/truck1')  }}" alt="">
                                    <h5 class="card-title text-primary">Truck No: {{ $truck->truck_number }}</h5>
                                    <p class="mb-4">
                                        Plate number is <span class="fw-bold">{{ $truck->plate_number }}</span>

                                    </p>

                                    <a href="{{ url('/order-truck?uid=' . auth()->user()->id . '&tid=' . $truck->id) }}"
                                        class="btn btn-sm btn-outline-primary">Order Truck</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
