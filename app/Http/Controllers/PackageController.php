<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PackageController extends Controller
{

    public function index()
    {
        $packages = Package::all();
        return view('admin.package.index', compact('packages'));
    }


    public function create()
    {
        return view('admin.package.create');
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'banner' => ['file'],
            'desc' => ['string'],
            'overview' => ['string'],
            'title' => ['string', 'required'],
            'duration' => ['string', 'required'],
            // 'slug' => ['string', 'nullable'],
            'included' => ['string', 'nullable'],
            // 'ammenities' => ['string', 'nullable'],
            // 'status' => ['nullable']
        ]);
        $banner = $request->file('banner')->store('banner', 'public');
        $x = $request->except('banner') + ['uuid' => Str::uuid(), 'banner' => $banner];
        $y = Package::create($x);
        return redirect('/admin/packages')->with('success', 'Your document has been uploaded.');
    }


    public function show(Package $package)
    {
        $p = $package;
        $package = $p->load('itineraries');
        return view('admin.package.show', compact('package'));
    }


    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
    }
}
