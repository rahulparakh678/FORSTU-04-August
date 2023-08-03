@extends('layouts.scholarshipprovider')
@section('content')

<ul class="nav nav-pills mb-3 bg-dark" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-banner-tab" data-toggle="pill" href="#pills-banner" role="tab" aria-controls="pills-banner" aria-selected="true">Gender</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-email-tab" data-toggle="pill" href="#pills-email" role="tab" aria-controls="pills-email" aria-selected="false">Crisis Wise</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-article-tab" data-toggle="pill" href="#pills-article" role="tab" aria-controls="pills-article" aria-selected="false">State Wise</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-social-tab" data-toggle="pill" href="#pills-social" role="tab" aria-controls="pills-social" aria-selected="false">Annual Income Wise</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-offline-tab" data-toggle="pill" href="#pills-offline" role="tab" aria-controls="pills-offline" aria-selected="false">Percentage Wise</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" id="pills-online-tab" data-toggle="pill" href="#pills-online" role="tab" aria-controls="pills-online" aria-selected="false">Course Level Wise</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-onground-tab" data-toggle="pill" href="#pills-onground" role="tab" aria-controls="pills-contact" aria-selected="false">Family Occupation Wise</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-banner" role="tabpanel" aria-labelledby="pills-banner-tab">
  
  <div class="photo-gallery">
    <div class="container">
      <div class="row photos">
        <div class="col-md-12">
           <div id="chart_div" style="width:800px; height:500px"></div>

        </div>
        
        
      </div>
    </div>
    
  </div>


  </div>
  <div class="tab-pane fade" id="pills-email" role="tabpanel" aria-labelledby="pills-email-tab">
    
   <div id="donuchart" style="width: 900px; height: 500px;"></div>
    
  </div>
  <div class="tab-pane fade" id="pills-article" role="tabpanel" aria-labelledby="pills-article-tab">
    State Wise

   <div id="visualization" style="margin: 5em"> </div>
  </div>
  <div class="tab-pane fade" id="pills-social" role="tabpanel" aria-labelledby="pills-social-tab">
    
    <div id="incomechart" style="width: 900px; height: 500px;"></div></div>
  
  <div class="tab-pane fade" id="pills-offline" role="tabpanel" aria-labelledby="pills-offline-tab">
    <div class="row">
      <div class="col-md-6">
        <div id="percentagechart" style="width: 900px; height: 500px;"></div>
      </div>
      <div class="col-md-6">
        <div id="percentage" style="width: 900px; height: 500px;"></div>
      </div>
    </div>
  </div>
   <div class="tab-pane fade" id="pills-online" role="tabpanel" aria-labelledby="pills-online-tab">

     Coming Soon
{{--

     @foreach($course_scholarships as $course_scholarship )
       {{$course_scholarship->course_id}}
       @if(App\StudentCourses::where('id',$course_scholarship->course_id)->exists())

                            <?php
                            $result=App\StudentCourses::where('id',$course_scholarship->course_id)->first();
                            echo $result->course_name;
                           ?>
                        @endif
        
     @endforeach
     --}}
   </div>
    <div class="tab-pane fade" id="pills-onground" role="tabpanel" aria-labelledby="pills-onground-tab">Coming Soon </div>
</div>

    
   
  
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Crisis', 'Answer'],
          ['Male', {{$mprofiles}}],
          ['Female',{{$fprofiles}}],
          ['Others',{{$other}}],
          
        ]);

        var options = {
          title: 'Application Distribution:Gender Wise ',
          
          width:1000,
          height:500,
        };

        function selectHandler() {
          var selectedItem = chart.getSelection()[0];
          if (selectedItem) {
            var crisis = data.getValue(selectedItem.row, 0);
            
            if(crisis=='Male')
            {
              
              
              window.open("{{URL::to('/f1view',$s_id)}}");
            }

            else if(crisis=='Female')
            {
              
              window.open("{{URL::to('/f2view',$s_id)}}");
            }
            else
            {
              window.open("{{URL::to('/f3view',$s_id)}}");
            }
            
            
          }
        }
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);

        google.visualization.events.addListener(chart, 'select', selectHandler);

        
        
      }
     
