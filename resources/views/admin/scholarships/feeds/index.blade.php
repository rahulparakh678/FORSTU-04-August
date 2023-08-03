@extends('layouts.admin')
@section('content')
@can('scholarship_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.scholarships.create') }}">
                Add Scholarship Feed
            </a>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Scholarship Feed
</button>
	
	<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  				<div class="modal-dialog" role="document">
    				<div class="modal-content">
      					<div class="modal-header">
        					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          						<span aria-hidden="true">&times;</span>
        					</button>
      					</div>
      					<div class="modal-body">
      						<form method="POST" action="{{ route("feeds.store") }}" enctype="multipart/form-data">
            				@csrf
        					<div class="form-group">
        						<label>Scholarship Scheme Name</label>
        						<input type="text" name="title" placeholder="Scholarship Scheme Name" class="form-control">
        					</div>
        					<div class="form-group">
        						<label>Eligibility Criteria</label>
        						<textarea placeholder="Eligibility Criteria" class="form-control" name="description"></textarea> 
        					</div>
                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" name="link" placeholder="Enter Scholarship Link" class="form-control">
                            </div>
        					<div class="form-group">
        						<label>Author</label>
        						<input type="text" name="author" value="FORSTU" class="form-control"  >
        					</div>
        					<div class="form-group">
        						<label>Status</label>
        						<input type="text" name="status" value="Active" class="form-control"  readonly>
        					</div>

        					
      					</div>
      					<div class="modal-footer">
        					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        					<button type="submit" class="btn btn-primary">Save changes</button>
      					</div>
      						</form>
    				</div>
  				</div>
			</div>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.scholarship.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Scholarship">
                <thead>
                    <tr>
                    	<th width="10">
                    	</th>
                    	<th width="5">
                    		ID
                    	</th>
                    	<th>
                    		Scheme Name
                    	</th>
                    	<th>Status</th>
                    	<th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($scholarships as $key => $scholarship)
                		<tr data-entry-id="{{ $scholarship->id }}">
                			<td>

                            </td>
                            <td>
                            	{{ $scholarship->id ?? '' }}
                            </td>
                            <td>
                            	{{ $scholarship->title ?? '' }}
                            </td>
                            <td>{{ $scholarship->status ?? '' }}</td>
                            <td>
        						
        						<a href="{{route('feeds.edit',$scholarship->id)}}" class="btn btn-info btn-xs">Edit</a>
        					</td>
                		</tr>
                	@endforeach
                </tbody>
            </table>
        </div>
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