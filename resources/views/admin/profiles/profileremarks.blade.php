@extends('layouts.admin')
@section('content')

<h1>Hello</h1>
<div class="card">
	<div class="card-header">
       Student Profile Remarks
    </div>
    <div class="card-body">
    	<div class="table-responsive">
    		 <table class="table table-bordered table-striped table-hover datatable datatable-Profile">
    		 	<thead>
    		 		<tr>
    		 			<th width="10">
    		 			</th>
    		 			<th  width="10">
                            Profile {{ trans('cruds.profile.fields.id') }}
                        </th>
                        <th width="10">
                        	{{ trans('cruds.profile.fields.full_name') }}
                        </th>
                        <th>
                        	Primary Documents Remarks
                        </th>
                        <th>
                        	Secondary Documents Remarks
                        </th>
    		 		</tr>
    		 		<tr>
    		 			<td></td>
    		 			<td><input class="search" type="text" placeholder="{{ trans('global.search') }}"></td>
    		 			<td><input class="search" type="text" placeholder="{{ trans('global.search') }}"></td>
    		 			<td></td>
    		 			<td></td>
    		 		</tr>
    		 	</thead>
    		 	<tbody>
    		 		 @foreach($profiles as $chunk)
                    	@foreach($chunk as $key => $profile)
                    		<tr>
                    			<td></td>
                    			<td>{{ $profile->id }}</td>
                    			<td>{{ $profile->fullname ?? '' }}</td>
                    			<td>
                    				@if(empty($profile->photo))
                    					Photo Missing
                    				@else
                    					
                    				@endif
                    				@if(empty($profile->aadhar_card))
                    					Aadhar Card Missing
                    				@else
                    					
                    				@endif
                    				@if( ($profile->handicapped==='yes') && (empty($profile->physically_handicapped_certificate)))
                    					,Disability Certificate Missing
                    				@else
                    					
                    				@endif

                    				@if( ($profile->single_parent==='yes') && (empty($profile->death_certificate)))
                    					,Death Certificate Missing
                    				@else
                    					
                    				@endif
                    				@if((empty($profile->income_certificate)))
                    					,Income Certificate Missing
                    				@else
                    					
                    				@endif
                    				@if((empty($profile->bank_passbook)))
                    					,Bank Passbook Missing
                    				@else
                    					
                    				@endif
                    				
                    				@if((empty($profile->currentyear_fees_reciept)))
                    					,Current Year Fees Reciept
                    				@else
                    					
                    				@endif



                    				@if(($profile->course_type_id=== 1) && (empty($profile->previous_marksheet)))
                    					,Previous Marksheet Missing
                    				@endif




                    				@if(($profile->course_type_id===2) && (empty($profile->class10_marksheet)))
                    					,Class 10 Marksheet Missing

                    				@elseif(($profile->course_type_id=== 2) && (empty($profile->class10_marksheet)) && (empty($profile->previous_marksheet)) && ($profile->course_name_id==='14' || $profile->course_name_id==='15' || $profile->course_name_id==='16'))
                    					,Class 10 Marksheet,Previous Marksheet Missing
                    				@endif


                    				@if(($profile->course_type_id===3) && (empty($profile->class10_marksheet)))
                    					,Class 10 Marksheet Missing

                    				@elseif(($profile->course_type_id=== 3) && (empty($profile->class10_marksheet)) && (empty($profile->previous_marksheet)) && ($profile->current_year!='First Year'))
                    					,Class 10 Marksheet,Previous Marksheet Missing
                    				@endif

                    				@if(($profile->course_type_id===3) && (empty($profile->class10_marksheet)))
                    					,Class 10 Marksheet Missing

                    				@elseif(($profile->course_type_id=== 3) && (empty($profile->class10_marksheet)) && (empty($profile->previous_marksheet)) && ($profile->current_year!='First Year'))
                    					,Class 10 Marksheet,Previous Marksheet Missing
                    				@endif


                    				@if(($profile->course_type_id===4) && (empty($profile->class10_marksheet)))
                    					,Class 10 Marksheet Missing

                    				@elseif(($profile->course_type_id===4) && (!empty($profile->class10_marksheet) && isset($profile->class_12_percentage) && empty($profile->class12_marksheet)))
                    					,Class 12 Marksheet Missing

                    				@elseif(($profile->course_type_id===4) && (!empty($profile->class10_marksheet) && isset($profile->diploma_percentage) && empty($profile->diploma_marksheet)))
                    					,Diploma Marksheet Missing

                    				@elseif(($profile->course_type_id===4) && ($profile->current_year!='First Year'))
                    					Previous Marksheet Missing
                    				@endif


                    				@if(($profile->course_type_id===5) && (empty($profile->class10_marksheet)))
                    					,Class 10 Marksheet Missing

                    				@elseif(($profile->course_type_id===5) && (!empty($profile->class10_marksheet) && isset($profile->class_12_percentage) && empty($profile->class12_marksheet)))
                    					,Class 12 Marksheet Missing

                    				@elseif(($profile->course_type_id===5) && (!empty($profile->class10_marksheet) && isset($profile->diploma_percentage) && empty($profile->diploma_marksheet)))
                    					,Diploma Marksheet Missing

                    				@elseif(
                    					($profile->course_type_id===5) && 
                    					!empty($profile->class10_marksheet) &&
                    					!empty($profile->class12_marksheet) &&
                    					empty($profile->graduation_marksheet)

                    				)
                    				,Graduation Marksheet Missing

                    				@elseif(($profile->course_type_id===5) && ($profile->current_year!='First Year'))
                    					Previous Marksheet Missing
                    				@endif



                    				
                    				

                    				
                    				
                    			</td>
                    			<td>
                    				@if((empty($profile->caste_certificate)))
                    					Caste Certificate Missing
                    				@else
                    				@endif

                    				@if((empty($profile->domicile_certificate)))
                    					,Domicile Certificate Missing
                    				@else
                    				@endif

                    				@if((empty($profile->clg_id_card)))
                    					,College ID Card Missing
                    				@else
                    				@endif

                    				@if((empty($profile->bonafide_certificate)))
                    					,Bonafide Certificate Missing.
                    				@else
                    				@endif

                    				@if((empty($profile->admission_letter)))
                    					,Admission/Allotment Letter Missing.
                    				@else
                    				@endif

                    				


                    				
                    						
                    				

                    			</td>	

                    				
                    				
                    		</tr>
                    	@endforeach
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
<script>
   function exportTasks(_this) {
      let _url = $(_this).data('href');
      window.location.href = _url;
   }
</script>
@endsection