@extends('frontend.layouts.main')

@section('main-container')
    
    
    <!-- slider section -->
<section class="slider_section">
  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <h1>
                  WhatsApp <br>
                  Chatbots
                </h1>
                <p>
                  Automate customer interactions with AI-powered WhatsApp chatbots. Enhance engagement, provide instant responses, and improve customer satisfaction effortlessly.
                </p>
                <div class="btn-box">
                  <a href="" class="btn1">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="{{url('frontend-2/images/slider/whatsapp-chatbot-1.png')}}" alt="WhatsApp Chatbot">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <h1>
                  24/7 Support <br>
                  With AI Chatbots
                </h1>
                <p>
                  Ensure round-the-clock customer service with intelligent WhatsApp chatbots. Handle inquiries, process orders, and assist users anytime, anywhere.
                </p>
                <div class="btn-box">
                  <a href="" class="btn1">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="{{url('frontend-2/images/slider/whatsapp-chatbot-2.avif')}}" alt="AI Support Chatbot">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <h1>
                  Automate <br>
                  Business Processes
                </h1>
                <p>
                  Streamline operations with WhatsApp chatbots. Automate bookings, payments, and customer interactions seamlessly, boosting productivity and efficiency.
                </p>
                <div class="btn-box">
                  <a href="" class="btn1">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="{{url('frontend-2/images/slider/whatsapp-chatbot-3.png')}}" alt="Business Automation Chatbot">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <ol class="carousel-indicators">
      <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#customCarousel1" data-slide-to="1"></li>
      <li data-target="#customCarousel1" data-slide-to="2"></li>
    </ol>
  </div>
</section>
<!-- end slider section -->


<!-- Service Section -->
<section class="service_section layout_padding" style="padding-top: 150px;"> 
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
        @foreach($services as $service)
          <div class="col-md-4">
            <div class="box" style="padding: 30px; border-radius: 10px; text-align: center; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
              <div class="img-box" style="margin-bottom: 15px;">
                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" style="max-width: 100px;">
              </div>
              <div class="detail-box">
                <h5 style="font-size: 22px; font-weight: bold;">{{ $service->title }}</h5>
                <p style="font-size: 16px;">{{ $service->description }}</p>
                <a href="#" style="font-size: 18px; font-weight: bold;">Read More</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="btn-box" style="margin-top: 30px;">
        <a href="#" style="font-size: 20px; font-weight: bold; padding: 10px 20px;">View All Services</a>
      </div>
    </div>
  </div>
</section>
<!-- End Service Section -->


 <!-- About Section -->

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
          <img src="{{url('frontend-2/images/about-img.png')}}" alt="WhatsApp Chatbot">
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

<!-- End About Section -->

<!-- Why Section -->
<section class="why_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Why Choose <span>Us</span></h2>
    </div>
    <div class="why_container">
        @foreach($whySections as $section)
            <div class="box">
                <div class="img-box">
                    <img src="{{ asset('storage/' . $section->image) }}" alt="">
                </div>
                <div class="detail-box">
                    <h5>{{ $section->title }}</h5>
                    <p>{{ $section->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="btn-box">
      <a href="">Learn More</a>
    </div>
  </div>
</section>
<!-- End Why Section -->

<!-- team section -->
<section class="team_section layout_padding" style="background-color: #ffffff;">
  <div class="container-fluid">
      <div class="heading_container heading_center">
          <h2>
              <span>Our Team</span>
          </h2>
      </div>

      <div class="team_container">
          <div class="row">
              @foreach($teams as $team)
                  <div class="col-lg-3 col-sm-6">
                      <div class="box">
                          <div class="img-box">
                              <img src="{{ asset('storage/' . $team->image) }}" class="img1" alt="{{ $team->name }}">
                          </div>
                          <div class="detail-box">
                              <h5>{{ $team->name }}</h5>
                              <p>{{ $team->designation }}</p>
                          </div>
                          <div class="social_box">
                              @if($team->facebook)
                                  <a href="{{ $team->facebook }}">
                                      <i class="fa fa-facebook" aria-hidden="true"></i>
                                  </a>
                              @endif
                              @if($team->twitter)
                                  <a href="{{ $team->twitter }}">
                                      <i class="fa fa-twitter" aria-hidden="true"></i>
                                  </a>
                              @endif
                              @if($team->linkedin)
                                  <a href="{{ $team->linkedin }}">
                                      <i class="fa fa-linkedin" aria-hidden="true"></i>
                                  </a>
                              @endif
                              @if($team->instagram)
                                  <a href="{{ $team->instagram }}">
                                      <i class="fa fa-instagram" aria-hidden="true"></i>
                                  </a>
                              @endif
                              @if($team->youtube)
                                  <a href="{{ $team->youtube }}">
                                      <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                  </a>
                              @endif
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
</section>
<!-- end team section -->


<section class="client_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center psudo_white_primary mb_45">
      <h2>
        What says our <span>Customers</span>
      </h2>
    </div>
    <div class="carousel-wrap">
      <div class="owl-carousel client_owl-carousel">
        @foreach ($clients as $client)
          <div class="item">
            <div class="box">
              <div class="img-box">
                <!-- Make sure the path matches where your images are saved -->
                <img src="{{ asset('images/clients/'.$client->image) }}" alt="{{ $client->name }}" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>{{ $client->name }}</h6>
                    <p>{{ $client->position }}</p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>{{ $client->testimonial }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>


  
@endsection
  