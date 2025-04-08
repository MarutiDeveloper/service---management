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
    @foreach ($aboutus as $about)
    <div class="row">
      <div class="col-md-6">
      <div class="img-box">
      @if(!Empty($about->image))
      <img src="{{ asset(path:  $about->image) }}" alt="WhatsApp Chatbot">
    @else
      <span class="text-muted">No Image</span>
    @endif
      </div>
      </div>
      <div class="col-md-6">
      <div class="detail-box">
        @if (!Empty($about->title))
      <h3 class="mb-2">{{ $about->title }}</h3>
      @endif
      @if (!Empty($about->description))
      
     
      <hr class="my-3" style="background-color: white;">

      <p style="font-family: 'Times New Roman', Times, serif; font-size: larger; font-weight: bold;">
      {{ $about->description }}
      </p>
      @endif
      <a href="">
      Learn More
      </a>
      </div>
      </div>
    </div>
  @endforeach
    </div>
  </section>

  <!-- end about section -->

@endsection