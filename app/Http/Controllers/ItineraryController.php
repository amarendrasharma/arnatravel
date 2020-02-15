<?php

namespace App\Http\Controllers;

use App\Itinerary;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ItineraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function create(Package $package)
    {;
        $package = collect($package->only('id', 'uuid', 'title'))->first();
        return view('admin.itinarary.create', compact('package'));
    }


    public function store(Request $request, $id)
    {
        $itineraries = collect($request->all());
        $itineraries = $itineraries->map(function ($itinerary) use ($id) {
            return  array_merge($itinerary, ['uuid' => Str::uuid(), 'package_id' => $id]);
        });
        DB::table('itineraries')->insert($itineraries->toArray());
    }


    public function show(Itinerary $itinerary)
    {
        //
    }

    public function edit(Itinerary $itinerary)
    {
        //
    }


    public function update(Request $request, Itinerary $itinerary)
    {
        //
    }

    public function destroy(Itinerary $itinerary)
    {
        $itinerary->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
}
