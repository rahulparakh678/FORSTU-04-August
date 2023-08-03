@extends('layouts.scholarshipprovider')
@section('content')

<div class="container">
<div class="row justify-content-center">

  <div class="col-md-3">
    <div class="alert alert-primary" role="alert">
     <a href="#" class="alert-link"><i class="fa fa-users fa-lg" aria-hidden="true"></i> &nbsp;  Qualified Application Count</a> 
     
     <center><h1><a href="#" class="alert-link"><?php
                                                   $count=sizeof($results);
                                                   echo "<center><h1>$count</h1></center>";
                                                  ?></a></h1>
      </center>
    </div>
    </div>
     <div class="col-md-3">
      <div class="alert alert-primary" role="alert">
      <a href="#" class="alert-link"><i class="fa fa-users fa-lg" aria-hidden="true"></i> &nbsp;  Shortlisted Candidates</a> 

       <center><h1><a href="#" class="alert-link"> <?php
     $count2=sizeof($shortlist);
     echo "<center><h1>$count2</h1></center>";
     ?></a></h1>
      </center>
     
     </div>
    </div>
    <div class="col-md-3">
      <div class="alert alert-primary" role="alert">
      <a href="#" class="alert-link"><i class="fa fa-users fa-lg" aria-hidden="true"></i> &nbsp;  Awarded Candidates</a> 
      <center><h1><a href="#" class="alert-link"> <?php
      global $count1;
     $count1=sizeof($awarded);
     echo "<center><h1>$count1</h1></center>";
     ?> </a></h1>
      </center>

     
     </div>
     
    </div>
    <div class="col-md-3">
      <div class="alert alert-primary" role="alert">
      <a href="#" class="alert-link"><i class="fa fa-users fa-lg" aria-hidden="true"></i> &nbsp;  Corpus Available</a> 
      
      <?php
      global $corpus;
      global $amt;
      $amt=$scholarship->scholarship_amount;
      $corpus=$scholarship->scholarship_corpus;
      $result=$corpus-($count1*$amt);
      ?>

        <center><h1><a href="#" class="alert-link">{{$result ?? ''}}</a></h1></center> 
     </div>
    
</div>
</div>
<div class="row">
  <div class="col-md-3">
    
    <div class="alert alert-primary" role="alert">
       <a href="#" class="alert-link"><i class="fa fa-male fa-3x  " aria-hidden="true"></i> &nbsp; Male</a> 
         <center><h1><a href="#" class="alert-link">{{$male ?? ''}}</a></h1></center>
    </div>
    
    </div>
      <div class="col-md-3">
        <div class="alert alert-primary" role="alert">
          <a href="#" class="alert-link"><i class="fa fa-female fa-3x  " aria-hidden="true"></i> &nbsp; Female</a> 
         <a> <center><h1><a href="#" class="alert-link">{{$female ?? ''}}</a></h1></center></a>
        </div>
      </div>
       <div class="col-md-3">
        <div class="alert alert-primary" role="alert">
          <a href="#" class="alert-link"><i class="fa fa-wheelchair fa-3x" aria-hidden="true"></i> &nbsp; Differently Abled</a> 
         <a><center><h1><a href="#" class="alert-link">{{$handicapped ?? ''}}</a></h1></center></a>
        </div>
      </div>
       <div class="col-md-3">
        <div class="alert alert-primary" role="alert">
          <a href="#" class="alert-link"><i class="fa fa-users fa-3x" aria-hidden="true"></i> &nbsp; Single Parent</a> 
          <a><center><h1><a href="#" class="alert-link">{{$single_parent ?? ''}}</a></h1></center></a>
        </div>
      </div>
