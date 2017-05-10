@extends('layouts.master-auth')

@section('title')

    <title>Create a Company Profile</title>

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
                    <li class="active">Create Company</li>

                </ol>

            </section>

            <!-- end content-header section -->

            <!-- content has form -->

            <section class="content">

                <div class="col-xs-4">

                    <h2 class="min-width-200">Create Company Profile</h2>

                    <!-- create-form -->

                @include('company.create-form')

                <!-- end create-form -->

                </div>

            </section>

            <!-- end content section -->

        </div>

        <!-- end container -->

    </div>

    <!-- end content-wrapper -->

@endsection