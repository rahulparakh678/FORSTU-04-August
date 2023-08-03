@extends('layouts.scholarshipprovider')
@section('content')



	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					Female Applications
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class=" table table-bordered  table-hover datatable datatable-Setupscholarship">
							<thead>
								<tr>
									<th width="10"></th>
									<th>Student Name</th>
									{{--
									<th>Current Status</th>--}}
									<th>Gender</th>
								</tr>
								<tr>
									<td></td>
									{{--<td></td>--}}
									<td>

										{{--
										<select class="search">
                        					<option value="#" >{{ trans('global.all') }}</option
                              >
                        					<option value="Application Submitted">Application Submitted</option>
                        					<option value="Shortlised">Shortlised</option>
                        					<option value="Awarded">Awarded</option>
                        					<option value="Rejected">Rejected</option>
                      					</select>
										--}}
									</td>
									<td></td>
								</tr>
								
							</thead>
							<tbody>
								@foreach($profiles as $profile)
									

								<tr>

									<td></td>
									<td>
										 {{--
									<?php
                    $profiles=App\StudentProfile::where('user_id',$result->user_id)->first();
                    		
                    			# code...
                    			echo $profiles->fullname;
                    		
                    		
                    ?>
                    --}}
                    {{$profile->fullname}}      
                     <a href="{{ route('showprofile',[$profile->user_id,$s_id]) }}" style="text-decoration: none;" target="_blank"> <i class="fa fa-eye fa-2x" aria-hidden="true" style="float: right; text-decoration: none;"></i></a>   
									</td>
									{{--<td>
										
										<span class="badge badge-warning">{{$result->status ?? ''}}</span>
										

									</td>--}}
									<td>
										{{--
										 <a href="{{route('Shortlised',$result->id)}}" class="btn btn-xs btn-dark">Shortlist</a>
                                    <a href="{{route('Rejected',$result->id)}}" class="btn btn-xs btn-danger">Better Luck Next Time</a>
                                    <a href="{{route('Awarded',$result->id)}}" class="btn btn-xs btn-success">Award Scholarship</a>
										--}}
										{{$profile->gender}}
									</td>
								</tr>
								
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
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
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  });
  let table = $('.datatable-Setupscholarship:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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