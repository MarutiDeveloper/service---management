@extends('frontend.layouts.main')
<!-- team section -->
      @section('main-container')


        <section class="team_section layout_padding">
          <div class="container-fluid">
          <div class="heading_container heading_center">
            <h2 class="">
            Our <span> Team</span>
            </h2>
          </div>

          <div class="team_container">
            <div class="row">
            @foreach($teams as $team) 
            <div class="col-lg-3 col-sm-6">
            <div class="box ">
            <div class="img-box">
              <img src="{{ asset($team->image) }}" class="img1" alt="{{ $team->name }}">
            </div>
            <div class="detail-box">
              <h5>
              {{ $team->name }}
              </h5>
              <p>
              {{ $team->designation }}
              </p>
            </div>

            </div>
            </div>

          @endforeach
            </div>
          </div>
          </div>
        </section>
      @endsection
<!-- end team section -->