</div>
</div>
<div class="row">
<div class="container">
  
      <div class="card">
        <div class="card-header">
            {{$scholarship->scheme_name}} Scholarship Applications
        </div>
        <div class="card-body">
          <div class="row">
            &nbsp;<a href="{{route('filteredview',$scholarship->id)}}" class="btn btn-primary " target="_blank" style="margin-bottom: 30px;">Apply Filters</a>

            <a href="{{ request()->fullUrl() }}" class="btn btn-danger" style="margin-left: 20px;margin-bottom: 30px;">Remove Applied Filter</a>
            <a href="{{route('analyticsview',$scholarship->id)}}" class="btn btn-success" style="margin-left: 20px;margin-bottom: 30px;" target="_blank">View Analytics</a>
            <br>
            <br>
          </div>
          <div class="table-responsive">
            <table class=" table table-bordered  table-hover datatable datatable-Setupscholarship">
              <thead>
                  <tr>
                   <th></th>
                    <th>Student Name</th>
                    <th>Current Status</th>
                    <th>Action</th>
                        
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                      <select class="search">
                        <option value=" " >{{ trans('global.all') }}</option
                              >
                        <option value="Application Submitted">Application Submitted</option>
                        <option value="Shortlised">Shortlised</option>
                        <option value="Awarded">Awarded</option>
                        <option value="Rejected">Rejected</option>
                      </select>
                    </td>
                    <td></td>
                  </tr>
              </thead>
              <tbody>

                @foreach($results as $result)
                 <tr>
                   <td></td>
                   <td>
                    
                    {{ $result->user_name ?? '' }}
                      
                    
                     <a href="{{ route('showprofile',[$result->user_id,$result->id]) }}" style="text-decoration: none;" target="_blank"> <i class="fa fa-eye fa-2x" aria-hidden="true" style="float: right; text-decoration: none;"></i></a>
                    
                   </td>
                   <td>
                     <span class="badge badge-warning">{{$result->status ?? ''}}</span>
                   </td>
                   <td>
                     
                                    
                                    
                                    <a href="{{route('Shortlised',$result->id)}}" class="btn btn-xs btn-dark">Shortlist</a>
                                    <a href="{{route('Rejected',$result->id)}}" class="btn btn-xs btn-danger">Better Luck Next Time</a>
                                    <a href="{{route('Awarded',$result->id)}}" class="btn btn-xs btn-success">Award Scholarship</a>
                                    <a href="{{route('funddisbursed',$result->id)}}" class="btn btn-xs btn-primary">Fund Disbursed</a>
                                    @can('scheduleinterview')
                                    <a href="#myModal" class="btn btn-xs btn-success MainNavText"  data-target="#myModal" data-toggle="modal" id="MainNavHelp">Schedule Interview</a>
                                    @endcan

  <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Interview Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body">
                  <form method="POST" action="{{route('interviewschedule')}}" enctype="multipart/form-data">
            @csrf 
                      <div class="form-group">
                        <strong><label>Interview Title</label></strong>
                        <input type="text" name="interview_title" class="form-control" value="{{$scholarship->scheme_name}} Interview" readonly>
                      </div>
                      <div class="form-group">

                        <strong><label>Duration</label></strong><br>

                        <input type="radio" id="15" name="interview_duration" value="15" required>
                        <strong><label for="15">15 Minutes</label></strong>
                        

                        <input type="radio" id="30" name="interview_duration" value="30" >
                        <strong><label for="30">30 Minutes</label></strong>

                        <input type="radio" id="60" name="interview_duration" value="60" >
                        <strong><label for="60">60 Minutes</label></strong><br>
 
                      </div>
                      <div class="form-group">
                        <strong>Interview Date & Time</strong>

                        <input type="datetime-local" id="interview_date" name="interview_date_time" class="form-control" required>
                        
                      </div>
                      <div class="form-group">
                        
                        <strong><label>Interview Type</label></strong><br>
                        <input type="radio" name="interview_type" value="phone_call" id="phone" required>Phone Call
                        <input type="radio" name="interview_type" value="video_call" id="video_call">Videocall
                        <input type="radio" name="interview_type" value="inoffice" id="inoffice">In office
                        
                        
                      </div>
                      <div class="form-group">
                        
                        <strong><label>Add Description</label></strong>
                        <textarea name="description" class="form-control" required>
                        
                        </textarea>
                      </div>
                      <input type="hidden" name="user_id" value="$result->id">
                      <input type="hidden" name="scheme_id" value="$scholarship-id">
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Book Interview Slot</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>

        </div>
    </div>

                                   
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
<script type="text/javascript">
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
   

 $('input[type=radio][name=interview_type]').change(function() {
    if (this.value == 'phone_call') {
        alert("Phone");
    }
    else if (this.value == 'video_call') {
        alert("Video Call");
    }
    else if (this.value == 'inoffice') {
        alert("inoffice");
    }
}); 
</script>
@endsection