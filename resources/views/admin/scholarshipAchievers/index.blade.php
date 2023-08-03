@extends('layouts.admin')
@section('content')
@can('scholarship_achiever_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.scholarship-achievers.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.scholarshipAchiever.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.scholarshipAchiever.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ScholarshipAchiever">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.scholarshipAchiever.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.scholarshipAchiever.fields.student_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.scholarshipAchiever.fields.collegename') }}
                        </th>
                        <th>
                            {{ trans('cruds.scholarshipAchiever.fields.course') }}
                        </th>
                        <th>
                            {{ trans('cruds.scholarshipAchiever.fields.students_city') }}
                        </th>
                        <th>
                            {{ trans('cruds.scholarshipAchiever.fields.schemename') }}
                        </th>
                        <th>
                            Action&nbsp;
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
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($scholarshipAchievers as $key => $scholarshipAchiever)
                        <tr data-entry-id="{{ $scholarshipAchiever->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $scholarshipAchiever->id ?? '' }}
                                <br>
                                @can('scholarship_achiever_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.scholarship-achievers.show', $scholarshipAchiever->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('scholarship_achiever_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.scholarship-achievers.edit', $scholarshipAchiever->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('scholarship_achiever_delete')
                                    <form action="{{ route('admin.scholarship-achievers.destroy', $scholarshipAchiever->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan
                            </td>
                            <td>
                                {{ $scholarshipAchiever->student_name ?? '' }}
                            </td>
                            <td>
                                {{ $scholarshipAchiever->collegename ?? '' }}
                            </td>
                            <td>
                                {{ $scholarshipAchiever->course ?? '' }}
                            </td>
                            <td>
                                {{ $scholarshipAchiever->students_city ?? '' }}
                            </td>
                            <td>
                                {!! $scholarshipAchiever->schemename ?? '' !!}
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
@can('scholarship_achiever_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.scholarship-achievers.massDestroy') }}",
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
  let table = $('.datatable-ScholarshipAchiever:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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