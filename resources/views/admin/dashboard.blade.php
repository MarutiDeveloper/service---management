@extends('admin.layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-12 text-center">
                    <h1 class="font-weight-bold text-primary">Admin Dashboard</h1>
                    <h5>
                        <p class="text-secondary mt-2" id="currentDateTime">
                            {{ now()->format('l, F j, Y - h:i A') }}
                        </p>
                    </h5>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">

            <!-- Company Growth Graph (Top Section) -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-gradient-primary text-white">
                            <h3 class="card-title font-weight-bold"><i class="fas fa-chart-line"></i> IT - Base Company Growth
                                Overview</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="companyGrowthChart" style="height:300px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Cards (Users, Companies, Branches) - Displayed in a Horizontal Row -->
            <div class="row mt-4">

                <div class="col-md-4">
                    <div class="card border-0 shadow-lg rounded-lg text-center p-3 bg-light">
                        <div class="card-body">
                            <i class="fas fa-users fa-3x text-primary"></i>
                            <h3 class="mt-2">#</h3>
                            <p class="text-muted">Total Employees</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">View
                                Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-lg rounded-lg text-center p-3 bg-light">
                        <div class="card-body">
                            <i class="fas fa-building fa-3x text-success"></i>
                            <h3 class="mt-2">#</h3>
                            <p class="text-muted">Total Companies</p>
                            <a href="#" class="btn btn-outline-success btn-sm">View
                                Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-lg rounded-lg text-center p-3 bg-light">
                        <div class="card-body">
                            <i class="fas fa-code-branch fa-3x text-warning"></i>
                            <h3 class="mt-2">#</h3>
                            <p class="text-muted">Total Branches</p>
                            <a href="#" class="btn btn-outline-warning btn-sm">View
                                Details</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection

@section('customJs')
  
@endsection