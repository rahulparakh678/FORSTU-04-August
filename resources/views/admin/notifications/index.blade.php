@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Notifications
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table  table-bordered table-striped table-hover datatable datatable-Caste">
                <thead>
                    <tr>
                        <th width="10">
                            ID
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Time Stamp
                        </th>
                        <th>
                            Action&nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($studentProfiles as $key => $studentprofile)
                        <tr data-entry-id="{{ $studentprofile->id }}">
                            <td>
                                {{ $studentprofile->id ?? '' }}
                            </td>
                            <td>
                                {{ $studentprofile->fullname ?? '' }}
                            </td>
                            <td>
                                {{ $studentprofile->updated_at ?? '' }}
                            </td>
                            <td>
                                <a class="btn btn-xs btn-info" href="">
                                        Show Profile
                                    </a>
                                     <button class="btn btn-xs btn-danger remove-btn">Remove</button>
                                {{--
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
                                --}}
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
 $(document).ready(function () {
        // Event listener for remove button click
        $('.remove-btn').on('click', function () {
            var row = $(this).closest('tr');
            var userId = row.data('entry-id');

            // Send an AJAX request
            $.ajax({
                url: '/users/hide/' + userId, // Replace with your route URL
                type: 'PUT',
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        row.hide(); // Hide the row on success
                    } else {
                        alert('Error hiding the row. Please try again.');
                    }
                },
                error: function () {
                    alert('Error hiding the row. Please try again.');
                }
            });
        });
    });

</script>
@endsection