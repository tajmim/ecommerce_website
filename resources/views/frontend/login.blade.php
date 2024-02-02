@extends('frontend.layouts.master')

@section('content')
    <section class="gry-bg py-6">
        <div class="profile">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 mx-auto">
                        <div class="card shadow-none rounded-0 border">
                            <div class="row">
                                <!-- Left Side -->
                                <div class="col-lg-6 col-md-7 p-4 p-lg-5">
                                    <!-- Titles -->
                                    <div class="text-center">
                                        <h1 class="fs-20 fs-md-24 fw-700 text-primary">Welcome Back !</h1>
                                        <h5 class="fs-14 fw-400 text-dark">Login to your account.</h5>
                                    </div>
                                    <!-- Login form -->
                                    <div class="pt-3 pt-lg-4">
                                        <div class="">
                                            <form class="form-default" role="form" action="{{ route('users.login.store') }}" method="POST">
                                                @csrf
                                                
                                                <!-- Email or Phone -->
                                                <div class="form-group email-form-group mb-1">
                                                    <label for="email" class="fs-12 fw-700 text-soft-dark">Email</label>
                                                    <input type="email"
                                                        class="form-control rounded-0"
                                                        value="" placeholder="Email" name="email"
                                                        autocomplete="off">
                                                   
                                                </div>

                                                <!-- password -->
                                                <div class="form-group">
                                                    <label for="password" class="fs-12 fw-700 text-soft-dark">Password</label>
                                                    <input type="password" class="form-control rounded-0 "
                                                        placeholder="Password" name="password" id="password">
                                                </div>

                                                <div class="row mb-2">
                                                    <!-- Remember Me -->
                                                    <div class="col-6">
                                                        <label class="aiz-checkbox">
                                                            <input type="checkbox" name="remember">
                                                            <span
                                                                class="has-transition fs-12 fw-400 text-gray-dark hov-text-primary">Remember
                                                                Me</span>
                                                            <span class="aiz-square-check"></span>
                                                        </label>
                                                    </div>
                                                    <!-- Forgot password -->
                                                    <div class="col-6 text-right">
                                                        <a href="/password/reset"
                                                            class="text-reset fs-12 fw-400 text-gray-dark hov-text-primary"><u>Forgot
                                                                password?</u></a>
                                                    </div>
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="mb-4 mt-4">
                                                   <button type="submit" class="btn btn-primary btn-block fw-700 fs-14 rounded-4">Login</button> 
                                                    
                                                </div>
                                            </form>

                                            <!-- DEMO MODE -->
                                            <!-- <div class="mb-4">
                                                <table class="table table-bordered mb-0">
                                                    <tbody>

                                                        <tr>
                                                            <td>Customer Account</td>
                                                            <td>
                                                                <button class="btn btn-info btn-sm" onclick="autoFillCustomer()">Copy credentials</button>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div> -->

                                            <!-- Social Login -->
                                            <div class="text-center mb-3">
                                                <span class="bg-white fs-12 text-gray">Or Login With</span>
                                            </div>
                                            <ul class="list-inline social colored text-center mb-4">
                                                <li class="list-inline-item">
                                                    <a href="/social-login/redirect/facebook" class="facebook">
                                                        <i class="lab la-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="/social-login/redirect/google" class="google">
                                                        <i class="lab la-google"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="/social-login/redirect/twitter" class="twitter">
                                                        <i class="lab la-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="/social-login/redirect/apple" class="apple">
                                                        <i class="lab la-apple"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Register Now -->
                                        <div class="text-center">
                                            <p class="fs-12 text-gray mb-0">Dont have an account?</p>
                                            <a href="/users/registration"
                                                class="fs-14 fw-700 animate-underline-primary">Register Now</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Side Image -->
                                <div class="col-lg-6 col-md-5 py-3 py-md-0">
                                    <img src="{{ asset('frontend/uploads/all/ADHpcKTbpRSmyTe6Ic8gVqZf2lGyxMZvlves0K1U.webp') }}"
                                        alt="" class="img-fit h-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
