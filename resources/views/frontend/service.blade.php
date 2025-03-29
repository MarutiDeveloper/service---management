@extends('frontend.layouts.main')

@section('main-container')

<!-- Service Section -->
<section class="service_section layout_padding" style="background-color: #f8f9fa; padding-top: 100px; padding-bottom: 100px;"> 
  <div class="service_container">
    <div class="container">
      <div class="heading_container heading_center">
        <h2 style="font-size: 32px; font-weight: bold;">
          Our <span> Services</span>
        </h2>
        <p style="font-size: 18px;">
          Enhance customer engagement and automate responses with our powerful WhatsApp chatbot solutions.
        </p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="box" style="background: #fff; padding: 30px; border-radius: 10px; text-align: center; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="img-box" style="margin-bottom: 15px;">
              <img src="{{ url('frontend/images/service/chatbot.png') }}" alt="Chatbot" style="max-width: 100px;">
            </div>
            <div class="detail-box">
              <h5 style="font-size: 22px; font-weight: bold;">Automated Customer Support</h5>
              <p style="font-size: 16px;">Provide instant replies to common queries, reducing response time and improving customer satisfaction.</p>
              <a href="#" style="font-size: 18px; font-weight: bold;">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box" style="background: #fff; padding: 30px; border-radius: 10px; text-align: center; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="img-box" style="margin-bottom: 15px;">
              <img src="{{ url('frontend-2/images/service/order.png') }}" alt="Order Booking" style="max-width: 100px;">
            </div>
            <div class="detail-box">
              <h5 style="font-size: 22px; font-weight: bold;">Order & Booking Assistance</h5>
              <p style="font-size: 16px;">Allow customers to place orders, book appointments, and receive real-time updates via WhatsApp.</p>
              <a href="#" style="font-size: 18px; font-weight: bold;">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box" style="background: #fff; padding: 30px; border-radius: 10px; text-align: center; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="img-box" style="margin-bottom: 15px;">
              <img src="{{ url('frontend-2/images/service/integration.png') }}" alt="CRM Integration" style="max-width: 100px;">
            </div>
            <div class="detail-box">
              <h5 style="font-size: 22px; font-weight: bold;">CRM & API Integration</h5>
              <p style="font-size: 16px;">Connect WhatsApp with your CRM, payment gateways, and third-party applications for seamless workflow automation.</p>
              <a href="#" style="font-size: 18px; font-weight: bold;">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box" style="margin-top: 30px; text-align: center;">
        <a href="#" style="font-size: 20px; font-weight: bold; padding: 12px 24px; background: #007bff; color: #fff; border-radius: 5px; text-decoration: none;">View All Services</a>
      </div>
    </div>
  </div>
</section>
<!-- End Service Section -->

@endsection
