<?php

namespace App\Http\Controllers;

use App\Mail\QuoteRequest;
use App\Mail\WorkRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function quote(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'service' => 'required|string',
            'text' => 'nullable|string',
            'privacy&policies' => 'required|accepted'
        ]);


        Mail::to('administration@sphtechnology.ch')
            ->send(new QuoteRequest(
                name: $request->input('name'),
                email: $request->input('email'),
                service: $request->input('service'),
                text: $request->input('text') ?? ''
            ));

        return redirect(url('quote'))->with('message', 'Email inviata con successo!');
    }

    public function work(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'text' => 'nullable|string',
            'privacy&policies' => 'required|accepted',
            'cv' => 'required|file|mimes:pdf|max:2048'
        ]);

        Mail::to('administration@sphtechnology.ch')->send(
            new WorkRequest(
                name: $request->input('name'),
                email: $request->input('email'),
                text: $request->input('text') ?? '',
                cv_path: $request->file('cv')->getRealPath()
            )
        );

        return redirect(url('work'))->with('message', 'Email inviata con successo!');

    }
}
