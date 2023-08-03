@extends('layouts.collegesociety')
@section('content')
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
                            College Name
                        </th>
                        <th>
                            College Code
                        </th>
                        <th>
                            Action&nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listcolleges as $key => $listcollege)
                        <tr data-entry-id="{{ $listcollege->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $listcollege->college_name ?? '' }}
                            </td>
                            <td>
                                {{ $listcollege->ref_code ?? '' }}
                            </td>
                            <td>
                                
                                    <a class="btn btn-xs btn-primary" href="{{route('college_detail',$listcollege->ref_code)}}">
                                        View Details
                                    </a>
                               

                               

                                

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

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

@endsection