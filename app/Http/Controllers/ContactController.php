<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ContactController extends Controller
{
    public function store(ContactFormRequest $request)
    {
        $validated = $request->validated();

        // Transform the daterange array into start_date and end_date
        $formData = [
            'firstname' => $validated['firstname'],
            'lastname' => $validated['lastname'],
            'email' => $validated['email'],
            'start_date' => $validated['daterange'][0],
            'end_date' => $validated['daterange'][1],
            'program' => $validated['program'],
            'more_info' => $validated['moreInfo'] ?? null,
        ];

        ContactForm::create($formData);

        return Inertia::render('ContactRequestValidated', ['success' => 'Thank you for your inquiry! We will get back to you soon.']);
    }
}
