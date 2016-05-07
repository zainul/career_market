@extends('layouts.home')

@section('content')
<div class="container welcome-content">
    <center>
      <div style="width:60%;">
        <div class="input-group">
          <input type="text" name="q" class="form-control input-lg" placeholder="Find a dream job...">
              <span class="input-group-btn">
                <button type="submit" name="Find job" id="search-btn" class="btn btn-flat btn-lg">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </div>
    </center>
    <br/><br/>
    @include('_search')
</div>
@endsection
