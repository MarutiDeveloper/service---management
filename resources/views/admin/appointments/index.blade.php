@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Appointment Booking Page</h1>
        
        <h2>All Appointments</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->customer_name }}</td>
                        <td>{{ $appointment->customer_email }}</td>
                        <td>{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d-m-Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($appointment->appointment_time)->format('h:i A') }}</td>
                        <td>{{ $appointment->message }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
