@extends('layouts.master-guest')

@section('title')

    <title>Login</title>

@endsection

@section('content')

    <!-- content-wrapper -->

    <div class="content-wrapper">

        <!-- container -->

        <div class="container">

            <!-- content-header with breadcrumbs -->

            <section class="content-header">

                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/login">Login</a></li>
                    <li class="active">Login</li>

                </ol>

            </section>

            <!-- end content-header section -->

            <!-- content -->

            <section class="content">

                <!-- login box -->

                <div class="login-box">

                    <div class="login-logo">

                        <a href="/"><b>Investor Dash</b></a>

                    </div>

                    <!-- login-box-body -->

                    <div class="login-box-body">

                        <p class="login-box-msg">Sign in to start your session</p>

                        <!-- login form -->

                        @include('auth.login-form')

                        <!-- end login form -->

                        <!-- social sign in links -->

                        @include('auth.social-sign-in-links')

                        <!-- end social sign in links -->

                        <!-- password reset and register links -->

                        <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
                        <a href="/register" class="text-center">Register a new membership</a>

                    </div>

                    <!-- end login-box-body -->

                </div>

                <!-- end login-box -->

            </section>

            <!-- end section content-->

        </div>

        <!-- end container -->

    </div>

    <!-- end content-wrapper -->

@endsection