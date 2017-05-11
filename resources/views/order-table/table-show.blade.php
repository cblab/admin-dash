<table class="table table-striped">

    <h2>{{$exchange_name}}</h2>

    <thead>
    <tr>
        <th>Company name</th>
        <th>Stock type</th>
        <th>Price entered date time</th>
    </tr>
    </thead>

    <tbody>

    @foreach($orders as $order)
        <tr>
            <!-- company name -->
            <td>{{ $order->stock->company->name }}</td>
            <!-- end company name -->

            <!-- stock type -->
            @if( $order->common_stock == '1')
                <td>common stock</td>
            @else
                <td>prefered stock</td>
            @endif
            <!-- end stock type -->

            <!-- date created -->
            <td>{{ $order->created_at }}</td>
            <!-- end date created -->
        </tr>
    @endforeach

    </tbody>
</table>