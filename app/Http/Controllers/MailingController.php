<?php

namespace App\Http\Controllers;

use App\Models\Mailing;
use Illuminate\Support\Facades\Mail;
use App\Mail\Confirmation;
use Illuminate\Http\Request;

class MailingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mailings=Mailing::all();
        return view("dashboard.mailing.mailing",compact('mailings'));
    }

    public function create()
    {
        //
    }

    function store(Request $request)
    {
        Mailing::create($request->all());
        Mail::to($request->email)->send(new Confirmation());
        $success = 1;
        return redirect()->route('page1')->with('success', $success);
       // return view('page1.page1')->with('success', $success);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mailing=Mailing::find($id);
        $mailing->etat = 1;
        $mailing->update();
        return view("dashboard.mailing.affichmail",compact('mailing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mailing $mailing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mailing $mailing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mailing $mailing)
    {
        //
    }
}
