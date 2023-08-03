@extends('layouts.sfcngo')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.profile.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">

        <div class="table-responsive">

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
                            Current State
                        </th>
                        <th>
                            Permanent State
                        </th>
                        <th>
                            Current City
                        </th>
                        <th>
                            Permanent City
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
                        
                       
                      
                    </tr>
                    
                </thead>
                <tbody>
                    @foreach($profiles as $chunk)
                    @foreach($chunk as $key => $profile)
                        <tr data-entry-id="{{ $profile->id }}">
                            <td>
                                                               <br>
                               
                            </td>
                            <td>
                                

                              {{ $profile->id }} 
                                
                            </td>
                            <td>
                                {{ $profile->fullname ?? '' }}
                                


                                <br>

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
                                {{ $profile->current_state ?? '' }}
                            </td>
                            <td>
                                {{ $profile->permanent_state ?? '' }}
                            </td>
                            <td>
                                {{ $profile->current_city ?? '' }}
                            </td>
                            
                            <td>
                                {{ $profile->permanent_city ?? '' }}
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
                            

                        </tr>
                    @endforeach
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