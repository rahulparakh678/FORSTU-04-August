@extends('layouts.main')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form>
  			<div class="form-row">
  				<div class="form-group col-md-6">
      				<label for="inputEmail4">Contact Person Full Name</label>
      				<input type="text" class="form-control" id="inputEmail4" placeholder="Email">
    			</div>
    			<div class="form-group col-md-6">
      				<label for="inputPassword4">Mobile Number</label>
      				<input type="mobile" class="form-control" id="mobile" placeholder="Mobile Number">
    			</div>
    			<div class="form-group col-md-12">

      				<label for="inputPassword4">College Name</label>
      				<input type="test" class="form-control" id="college_name" placeholder="College Name">
    			</div>
    			<div class="form-group col-md-12">
      				<label for="inputEmail4">Email</label>
      				<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    			</div>
    			
  			</div>
  			<small>By Filling this form I allow FORSTU Team to contact for me onboarding procedures.</small>
  			<br>
  			<button type="submit" class="btn btn-primary">Register</button>
			</form>
			<br>
		</div>

		<div class="col-md-6">

			<style type="text/css">
				img.img-fluid{
    
    width:  100px;
    height: 100px;
    
}
			</style>
			<div class="row">
				<img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/en/thumb/7/72/IISER%2C_PUNE_Logo.svg/1200px-IISER%2C_PUNE_Logo.svg.png" alt="card image">
				<img class="img-fluid" src="https://forstubucket1.s3.ap-south-1.amazonaws.com/logos/walchandlogo.png" alt="card image" >
				<img class="img-fluid" src="https://seeklogo.com/images/V/vjti-college-logo-707F46CDA8-seeklogo.com.png" alt="card image">
			
			</div>
			<br>
			<div class="row">
				<img class="img-fluid" src="http://www.coep.org.in/velociracers/assets/images/coeplogo-1998x2222.png" alt="card image">
				<img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/en/thumb/1/12/IIT_Guwahati_Logo.svg/1200px-IIT_Guwahati_Logo.svg.png" alt="card image">
				<img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/9/92/Amity_University_Mumbai_Logo.jpg" alt="card image">
				
				
				
			</div>
			

			

		</div>
		
	</div>
</div>

@endsection

