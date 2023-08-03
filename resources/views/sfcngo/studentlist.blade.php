@extends('layouts.sfcngo')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('cruds.profile.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="row" style="margin-bottom: 20px;">
          <a href="{{route('sfcfilteredview')}}" class="btn btn-xs btn-danger" target="_blank">Apply Filters</a> &nbsp
          <a href="{{ request()->fullUrl() }}" class="btn btn-xs btn-info">Remove Filter</a>
        </div>
        <div class="table-responsive">

            <table class="table table-bordered table-striped table-hover datatable datatable-Profile">

              
                <thead>
                    <tr>

                  
                        <th width="10">

                        </th>
                        <th width="10">
                            Profile ID
                        </th>
                        <th>Student Name</th>
                        <th>Profile Percentage</th>
                        <th>KYC Completed</th>
                        <th>Action</th>
                        
                        
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        
                        <td>
                            <select class="search">
                                <option></option>
                                <option value="Incomplete Profile">Incomplete Profile </option>
                                <option value="15% Completed">15% </option>
                                <option value="30% Completed">30% </option>
                                <option value="45% Completed">45% </option>
                                <option value="60% Completed">60% </option>
                                <option value="70% Completed">70% </option>
                                <option value="80% Completed">80% </option>
                                <option value="90% Completed">90% </option>
                                <option value="100% Completed">100% </option>

                                
                            </select>
                        </td>
                        <td>
                            <select class="search">
                                <option></option>
                                <option value="YES">YES</option>
                                <option value="No">No</option>
                            </select>
                        </td>
                        <td></td>
                    </tr>
                    
                </thead>
                <tbody>
                    @foreach($profiles as $profile)
                    <tr>
                      <td></td>
                      <td>
                       
                       
                         {{$profile->id}}
                       </td>
                      
                      <td>{{ $profile->fullname}}</td>
                      <td>
                          @if( !empty($profile->aadharnumber) && empty($profile->annual_income) && empty($profile->permanent_state) && empty($profile->bank_ifsc))
                                    <h6>15% Completed</h6>

                                

                                @elseif(!empty($profile->aadharnumber) && !empty($profile->annual_income) && empty($profile->permanent_state) && empty($profile->bank_ifsc))
                                    <h6>30% Completed</h6>
                                

                                @elseif(!empty($profile->aadharnumber) && !empty($profile->annual_income) && !empty($profile->permanent_state) && empty($profile->bank_ifsc) )
                                    <h6>45% Completed</h6>

                                @elseif(!empty($profile->aadharnumber) && !empty($profile->annual_income) && !empty($profile->permanent_state) && !empty($profile->bank_ifsc) && empty($profile->course_type_id) )
                                    <h6>60% Completed</h6>

                                @elseif(!empty($profile->aadharnumber) && !empty($profile->annual_income) && !empty($profile->permanent_state) && !empty($profile->bank_ifsc) && !empty($profile->course_type_id) && empty($profile->school_percentage) && empty($profile->class_12_percentage)  && empty($profile->diploma_percentage) && empty($profile->grad_percentage))
                                    
                                    @if(($profile->course_type_id=== 1) && (!empty($profile->previous_percentage)))

                                        @if(!empty($profile->photo) && !empty($profile->aadhar_card)
                                        && !empty($profile->address_proof) && !empty($profile-> income_certificate) && !empty($profile->bank_passbook)
                                        && !empty($profile->currentyear_fees_reciept) && !empty($profile->previous_marksheet))
                                            <h6><span class="badge badge-success">100% Completed</span></h6>
                                        @else
                                            <h6>90% Completed</h6>
                                        @endif
                                    

                                    @elseif(($profile->course_type_id=== 1) && (empty($profile->previous_percentage)))

                                        <h6>80% Completed</h6>

                                    
                                    @else
                                        <h6>70% Completed</h6>
                                    @endif

                                @elseif(!empty($profile->aadharnumber) && !empty($profile->annual_income) && !empty($profile->permanent_state) && !empty($profile->bank_ifsc) && !empty($profile->course_type_id) && !empty($profile->school_percentage) && empty($profile->class_12_percentage)  && empty($profile->diploma_percentage) && empty($profile->grad_percentage))

                                    @if(($profile->course_type_id=== 2) && (!empty($profile->school_percentage)))
                                        @if(!empty($profile->photo) && !empty($profile->aadhar_card)
                                        && !empty($profile->address_proof) && !empty($profile-> income_certificate) && !empty($profile->bank_passbook)
                                        && !empty($profile->currentyear_fees_reciept) && !empty($profile->previous_marksheet))
                                            <h6><span class="badge badge-success">100% Completed</span></h6>
                                        @else
                                            <h6>90% Completed</h6>
                                        @endif

                                    @elseif(($profile->course_type_id=== 2) && (empty($profile->school_percentage)))
                                    <h6>80% Completed</h6>

                                    @elseif(($profile->course_type_id=== 3) && (!empty($profile->school_percentage)))
                                        @if(!empty($profile->photo) && !empty($profile->aadhar_card)
                                        && !empty($profile->address_proof) && !empty($profile-> income_certificate) && !empty($profile->bank_passbook)
                                        && !empty($profile->currentyear_fees_reciept) && !empty($profile->previous_marksheet))
                                            <h6><span class="badge badge-success">100% Completed</span></h6>
                                        @else
                                            <h6>90% Completed</h6>
                                        @endif
                                    @elseif(($profile->course_type_id=== 3) && (empty($profile->school_percentage)))
                                        <h6>80% Completed</h6>
                                    @else
                                        <h6>70% Completed</h6>
                                    @endif

                                


                                @elseif(!empty($profile->aadharnumber) && !empty($profile->annual_income) && !empty($profile->permanent_state) && !empty($profile->bank_ifsc) && !empty($profile->course_type_id) && !empty($profile->school_percentage) && (!empty($profile->class_12_percentage) || !empty($profile->diploma_percentage) )&& empty($profile->grad_percentage))

                                    @if(($profile->course_type_id=== 4) && (!empty($profile->class_12_percentage) || (!empty($profile->diploma_percentage)) ) )
                                        @if(!empty($profile->photo) && !empty($profile->aadhar_card)
                                        && !empty($profile->address_proof) && !empty($profile-> income_certificate) && !empty($profile->bank_passbook)
                                        && !empty($profile->currentyear_fees_reciept) && !empty($profile->previous_marksheet))
                                            <h6><span class="badge badge-success">100% Completed</span></h6>
                                        @else
                                            <h6>90% Completed</h6>
                                        @endif

                                    @elseif(($profile->course_type_id=== 4)  && (empty($profile->class_12_percentage) || (empty($profile->diploma_percentage)) ) )
                                    <h6>80% Completed</h6>
                                    @else
                                        <h6>70% Completed</h6>
                                    @endif

                                @elseif(!empty($profile->aadharnumber) && !empty($profile->annual_income) && !empty($profile->permanent_state) && !empty($profile->bank_ifsc) && !empty($profile->course_type_id) && !empty($profile->school_percentage) && (!empty($profile->class_12_percentage) || !empty($profile->diploma_percentage) )&& !empty($profile->grad_percentage))

                                    @if(($profile->course_type_id=== 5) && (!empty($profile->grad_percentage)  ) ) 
                                        @if(!empty($profile->photo) && !empty($profile->aadhar_card)
                                        && !empty($profile->address_proof) && !empty($profile-> income_certificate) && !empty($profile->bank_passbook)
                                        && !empty($profile->currentyear_fees_reciept) && !empty($profile->previous_marksheet))
                                            <h6><span class="badge badge-success">100% Completed</span></h6>
                                        @else
                                            <h6>90% Completed</h6>
                                        @endif
                                    @elseif(($profile->course_type_id=== 5) && (empty($profile->grad_percentage)  ) ) )
                                        <h6>80% Completed</h6>
                                    @else
                                        <h6>80% Completed</h6>
                                    @endif

                                @else
                                    <h6><span class="badge badge-danger">Incomplete Profile</span></h6>
                                @endif
                      </td>
                      <td>
                          @if(empty($profile->kyc_completed))
                            No
                         @else  
                          {{ $profile->kyc_completed}}
                          @endif

                      </td>
                      <td>
                        
                      <a href="{{ route('profileshow1', $profile->user_id) }}"  target="_blank" class="btn btn-primary">View Profile </a>
                     
                      </td>
                      </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <?php /*
            {{ -- $profile->appends(Illuminate\Support\Facades\Request::except('page'))--}} */?>
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
