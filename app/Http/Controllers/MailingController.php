<?php

namespace App\Http\Controllers;

use App\Models\Mailing;
use Illuminate\Support\Facades\Mail;
use App\Mail\Confirmation;
use Illuminate\Http\Request;
use App\Mail\contact;
use Illuminate\Support\Facades\Http;

class MailingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mailings = Mailing::all();
        return view("dashboard.mailing.mailing", compact('mailings'));
    }

    public function create()
    {
        //
    }

    function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contenue' => 'required|string',
            'g-recaptcha-response' => 'required',
        ]);
        $secretKey = '6Ld4wpkqAAAAAN-XjAk58AL-csEImJDCfepdhDZq';

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $secretKey,
            'response' => $request->input('g-recaptcha-response'),
        ]);
    
        $responseData = $response->json();
    
        // Check if reCAPTCHA validation is successful
        if (!$responseData['success']) {
            return redirect()->back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
        }

        // Send the confirmation email
        Mail::to('inbox.tunisiatrip@gmail.com')->send(new Contact(
            $validatedData['nom'],
            $validatedData['email'],
            $validatedData['contenue']
        ));

        Mail::to($request->email)->send(new Confirmation());

        $success = 1;
        return redirect()->route('page1')->with('success', $success);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mailing = Mailing::find($id);
        $mailing->etat = 1;
        $mailing->update();
        return view("dashboard.mailing.affichmail", compact('mailing'));
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