</script>
<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Crisis', 'Answer'],
          ['Single Parent', {{$sp}}],
          ['Differently Abled',{{$handicapped}}],
          ['Orphan',{{$orphan}}],
          
        ]);

        var options = {
          title: 'Application Distribution: Crisis Wise',
          pieHole: 0.4,
          width:900,
          height:500,
        };

        function selectHandler() {
          var selectedItem = chart.getSelection()[0];
          if (selectedItem) {
            var crisis = data.getValue(selectedItem.row, 0);
            
            if(crisis=='Single Parent')
            {
              
              
              window.open("{{URL::to('/f4view',$s_id)}}");
            }
            else if(crisis=='Differently Abled')
            {
              
              window.open("{{URL::to('/f5view',$s_id)}}");
            }
            else
            {
              
              window.open("{{URL::to('/f6view',$s_id)}}");
            }
            
            
          }
        }
        var chart = new google.visualization.PieChart(document.getElementById('donuchart'));
        chart.draw(data, options);

        google.visualization.events.addListener(chart, 'select', selectHandler);

        
        
      }
</script>
<script type="text/javascript">
  google.load('visualization', '1', {'packages': ['geochart'],'mapsApiKey': 'AIzaSyCK7oDNRLsxd9UDFnk66zR3yRVMm7EaPvE'});
google.setOnLoadCallback(drawVisualization);

function drawVisualization() {
  var data = google.visualization.arrayToDataTable([
    ['State Code', 'State', 'Application Count'],
    
    ['IN-UP','Uttar Pradesh',{{$UttarPradesh}}],
    ['IN-MH','Maharashtra',{{$maharashtra}}],
    ['IN-BR','Bihar',{{$Bihar}}],
    ['IN-WB','West Bengal',{{$WestBengal}}],
    ['IN-MP','Madhya Pradesh',{{$MadhyaPradesh}}],
    ['IN-TN','Tamil Nadu',{{$TamilNadu}}],
    ['IN-RJ','Rajasthan',{{$Rajasthan}}],
    ['IN-KA','Karnataka',{{$Karnataka}}],
    ['IN-GJ','Gujarat',{{$Gujarat}}],
    ['IN-AP','Andhra Pradesh',{{$andhp}}],
    ['IN-OR','Odisha',{{$Odisha}}],
    ['IN-TG','Telangana',{{$Telangana}}],
    ['IN-KL','Kerala',{{$Kerala}}],
    ['IN-JH','Jharkhand',{{$Jharkhand}}],
    ['IN-AS','Assam',{{$assam}}],
    ['IN-PB','Punjab',{{$Punjab}}],
    ['IN-CT','Chhattisgarh',{{$Chhattisgarh}}],
    ['IN-HR','Haryana',{{$Haryana}}],
    ['IN-JK','Jammu and Kashmir', {{$JK}}],
    ['IN-UT', 'Uttarakhand',{{$Uttarakhand}}],
    ['IN-HP','Himachal Pradesh',{{$HimachalPradesh}}],
    ['IN-TR','Tripura',{{$Tripura}}],
    ['IN-ML','Meghalaya',{{$Meghalaya}}],
    ['IN-MN','Manipur',{{$Manipur}}],
    ['IN-NL','Nagaland',{{$Nagaland}}],
    ['IN-GA','Goa', {{$Goa}}],
    ['IN-AR','Arunachal Pradesh',{{$arup}}],
    ['IN-MZ','Mizoram', {{$Mizoram}}],
    ['IN-SK','Sikkim',{{$Sikkim}}],
    ['IN-DL','Delhi',{{$Delhi}}],
    ['IN-PY','Puducherry',{{$Puducherry}}],
    ['IN-CH','Chandigarh',{{$Chandigarh}}],
    ['IN-AN','Andaman and Nicobar Islands', {{$aani}}],
    ['IN-LD','Lakshadweep',{{$Lakshadweep}}],
    ['IN-LA','Ladakh',{{$Ladakh}}],
  ]);
  
  var opts = {
    region: 'IN',
    displayMode: 'regions',
    resolution: 'provinces',
    width: 940, 
    height: 480
  };
  var geochart = new google.visualization.GeoChart(
      document.getElementById('visualization'));
  geochart.draw(data, opts);
};

