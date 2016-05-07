$(function() {
  $.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
  });
  $('.jobs-table').DataTable();
  $('.questions-table').DataTable();
  $('.applicants-table').DataTable();
  $('.action-applicant').change(function(){
    $.ajax({
      data:{
        status:$(this).val()
      },
      url:'/applicants/' + $(this).attr('id'),
      method:'PUT',
      success: function(response) {
        window.location.reload();
      }
    })
  })
});
