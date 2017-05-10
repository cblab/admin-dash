@extends('layouts.master-auth')

@section('content')

    <!-- content-wrapper -->

    <div class="content-wrapper">

        <!-- container -->

        <div class="container">

            <!-- content-header has breadcrumbs -->

            <section class="content-header">
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Investor Dashboard</a></li>
                    <li class="active">Highest Market Prices</li>
                </ol>

            </section>
            <!-- end content-header section -->
            <!-- content -->
            <section class="content">
                <h2 class="page-header">@if( sizeof($highest_trade_values_per_exchange) > 0) Highest Market Prices @else There are no market prices yet.@endif</h2>
                <div class="row">
                    @foreach ($highest_trade_values_per_exchange as $highest_trade_value)
                        <div class="col-md-6">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-yellow">
                                    <h3 class="widget-user-username">{{$highest_trade_value->name}} (Symbol: {{$highest_trade_value->symbol}})</h3>
                                    <h5 class="widget-user-desc">@if($highest_trade_value->common_stock == '1') Common Stock @else Preferred Stock @endif</h5>
                                    <h5 class="widget-user-desc"><strong>€ {{$highest_trade_value->price}}</strong></h5>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        <li><a href="#">{{$highest_trade_value->ex_name}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <!-- end content section -->
        </div>
        <!-- end container -->
    </div>
    <!-- end content-wrapper -->
@endsection


