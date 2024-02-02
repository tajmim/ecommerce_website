@extends('frontend.layouts.master')

@section('content')
    <section class="gry-bg py-6">
        <div class="profile">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="card shadow-none rounded-0 border">
                            <div class="row">
                                <!-- Left Side -->
                                <div class="col-lg-6 col-md-7 p-4 p-lg-5">
                                    <!-- Titles -->
                                    <div class="text-center">
                                        <h1 class="fs-20 fs-md-24 fw-700 text-primary">Create an account.</h1>
                                    </div>
                                    <!-- Register form -->
                                    <div class="pt-3 pt-lg-4">
                                        <div class="">
                                            @if (session('message'))
                                                <div class="alert alert-success">{{ session('message') }}</div>
                                            @endif

                                            <form id="reg-form" class="form-default" role="form"
                                                action="{{ route('users.registration.store') }}" method="POST">
                                                @csrf

                                                <!-- Full Name -->
                                                <div class="form-group">
                                                    <label for="name" class="fs-12 fw-700 text-soft-dark">Full
                                                        Name</label>
                                                    <input type="text"
                                                        class="form-control rounded-0 @error('name') is-invalid @enderror"
                                                        value="" placeholder="Full Name" name="name">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Email -->
                                                <div class="form-group email-form-group mb-1">
                                                    <label for="email" class="fs-12 fw-700 text-soft-dark">Email</label>
                                                    <input type="email"
                                                        class="form-control rounded-0 @error('email') is-invalid @enderror"
                                                        value="" placeholder="Email" name="email"
                                                        autocomplete="off">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- District -->
                                                <div class="form-group email-form-group mb-1">
                                                    <label for="district"
                                                        class="fs-12 fw-700 text-soft-dark">District</label>
                                                    <select
                                                        class="form-control rounded-0 @error('district') is-invalid @enderror"
                                                        name="district">
                                                        <option value="">Select District</option>
                                                        @foreach ($districts as $district)
                                                            <option value="{{ $district->id }}">{{ $district->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('district')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Thana -->
                                                <div class="form-group email-form-group mb-1">
                                                    <label for="thana" class="fs-12 fw-700 text-soft-dark">Thana</label>
                                                    <select
                                                        class="form-control rounded-0 @error('thana') is-invalid @enderror"
                                                        name="thana">
                                                        <option value="">Select Thana</option>
                                                    </select>
                                                    @error('thana')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Reference Code -->
                                                <div class="form-group">
                                                    <label for="ref_code" class="fs-12 fw-700 text-soft-dark">Reference
                                                        Code</label>
                                                    <input type="text"
                                                        class="form-control rounded-0 @error('ref_code') is-invalid @enderror"
                                                        value="" placeholder="Reference Code" name="ref_code">
                                                    @error('ref_code')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Password -->
                                                <div class="form-group">
                                                    <label for="password"
                                                        class="fs-12 fw-700 text-soft-dark">Password</label>
                                                    <input type="password"
                                                        class="form-control rounded-0 @error('password') is-invalid @enderror"
                                                        placeholder="Password" name="password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="text-right mt-1">
                                                        <span class="fs-12 fw-400 text-gray-dark">Password must contain at
                                                            least 6 digits</span>
                                                    </div>
                                                </div>

                                                <!-- Password Confirmation -->
                                                <div class="form-group">
                                                    <label for="password_confirmation"
                                                        class="fs-12 fw-700 text-soft-dark">Confirm Password</label>
                                                    <input type="password"
                                                        class="form-control rounded-0 @error('password_confirmation') is-invalid @enderror"
                                                        placeholder="Confirm Password" name="password_confirmation">
                                                    @error('password_confirmation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Terms and Conditions -->
                                                <div class="mb-3">
                                                    <label class="aiz-checkbox">
                                                        <input type="checkbox" name="checkbox_example_1" required="">
                                                        <span class="">By signing up you agree to our <a
                                                                href="terms" class="fw-500">terms and
                                                                conditions</a></span>
                                                        <span class="aiz-square-check"></span>
                                                    </label>
                                                    @error('checkbox_example_1')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="mb-4 mt-4">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-block fw-600 rounded-4">Create
                                                        Account</button>
                                                </div>
                                            </form>


                                            <!-- Social Login -->
                                            <div class="text-center mb-3">
                                                <span class="bg-white fs-12 text-gray">Or Join With</span>
                                            </div>
                                            <ul class="list-inline social colored text-center mb-4">
                                                <li class="list-inline-item">
                                                    <a href="social-login/redirect/facebook" class="facebook">
                                                        <i class="lab la-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="social-login/redirect/google" class="google">
                                                        <i class="lab la-google"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="social-login/redirect/twitter" class="twitter">
                                                        <i class="lab la-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="social-login/redirect/apple" class="apple">
                                                        <i class="lab la-apple"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Log In -->
                                        <div class="text-center">
                                            <p class="fs-12 text-gray mb-0">Already have an account?</p>
                                            <a href="users/login" class="fs-14 fw-700 animate-underline-primary">Log
                                                In</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Side Image -->
                                <div class="col-lg-6 col-md-5 py-3 py-md-0">
                                    <img src="{{ asset('frontend/uploads/all/WAd0LqlAMim6s9LWLc7kwOkSZK2HcnrjPCJKf1FM.webp') }}"
                                        alt="" class="img-fit h-100">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>







    <script>
        $(document).ready(function() {

            console.log('hello');
            // Listen for change event on the District dropdown
            $('select[name="district"]').on('change', function() {
                var id = $(this).val();
                console.log('world');
                // Make an AJAX request to get the corresponding Thanas
                $.ajax({
                    url: '/get-thana/' + id,
                    type: 'GET',
                    success: function(data) {
                        // Clear existing options in the Thana dropdown
                        $('select[name="thana"]').empty();

                        // Add new options based on the AJAX response
                        $('select[name="thana"]').append(
                            '<option value="">Select Thana</option>');
                        $.each(data, function(key, value) {
                            $('select[name="thana"]').append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>




    <script>
        jQuery(document).ready(function($) {
            // Your jQuery code here
            console.log('Loading');
            $("#reg-form").validate({
                onkeyup: function(element) {
                    $(element).valid();
                },
                rules: {
                    name: {
                        required: true,
                        minlength: 2 // Adjust the minimum length as needed
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    district: {
                        required: true
                    },
                    thana: {
                        required: true
                    },
                    ref_code: {
                        required: true
                    },
                    password: {
                        required: true,
                        minlength: 6 // Adjust the minimum length as needed
                    },
                    password_confirmation: {
                        required: true,
                        equalTo: "#password" // Match with the password field
                    },
                    checkbox_example_1: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: "Please enter your full name",
                        minlength: "Your name must consist of at least 2 characters"
                    },
                    email: {
                        required: "Please enter your email address",
                        email: "Please enter a valid email address"
                    },
                    district: {
                        required: "Please select your district"
                    },
                    thana: {
                        required: "Please select your thana"
                    },
                    ref_code: {
                        required: "Please enter the reference code"
                    },
                    password: {
                        required: "Please enter a password",
                        minlength: "Your password must be at least 6 characters long"
                    },
                    password_confirmation: {
                        required: "Please confirm your password",
                        equalTo: "Passwords do not match"
                    },
                    checkbox_example_1: {
                        required: "You must agree to the terms and conditions"
                    }
                },
                errorElement: "span",
                errorPlacement: function(error, element) {
                    error.addClass("invalid-feedback");
                    element.closest(".form-group").append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass("is-invalid").addClass("is-valid");
                }
            });
        });
    </script>
@endsection
