<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoRequestMail;

class DemoRequestController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'job_title' => 'required',
            'Phone' => 'required',
            'email' => 'required|email',
            'Company_Name' => 'required',
            'company_size' => 'nullable',
            'data_source' => 'nullable',
            'industry' => 'nullable',
            'message' => 'required',
            'form_source' => 'nullable',
        ]);

        Mail::to('drnasser.khairy@gmail.com')->send(new DemoRequestMail($data));
        

        return back()->with('success', 'Your request has been sent successfully!');
    }
}