</script>
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Crisis', 'Answer'],
          ['Below Rs 50 Thousand', {{$bw50}}],
          ['Between 50 Thousand - Rs 1 Lakh',{{$bw501}}],
          ['Between 1 Lakh- Rs 3 Lakh',{{$bw15}}],
          ['Between 3 Lakh- Rs 5 Lakh',{{$bw3}}],
          ['Above Rs 5 Lakh',{{$bw5}}],
          
        ]);

        var options = {
          title: 'Application Distribution:Annual Income Wise Annually',
          
          width:1000,
          height:500,
        };

        function selectHandler() {
          var selectedItem = chart.getSelection()[0];
          if (selectedItem) {
            var crisis = data.getValue(selectedItem.row, 0);
            
            if(crisis=='Below Rs 50 Thousand')
            {
              
              
              
              window.open("{{URL::to('/f7view',$s_id)}}");
            }

            else if(crisis=='Between 50 Thousand - Rs 1 Lakh')
            {
              
              window.open("{{URL::to('/f8view',$s_id)}}");
            }
            else if(crisis=='Between 1 Lakh- Rs 3 Lakh')
            {
              
              window.open("{{URL::to('/f9view',$s_id)}}");
            }
            else if(crisis=='Between 3 Lakh- Rs 5 Lakh')
            {
              
              window.open("{{URL::to('/f10view',$s_id)}}");
            }
            else if(crisis=='Above Rs 5 Lakh')
            {
              
              window.open("{{URL::to('/f11view',$s_id)}}");
            }
            
            
            
          }
        }
        var chart = new google.visualization.PieChart(document.getElementById('incomechart'));
        chart.draw(data, options);

        google.visualization.events.addListener(chart, 'select', selectHandler);

        
        
      }
</script>
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Percentage', 'Answer'],
          ['Above 90%', {{$ab90}}],
          ['Between 80-90%',{{$ab80}}],
          ['Between 70-80%',{{$ab70}}],
          ['Between 60-70%',{{$ab60}}],
          ['Below 60%',{{$ab50}}],
          
        ]);

        var options = {
          title: 'Application Distribution:Previous Exam Percentage',
          
          width:700,
          height:500,
        };

        function selectHandler() {
          var selectedItem = chart.getSelection()[0];
          if (selectedItem) {
            var crisis = data.getValue(selectedItem.row, 0);
            
            if(crisis=='Above 90%')
            {
              
              
              
              window.open("{{URL::to('/f12view',$s_id)}}");
            }

            else if(crisis=='Between 80-90%')
            {
              
              window.open("{{URL::to('/f13view',$s_id)}}");
            }
            else if(crisis=='Between 70-80%')
            {
              
              window.open("{{URL::to('/f14view',$s_id)}}");
            }
            else if(crisis=='Between 60-70%')
            {
              
              window.open("{{URL::to('/f15view',$s_id)}}");
            }
            else if(crisis=='Below 60%')
            {
              
               window.open("{{URL::to('/f16view',$s_id)}}");
            }
            
            
            
          }
        }
        var chart = new google.visualization.PieChart(document.getElementById('percentagechart'));
        chart.draw(data, options);

        google.visualization.events.addListener(chart, 'select', selectHandler);

        
        
      }
</script>

<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Percentage', 'Answer'],
          ['Above 90%', {{$ssc90}}],
          ['Between 80-90%',{{$ssc80}}],
          ['Between 70-80%',{{$ssc70}}],
          ['Between 60-70%',{{$ssc60}}],
          ['Below 60%',{{$ssc50}}],
          
        ]);

        var options = {
          title: 'Application Distribution:Class 10 Percentage',
          
          width:700,
          height:500,
        };

        function selectHandler() {
          var selectedItem = chart.getSelection()[0];
          if (selectedItem) {
            var crisis = data.getValue(selectedItem.row, 0);
           
            if(crisis=='Above 90%')
            {
              
              
             
              window.open("{{URL::to('/f17view',$s_id)}}");
            }

            else if(crisis=='Between 80-90%')
            {
              
              window.open("{{URL::to('/f18view',$s_id)}}");
            }
            else if(crisis=='Between 70-80%')
            {
              
              window.open("{{URL::to('/f19view',$s_id)}}");
            }
            else if(crisis=='Between 60-70%')
            {
              
              window.open("{{URL::to('/f20view',$s_id)}}");
            }
            else if(crisis=='Below 60%')
            {
              
               window.open("{{URL::to('/f21view',$s_id)}}");
            }
            else{
              
            }
            
            
          }
        }
        var chart = new google.visualization.PieChart(document.getElementById('percentage'));
        chart.draw(data, options);

        google.visualization.events.addListener(chart, 'select', selectHandler);

        
        
      }
</script>

@parent
@endsection