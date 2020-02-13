<?php

namespace App\Http\Controllers;

use App\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->simplePaginate(10);
        return view('admin.message.index', compact('contacts'));
    }


    public function create()
    {
        return view('front.contact');
    }

    public function store(Request $request, $uuid = null)
    {
        $request['package_uuid'] = $uuid;
        $this->validate($request, [
            'uuid' => ['exists:packages,uuid', 'nullable'],
            'name' => ['nullable'],
            'email' => ['email', 'nullable'],
            'phone' => ['required'],
            'msg' => ['required'],
            'person' => ["nullable"]
        ]);
        $contactCreated = Contact::create($request->all());
        if ($contactCreated) {
            Session::flash('success', 'Thank you. We will back to you');
            return redirect()->back();
        }
    }

    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
