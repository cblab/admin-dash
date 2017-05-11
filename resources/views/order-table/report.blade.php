@extends('layouts.master-auth')

@section('title')

    <title>List orders by exchange</title>

@endsection


@section('content')

    <!-- content-wrapper -->

    <div class="content-wrapper">

        <!-- container -->

        <section class="container">

            <!-- content-header has breadcrumbs -->

            <section class="content-header">

                <breadcrumbs :url="{{ json_encode('/report') }}"
                             :name="{{ json_encode('Orders') }}"
                             :plural="{{ json_encode('Orders') }}"></breadcrumbs>

            </section>

            <!-- end content header -->

                <!-- content holds table-->
                <section class="content">
                    @include('order-table.table-show')
                </section>
                <!-- end content table -->

        </section>

        <!-- end container section -->

    </div>

    <!-- end Content Wrapper -->

@endsection