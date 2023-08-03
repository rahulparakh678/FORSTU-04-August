@extends('layouts.admin')
@section('content')
@can('scholarship_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.scholarships.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.scholarship.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.scholarship.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Scholarship">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.scholarship.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.scholarship.fields.scheme_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.scholarship.fields.company_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.scholarship.fields.category') }}
                        </th>
                        
                        <th>
                            {{ trans('cruds.scholarship.fields.scholarship_amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.scholarship.fields.last_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.scholarship.fields.contact_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.scholarship.fields.contact_phone_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.scholarship.fields.status') }}
                        </th>
                        <th>
                            Mode of Application
                        </th>
                        <th>
                            Expected Month
                        </th>
                        <th>
                            Action&nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($scholarships as $key => $scholarship)
                        <tr data-entry-id="{{ $scholarship->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $scholarship->id ?? '' }}
                                <br>
                                @can('scholarship_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.scholarships.show', $scholarship->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan
                                @can('scholarship_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.scholarships.edit', $scholarship->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('scholarship_delete')
                                    <form action="{{ route('admin.scholarships.destroy', $scholarship->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan
                                <a href="{{route('showapp',$scholarship->id)}}" class="btn btn-xs btn-primary">View Applications</a>
                            </td>
                            <td>
                                {{ $scholarship->scheme_name ?? '' }}
                            </td>
                            <td>
                                {{ $scholarship->company_name->organization_name ?? '' }}
                            </td>
                            <td>
                                {{ $scholarship->category->category_name ?? '' }}
                            </td>
                            
                            <td>
                                {{ $scholarship->scholarship_amount ?? '' }}
                            </td>
                            <td>
                                {{ $scholarship->last_date ?? '' }}
                            </td>
                            <td>
                                {{ $scholarship->contact_email ?? '' }}
                            </td>
                            <td>
                                {{ $scholarship->contact_phone_number ?? '' }}
                            </td>
                            <td>
                                {{ App\Scholarship::STATUS_SELECT[$scholarship->status] ?? '' }}
                            </td>
                            <td>
                                {{ App\Scholarship::MODE_SELECT[$scholarship->mode] ?? '' }}
                            </td>
                            <td>
                                {{ App\Scholarship::MONTH_SELECT[$scholarship->expected_month] ?? '' }}
                            </td>
                            <td>
                                

                                

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