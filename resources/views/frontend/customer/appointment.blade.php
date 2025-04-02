@extends('frontend.layouts.main')

@section('main-container')
    <section class="book_appointment layout_padding py-5">
        <div class="container">
            <h1 class="text-center mb-4" style="color: white;">Book Appointment</h1>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="{{ route('customer.appointment.store') }}" method="POST" class="appointment-form">
                        @csrf

                        <!-- Customer Name -->
                        <div class="mb-3">
                            <label for="customer_name" class="form-label" style="color: white;">Name:</label>
                            <input type="text" id="customer_name" name="customer_name" required class="form-control @error('customer_name') is-invalid @enderror">
                            @error('customer_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Customer Email -->
                        <div class="mb-3">
                            <label for="customer_email" class="form-label" style="color: white;">Email:</label>
                            <input type="email" id="customer_email" name="customer_email" required class="form-control @error('customer_email') is-invalid @enderror">
                            @error('customer_email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Appointment Date -->
                        <div class="mb-3">
                            <label for="appointment_date" class="form-label" style="color: white;">Date:</label>
                            <input type="date" id="appointment_date" name="appointment_date" required class="form-control @error('appointment_date') is-invalid @enderror">
                            @error('appointment_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Appointment Time -->
                        <div class="mb-3">
                            <label for="appointment_time" class="form-label" style="color: white;">Time:</label>
                            <input type="time" id="appointment_time" name="appointment_time" required class="form-control @error('appointment_time') is-invalid @enderror">
                            @error('appointment_time')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Message -->
                        <div class="mb-3">
                            <label for="message" class="form-label" style="color: white;">Message:</label>
                            <textarea id="message" name="message" class="form-control @error('message') is-invalid @enderror" rows="4"></textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-4 py-2">Book Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
