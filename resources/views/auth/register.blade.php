@extends('layouts.master-guest')

@section('title')

    <title>Register</title>

@endsection

@section('content')

    <!-- content-wrapper -->

    <div class="content-wrapper">

        <!-- container -->

        <div class="container">

            <!-- content-header has breadcrumbs -->

            <section class="content-header">


                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/register">Register</a></li>
                    <li class="active">Register</li>

                </ol>

            </section>

            <!-- end content-header section -->

            <!-- content has form -->

            <section class="content">

                <div class="register-box">

                    <div class="register-logo">

                        <a href="/"><b>Investor Dash</b></a>

                    </div>

                    <div class="register-box-body">

                        <p class="login-box-msg">Register a new membership</p>

                        <div>

                            <!-- register form -->

                            @include('auth.register-form')

                            <!-- end register form -->

                        </div>

                        <!-- social sign in links -->

                        @include('auth.social-sign-in-links')

                        <!-- social sign in links -->

                        <a href="/login"
                           class="text-center">
                            I already have a membership
                        </a>

                    </div>

                    <!-- end form-box -->
                </div>

                <!-- end register-box -->

            </section>

            <!-- end content section -->

        </div>

        <!-- end container -->

    </div>

    <!-- end content-wrapper -->

@endsection

