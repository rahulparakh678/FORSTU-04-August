@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.scholarshipProvider.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.scholarship-providers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.scholarshipProvider.fields.id') }}
                        </th>
                        <td>
                            {{ $scholarshipProvider->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.scholarshipProvider.fields.organization_name') }}
                        </th>
                        <td>
                            {{ $scholarshipProvider->organization_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.scholarshipProvider.fields.contact_person') }}
                        </th>
                        <td>
                            {{ $scholarshipProvider->contact_person }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.scholarshipProvider.fields.designation') }}
                        </th>
                        <td>
                            {{ $scholarshipProvider->designation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.scholarshipProvider.fields.email') }}
                        </th>
                        <td>
                            {{ $scholarshipProvider->email }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.scholarship-providers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection