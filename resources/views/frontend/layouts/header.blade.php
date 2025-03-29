<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{url('frontend-2/images/favicon.png')}}" type="">

  <title> Service Management </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('frontend-2/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="{{url('frontend-2/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{url('frontend-2/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('frontend-2/css/responsive.css')}}" rel="stylesheet" />

  <style>

    /* Custom styling for title */
    .navbar-brand {
      display: flex;
      align-items: center;
    }

    .navbar-brand img {
      max-height: 50px; /* Adjust the height of the logo */
      margin-right: 10px; /* Space between logo and title */
    }

    /* Custom styling for title */
    .navbar-brand span {
      font-size: 28px; /* Adjust the size of the title */
      font-weight: 700; /* Make it bold */
      color: #fff; /* White text for contrast */
      text-transform: uppercase;
    }

    /* Dropdown menu styling */
    .dropdown-menu {
      display: none;
      position: absolute;
      background-color: #fff;
      min-width: 180px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      z-index: 1000;
    }
  
    .dropdown-menu a {
      color: #333;
      padding: 10px 15px;
      display: block;
      text-decoration: none;
    }
  
    .dropdown-menu a:hover {
      background-color: #f8f9fa;
    }
  
    /* Show dropdown on hover */
    .nav-item.dropdown:hover .dropdown-menu {
      display: block;
    }
  </style>
  

</head>

<body>

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="{{url('frontend-2/images/hero-bg.png')}}" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{ url('frontend-2/images/logo.jpg') }}" alt="Logo"> <!-- Add Your Logo Here -->

            <span>
                Service Management
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}"> About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="{{url('/service')}}">Services</a>
                <ul class="dropdown-menu">
                  <li><a href="{{url('/whatsapp-chatbot')}}">WhatsApp Chatbot</a></li>
                  <li><a href="{{url('/business-automation')}}">Business Automation</a></li>
                </ul>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('/why')}}">Why Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/team')}}">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
              </li>
              
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
