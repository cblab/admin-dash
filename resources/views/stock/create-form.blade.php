<form class="form form-border"
      role="form"
      method="POST"
      action="{{ url('/stock/create/') }}">

{{ csrf_field() }}

    <!-- company input -->
    <div class="form-group">
        <label>Create stock for company</label>

        <select class="form-control" name='company_id'>
            @foreach ($companies as $company)
                <option value="{{$company->id}}">{{$company->name}} - ({{$company->symbol}})</option>
            @endforeach
        </select>

        @if ($errors->has('company_id'))

            <span class="help-block">
                 <strong>{{ $errors->first('company_id') }}</strong>
            </span>
        @endif

    </div>
    <!-- end company input -->

    <!-- wkn input -->
    <div class="form-group{{ $errors->has('wkn') ? ' has-error' : '' }}">
        <label class="control-label">Wertpapierkennnummer</label>

        <input type="text"
               class="form-control"
               name="wkn"
               value="{{ old('wkn') }}">

        @if ($errors->has('wkn'))

            <span class="help-block">
                 <strong>{{ $errors->first('wkn') }}</strong>
            </span>
        @endif
    </div>
    <!-- end wkn input -->

    <!-- isin input -->
    <div class="form-group{{ $errors->has('isin') ? ' has-error' : '' }}">

        <label class="control-label">ISIN</label>

        <input type="text"
               class="form-control"
               name="isin"
               value="{{ old('isin') }}">

        @if ($errors->has('isin'))

            <span class="help-block">
                 <strong>{{ $errors->first('isin') }}</strong>
            </span>

        @endif

    </div>
    <!-- end symbol input -->

    <!-- submit button -->
    <div class="form-group">

        <button type="submit"
                class="btn btn-primary btn-lg">

            Create new Stock

        </button>

    </div>

    <!-- end submit button -->
</form>