<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::all();
        return view('admin.package.index', compact('packages'));
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
        $request->validate([
            'price' => 'required',
            'speed' => 'required',
            'type' => 'required',
        ]);

        $package = new Package();
        $package->name = $request->name;
        $package->price = $request->price;
        $package->speed = $request->speed;
        $package->type = $request->type;
        $package->status = 1;
        $package->is_featured = 0;
        $package->sort_order = $request->sort_order;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
            $package->image = $image_name;
        }

        $package->save();

        Toastr::success('Package Created Successfully', 'Success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
       return Package::findOrFail($package->id);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        $request->validate([
            'price' => 'required',
            'speed' => 'required',
            'type' => 'required',
        ]);

        $package = Package::findOrFail($package->id);
        $package->name = $request->name;
        $package->price = $request->price;
        $package->speed = $request->speed;
        $package->type = $request->type;
        $package->sort_order = $request->sort_order;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
            $package->image = $image_name;
        }

        $package->save();

        Toastr::success('Package Updated Successfully', 'Success');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        $package = Package::findOrFail($package->id);
        $package->delete();

        Toastr::success('Package Deleted Successfully', 'Success');
        return redirect()->back();
    }

    public function packageinfo($id)
    {
        return Package::findOrFail($id);
    }
}
