@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.scholarshipAchiever.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.scholarship-achievers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.scholarshipAchiever.fields.id') }}
                        </th>
                        <td>
                            {{ $scholarshipAchiever->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.scholarshipAchiever.fields.student_name') }}
                        </th>
                        <td>
                            {{ $scholarshipAchiever->student_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.scholarshipAchiever.fields.collegename') }}
                        </th>
                        <td>
                            {{ $scholarshipAchiever->collegename }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.scholarshipAchiever.fields.course') }}
                        </th>
                        <td>
                            {{ $scholarshipAchiever->course }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.scholarshipAchiever.fields.students_city') }}
                        </th>
                        <td>
                            {{ $scholarshipAchiever->students_city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.scholarshipAchiever.fields.schemename') }}
                        </th>
                        <td>
                            {!! $scholarshipAchiever->schemename !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.scholarshipAchiever.fields.scholarshipamount') }}
                        </th>
                        <td>
                            {{ $scholarshipAchiever->scholarshipamount }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.scholarship-achievers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection