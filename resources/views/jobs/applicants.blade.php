@extends('layouts.app')

@section('content')
        <h2>Applicants for {!! $applicants[0]->job->name !!}</h2>

        <div class="clearfix"></div>

        <div class="clearfix"></div>
        <div class="section" style="margin-top:20px;">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
              <li class="active">
                <a href="#not_suitable" role="tab" data-toggle="tab">
                  Not Suitable
                  (
                  {!! count(collect($applicants)->where('status', 'not_applicable')->all()) !!}
                  )
                </a>
              </li>
              <li>
                <a href="#new" role="tab" data-toggle="tab">
                  New Applicants
                  (
                  {!! count(collect($applicants)->where('status', 'new')->all()) !!}
                  )
                </a>
              </li>
              <li>
                <a href="#phone" role="tab" data-toggle="tab">
                  Phone
                  (
                  {!! count(collect($applicants)->where('status', 'phone')->all()) !!}
                  )
                </a>
              </li>
              <li>
                <a href="#interview" role="tab" data-toggle="tab">
                  Interview
                  (
                  {!! count(collect($applicants)->where('status', 'interview')->all()) !!}
                  )
                </a>
              </li>
              <li>
                <a href="#offer" role="tab" data-toggle="tab">
                  Offer
                  (
                  {!! count(collect($applicants)->where('status', 'offer')->all()) !!}
                  )
                </a>
              </li>
              <li>
                <a href="#hired" role="tab" data-toggle="tab">
                  Hired
                  (
                  {!! count(collect($applicants)->where('status', 'hired')->all()) !!}
                  )
                </a>
              </li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
              <div class="tab-pane fade in active" id="not_suitable">
                @include('jobs.applicant_table',
                 ['applicants' => collect($applicants)->where('status', 'not_applicable')->all() ])
              </div>
              <div class="tab-pane fade" id="new">
                @include('jobs.applicant_table',
                 ['applicants' => collect($applicants)->where('status', 'new')->all() ])
              </div>
              <div class="tab-pane fade" id="phone">
                @include('jobs.applicant_table',
                 ['applicants' => collect($applicants)->where('status', 'phone')->all() ])
              </div>
              <div class="tab-pane fade" id="interview">
                @include('jobs.applicant_table',
                 ['applicants' => collect($applicants)->where('status', 'interview')->all() ])
              </div>
              <div class="tab-pane fade" id="offer">
                @include('jobs.applicant_table',
                 ['applicants' => collect($applicants)->where('status', 'offer')->all() ])
              </div>
              <div class="tab-pane fade" id="hired">
                @include('jobs.applicant_table',
                 ['applicants' => collect($applicants)->where('status', 'hired')->all() ])
              </div>
          </div>
        </div>

@endsection
