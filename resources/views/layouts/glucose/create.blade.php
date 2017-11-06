@extends('.layouts.app')

@section('content')




<div class="medium-5 large-3 columns">
    <div class="callout secondary">

      <form method="POST" action="/glucose">
      {{ csrf_field() }}
        <div class="row">

          <div class="small-12 columns">
            <label>date
              <input type="number" placeholder="" name="am_glucose">
            </label>
            <button type="submit" class="button">Enter</button>
          </div> 
 
        </div>

      </form>

    </div>
  </div>


@endsection