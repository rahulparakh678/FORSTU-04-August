@extends('layouts.admin')
@section('content')
@can('profile_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.profiles.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.profile.title_singular') }}
            </a>
            <a class="btn btn-success" href="{{route('studstatus')}}">
                Add Scholarship Status
            </a>
            <a class="btn btn-success" href="{{route('editstudstatus')}}">
                Edit Scholarship Status
            </a>
            <a class="btn btn-success" href="{{route('allstatus')}}">
                View All Status
            </a>
             <a class="btn btn-success" href="{{route("admin.profiles.index")}}">
                Normal View
            </a>
            <span data-href="{{route('export')}}" id="export" class="btn btn-success btn-sm" onclick="exportTasks(event.target);">Export</span>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.profile.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">

        <div class="table-responsive">
<form method="POST" action="{{ route('save_data') }}" enctype="multipart/form-data">

                            @csrf

            <table class="table table-bordered table-striped table-hover datatable datatable-Profile">

              
                <thead>
                    <tr>

                  
                        <th width="10">

                        </th>
                        <th>
                            Profile {{ trans('cruds.profile.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.profile.fields.full_name') }}
                        </th>
                        
                        <th>
                            Payment Status
                        </th>
                        <th>
                            KYC Status
                        </th>
                        <th>
                            Profile Upto Date
                        </th>
                        <th>
                           Vidyasaarthi Profile Updated
                        </th>
                        <th>
                           Active
                        </th>
                        <th>
                          Mobile Number
                        </th>
                        <th>
                            {{ trans('cruds.profile.fields.email') }}
                        </th>
                        <th>
                            Gender

                        </th>
                        <th>
                            Religion

                        </th>
                        <th>
                            Caste

                        </th>
                        <th>
                            Physically Handicapped
                        </th>
                        <th>
                            Single Parent
                        </th>
                        <th>
                            Annual Income
                        </th>
                        
                        <th>
                            Permanent State
                        </th>
                        
                        <th>
                            Permanent City
                        </th>
                        <th>
                            Permanent Address
                        </th>
                        <th>
                            Course Type
                        </th>
                        
                        <th>
                            Course Specialization
                        </th>
                        <th>
                            Current Institute
                        </th>
                        <th>
                            Current Year
                        </th>
                        <th>
                            Father Occupation
                        </th>
                        <th>
                            Class 10 Percentage
                        </th>
                        <th>
                            Class 12 Percentage
                        </th>
                        <th>
                            Diploma Percentage
                        </th>
                        <th>
                            Created at
                        </th>
                        
                        <th>
                            Referral Code
                        </th>
                        
                    </tr>
                    <tr>
                      <td>
                        
                      </td>
                      <td>
                           <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                      </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            
                            <select class="search">
                                <option value=" ">Please Select</option>
                                <option value="YES">Yes</option>
                                <option value="NO">No</option>
                                <option value="SFC">SFC</option>
                            </select>
                        </td>
                        <td>
                            <select class="search">
                                <option value=" ">Please Select</option>
                                <option value="YES">Yes</option>
                                <option value="NO">No</option>
                                
                            </select>
                        </td>
                        <td>
                            <select class="search">
                                <option value=" ">Please Select</option>
                                <option value="YES">Yes</option>
                                <option value="NO">No</option>
                                
                            </select>
                        </td>
                        <td>
                            <select class="search">
                                <option value=" ">Please Select</option>
                                <option value="YES">Yes</option>
                                <option value="NO">No</option>
                                
                            </select>
                        </td>
                        <td>
                            <select class="search">
                                <option value=" ">Please Select</option>
                                <option value="YES">Yes</option>
                                <option value="NO">No</option>
                                
                            </select>
                        </td>
                        <td>
                           <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                      </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                          <select class="search">
                            <option >{{ trans('global.all') }}</option
                              >
                              @foreach(App\StudentProfile::GENDER_RADIO as $key => $label)
                                <option value="{{$label}}">{{$label}}</option>
                              @endforeach
                            
                          </select>
                            

                        </td>
                        <td>
                            <select class="search">
                            <option >{{ trans('global.all') }}</option
                              >
                              @foreach(App\StudentProfile::RELIGION_SELECT as $key => $label)
                                <option value="{{$label}}">{{$label}}</option>
                              @endforeach
                            
                          </select>
                            

                        </td>
                        <td>
                          <select class="search">
                            <option >{{ trans('global.all') }}</option
                              >
                              @foreach(App\Caste::all() as $label)
                                <option value="{{$label->caste_name}}">{{$label->caste_name}}</option>
                              @endforeach
                            
                          </select>
                           

                        </td>
                        <td>
                            <select class="search">
                            <option >{{ trans('global.all') }}</option
                              >
                              @foreach(App\StudentProfile::HANDICAPPED_RADIO as $key => $label)
                                <option value="{{$label}}">{{$label}}</option>
                              @endforeach
                            
                            </select>
                        </td>
                        <td>
                            <select class="search">
                            <option >{{ trans('global.all') }}</option
                              >
                              @foreach(App\StudentProfile::SINGLE_PARENT_RADIO as $key => $label)
                                <option value="{{$label}}">{{$label}}</option>
                              @endforeach
                            
                            </select>
                        </td>
                        <td>
                           <form action=" {{ route("admin.profiles.index") }}" method="GET" enctype="multipart/form-data">
                            <div class="form-group">
                              <input  type="number" placeholder="{{ trans('global.search') }}"  onchange="this.form.submit()" name="annual_income" value="{{ old('annual_income','0')}}" >
                            </div>
                            
                          </form>
                        </td>
                        
                        <td>
                            
                            <select class="search">
                            <option >{{ trans('global.all') }}</option
                              >
                              @foreach(App\StudentProfile::STATE_SELECT as $key => $label)
                                <option value="{{$label}}">{{$label}}</option>
                              @endforeach
                            
                            </select>
                        </td>
                        
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                           <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            
                            <select class="search">
                            <option >{{ trans('global.all') }}</option
                              >
                              @foreach(App\Coursetype::all() as $label)
                                <option value="{{$label->course_type_name}}">{{$label->course_type_name}}</option>
                              @endforeach
                            
                          </select>
                        </td>
                        
                        <td>
                             <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select  class="search">
                    <option value="">Please Select</option>           
                    <option value="First Year">First Year</option>
                    <option value="Second Year">Second Year</option>
                    <option value="Third Year">Third Year</option>
                    <option value="Fourth Year">Fourth Year</option>
                    <option value="Fifth Year">Fifth Year</option>
                </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                             <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                             <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                             <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        
                        <td>
                             <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                       
                      
                    </tr>
                    
                </thead>
                <tbody>
                    @foreach($profiles as $chunk)
                    @foreach($chunk as $key => $profile)
                        <tr data-entry-id="{{ $profile->id }}">
                            <td>
                                <label><input type="checkbox" name="categories[]" value="{{ $profile->id }}"> Red</label>
                                    
                                                                <br>
                                @can('profile_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.profiles.show', $profile->id) }}" target="_blank">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                

                                
                               
                            </td>
                            <td>
                                {{ $profile->id }}


                                
                            </td>
                            <td>
                                {{ $profile->fullname ?? '' }}
                                


                                <br>

                            </td>
                            <td>
                                @if($profile->paid === 'YES')
                                 Yes

                                @elseif($profile->paid === 'SFC')
                                 SFC Student
                                @elseif($profile->paid === 'NO')
                                 Free Plan Activated
                                @else
                                 Free Plan Not Activated
                                 @endif
                            </td>
                            <td>
                                @if($profile->kyc_completed === 'YES')
                                 Yes

                                
                                @else
                                 No 
                                 @endif
                                
                            </td>
                            <td>
                                @if($profile->profile_upto_date === 'Yes')
                                  Yes
                                @else
                                  No
                                @endif
                            </td>
                            <td>
                                @if($profile->vidyasaarthi_profile_status === 'Updated')
                                  Yes
                                @else
                                  No
                                @endif
                            </td>
                            <td>
                               {{$profile->active ?? ''}}
                                
                            </td>
                            <td>
                                {{$profile->mobile}}
                            </td>
                            <td>
                                {{ $profile->email ?? '' }}
                            </td>
                            <td>
                                {{ $profile->gender ?? '' }}
                            </td>
                            <td>
                                {{ $profile->religion ?? '' }}
                            </td>
                            <td>
                                {{ $profile->caste->caste_name ?? '' }}
                            </td>
                            <td>
                                {{ $profile->handicapped ?? '' }}
                            </td>
                            <td>
                                {{ $profile->single_parent ?? '' }}
                            </td>
                            <td>
                                {{ $profile->annual_income ?? '' }}
                            </td>
                            
                            <td>
                                {{ $profile->permanent_state ?? '' }}
                            </td>
                            
                            
                            <td>
                                {{ $profile->permanent_city ?? '' }}
                            </td>
                            <td>
                                {{ $profile->permanent_add ?? '' }}
                            </td>
                            <td>
                                {{ $profile->course_type->course_type_name ?? '' }}
                            </td>
                            
                            <td>
                                {{ $profile->course_name->course_name ?? '' }}
                            </td>
                            <td>
                                {{ $profile->current_inst_name ?? '' }}
                            </td>
                            <td>
                                {{ $profile->current_year ?? '' }}
                            </td>
                            <td>
                                {{ $profile->father_occupation ?? '' }}
                            </td>
                            
                            <td>
                                {{ $profile->school_percentage ?? '' }}
                            </td>
                            <td>
                                {{ $profile->class_12_percentage ?? '' }}
                            </td>
                            <td>
                                {{ $profile->diploma_percentage ?? '' }}
                            </td>
                            <td>
                                {{ $profile->created_at ?? '' }}
                            </td>   
                            
                            <td>
                                
                                   {{$profile->ref_code}}
                            </td>

                        </tr>
                    @endforeach
                    @endforeach
                </tbody>
            </table>
        </form>
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