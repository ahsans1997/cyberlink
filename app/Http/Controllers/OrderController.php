<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Purchase::with('package')->orderBy('id', 'desc')->paginate(100);
        $users = User::all()->where('id', '!=', 1)->where('id', '!=', 2);

        return view('admin.orders.index', compact('orders', 'users'));
    }

    public function orderAssign($id)
    {
        return Purchase::find($id);
    }

    public function orderAssignUser(Request $request)
    {
        $order = Purchase::find($request->order_id);
        $order->user_id = $request->user_id;
        $order->save();

        Toastr::success('Order Assigned Successfully', 'Success');
        return redirect()->route('orders.index');
    }

    public function assignOrderComplete($id)
    {
        $order = Purchase::find($id);
        $order->status = 'completed';
        $order->delivered_at = Carbon::now();
        $order->save();

        Toastr::success('Order Completed Successfully', 'Success');
        return redirect()->route('orders.index');
    }

    public function destroy($id)
    {
        Purchase::find($id)->delete();
        Toastr::success('Order Deleted Successfully', 'Success');
        return redirect()->route('orders.index');
    }


}
