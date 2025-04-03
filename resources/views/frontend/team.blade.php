@extends('frontend.layouts.main')

@section('main-container')

  <!-- team section -->
  <section class="team_section layout_padding" style="background-color: #ffffff;">
    <div class="container-fluid">
    <div class="heading_container heading_center">
      <h2 class="">
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

@endsection