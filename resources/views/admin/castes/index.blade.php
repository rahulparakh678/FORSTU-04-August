@extends('layouts.admin')
@section('content')
@can('caste_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.castes.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.caste.title_singular') }}
            </a>
        </div>
    </div>
@endcan
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
                            {{ trans('cruds.caste.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.caste.fields.caste_name') }}
                        </th>
                        <th>
                            Action&nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($castes as $key => $caste)
                        <tr data-entry-id="{{ $caste->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $caste->id ?? '' }}
                            </td>
                            <td>
                                {{ $caste->caste_name ?? '' }}
                            </td>
                            <td>
                                @can('caste_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.castes.show', $caste->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('caste_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.castes.edit', $caste->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('caste_delete')
                                    <form action="{{ route('admin.castes.destroy', $caste->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

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