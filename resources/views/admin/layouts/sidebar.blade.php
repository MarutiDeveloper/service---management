<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('./assets/admin-assets/img/Admin-Panel logo.jpg') }}" alt="Service Management Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"
            style="font-family: Georgia, 'Times New Roman', Times, serif;">Admin-Panel</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Create Company
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.why.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Why</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Blogs</p>
                            </a>
                        </li> -->

                        <li class="nav-item">
                            <a href="{{route('admin.team.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Team</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('admin.services.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Services</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.clients.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Clients </p>
                            </a>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Testimonials</p>
                            </a>
                        </li> -->

                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Hero Section</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="{{ route('admin.appointments.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Booking Appoinment</p>
                            </a>
                        </li>
                       

                        <li class="nav-item">
                            <a href="{{ route('admin.about.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage About</p>
                            </a>
                        </li>



                    </ul>
                </li>

                <!-- Company Profile -->
                <li class="nav-item">
                    <a href="{{route('admin.company-profile.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>Company Profile</p>
                    </a>
                </li>

                <!-- Add Common Layouts -->
                <!-- <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-layer-group"></i>
                <p>Add Common Layouts</p>
            </a>
        </li> -->
                <!-- Multiple Branch -->
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-code-branch"></i>
                        <p>Multiple Branch</p>
                    </a>
                </li> -->


                <!-- Messages -->
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Messages</p>
                    </a>
                </li> -->

                <!-- Users -->
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Employee</p>
                    </a>
                </li> -->
                <!-- Pages -->
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Pages</p>
                    </a>
                </li> -->
                
                <!-- Cache Clear -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-trash-alt"></i>
                        <p>Cache Clear</p>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>