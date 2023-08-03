@extends('layouts.admin')
@section('content')


<h1>Edit Status</h1>
<table class="table table-striped">
	<thead class="thead-dark">
		<th>Scholarship ID</th>
 	<th>Scholarship Name</th>
 	<th>Application Status</th>
 	</thead>
@foreach($studstatus as $scholarships)
 
 <tr>
 	<td>{{$scholarships->id}}</td>
 	<td>
 		{{$scholarships->scheme_name}}
 	</td>
 	<td>
 		{{$scholarships->status}} 
 		<form method="GET" action="{{route('updatescholarshipstatus',$scholarships->id)}}" enctype="multipart/form-data">
            @csrf
        
 		<button type="submit" class="btn btn-primary">Edit Status</button>
 	</form>
 	</td>
 </tr>

 

@endforeach
</table>
@endsection

{{--
ALTER TABLE `stud_statuses` ADD `id` INT(10) NOT NULL AUTO_INCREMENT AFTER `updated_at`, ADD PRIMARY KEY (`id`);
--}}