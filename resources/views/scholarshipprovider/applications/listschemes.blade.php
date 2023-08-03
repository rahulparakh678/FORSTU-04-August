@extends('layouts.scholarshipprovider')
@section('content')

    
<div class="card">
    <div class="card-header">
        {{ trans('cruds.setupscholarship.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Setupscholarship">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.setupscholarship.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.setupscholarship.fields.scheme_name') }}
                        </th>
                        
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listschemes as $key => $listschemes)
                        <tr >
                            <td>
                                {{ $listschemes->id ?? '' }}
                            </td>
                            <td>
                                {{ $listschemes->scheme_name ?? '' }}
                            </td>
                            <td>
                                <a href="{{route('showapplications',$listschemes->id)}}" class="btn btn-primary">View All Applications</a>
                            </td>
                            
                            
                            
                            
                            
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
