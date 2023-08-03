@extends('layouts.collegesociety')
@section('content')


<center><h1>{{$college->college_name}} Dashboard</h1></center>
<hr>

     
    

<div class="container-fluid">
   
    <div class="row">
        <div class="col-md-3">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
                <div class="card-header bg-transparent">
                    
                    <h5 class="card-title">Total <br> Students</h5>
                </div>
                <div class="card-body">
                  {{count($profiles)}} 
                </div>
            </div>
        </div>
        
        
        <div class="col-md-3">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
                <div class="card-header bg-transparent">
                    
                    <h5 class="card-title">Applications<br> Processed </h5>
                </div>
                <div class="card-body">
                     {{count($application_processed)}}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
                <div class="card-header bg-transparent">
                    
                    <h5 class="card-title">Scholarships <br>Awarded</h5>
                </div>
                <div class="card-body">
                   {{$awarded}} 
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
                <div class="card-header bg-transparent">
                    
                    <h5 class="card-title">Fund  <br>Disbursed</h5>
                </div>
                <div class="card-body">
                    {{$funddisbursed}} 
                </div>
            </div>
        </div>
        {{--
        <div class="col-md-2">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
                <div class="card-header bg-transparent">
                    
                    <h5 class="card-title">Amount <br>Disbursed</h5>
                </div>
                <div class="card-body">
                    1
                </div>
            </div>
        </div>
        --}}

    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.caste.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table  table-bordered table-striped table-hover datatable datatable-Caste">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            Student Name
                        </th>
                        <th>
                            Scholarship Name
                        </th>
                        <th>Application Status</th>
                        <th>Application Date</th>
                        <th>Application PDF</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($application_processed as $application)
                        <tr>
                            <td>

                            </td>
                            <td>
                               {{$application->name}}
                            </td>
                            <td>
                            	{{$application->scheme_name}}
                            </td>
                            <td>
                            	{{$application->status}}
                            </td>
                            <td>
                            	{{  \Carbon\Carbon::parse($application->created_at)->format('j F Y') }}
                            </td>
                            <td>
                                @if(isset($application->applicationpdf))
  							<a href="{{$application->applicationpdf}}"  target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                            @endif
                            </td>
                            

                        </tr>
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
@can('caste_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.castes.massDestroy') }}",
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
  let table = $('.datatable-Caste:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection