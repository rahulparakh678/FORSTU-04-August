@extends('layouts.admin')
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
                            User ID
                        </th>
                        <th>Student Name</th>
                        <th>Scheme Name</th>
                        <th>Status</th>
                        
                    </tr>
                   
                    
                </thead>
                <tbody>
                   @foreach($statuses as $status)
                   <tr>
                   	<td><br>{{$status->id}}</td>
                   	<td>{{$status->user_id}}</td>
                   	<td>{{$status->user->name}}</td>
                   	<td>{{$status->scheme_name}}</td>
                   	<td>{{$status->status}}</td>
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
