<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
class ContactformController extends Controller
{
      public function showForm()
    {
        return view('Contact_Form.contactform');
    }

    public function submitForm(Request $request)
    {
        // Validate input
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // Log the input
        Log::info('Contact form submitted:', $data);

        // Flash success message
        session()->flash('success', 'Your message has been sent successfully.');
       
        return redirect()->route('contact.confirm')->with('formData', $data);
    }

    public function confirm()
    {
        $formData = session('formData');

        if (!$formData) {
            return redirect()->route('contact.form');
        }
        //dd(session()->all());

        return view('Contact_Form.confirm', compact('formData'));
    }
}
