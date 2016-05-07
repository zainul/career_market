@foreach($jobs as $key => $job)
  <div class="col-sm-3 col-xs-6">
    <div class="panel">
      <div class="blur-image"
      style="background-image:url({!! $job->company->logo !!}); height:130px; padding-top:20px;">
        <center class="center-thumbnail">
          <img class="thumbnail small center"
          src="{!! $job->company->logo !!}">
        </center>
      </div>
      <center>
        {!! $job->name !!}
      </center>
      <center>
        <a href="/jobs/{!! $job->id !!}">More Detail</a>
      </center>
      <br/>
    </div>
  </div>
@endforeach
