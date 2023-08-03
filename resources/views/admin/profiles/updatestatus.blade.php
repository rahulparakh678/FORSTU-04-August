@extends('layouts.admin')
@section('content')





<div class="card">
    <div class="card-header">
        Edit Scholarship Status
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('updatestatus',$scholarships->id)}}" enctype="multipart/form-data">
            @csrf
            <label>User Id</label>
            <input type="text" name="user_id" class="form-control" value="{{$scholarships->user_id}}" readonly>
            <label>Scholarship Name</label>    
            <input type="text" name="scheme_name" class="form-control" value="{{$scholarships->scheme_name}}" readonly>

            <label>Current Status</label>
            <input type="text"  class="form-control" value="{{$scholarships->status}}" readonly><br>
            <label>Attachment</label> 
            @if(isset($scholarships->applicationpdf))
            <a href="{{$scholarships->applicationpdf}}"  target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i>Application PDF</a>  <input type="file" name="applicationpdf">
            @endif<br>
            <label>New Status</label>
            <select class="form-control" name="status">
                    <option value="Application Submitted">Application Submitted</option>

                    <option value="Shortlised">Shortlised</option>
                    <option value="Awarded">Awarded</option>
                    <option value="Fund Disbursed">Fund Disbursed</option>
                    <option value="Better Luck Next Time">Better Luck Next Time</option>
                </select><br>
            <button class="btn btn-danger">Update Scholarship Status</button>
        </form>
    </div>
</div>
        
@endsection