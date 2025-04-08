@extends('frontend.layouts.main')

@section('main-container')

<section class="why_section layout_padding" style="background-color: white;">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Why Choose <span>Us</span></h2>
        </div>
        <div class="why_container">
        @foreach($whySections as $section)
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset($section->image) }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>{{ $section->title }}</h5>
                        <p>{{ $section->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
