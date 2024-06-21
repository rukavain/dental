<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\ContactSubmission;

class ContactController extends Controller
{
    public function show()
    {
        return view('emails.contact');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('magtoto599@gmail.com')->send(new ContactMail($details));

        ContactSubmission::create($details);

        return redirect()->route('homepage')->with('success', 'Message successfully submitted');
    }

    public function viewSubmissions()
    {
        $submissions = ContactSubmission::all();

        return view('admin.content.contact-submissions', [
            'submissions' => $submissions
        ]);
    }
}
