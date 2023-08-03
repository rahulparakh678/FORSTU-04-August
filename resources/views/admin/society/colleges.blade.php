@extends('layouts.admin')
@section('content')


<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#exampleModal1">
  Add College
</button>


<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add College</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('storecollege')}}" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
            <label>College Name</label>
            <input type="text" name="college_name" value="" class="form-control">        
        </div>
        <div class="form-group">
            <label>REFCODE</label>
            <input type="text" name="ref_code" class="form-control" value="">
        </div>
        <div class="form-group">
            <label>College Email Address</label>
            <input type="text" name="college_email" class="form-control" value="">
        </div>

        
        <div class="form-group">
                <label class="required">College Society</label>
                <select class="form-control select2 {{ $errors->has('college_society') ? 'is-invalid' : '' }}" name="collegetrust_name" id="college_society" required>
                    @foreach($college_society as $id => $college_societies)
                        <option value="{{$college_societies->collegetrust_name }}" {{ old('$college_societies->collegetrust_name') == $college_societies->collegetrust_name ? 'selected' : '' }}>{{$college_societies->collegetrust_name }}</option>
                    @endforeach
                </select>
                @if($errors->has('course_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_type_helper') }}</span>
        </div>
        
        
        
                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
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
                            {{ trans('cruds.caste.fields.id') }}
                        </th>
                        <th>
                            College Name
                        </th>
                        <th>
                            Trust Name
                        </th>
                        <th>
                            Action&nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($colleges as $key => $college)
                        <tr data-entry-id="{{ $college->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $college->id ?? '' }}
                            </td>
                            <td>
                                {{ $college->college_name ?? '' }}
                            </td>
                            <td>
                                {{$college->collegetrust_name ?? ''}}
                            </td>
                            <td>
                                

                                @can('caste_edit')
                                    <a class="btn btn-xs btn-info" href="#">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('caste_delete')
                                    <form action="#" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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