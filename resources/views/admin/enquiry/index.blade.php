@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-header">
        Enquiries List
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Caste">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                           Id
                        </th>
                        <th>
                           Full Name
                        </th>
                        <th>
                           Organization Name
                        </th>
                        <th>
                        	Email Address
                        </th>
                        <th>
                        	Mobile Number
                        </th>
                        <th>
                        	Designation
                        </th>
                        <th>
                        	Comments
                        </th>
                        <th>Enquiry Date

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($enquiries as $enquiry)
                        <tr >
                            <td></td>
                            <td>
                                {{ $enquiry->id ?? '' }}
                            </td>
                            <td>
                                {{ $enquiry->fullname ?? '' }}
                            </td>
                            <td>
                                {{ $enquiry->orgname ?? '' }}
                            </td>
                            <td>
                                {{ $enquiry->emailaddress ?? '' }}
                            </td>
                            <td>
                                {{ $enquiry->mobile ?? '' }}
                            </td>
                            <td>
                                {{ $enquiry->designation ?? '' }}
                            </td>
                            <td>
                                {{ $enquiry->comments ?? '' }}
                            </td>
                            <td>
                                {{  \Carbon\Carbon::parse($enquiry->created_at)->format('j F Y ') }}
                            	
                                
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