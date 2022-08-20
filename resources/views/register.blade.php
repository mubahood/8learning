@extends('layouts.base-layout')

@section('base-content')
    <?php
    $header_data['header_style'] = 2;
    ?>

    <body>
        <main class="page-wrapper">

            @include('layouts.header', $header_data)

            <!-- Page content -->
            <section class="position-relative h-100 pt-5 pb-4">

                <!-- Sign up form -->
                <div class="container d-flex flex-wrap justify-content-center justify-content-xl-start h-100 pt-5">
                    <div class="w-100 align-self-end pt-1 pt-md-4 pb-4" style="max-width: 526px;">
                        <h1 class="text-center text-xl-start">Create Account</h1>
                        <p class="text-center text-xl-start pb-3 mb-3">Already have an account? <a
                                href="account-signin.html">Sign in here.</a></p>
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="position-relative mb-4">
                                        <label for="name" class="form-label fs-base">Full name</label>
                                        <input type="text" id="name" class="form-control form-control-lg" required>
                                        <div class="invalid-feedback position-absolute start-0 top-100">Please enter your
                                            name!</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="position-relative mb-4">
                                        <label for="email" class="form-label fs-base">Email</label>
                                        <input type="email" id="email" class="form-control form-control-lg" required>
                                        <div class="invalid-feedback position-absolute start-0 top-100">Please enter a
                                            valid email address!</div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="password" class="form-label fs-base">Password</label>
                                    <div class="password-toggle">
                                        <input type="password" id="password" class="form-control form-control-lg" required>
                                        <label class="password-toggle-btn" aria-label="Show/hide password">
                                            <input class="password-toggle-check" type="checkbox">
                                            <span class="password-toggle-indicator"></span>
                                        </label>
                                        <div class="invalid-feedback position-absolute start-0 top-100">Please enter a
                                            password!</div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="password-confirm" class="form-label fs-base">Confirm password</label>
                                    <div class="password-toggle">
                                        <input type="password" id="password-confirm" class="form-control form-control-lg"
                                            required>
                                        <label class="password-toggle-btn" aria-label="Show/hide password">
                                            <input class="password-toggle-check" type="checkbox">
                                            <span class="password-toggle-indicator"></span>
                                        </label>
                                        <div class="invalid-feedback position-absolute start-0 top-100">Please enter a
                                            password!</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <input type="checkbox" id="terms" class="form-check-input">
                                    <label for="terms" class="form-check-label fs-base">I agree to <a
                                            href="#">Terms &amp; Conditions</a></label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary shadow-primary btn-lg w-100">Sign up</button>
                        </form>

                    </div>
                    <div class="w-100 align-self-end">
                        <p class="nav d-block fs-xs text-center text-xl-start pb-2 mb-0">
                            &copy; All rights reserved. Made by
                            <a class="nav-link d-inline-block p-0" href="../external.html?link=https://createx.studio/"
                                target="_blank" rel="noopener">Createx Studio</a>
                        </p>
                    </div>
                </div>

                <!-- Background -->
                <div class="position-absolute top-0 end-0 w-50 h-100 bg-position-center bg-repeat-0 bg-size-cover d-none d-xl-block"
                    style="background-image: url(assets/img/account/signin-bg.jpg);"></div>
            </section>
        </main>
    @endsection
