<div class="table-responsive">
  <table class="table applicants-table">
      <thead class="bg-primary">
        <tr>
          <th>User Id</th>
          <th>Email</th>
          <th>Action</th>
          <th>Phone</th>
          <th>Github</th>
          <th>LinkedIn</th>
        </tr>
      </thead>
      <tbody>
      @foreach($applicants as $applicant)
          <tr>
              <td>
                <a href="/applicants/{!! $applicant->id !!}">
                  {!! $applicant->user->name !!}
                </a>
              </td>
              <td>{!! $applicant->user->email !!}</td>
              <td>
                  <select class="form-control action-applicant" id="{!! $applicant->id !!}">
                    <option value="not_suitable">not suitable</option>
                    <option value="phone">phone</option>
                    <option value="interview">interview</option>
                    <option value="offer">offer</option>
                    <option value="hired">hired</option>
                  </select>
              </td>
              <td>{!! $applicant->user->phone !!}</td>
              <td>{!! $applicant->user->github !!}</td>
              <td>{!! $applicant->user->linkedin !!}</td>
          </tr>
      @endforeach
      </tbody>
  </table>
</div>
