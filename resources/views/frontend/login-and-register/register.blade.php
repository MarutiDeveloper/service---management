<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Register Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('login/assets/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('login/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('login/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('login/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('login/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('login/assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('login/assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('login/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('login/assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('login/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('login/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('login/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('login/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('login/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('login/assets/css/style.css') }}">
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->


    <!-- Register -->
    <!-- Register Customer -->
    <form action="{{ route('account.processRegister') }}" method="post" name="registrationForm" id="registrationForm">
        @csrf
        <main class="login-body" data-vide-bg="{{ asset('login/assets/img/login-bg.mp4') }}">
            <div class="login-form">
                <!-- Logo -->
                <div class="logo-login">
                    <a href="{{ url('/') }}"><img src="{{ asset('login/assets/img/logo/loder.png') }}" alt="Logo"></a>
                </div>
                <h2>Register Here</h2>

                <!-- Full Name -->
                <div class="form-input">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Full Name" required>
                    <span class="text-danger" id="nameError"></span>
                </div>

                <!-- Email Address -->
                <div class="form-input">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Email Address" required>
                    <span class="text-danger" id="emailError"></span>
                </div>

                <!-- Phone Number -->
                <div class="form-input">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" placeholder="Enter Phone Number" required>
                    <span class="text-danger" id="phoneError"></span>
                </div>

                <!-- Password -->
                <div class="form-input">
                    <label for="password">Password</label>
                    <div style="position: relative; display: flex; align-items: center;">
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <i class="fas fa-eye" id="togglePassword"
                            style="position: absolute; right: 10px; cursor: pointer; background-color: white; padding: 5px; border-radius: 50%;"></i>
                    </div>
                    <span class="text-danger" id="passwordError"></span>
                </div>

                <!-- Confirm Password -->
                <div class="form-input">
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" id="confirmpassword" name="password_confirmation"
                        placeholder="Confirm Password" required>
                    <span class="text-danger" id="confirmPasswordError"></span>
                </div>

                <!-- Submit Button -->
                <button type="submit" id="submitBtn" class="btn btn-dark btn-block btn-lg">Register</button>

                <!-- Login Link -->
                <a href="{{ route('account.login') }}" class="registration">Already have an account? Login</a>
            </div>
        </main>
    </form>


    <script src="{{ asset('login/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('login/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src=" {{ asset('login/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('login/assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('login/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Video bg -->
    <script src="{{ asset('login/assets/js/jquery.vide.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('login/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('login/assets/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src=" {{ asset('login/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('login/assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('login/assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src=" {{ asset('login/assets/js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src=" {{ asset('login/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('login/assets/js/jquery.sticky.js') }}"></script>
    <!-- Progress -->
    <script src="{{ asset('login/assets/js/jquery.barfiller.js') }}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('login/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('login/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('login/assets/js/jquery.countdown.min.js') }}"></script>
    <script src=".{{ asset('login/assets/js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('login/assets/js/contact.js') }}"></script>
    <script src="{{ asset('login/assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('login/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('login/assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('login/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('login/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('login/assets/js/main.js') }}"></script>

    <!-- JavaScript to toggle password visibility -->
    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            let passwordField = document.getElementById('password');
            let icon = this;

            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        });
    </script>
    <!-- JavaScript for password toggle -->
    <script>


        // Handle AJAX form submission
        document.getElementById('registrationForm').addEventListener('submit', function (event) {
            event.preventDefault();

            let formData = new FormData(this);
            let submitBtn = document.getElementById('submitBtn');
            submitBtn.disabled = true;

            fetch('{{ route("account.processRegister") }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
                .then(response => response.json())
                .then(data => {
                    submitBtn.disabled = false;

                    if (!data.status) {
                        document.getElementById('nameError').innerText = data.errors.name ?? '';
                        document.getElementById('emailError').innerText = data.errors.email ?? '';
                        document.getElementById('phoneError').innerText = data.errors.phone ?? '';
                        document.getElementById('passwordError').innerText = data.errors.password ?? '';
                        document.getElementById('confirmPasswordError').innerText = data.errors.password_confirmation ?? '';
                    } else {
                        window.location.href = "{{ route('account.login') }}";
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    submitBtn.disabled = false;
                });
        });
    </script>

</body>

</html>