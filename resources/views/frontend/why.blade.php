@extends('frontend.layouts.main')

@section('main-container')

  <!-- why section -->

  <section class="why_section layout_padding" style="background-color: white;">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Why Choose <span>Us</span>
        </h2>
      </div>
      <div class="why_container">
        <div class="box">
          <div class="img-box">
            <img src="{{url('frontend/images/why/w2.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>24/7 Customer Support</h5>
            <p>
              Our WhatsApp Chatbot ensures round-the-clock customer service, answering queries instantly and efficiently. No waiting times, just instant support anytime, anywhere. 
            Whether it's troubleshooting or general inquiries, our bot keeps your customers engaged. Reduce workload while improving response quality.

            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{url('frontend/images/why/w3.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>Automated Responses</h5>
            <p>
              Save time and improve efficiency with our chatbot's AI-powered automated responses. It can handle FAQs, bookings, and more without human intervention.
            Designed to provide quick and accurate responses, it enhances customer engagement. Reduce delays and streamline your communication effectively.

            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{url('frontend/images/why/w1.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>Seamless Integration</h5>
            <p>
              Easily integrate our chatbot with your CRM, e-commerce platform, or business tools to streamline operations and enhance user engagement.
            With multi-platform support, you can connect with customers across various touchpoints. Experience effortless data synchronization and improved workflow automation.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{url('frontend/images/why/w4.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>Personalized Experience</h5>
            <p>
              Our chatbot understands user preferences, providing a personalized chat experience that boosts customer satisfaction and loyalty.
            With AI-driven learning, it adapts to customer needs, making conversations more relevant. Improve retention rates with meaningful and tailored interactions.
            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>
  
  <!-- end why section -->


  @endsection
