<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact.form');
    }

    public function submitForm(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|string',
        ]);

        // Jika validasi berhasil, bisa kirim email, simpan data, dll. 
        // Untuk sekarang, kita kirim balik response sukses
        return redirect()->back()->with('success', 'Contact form submitted successfully!');
    }
}
