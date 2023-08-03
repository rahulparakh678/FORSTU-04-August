@extends('layouts.scholarshipprovider')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{route('createscholarship')}} ">
                Launch Scholarship Programme
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.setupscholarship.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Setupscholarship">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.setupscholarship.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.setupscholarship.fields.scheme_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.setupscholarship.fields.company_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.setupscholarship.fields.category') }}
                        </th>
                       
                        <th>
                            {{ trans('cruds.setupscholarship.fields.eligibility_criteria') }}
                        </th>
                        <th>
                            {{ trans('cruds.setupscholarship.fields.last_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.setupscholarship.fields.scholarship_amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.setupscholarship.fields.contact_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.setupscholarship.fields.contact_phone_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.setupscholarship.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($setupscholarships as $key => $setupscholarship)
                        <tr data-entry-id="{{ $setupscholarship->id }}">
                            <td>
                                <br>
                                <a class="btn btn-xs btn-primary" href="{{route('showscholarship',$setupscholarship->id)}} ">
                                        {{ trans('global.view') }}
                                    </a>
                                

                                
                                    <a class="btn btn-xs btn-info" href="{{route('editscholarship',$setupscholarship->id)}}">
                                        {{ trans('global.edit') }}
                                    </a>
                                

                                
                                    <form action="{{route('deletescholarship',$setupscholarship->id)}}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>

                                    <a href="{{route('sco',$setupscholarship->id)}}" class="btn btn-xs btn-primary">View Applications</a>
                            </td>
                            <td>
                                {{ $setupscholarship->id ?? '' }}
                            </td>
                            <td>
                                {{ $setupscholarship->scheme_name ?? '' }}
                            </td>
                            <td>
                                {{ $setupscholarship->company_name->organization_name ?? '' }}
                            </td>
                            <td>
                                {{ $setupscholarship->category->category_name ?? '' }}
                            </td>
                            
                            <td>
                                {{ $setupscholarship->eligibility_criteria ?? '' }}
                            </td>
                            <td>
                                {{ $setupscholarship->last_date ?? '' }}
                            </td>
                            <td>
                                {{ $setupscholarship->scholarship_amount ?? '' }}
                            </td>
                            <td>
                                {{ $setupscholarship->contact_email ?? '' }}
                            </td>
                            <td>
                                {{ $setupscholarship->contact_phone_number ?? '' }}
                            </td>
                            <td>
                                {{ App\Setupscholarship::STATUS_SELECT[$setupscholarship->status] ?? '' }}
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

  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('massDestroy') }}",
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


  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Setupscholarship:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection