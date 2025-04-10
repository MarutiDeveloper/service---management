@extends('admin.layouts.app')

@section('content')
<style>
    /* Style for form group */
    .form-group {
        position: relative;
        margin: 20px 0;
    }


    /* Style for floating labels */
    .form-group label {
        position: absolute;
        left: 12px;
        top: 50%;
        transform: translateY(-50%);
        background: #fff;
        padding: 0 5px;
        font-size: 14px;
        color: #5f6368;
        transition: all 0.2s ease;
        pointer-events: none;
    }



    /* Error handling for input fields */
    .is-invalid {
        border-color: red;
    }

    .invalid-feedback {
        color: red;
        font-size: 12px;
    }

    /* Forgot password link */
    .forgot-link {
        color: #1a73e8;
        text-decoration: none;
    }

    .forgot-link:hover {
        text-decoration: underline;
    }

    /* Submit button */
    .btn-dark {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px;
        font-size: 16px;
        width: 100%;
        cursor: pointer;
    }

    .btn-dark:hover {
        background-color: #555;
    }

    /* Checkbox styling */
    .show-password {
        margin-top: 10px;
        display: flex;
        align-items: center;
    }

    .show-password label {
        margin-left: 5px;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit User</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="container-fluid">
        @include("admin.message")
        <form action="" method="post" id="userForm" name="userForm">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 text-muted">
                            <div class="mb-3">
                                <label for="name">Enter Your Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                    value="{{ $user->name }}">
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-6 text-muted">
                            <div class="mb-3">
                                <label for="email">Enter Your Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                    value="{{ $user->email }}" autocomplete="email">
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-6 text-muted"
                            style="font-family: 'Times New Roman', Times, serif ;font-weight: bolder ; ">
                            <div class="mb-3">
                                <label for="password">Enter Your Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Enter Your Password Min 10 to 15 Words" spellcheck="true">
                                    
                                <p></p>
                                <div class="form-group show-password">
                                    <input type="checkbox" id="show-password-checkbox" onclick="togglePassword()">
                                    <label for="show-password-checkbox">Show Password</label>
                                </div>
                                <ul>
                                    <li>
                                    <strong style="font-family:'Times New Roman', Times, serif ;">To change Password you have to enter a value, otherwise leave blank.</strong>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="col-md-6 text-muted">
                            <div class="mb-3">
                                <label for="phone">Enter Your Phone</label>
                                <input type="number" name="phone" id="phone" class="form-control" placeholder="phone"
                                    value="{{ $user->phone }}">
                                <p></p>
                            </div>
                        </div>

                        <div class="col-md-6 text-muted">
                            <div class="mb-3">
                                <label for="status">Role</label>
                                <select name="role" id="role" class="form-control">
                                    <option {{ ($user->role == 'Admin') ? 'selected' : '' }} value="Admin"
                                        style="font-family: 'Times New Roman', Times, serif;">Admin
                                    </option>
                                    <option {{ ($user->role == 'customer') ? 'selected' : '' }} value="customer"
                                        style="font-family: 'Times New Roman', Times, serif;">Customer
                                    </option>
                                </select>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="pb-5 pt-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('users.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
            </div>
        </form>
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
@endsection

@section('customJs')
<script>
       // Function to toggle password visibility
       function togglePassword() {
        var passwordField = document.getElementById("password");
        var checkbox = document.getElementById("show-password-checkbox");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }

    // const nameInput = document.getElementById('name');
    // const emailInput = document.getElementById('email');

    // nameInput.addEventListener('input', function() {
    //     let nameValue = nameInput.value.trim().toLowerCase().replace(/\s+/g, ''); // Remove spaces and lowercase

    //     // Check if name input is not empty and email field doesn't contain '@'
    //     if (nameValue && !emailInput.value.includes('@')) {
    //         // Automatically populate email field with the name followed by "@"
    //         emailInput.value = nameValue + '@';
    //     }
    // });

    // emailInput.addEventListener('input', function () {
    //     let currentValue = emailInput.value;

    //     // Ensure '@' is appended if not already present when typing directly in the email field
    //     if (!currentValue.includes('@') && currentValue.length > 0) {
    //         emailInput.value = currentValue + '@';
    //     }
    // });


    $("#userForm").submit(function (event) {
        event.preventDefault();
        var element = $(this);
        $("button[type=submit]").prop('disabled', true);
        $.ajax({
            url: '{{ route("users.update", $user->id) }}',
            type: 'put',
            data: element.serializeArray(),
            dataType: 'json',
            success: function (response) {
                $("button[type=submit]").prop('disabled', false);
                if (response["status"] == true) {

                    window.location.href = "{{ route('users.index') }}";

                    $("#name").removeClass('is-invalid').siblings('p')
                        .removeClass('invalid-feedback').html("");

                    $("#email").removeClass('is-invalid').siblings('p')
                        .removeClass('invalid-feedback').html("");

                    $("#password").removeClass('is-invalid').siblings('p')
                        .removeClass('invalid-feedback').html("");

                    $("#phone").removeClass('is-invalid').siblings('p')
                        .removeClass('invalid-feedback').html("");
                } else {
                    var errors = response['errors'];
                    if (errors['name']) {
                        $("#name").addClass('is-invalid').siblings('p')
                            .addClass('invalid-feedback').html(errors['name']);
                    } else {
                        $("#name").removeClass('is-invalid').siblings('p')
                            .removeClass('invalid-feedback').html("");
                    }

                    if (errors['email']) {
                        $("#email").addClass('is-invalid').siblings('p')
                            .addClass('invalid-feedback').html(errors['email']);
                    } else {
                        $("#email").removeClass('is-invalid').siblings('p')
                            .removeClass('invalid-feedback').html("");
                    }
                    if (errors['password']) {
                        $("#password").addClass('is-invalid').siblings('p')
                            .addClass('invalid-feedback').html(errors['password']);
                    } else {
                        $("#password").removeClass('is-invalid').siblings('p')
                            .removeClass('invalid-feedback').html("");
                    }
                    if (errors['phone']) {
                        $("#phone").addClass('is-invalid').siblings('p')
                            .addClass('invalid-feedback').html(errors['phone']);
                    } else {
                        $("#phone").removeClass('is-invalid').siblings('p')
                            .removeClass('invalid-feedback').html("");
                    }

                    if (response['notFound'] == true) {
                        window.location.href = "{{ route('users.index') }}";
                    }


                    var errors = response['errors'];
                    if (errors['name']) {
                        $("#name").addClass('is-invalid').siblings('p')
                            .addClass('invalid-feedback').html(errors['name']);
                    } else {
                        $("#name").removeClass('is-invalid').siblings('p')
                            .removeClass('invalid-feedback').html("");
                    }

                    if (errors['slug']) {
                        $("#slug").addClass('is-invalid').siblings('p')
                            .addClass('invalid-feedback').html(errors['slug']);
                    } else {
                        $("#slug").removeClass('is-invalid').siblings('p')
                            .removeClass('invalid-feedback').html("");
                    }
                }

            }, error: function (jqXHR, exception) {
                console.log("Something went wrong");
            }
        });
    });




</script>

@endsection