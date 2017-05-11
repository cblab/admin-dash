<form class="form form-border"
      role="form"
      method="POST"
      action="{{ url('/list-orders-by-exchange/') }}">

{{ csrf_field() }}

    <!-- exchange input -->
    <div class="form-group">
        <label>Order was placed at</label>

        <select class="form-control" name='exchange_id'>
            @foreach ($exchanges as $exchange)
                <option value="{{$exchange->id}}">{{$exchange->ex_name}}</option>
            @endforeach
        </select>
    </div>
    <!-- end exchange input -->

    <!-- submit button -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg">
            Generate order report
        </button>
    </div>
    <!-- end submit button -->
</form>