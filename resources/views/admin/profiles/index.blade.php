@extends('layouts.admin')
@section('content')
@can('profile_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.profiles.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.profile.title_singular') }}
            </a>
            <a class="btn btn-success" href="{{route('studstatus')}}">
                 Add SFC Scholarship Status 
            </a>
{{--
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Add SFC Scholarship Status
</button>
--}}

{{--
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
        <form method="POST" action="{{route('storestatus')}}" enctype="multipart/form-data">
            @csrf
        
        <div class="form-group">
            <label>Full Name</label>
            <label class="required" for="student_name">{{ trans('cruds.scholarshipAchiever.fields.student_name') }}</label>
                <select class="form-control select2" name="user_id" id="student_name">
                    @foreach(App\StudentProfile::all() as $student_name)
                        <option value="{{$student_name->user_id}}">{{$student_name->fullname}}</option>
                    @endforeach
                    
                </select>
        </div>
        <div class="form-group">
                <label class="required" for="scheme_name">Scholarship Name</label>
                <input type="text" name="scheme_name" class="form-control">

        </div>
        <div class="form-group">
                <label>Attachments</label> <br>
                <input type="file" name="applicationpdf">
        </div>
        <div class="form-group">
                <label class="required" for="student_name">Status</label>
                <select class="form-control" name="status">
                    <option value="Application Submitted">Application Submitted</option>

                    <option value="Shortlised">Shortlised</option>
                    <option value="Awarded">Awarded</option>
                    <option value="Fund Disbursed">Fund Disbursed</option>
                    <option value="Better Luck Next Time">Better Luck Next Time</option>
                </select>
        </div>
         <div class="form-group">
                <label>Application Date</label>
                <input type="datetime-local" name="created_at" class="form-control">
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
--}}

            <a class="btn btn-success" href="{{route('smsstatus')}}">
                Add SMS Scholarship Status
            </a>
            <a class="btn btn-success" href="{{route('editstudstatus')}}">
                Edit Scholarship Status
            </a>
            <a class="btn btn-success" href="{{route('allstatus')}}">
                View All Status
            </a>
             <a class="btn btn-success" href="{{route('filterview')}}">
                Filtered View
            </a>
            <a class="btn btn-success" href="{{route('profileremarks')}}">
                Profile Wise Remarks
            </a>
            <form action="{{route('uploadUsers')}} " method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
    
    
                        <input type="file" name="excel_file" required>
                        <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                        </form>     
            
            <span data-href="{{route('export')}}" id="export" class="btn btn-success btn-sm" onclick="exportTasks(event.target);">Export Student Profiles</span>
            
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.profile.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">

        @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
        @endif
        <div class="table-responsive">
<form method="POST" action="{{ route('save_data') }}" enctype="multipart/form-data">

                            @csrf
            <table class="table table-bordered table-striped table-hover datatable datatable-Profile">

              
                <thead>
                    <tr>

                  
                        <th width="10">

                        </th>
                        <th  width="10">
                            Profile {{ trans('cruds.profile.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.profile.fields.full_name') }}
                        </th>
                        
                        
                        <th>
                            Email Address
                        </th>
                        <th width="10%">
                          Mobile Number
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
                        <tr >
                            <td>

                                <label><input type="checkbox" name="categories[]" value="{{$profile->id}}"> Red</label>
                                    <br>
                                    @can('profile_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.profiles.show', $profile->id) }}" target="_blank">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan
                                
                                @can('profile_delete')
                                    <form action="{{ route('admin.profiles.destroy', $profile->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan                            
                                
                             
                            </td>
                            <td>
                                {{ $profile->id }}

                                
                                
                                
                            </td>
                            <td>
                                {{ $profile->fullname ?? '' }}
                                
                                
                            </td>

                            
                            <td>
                                 {{$profile->email}}
                            </td>
                            <td>
                                {{$profile->mobile ??''}}
                            </td>
                            
                            
                            
                                                                            
                            
                            
                            
                            
                            
                            
                           
                            
                            
                            
                            
                                
                            
                            <td>
                                
                                   {{$profile->ref_code ?? ''}}
                            </td>

                        </tr>
                    @endforeach
                    @endforeach

                
                </form>
                </tbody>
            </table>
            <button type="submit" class="btn btn-success btn-sm">Save</button>
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
<script>
   function exportTasks(_this) {
      let _url = $(_this).data('href');
      window.location.href = _url;
   }
</script>
@endsection