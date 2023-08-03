@extends('layouts.main')
@section('content')

  
	
<div class="container">
  <div class="row ">
    @foreach($scholarships as $scholarship)
   
    
    <div class="col-md-4">
      <div class="card border-success">
        <img class="card-img-top" src="{{ asset('avatar\main2.png')}}" alt="Card image cap" style="width: 50%; align-self: center;">
        <div class="card-body">
          <div class="card-title" style="filter: blur(8px);"><strong><center>{{
            $scholarship->scheme_name}}</center></strong>
          </div>

            <hr>
          
            <i class="fa fa-trophy" aria-hidden="true"></i>&nbsp;
            <strong>Scholarship Amount : </strong>
           <label style="filter: blur(8px);">{{$scholarship->scholarship_amount}}</label>  
          
            <hr>
           {{--
            <a href="{{ route('scholarshipdetails',$scholarship->id)}}">
              <center><button class="btn btn-success ">View Details</button></center></a>
            --}}
            <a href="{{route('login')}}"><center>
              <button class="btn btn-success">Login to View Details</button></center></a>
              <html>
<button type="button" onclick="window.open('https://forstu.authlink.me', '_self')" style="border: none; background: transparent; outline: none;">
<img src="https://otpless-cdn.s3.ap-south-1.amazonaws.com/otpless_button.svg" style="width:300px" />
</button>
</html>
        </div>
      </div>
      <br><br>
    </div>
    
    

    @endforeach

  </div>
  	{{$scholarships->links()}}
</div>

@endsection

@section('scripts')


@endsection

