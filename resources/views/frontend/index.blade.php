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
                <img src="{{url('frontend/images/slider/whatsapp-chatbot-1.png')}}" alt="WhatsApp Chatbot">
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
                <img src="{{url('frontend/images/slider/whatsapp-chatbot-2.avif')}}" alt="AI Support Chatbot">
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
                <img src="{{url('frontend/images/slider/whatsapp-chatbot-3.png')}}" alt="Business Automation Chatbot">
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
        <div class="col-md-4">
          <div class="box" style="padding: 30px; border-radius: 10px; text-align: center; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
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
          <div class="box" style="padding: 30px; border-radius: 10px; text-align: center; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="img-box" style="margin-bottom: 15px;">
              <img src="{{ url('frontend/images/service/order.png') }}" alt="Order Booking" style="max-width: 100px;">
            </div>
            <div class="detail-box">
              <h5 style="font-size: 22px; font-weight: bold;">Order & Booking Assistance</h5>
              <p style="font-size: 16px;">Allow customers to place orders, book appointments, and receive real-time updates via WhatsApp.</p>
              <a href="#" style="font-size: 18px; font-weight: bold;">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box" style="padding: 30px; border-radius: 10px; text-align: center; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="img-box" style="margin-bottom: 15px;">
              <img src="{{ url('frontend/images/service/integration.png') }}" alt="CRM Integration" style="max-width: 100px;">
            </div>
            <div class="detail-box">
              <h5 style="font-size: 22px; font-weight: bold;">CRM & API Integration</h5>
              <p style="font-size: 16px;">Connect WhatsApp with your CRM, payment gateways, and third-party applications for seamless workflow automation.</p>
              <a href="#" style="font-size: 18px; font-weight: bold;">Read More</a>
            </div>
          </div>
        </div>
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

<!-- End About Section -->

<!-- why section -->

<section class="why_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Why Choose <span>Our WhatsApp Chatbot</span>
      </h2>
    </div>
    <div class="why_container">
      <div class="box">
        <div class="img-box">
          <img src="{{url('frontend/images/why/w2.png')}}" alt="">
        </div>
        <div class="detail-box">
          <h5>
            24/7 Customer Support
          </h5>
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
          <h5>
            Automated Responses
          </h5>
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
          <h5>
            Seamless Integration
          </h5>
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
          <h5>
            Personalized Experience
          </h5>
          <p>
            Our chatbot understands user preferences, providing a personalized chat experience that boosts customer satisfaction and loyalty.
            With AI-driven learning, it adapts to customer needs, making conversations more relevant. Improve retention rates with meaningful and tailored interactions.
          </p>
        </div>
      </div>
    </div>
    <div class="btn-box">
      <a href="">
        Learn More
      </a>
    </div>
  </div>
</section>

<!-- end why section -->

  <!-- team section -->
<section class="team_section layout_padding">
  <div class="container-fluid">
    <div class="heading_container heading_center">
      <h2 class="">
        Our <span> Team</span>
      </h2>
    </div>

    <div class="team_container">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="box ">
            <div class="img-box">
              <img src="{{url('frontend/images/team/team-1.jpg')}}" class="img1" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Alex Johnson
              </h5>
              <p>
                AI Developer
              </p>
            </div>
            <div class="social_box">
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="box ">
            <div class="img-box">
              <img src="{{url('frontend/images/team/team-2.jpg')}}" class="img1" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Sarah Lee
              </h5>
              <p>
                Chatbot Specialist
              </p>
            </div>
            <div class="social_box">
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="box ">
            <div class="img-box">
              <img src="{{url('frontend/images/team/team-3.jpg')}}" class="img1" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Michael Smith
              </h5>
              <p>
                NLP Engineer
              </p>
            </div>
            <div class="social_box">
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="box ">
            <div class="img-box">
              <img src="{{url('frontend/images/team/team-4.jpg')}}" class="img1" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Emily Davis
              </h5>
              <p>
                UX Designer
              </p>
            </div>
            <div class="social_box">
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end team section -->


  <!-- client section -->
<section class="client_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center psudo_white_primary mb_45">
      <h2>
        What says our <span>Customers</span>
      </h2>
    </div>
    <div class="carousel-wrap ">
      <div class="owl-carousel client_owl-carousel">
        <div class="item">
          <div class="box">
            <div class="img-box">
              <img src="{{url('frontend/images/client/client1.jpg')}}" alt="" class="box-img">
            </div>
            <div class="detail-box">
              <div class="client_id">
                <div class="client_info">
                  <h6>
                    John Doe
                  </h6>
                  <p>
                    Business Owner
                  </p>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                "The WhatsApp chatbot has transformed our customer service. It handles inquiries instantly, saving us hours every day!"
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="img-box">
              <img src="{{url('frontend/images/client/client2.jpg')}}" alt="" class="box-img">
            </div>
            <div class="detail-box">
              <div class="client_id">
                <div class="client_info">
                  <h6>
                    Sarah Williams
                  </h6>
                  <p>
                    E-commerce Entrepreneur
                  </p>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                "Our sales have increased since implementing the WhatsApp chatbot. Customers love the quick responses and support!"
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="img-box">
              <img src="{{url('frontend/images/client/client3.jpg')}}" alt="" class="box-img">
            </div>
            <div class="detail-box">
              <div class="client_id">
                <div class="client_info">
                  <h6>
                    Mark Thompson
                  </h6>
                  <p>
                    Tech Startup Founder
                  </p>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                "We use the WhatsApp chatbot for lead generation, and it's been amazing. It engages potential customers 24/7."
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="img-box">
              <img src="{{url('frontend/images/client/client4.jpg')}}" alt="" class="box-img">
            </div>
            <div class="detail-box">
              <div class="client_id">
                <div class="client_info">
                  <h6>
                    Emily Roberts
                  </h6>
                  <p>
                    Customer Support Manager
                  </p>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                "Managing customer queries has never been easier. The chatbot helps us respond instantly and efficiently!"
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end client section -->


  
@endsection
  