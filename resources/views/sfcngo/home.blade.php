@extends('layouts.sfcngo')
@section('content')
<div class="container-fluid">
     <center><h1>Dashboard</h1></center>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
               

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  Welcome {{Auth::user()->name}}  


                    
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
   
    <div class="row">
        <div class="col-md-2">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
                <div class="card-header bg-transparent">
                    
                    <h5 class="card-title">Total <br> Students</h5>
                </div>
                <div class="card-body">
                    {{count($profiles)}}
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
                <div class="card-header bg-transparent">
                    
                    <h5 class="card-title"> Completed<br> Profiles</h5>
                </div>
                <div class="card-body">
                    {{$profile__activate_count}}
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
                <div class="card-header bg-transparent">
                    
                    <h5 class="card-title">KYC <br> Completed</h5>
                </div>
                <div class="card-body">
                    {{$kyc_count}}
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
                <div class="card-header bg-transparent">
                    
                    <h5 class="card-title">Applications<br> Processed </h5>
                </div>
                <div class="card-body">
                    {{count($application_processed)}}
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
{{--
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div id="piechart"></div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

            <script type="text/javascript">
// Load google charts
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                // Draw the chart and set the chart values
                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                  ['Gender', 'Hours per Day'],
                  ['Male', {{count($male)}}],
                  ['Female', {{count($female)}}],
                  
                ]);

                  // Optional; add a title and set the width and height of the chart
                  var options = {'title':'My Average Day', 'width':550, 'height':400};

                  // Display the chart inside the <div> element with id="piechart"
                  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                  chart.draw(data, options);
                }
            </script>
        </div>
    </div>
    
</div>

--}}
@endsection
@section('scripts')
@parent

@endsection