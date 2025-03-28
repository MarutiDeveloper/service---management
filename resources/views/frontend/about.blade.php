@extends('frontend.layouts.main')

@section('main-container')

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          About <span>WhatsApp Chatbot</span>
        </h2>
        <p>
          Revolutionize customer engagement with AI-driven WhatsApp chatbot solutions for businesses.
        </p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{url('frontend/images/about-img.png')}}" alt="WhatsApp Chatbot">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h3>
              Smart & Automated Business Communication
            </h3>
            <p>
              Our WhatsApp Chatbot enhances customer interaction by automating responses, handling inquiries, and improving user experience with 24/7 availability.
            </p>
            <p>
              From customer support to order tracking and appointment scheduling, our chatbot seamlessly integrates with your business, ensuring efficiency and real-time engagement.
            </p>
            <a href="">
              Learn More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

@endsection
