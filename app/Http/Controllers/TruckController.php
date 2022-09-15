<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;
use App\Models\User;
use App\Models\TruckOrder;

class TruckController extends Controller
{
    public function list(){

        $trucks = Truck::paginate(10);

        return view('admin.pages.trucks',['trucks' => $trucks]);
    }

    public function orderPage(Request $request)
    {
        $truck = Truck::find($request->tid);
        $truck_driver = User::find($truck->driver_id);

        return view('admin.pages.order_truck', ['truck' => $truck, 'truck_driver' => $truck_driver]);
    }

    public function orderTruck(Request $request)
    {
        $request->validate([
            'ordered_by' => 'required|string',
            'truck_id' => 'required|string',
            'distance' => 'required'
        ]);


        $truck_order = new TruckOrder();
        $truck_order->ordered_by = $request->ordered_by;
        $truck_order->truck_id = $request->truck_id;
        $truck_order->distance_covered = $request->distance;
        $truck_order->amount_billed = $request->distance * 2000;
        $truck_order->currency = "UGX";
        $truck_order->save();

        return redirect('home')->withSuccess('Truck Order Complete!');
    }

    public function listMyOrders(Request $request)
    {
        $orders = TruckOrder::join('trucks', 'trucks.id', '=', 'truck_orders.truck_id')
          ->join('users', 'trucks.driver_id', '=', 'users.id')
          ->where('truck_orders.ordered_by', '=', auth()->user()->id)
          ->select('truck_orders.*',
           'trucks.plate_number',
           'trucks.truck_number',
            'users.first_name',
            'users.last_name',
            'users.contact',
            'users.email')
          ->paginate(10);

        return view('admin.pages.my_orders', ['orders' => $orders]);
    }

    public function driverOrders()
    {
        
        $orders = TruckOrder::join('trucks', 'trucks.id', '=', 'truck_orders.truck_id')
          ->join('users', 'truck_orders.ordered_by', '=', 'users.id')
          ->where('trucks.driver_id', '=', auth()->user()->id)
          ->select('truck_orders.*',
           'trucks.plate_number',
           'trucks.truck_number',
            'users.first_name',
            'users.last_name',
            'users.contact',
            'users.email')
          ->paginate(10);

          return view('admin.pages.drivers_orders', ['orders' => $orders]);
    }
}
