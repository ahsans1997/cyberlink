<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Notifications\PurchaseNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;
use NotificationChannels\Telegram\TelegramMessage;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(get_class_methods(TelegramMessage::class));

        $request->validate([
            'package_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'district' => 'required',
            'address' => 'required',
        ]);

        $purchase = new Purchase();
        $purchase->package_id = $request->package_id;
        $purchase->name = $request->name;
        $purchase->email = $request->email;
        $purchase->mobile = $request->mobile;
        $purchase->district = $request->district;
        $purchase->address = $request->address;
        $purchase->save();

        $purchaseInfo = Purchase::with('package')->find($purchase->id);

        Notification::route('telegram', '-4534892797')->notify(new PurchaseNotification($purchaseInfo));

        return redirect()->back()->with('message', 'Purchase Order has been placed successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
