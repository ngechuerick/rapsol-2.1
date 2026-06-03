<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactInquiry;

class ContactController extends Controller
{
    /**
     * Show the contact page.
     */
    public function show()
    {
        return view('contact');
    }

    /**
     * Handle the form submission.
     * Validates, sends email, redirects with success flash.
     */
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'     => ['required', 'string', 'min:2', 'max:100'],
            'email'    => ['required', 'email', 'max:150'],
            'company'  => ['nullable', 'string', 'max:100'],
            'phone'    => ['nullable', 'string', 'max:30'],
            'services' => ['nullable', 'array'],
            'services.*' => ['string'],
            'budget'   => ['nullable', 'string', 'max:50'],
            'message'  => ['required', 'string', 'min:20', 'max:3000'],
        ], [
            'name.required'    => 'Please enter your full name.',
            'name.min'         => 'Your name must be at least 2 characters.',
            'email.required'   => 'Please enter your email address.',
            'email.email'      => 'Please enter a valid email address.',
            'message.required' => 'Please write a message before submitting.',
            'message.min'      => 'Your message must be at least 20 characters.',
        ]);

        // Send the email
        Mail::to(config('mail.contact_address'))
            ->send(new ContactInquiry($validated));

        return redirect()
            ->route('contact')
            ->with('success', true);
    }
}