@extends('layouts.master-guest')

@section('content')

    <!-- content wrapper -->

    <div class="content-wrapper">

        <!-- container -->

        <div class="container">

            <!-- content-header has breadcrumbs -->

            <section class="content-header">

                <div class="grid-results">

                    <div class="fb-like"
                         data-share="true"
                         data-width="450"
                         data-show-faces="true">
                    </div>

                </div>

                <ol class="breadcrumb">
                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Landing</a></li>
                    <li class="active">Investor Landing Page</li>
                </ol>

            </section>

            <!-- end content-header -->

            <!-- content -->

            <section class="content">

                @include('admin.components.admin-v1.map')

                <!-- box -->
                <!-- end box -->

            </section>

            <!-- end content section -->

        </div>

        <!--  end container -->

    </div>
    <!-- end content-wrapper -->


@endsection

@section('scripts')

    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>

    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    
    <!-- map script -->

    <script>

        /* jVector Maps
         * ------------
         * Create a world map with markers
         */
        $('#world-map-markers').vectorMap({
            map: 'world_mill_en',
            normalizeFunction: 'polynomial',
            hoverOpacity: 0.7,
            hoverColor: false,
            backgroundColor: 'transparent',
            regionStyle: {
                initial: {
                    fill: 'rgba(210, 214, 222, 1)',
                    "fill-opacity": 1,
                    stroke: 'none',
                    "stroke-width": 0,
                    "stroke-opacity": 1
                },
                hover: {
                    "fill-opacity": 0.7,
                    cursor: 'pointer'
                },
                selected: {
                    fill: 'yellow'
                },
                selectedHover: {}
            },
            markerStyle: {
                initial: {
                    fill: '#00a65a',
                    stroke: '#111'
                }
            },
            markers: [
                {latLng: [40.43, -74.00], name: 'New York Stock Exchange'},
                {latLng: [51.50, -0.1278], name: 'London Stock Exchange Group'},
                {latLng: [35.6895, 139.6917], name: 'Tokio - Japan Exchange Group'},
                {latLng: [31.2304, 121.4737], name: 'Shanghai Stock Exchange'},
                {latLng: [22.3964, 114.1095], name: 'Hong Kong Stock Exchange'},
                {latLng: [50.8503, 4.3517], name: 'Brussels - Euronext'},
                {latLng: [22.5431, 114.0579], name: 'Shenzhen Stock Exchange'},
                {latLng: [43.6532, -79.3832], name: 'Toronto - TMX Group'},
                {latLng: [50.1109, 8.6821], name: 'Frankfurt - Deutsche Börse'},
                {latLng: [19.0760, 72.8777], name: 'Bombay Stock Exchange'},
                {latLng: [19.0760, 72.8777], name: 'Mumbai - National Stock Exchange of India'},
                {latLng: [47.3769, 8.5417], name: 'Zurich - SIX Swiss Exchange'},
                {latLng: [-33.8688, 151.2093], name: 'Sydney - Australian Securities Exchange'},
                {latLng: [37.5665, 126.9780], name: 'Seoul - Korea Exchange'},
                {latLng: [59.3293, 18.0686], name: 'Stockholm - OMX Nordic Exchange'},
                {latLng: [-26.2041, 28.0473], name: 'Johannesburg - JSE Limited'},
                {latLng: [40.4168, 3.7038], name: 'Madrid - BME Spanish Exchanges'},
                {latLng: [25.0330, 121.5654], name: 'Taipei - Taiwan Stock Exchange'},
                {latLng: [-23.5505, -46.6333], name: 'São Paulo - BM&F Bovespa'},
                {latLng: [40.80, -74.50], name: 'New York - NASDAQ'},
            ]
        });

        /* SPARKLINE CHARTS
         * ----------------
         * Create a inline charts with spark line
         */

        //-----------------
        //- SPARKLINE BAR -
        //-----------------
        $('.sparkbar').each(function () {
            var $this = $(this);
            $this.sparkline('html', {
                type: 'bar',
                height: $this.data('height') ? $this.data('height') : '30',
                barColor: $this.data('color')
            });
        });

    </script>


@endsection

