@extends('frontend.layouts.main')

@section('main-container')
    <div class="container mt-5" style="background-color: white; padding: 20px; border-radius: 10px;">
        <h2 class="text-center">WhatsApp Chatbot Services</h2>
        <p class="text-center">Enhance your business communication with AI-powered WhatsApp chatbots.</p>
        
        <div class="text-center">
            <img src="{{ url('frontend/images/chatbot.png') }}" alt="WhatsApp Chatbot" class="img-fluid" style="max-width: 300px;">
        </div>
        
        <div class="mt-4">
            <h4>Features:</h4>
            <ul>
                <li>Automated customer support</li>
                <li>24/7 availability</li>
                <li>Personalized user experience</li>
                <li>Seamless CRM integration</li>
            </ul>
        </div>
    </div>
@endsection
