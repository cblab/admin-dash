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
                    <li class="active">Company Stock Overview</li>
                </ol>

            </section>
            <!-- end content-header section -->
            <!-- content -->

            <section class="content">
                <h2 class="page-header">@if( sizeof($common_stocks_group) > 0) Company Stock Overview @else There are no stocks in your portfolio yes.@endif</h2>

                <div class="row">
                @foreach ($common_stocks_group as $common_stock_group => $stocks)
                        <div class="col-md-6">
                            <div class="box box-widget widget-user-2">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-yellow">
                                    <h3 class="widget-user-username">{{$common_stock_group}} (Symbol: {{$stocks[0]->symbol}} )</h3>
                                    <h5 class="widget-user-desc">Common Stock</h5>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach($stocks as $stock)
                                        <li><a href="#"><strong>{{$stock->ex_name}}</strong> - wkn: {{$stock->wkn}} - isin: {{$stock->isin}}<span class="pull-right badge bg-green">{{$stock->price}}</span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                @endforeach
                </div>

                <div class="row">
                    @foreach ($prefered_stocks_group as $prefered_stock_group => $stocks)
                        <div class="col-md-6">
                            <div class="box box-widget widget-user-2">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-aqua">
                                    <h3 class="widget-user-username">{{$prefered_stock_group}} (Symbol: {{$stocks[0]->symbol}} )</h3>
                                    <h5 class="widget-user-desc">Prefered Stock</h5>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        @foreach($stocks as $stock)
                                            <li><a href="#"><strong>{{$stock->ex_name}}</strong> - wkn: {{$stock->wkn}} - isin: {{$stock->isin}}<span class="pull-right badge bg-green">{{$stock->price}}</span></a></li>
                                        @endforeach
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


