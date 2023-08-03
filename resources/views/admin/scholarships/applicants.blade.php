@extends('layouts.admin')
@section('content')

<h1>Hello</h1>

<div class="container">
<div class="row justify-content-center">

  <div class="col-md-3">
    <div class="alert alert-primary" role="alert">
     <a href="#" class="alert-link"><i class="fa fa-users fa-lg" aria-hidden="true"></i> &nbsp;  Application Count</a> 
     
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
                        <option value="#" >{{ trans('global.all') }}</option
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
                    
                    {{$result->user_name ?? ''}}
                      

                     <a href="{{ route('showprofile', $result->user_id) }}" style="text-decoration: none;" target="_blank"> <i class="fa fa-eye fa-2x" aria-hidden="true" style="float: right; text-decoration: none;"></i></a>
                   </td>
                   <td>
                     <span class="badge badge-warning">{{$result->status ?? ''}}</span>
                   </td>
                   <td>
                     
                                    
                                    
                                    <a href="{{route('Shortlised',$result->id)}}" class="btn btn-xs btn-dark">Shortlist</a>
                                    <a href="{{route('Rejected',$result->id)}}" class="btn btn-xs btn-danger">Better Luck Next Time</a>
                                    <a href="{{route('Awarded',$result->id)}}" class="btn btn-xs btn-success">Award Scholarship</a>

                                   
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
@can('scholarship_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.scholarships.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Scholarship:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection