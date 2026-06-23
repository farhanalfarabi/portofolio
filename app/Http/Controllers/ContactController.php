<?php

namespace App\Http\Controllers;

use App\Mail\ContactNotification;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'note'  => 'required|string|max:5000',
        ]);

        Contact::create($validated);

        Mail::to(config('mail.owner_email'))
            ->send(new ContactNotification(
                senderName:  $validated['name'],
                senderEmail: $validated['email'],
                note:        $validated['note'],
            ));

        return response()->json([
            'success' => true,
            'message' => 'Message sent successfully!',
        ]);
    }
}
