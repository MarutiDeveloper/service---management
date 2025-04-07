<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\CompanyProfile;
class CustomerAppointmentController extends Controller
{
    public function create()
    {
        $companyProfile = CompanyProfile::all(); // Retrieve the first profile
        return view('frontend.customer.appointment', compact('companyProfile'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|date_format:H:i',
        ]);

        Appointment::create([
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
            'message' => $request->message,
        ]);

        return redirect()->route('customer.appointment.create')->with('success', 'Appointment booked successfully.');
    }
}
