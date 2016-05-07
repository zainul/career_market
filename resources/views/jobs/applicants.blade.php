@extends('layouts.app')

@section('content')
        <a class="btn btn-primary pull-left" style="margin-top: 25px" href="{!! route('jobs.index') !!}">Back</a>
        <br/>
        <div class="clearfix"></div>

        <div class="clearfix"></div>

        <div class="section" style="margin-top:20px;">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
              <li class="active">
                <a href="#not_suitable" role="tab" data-toggle="tab">Not Suitable</a>
              </li>
              <li>
                <a href="#new" role="tab" data-toggle="tab">New Applicants</a>
              </li>
              <li>
                <a href="#phone" role="tab" data-toggle="tab">Phone</a>
              </li>
              <li>
                <a href="#interview" role="tab" data-toggle="tab">Interview</a>
              </li>
              <li>
                <a href="#offer" role="tab" data-toggle="tab">Offer</a>
              </li>
              <li>
                <a href="#hired" role="tab" data-toggle="tab">Hired</a>
              </li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
              <div class="tab-pane fade in active" id="not_suitable">
                @include('jobs.applicant_table')
              </div>
              <div class="tab-pane fade" id="new">
                @include('jobs.applicant_table')
              </div>
              <div class="tab-pane fade" id="phone">
              @include('jobs.applicant_table')
              </div>
              <div class="tab-pane fade" id="interview">
              @include('jobs.applicant_table')
              </div>
              <div class="tab-pane fade" id="offer">
              @include('jobs.applicant_table')
              </div>
              <div class="tab-pane fade" id="hired">
              @include('jobs.applicant_table')
              </div>
          </div>
        </div>

@endsection
