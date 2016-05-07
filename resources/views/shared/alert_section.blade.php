@if(Session::has('success'))
  <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    {{ Session::get('success') }}
  </div>
@endif

@if(Session::has('error'))
  <div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    {{ Session::get('error') }}

    <ul>
    @if(count(Session::get('detail_error')) != 0)
      @foreach(Session::get('detail_error') as $key=>$value)
        @foreach($value as $val)
          <li> {{ $val }} </li>
        @endforeach
      @endforeach
    @endif
    </ul>

  </div>
@endif

@if(Session::has('info'))
  <div class="alert alert-info">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    {{ Session::get('info') }}
  </div>
@endif