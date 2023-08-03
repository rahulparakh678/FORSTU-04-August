@extends('layouts.admin')
@section('content')

<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover datatable datatable-Profile">
		<thead>
			<tr>
				<th></th>
				<th>Date</th>
				<th>UserID</th>
				<th>UserName</th>
				<th>Transaction Payment Status</th>
				<th>Activity</th>
				<th>Remarks</th>
			</tr>
			<tr>
				<td></td>
				<td><input class="search" type="text" placeholder="{{ trans('global.search') }}"></td>
				<td><input class="search" type="text" placeholder="{{ trans('global.search') }}"></td>
				<td><input class="search" type="text" placeholder="{{ trans('global.search') }}"></td>
				<td>
					<select class="search">
						<option></option>
						<option value="TXN_SUCCESS">TXN_SUCCESS</option>
						<option value="TXN_FAILURE">TXN_FAILURE</option>
						<option value="PENDING">PENDING</option>
					</select>
				</td>
				<td></td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			@foreach($sfcpayments as $sfcpayment)
			<tr>
				<td></td>
				<td>{{$sfcpayment->txn_date}}</td>
				<td>{{$sfcpayment->user_id}}</td>
				<td>{{$sfcpayment->user_name}}</td>
				<td>{{$sfcpayment->txn_status}}</td>
				<td><a href="{{route('sfcpaid',$sfcpayment->user_id)}}" class="btn btn-xs btn-primary">Mark as Paid</a><a href="{{route('sfcshowprofile',$sfcpayment->user_id)}}" class="btn btn-xs btn-danger">View Profile</a>
				<form action="{{ route('deletesfcentry',$sfcpayment->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-warning" value="{{ trans('global.delete') }}">
                </form>
				
				</td>
				<td>{{$sfcpayment->txn_respmsg}}</td>

			</tr>
			@endforeach
		</tbody>
	</table>
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
<script>
   function exportTasks(_this) {
      let _url = $(_this).data('href');
      window.location.href = _url;
   }
</script>
@endsection