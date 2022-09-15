@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Truck No: {{ $truck->truck_number  }}</h5>
                                <p class="mb-4">
                                    Plate number is <span class="fw-bold">{{ $truck->plate_number }}</span> <br>
                                    Driver name is <span class="fw-bold">{{ $truck_driver->first_name . ' ' . $truck_driver->last_name }}</span> <br>
                                    Driver contact is <span class="fw-bold">{{ $truck_driver->contact }}</span> <br>
                                </p>

                                <form action="{{ url('/create-order') }}" method="POST">
                                    @method('POST')
                                    @csrf
                                    <input type="hidden" name="ordered_by" value="{{ auth()->user()->id }}">
                                    <input type="hidden" name="truck_id" value="{{ $truck->id }}">
                                    <div class="mb-3">
                                        @if ($errors->has('distance'))
                                            <span class="text-danger">{{ $errors->first('distance') }}</span> <br>
                                        @endif
                                        <label for="distance" class="form-label">Distance in Km</label>
                                        <input type="text" class="form-control"  name="distance"
                                            placeholder="{{ old('distance') ?? 'Enter the distance in Km' }}" autofocus />
                                    </div>
                                    <button  type="submit" class="btn btn-sm btn-outline-primary">Order Truck</button>
                                </form>
    
                                
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
