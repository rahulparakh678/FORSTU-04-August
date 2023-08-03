@extends('layouts.sfcngo')
@section('content')


<h1>Hello</h1>
<div class="card">
	<div class="card-header">
		Scholarship Applications
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover datatable datatable-Profile">
				 <thead>
				 	<tr>
				 		<th width="10"></th>
				 		<th>Student Name</th>
				 		<th>Scholarship Name</th>
				 		<th>Status</th>
				 		<th>Application Date</th>
				 		<th>Application PDF</th>
				 	</tr>
				 </thead>
				 <tbody>
				 	@foreach($application_processed as $application)
				 	<tr>
				 		<td>
				 			
				 		</td>
				 		<td>
				 			{{$application->name}}
				 		</td>
				 		<td>
				 			{{$application->scheme_name}}
				 		</td>
				 		<td>
				 			{{$application->status}}
				 		</td>
				 		<td>
				 			{{  \Carbon\Carbon::parse($application->created_at)->format('j F Y') }}
				 		</td>
				 		<td>
				 			@if(isset($application->applicationpdf))
  							<a href="{{$application->applicationpdf}}"  target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                            @endif
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
$.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'DESC' ]],
    pageLength: 10,
  });

 table = $('.datatable-Profile:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  $('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value
      table
        .column($(this).parent().index())
        .search(value, strict)
        .draw()
  });
  
})

</script>
@endsection