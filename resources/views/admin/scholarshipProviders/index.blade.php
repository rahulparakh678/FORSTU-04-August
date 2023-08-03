@extends('layouts.admin')
@section('content')


@can('scholarship_provider_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.scholarship-providers.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.scholarshipProvider.title_singular') }}
            </a>

            <a class="btn btn-success" href="{{route('sfccreate')}}">
                ADD SFC NGO
            </a>
        </div>
    </div>
@endcan

{{--
<div class="card">
    <div class="card-header">
        {{ trans('cruds.scholarshipProvider.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
 <form method="POST" action="{{ route('save_data') }}" enctype="multipart/form-data">      @csrf
           
            <table class=" table table-bordered table-striped table-hover datatable datatable-ScholarshipProvider">
                <button type="submit" class="btn btn-primary submit_details">Submit</button>
                <thead>
                    <tr>
                        <th width="10">
                            <input type="checkbox" name="">
                        </th>
                        <th>
                            {{ trans('cruds.scholarshipProvider.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.scholarshipProvider.fields.organization_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.scholarshipProvider.fields.contact_person') }}
                        </th>
                        <th>
                            {{ trans('cruds.scholarshipProvider.fields.designation') }}
                        </th>
                        <th>
                            {{ trans('cruds.scholarshipProvider.fields.email') }}
                        </th>
                        <th>
                            Action&nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($scholarshipProviders as $key => $scholarshipProvider)
                        <tr data-entry-id="{{ $scholarshipProvider->id }}">
                            <td>
                                <input type="checkbox" name="prodid[]" value="id" class="prodid">

                            </td>
                            <td>
                                {{ $scholarshipProvider->id ?? '' }}
                            </td>
                            <td>
                                {{ $scholarshipProvider->organization_name ?? '' }}
                            </td>
                            <td>
                                {{ $scholarshipProvider->contact_person ?? '' }}
                            </td>
                            <td>
                                {{ $scholarshipProvider->designation ?? '' }}
                            </td>
                            <td>
                                {{ $scholarshipProvider->email ?? '' }}
                            </td>
                            <td>
                                @can('scholarship_provider_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.scholarship-providers.show', $scholarshipProvider->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('scholarship_provider_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.scholarship-providers.edit', $scholarshipProvider->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                {{--
                                @can('scholarship_provider_delete')
                                    <form action="{{ route('admin.scholarship-providers.destroy', $scholarshipProvider->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan
                                --}}
                            </td>

                        </tr>
                   
                </tbody>

            </table>
        </form>
          
        </div>
    </div>
</div>
--}}



<div class="container">
        <div class="row">
            <div class="col-md-6 offset-3 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h6 class="text-white">How To Store Multiple Checkbox Value In Database Using Laravel - websolutionstuff.com</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            
                        </div>
                        <form method="POST" action="{{ route('save_data') }}" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group">
                                <label><strong>Category :</strong></label><br>
                                <label><input type="checkbox" name="categories[]" value="Red"> Red</label>
                                <label><input type="checkbox" name="categories[]" value="Blue"> Blue</label>
                                <label><input type="checkbox" name="categories[]" value="Green"> Green</label>
                                <label><input type="checkbox" name="categories[]" value="Yellow"> Yellow</label>
                            </div>  

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
@section('scripts')


<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

<script type="text/javascript">

    $(document).ready(function(){
        alert('Hi');


    });
</script>
<script type="text/javascript">
    
</script>


@endsection