@extends('frontend.layouts.main')

@section('main-container')
    <div class="container mt-5" style="background-color: #ffffff; padding: 30px; border-radius: 10px;">
        <h2 class="text-center">Business Automation Services</h2>
        <p class="text-center">Automate your business processes and improve efficiency with cutting-edge automation solutions.</p>
        
        <div class="text-center">
            <img src="{{ url('frontend/images/automation.jpg') }}" alt="Business Automation" class="img-fluid" style="max-width: 300px;">
        </div>
        
        <div class="mt-4">
            <h4>Key Benefits:</h4>
            <ul>
                <li>Workflow automation</li>
                <li>Time and cost efficiency</li>
                <li>Integration with existing systems</li>
                <li>Enhanced customer interactions</li>
            </ul>
        </div>
    </div>
@endsection
