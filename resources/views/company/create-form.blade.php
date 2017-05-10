<form class="form form-border"
      role="form"
      method="POST"
      action="{{ url('/company/create/') }}">

      {{ csrf_field() }}

    <!-- name input -->

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

        <label class="control-label">Name</label>

        <input type="text"
               class="form-control"
               name="name"
               value="{{ old('name') }}">

        @if ($errors->has('name'))

            <span class="help-block">
                 <strong>{{ $errors->first('name') }}</strong>
            </span>

        @endif

    </div>

    <!-- end name input -->

    <!-- symbol input -->
    <div class="form-group{{ $errors->has('symbol') ? ' has-error' : '' }}">

        <label class="control-label">Symbol</label>

        <input type="text"
               class="form-control"
               name="symbol"
               value="{{ old('symbol') }}">

        @if ($errors->has('symbol'))

            <span class="help-block">
                 <strong>{{ $errors->first('symbol') }}</strong>
            </span>

        @endif

    </div>
    <!-- end symbol input -->

    <!-- submit button -->
    <div class="form-group">

        <button type="submit"
                class="btn btn-primary btn-lg">

            Create

        </button>

    </div>

    <!-- end submit button -->

</form>