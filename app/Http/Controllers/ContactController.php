<?php

namespace App\Http\Controllers;

use App\Mail\ContactRequestNotification;
use App\Models\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'nullable|string|max:255',
                'message' => 'required|string',
            ]);

            ContactRequest::create($validatedData);

            $recipientEmail = config('mail.contact_notification_to', config('mail.from.address'));

            if (!empty($recipientEmail)) {
                Mail::to($recipientEmail)->send(new ContactRequestNotification($validatedData));
            }

            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'There was an error sending your message. Please try again later.');
        }
    }
}
