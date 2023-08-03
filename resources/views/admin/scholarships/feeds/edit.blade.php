@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Edit Scholarship Feed Status
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('updatefeedstatus',$scholarships->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
        						<label>Scholarship Scheme Name</label>
        						<input type="text" name="title" placeholder="Scholarship Scheme Name" class="form-control" value="{{$scholarships->title}}" readonly>
        					</div>
        					<div class="form-group">
        						<label>Eligibility Criteria</label>
        						<textarea placeholder="Eligibility Criteria" class="form-control" name="description" value="" readonly>{{$scholarships->description}}</textarea> 
        					</div>
        					<div class="form-group">
        						<label>Author</label>
        						<input type="text" name="author" value="{{$scholarships->author}}" class="form-control"  readonly>
        					</div>
        					<div class="form-group">
        						<label>Old Status</label>
        						<input type="text" name="status" value="{{$scholarships->status}}" class="form-control"  readonly>
        					</div>
        					
            <label>New Status</label>
            
            <select class="form-control" name="status">
                    <option value="Active">Active</option>

                    <option value="Closed">Closed</option>
                    
              </select><br>
              
            <button class="btn btn-danger">Update Scholarship Status</button>
        </form>
    </div>
</div>


@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('scholarship_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.scholarships.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Scholarship:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection