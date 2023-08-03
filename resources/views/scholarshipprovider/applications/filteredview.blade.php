@extends('layouts.scholarshipprovider')
@section('content')

<div class="content">
<div class="row">
  <div class="col-lg-12">
      
      <div class="card">
        <div class="card-header">
             Scholarship Applications
        </div>
        <div class="card-body">
          <a href="{{ request()->fullUrl() }}" class="btn btn-danger">Remove Applied Filter</a>
          <a href="#" class="btn btn-success">View Analytics</a>
          <br><br>
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-Setupscholarship">

              <thead>
                  <tr>
                   <th width="5"></th>
                    <th width="10">Student Name</th>
                    <th width="10">Gender</th>
                    <th width="10">Religion</th>
                    <th width="10">Differently Abled</th>
                    <th width="10">Single Parent</th>
                    <th width="10">Current State</th>
                    <th width="10">Native State</th>
                    <th width="10">Course Level</th>
                    <th width="10">Current Course</th>
                    <th width="10">Current Year</th>
                    <th >Action</th>
                        
                  </tr>
                  <tr>
                    <td></td>
                    <td><input class="search" type="text" placeholder="{{ trans('global.search') }}"></td>
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
                        <option >{{ trans('global.all') }}</option>
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
                        <select class="search">
                            <option >{{ trans('global.all') }}</option
                              >
                              @foreach(App\Coursetype::all() as $key => $label)
                                <option value="{{$label}}">{{$label->course_type_name}}</option>
                              @endforeach
                            
                        </select>
                    </td>
                    <td>
                       <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                      <select  class="search">
                        <option value="#">All</option>
                        <option value="First Year">First Year</option>
                        <option value="Second Year">Second Year</option>
                        <option value="Third Year">Third Year</option>
                        <option value="Fourth Year">Fourth Year</option>
                        <option value="Fifth Year">Fifth Year</option>
                      </select>
                    </td>
                    <td>
                      
                    </td>
                  </tr>
              </thead>
              <tbody>
                
                @foreach($profiles as $profile)
                 <tr>
                   <td></td>
                   <td>
                    
                    {{$profile->fullname ?? ''}}
                      
                     
                     <a href="{{ route('showprofile', [$profile->user_id,$s_id]) }}" style="text-decoration: none;" target="_blank"> <i class="fa fa-eye fa-2x" aria-hidden="true" style="float: right; text-decoration: none;"></i></a>
                     
                   </td>
                   
                   <td>
                     {{--
                           <?php
                    $profiles=App\StudentProfile::where('user_id',$result->user_id)->first();
                    echo $profiles->gender;
                    ?> 
                    --}}           
                           {{$profile->gender ?? ''}}      
                   </td>
                   <td>
                     {{--
                           <?php
                    $profiles=App\StudentProfile::where('user_id',$result->user_id)->first();
                    echo $profiles->religion;
                    ?>
                    --}}
                    {{$profile->religion ?? ''}}       
                   </td>
                   <td>
                      {{--
                           <?php
                    $profiles=App\StudentProfile::where('user_id',$result->user_id)->first();
                    echo $profiles->handicapped;
                    ?>
                    --}} 
                    {{$profile->handicapped ?? ''}}
                   </td>
                   <td>
                      {{--
                           <?php
                    $profiles=App\StudentProfile::where('user_id',$result->user_id)->first();
                    echo $profiles->single_parent;
                    ?>
                    --}} 
                    {{$profile->single_parent ?? ''}}
                   </td>
                   <td>
                      {{--
                           <?php
                    $profiles=App\StudentProfile::where('user_id',$result->user_id)->first();
                    echo $profiles->current_state;
                    ?>
                    --}}
                    {{$profile->current_state}} 
                   </td>
                   <td>
                    {{--
                    <?php
                    $profiles=App\StudentProfile::where('user_id',$result->user_id)->first();
                    echo $profiles->permanent_state;
                    ?>
                    --}}
                    {{$profile->current_state}} 
                  </td>
                  <td>
                    {{--
                     <?php
                    }
                    }
                    $profiles=App\StudentProfile::where('user_id',$result->user_id)->first();
                    echo $profiles->course_type->course_type_name ?? '' ;
                    ?> 
                    --}}
                    {{$profile->course_type->course_type_name ?? ''}}
                  </td>
                   <td>
                    {{--
                     <?php
                    }
                    }
                    }
                    $profiles=App\StudentProfile::where('user_id',$result->user_id)->first();
                    echo $profiles->course_name->course_name ?? '' ;
                    ?>
                    --}}
                    {{$profile->course_name->course_name ?? ''}} 
                   </td>
                   <td>
                    {{--
                     <?php
                    }
                    }
                    }
                    }
                    $profiles=App\StudentProfile::where('user_id',$result->user_id)->first();
                    echo $profiles->course_name->current_year ?? '' ;
                    ?>
                    --}}
                    {{$profile->current_year}}
                   </td>
                   <td></td>
                 </tr>

                @endforeach
                

              </tbody>
                            
            </table>
           </div> 
          
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
    order: [[ 1, 'DESC' ]],
    pageLength: 10,
  });

 table = $('.datatable-Setupscholarship:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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