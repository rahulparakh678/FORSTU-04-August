@extends('layouts.admin')
@section('content')

<div class="row">
	<label>
		<h6>Import Student Profiles</h6></label>

	<form action="{{route('studentprofileimport')}} " method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
    
    
                        <input type="file" name="excel_file" required>
                        <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
	</form>
</div>
     
            

@endsection