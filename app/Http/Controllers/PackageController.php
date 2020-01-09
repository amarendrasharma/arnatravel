<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PackageController extends Controller
{

    public function index()
    {
        return view('admin.package.index');
    }


    public function create()
    {
        return view('admin.package.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'banner' => ['file'],
            'desc' => ['string'],
            'overview' => ['string'],
            'title' => ['string', 'required'],
            'duration' => ['string', 'required'],
            'slug' => ['string', 'nullable'],
            'included' => ['string', 'nullable'],
            'ammenities' => ['string', 'nullable'],
            'status' => ['nullable']
        ]);

        Package::create($request->all() + ['uuid' => Str::uuid()]);
    }


    public function show(Package $package)
    {
        //
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
