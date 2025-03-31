@extends('frontend.layouts.main')

@section('main-container')
    <section class="section-5 pt-3 pb-3 mb-3 bg-white">
        <div class="container">
            <div class="light-font">
                <ol class="breadcrumb primary-color mb-0">
                    <li class="breadcrumb-item"><a class="white-text" href="{{ route('account.profile') }}">My Account</a>
                    </li>
                    <li class="breadcrumb-item">Settings</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="section-11">
        <div class="container mt-5">
            <div class="row">
                @include('frontend.common.message')

                <div class="col-md-3">
                    @include('frontend.common.sidebar')
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="h5 mb-0 pt-2 pb-2">Personal Information</h2>
                        </div>
                        <form action="" method="post" name="profileForm" id="profileForm">
                            @csrf
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}"
                                        placeholder="Enter Your Name">
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ $user->email }}" placeholder="Enter Your Email">
                                </div>
                                <div class="mb-3">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        value="{{ $user->phone }}" placeholder="Enter Your Phone">
                                </div>
                                <div class="d-flex">
                                    <button type="submit" class="btn btn-dark">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card mt-5">
                        <div class="card-header bg-dark text-white">
                            <h2 class="h5 mb-0 pt-2 pb-2">Address</h2>
                        </div>
                        <form action="" method="post" name="addressForm" id="addressForm">
                            @csrf
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" id="first_name" class="form-control"
                                            value="{{ $address->first_name ?? '' }}" placeholder="Enter Your First Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" id="last_name" class="form-control"
                                            value="{{ $address->last_name ?? '' }}" placeholder="Enter Your Last Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="mobile">Mobile</label>
                                        <input type="text" name="mobile" id="mobile" class="form-control"
                                            value="{{ $address->mobile ?? '' }}" placeholder="Enter Your Mobile">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="address">Address</label>
                                        <textarea name="address" id="address" class="form-control" rows="3"
                                            placeholder="Enter Your Address">{{ $address->address ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="city">City</label>
                                        <input type="text" name="city" id="city" class="form-control"
                                            value="{{ $address->city ?? '' }}" placeholder="Enter Your City">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="state">State</label>
                                        <input type="text" name="state" id="state" class="form-control"
                                            value="{{ $address->state ?? '' }}" placeholder="Enter Your State">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="zip">Zip-Code</label>
                                        <input type="number" name="zip" id="zip" class="form-control"
                                            value="{{ $address->zip ?? '' }}" placeholder="Enter Your Zip Code">
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button type="submit" class="btn btn-dark">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection