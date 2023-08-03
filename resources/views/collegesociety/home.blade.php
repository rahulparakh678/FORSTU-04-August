@extends('layouts.collegesociety')
@section('content')


<div class="container-fluid">
   
    <div class="row">
    	
    	<div class="col-md-2">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
                <div class="card-header bg-transparent">
                    
                    <h5 class="card-title">Total <br> Colleges</h5>
                </div>
                <div class="card-body">
               {{--   {{count($profiles)}} --}} {{$college}}
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
                <div class="card-header bg-transparent">
                    
                    <h5 class="card-title">Total <br> Students</h5>
                </div>
                <div class="card-body">
               {{--   {{count($profiles)}} --}} {{-- {{$student_count}} --}} {{$i}}
                </div>
            </div>
        </div>
        
        
        <div class="col-md-2">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
                <div class="card-header bg-transparent">
                    
                    <h5 class="card-title">Applications<br> Processed </h5>
                </div>
                <div class="card-body">
                {{--  {{count($application_processed)}}  --}} {{$application_processed }}
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
                <div class="card-header bg-transparent">
                    
                    <h5 class="card-title">Scholarships <br>Awarded</h5>
                </div>
                <div class="card-body">
                   {{$awarded}} 
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
                <div class="card-header bg-transparent">
                    
                    <h5 class="card-title">Fund  <br>Disbursed</h5>
                </div>
                <div class="card-body">
                    {{$funddisbursed}} 
                </div>
            </div>
        </div>
        {{--
        <div class="col-md-2">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
                <div class="card-header bg-transparent">
                    
                    <h5 class="card-title">Amount <br>Disbursed</h5>
                </div>
                <div class="card-body">
                    1
                </div>
            </div>
        </div>
        --}}

    </div>
</div>


@endsection