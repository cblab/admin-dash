<form class="form form-border"
      role="form"
      method="POST"
      action="{{ url('/order/create/') }}">

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

    <!-- stock input -->
    <div class="form-group">
        <label>Stock used by order</label>

        <select class="form-control" name='stock_id'>
            @foreach ($stocks as $stock)
                <option value="{{$stock->id}}">{{$stock->company()->getResults()->name}} - {{$stock->isin}}</option>
            @endforeach
        </select>
    </div>
    <!-- end stock input -->

    <!-- stock_type select -->
    <div class="form-group{{ $errors->has('stock_type') ? ' has-error' : '' }}">

        <label class="control-label">Choose a stock type</label>
        <select class="form-control"
                id="stock_type"
                name="stock_type">

            <option value="0">Common Stock</option>
            <option value="1">Prefered Stock</option>
        </select>

        @if ($errors->has('stock_type'))
            <span class="help-block">
                <strong>{{ $errors->first('stock_type') }}</strong>
            </span>

        @endif
    </div>
    <!-- end stock_type select -->

    <!-- price input -->
    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
        <label class="control-label">Price</label>

        <input type="text"
               class="form-control"
               name="price"
               value="{{ old('price') }}"
               placeholder="12.34">

        @if ($errors->has('price'))

            <span class="help-block">
                 <strong>{{ $errors->first('price') }}</strong>
            </span>
        @endif
    </div>
    <!-- end price input -->

    <!-- submit button -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg">
            Create new Trade/Order
        </button>
    </div>

    <!-- end submit button -->
</form>