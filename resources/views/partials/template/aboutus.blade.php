@extends('layouts.main')
@section('content')

<style type="text/css">
	h1 { font-family: "Segoe UI"; font-size: 41px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 45.1px; } h3 { font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 15.4px; } p { font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 20px; } blockquote { font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif; font-size: 21px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 30px; } pre { font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 18.5714px; }

	.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown:hover .dropdown-content {
  display: block;
}

.desc {
  padding: 15px;
  text-align: center;
}

</style>
<div class="container">
<center><h1>ABOUT FORSTU</h1></center>

<p>
	<div class="container">
		<div class="card" style="width: 1140px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
			<div class="card-body">
				FORSTU is a platform with a mission to connect Students with different Scholarship Opportunities globally. FORSTU works as a Scholarship aggregator which helps students to search right Scholarships for them.

				Our aim is to provide support to the Scholarship Providers (Like -NGO, Corporates, Foundations, and HNI Individuals) by managing the end-to-end scholarship process with technology driven solutions in transparent and efficient manner. We aim to serve Individuals as well as organizations in designing their customized scholarship programs in alignment with their social vision.

				FORSTU also runs a Scholarship Facilitation facilitation center through which it provides Automatic Resubmission Services for Students.
			</div>
		</div>
		
	</div>
	

</p>
</div>
	<br>
	
	<br>


<div class="container">
		
<center><h1 style="text-align: left;" >SCHOLARSHIP FACILITATION CENTRE</h1></center>

<hr>
<br>
<p>
	<div class="row">
		<div class="col-md-12">
			<div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none; margin-top: 20px;">
						<div class="card-body">
							Scholarship Facilitation Centre is the onestop platform for students where there application will be forwarded to all eligible scholarship providers across india.FORSTU matches the available Scholarships according to Student Profile and will forward it to respective Scholarship Providers.
              <hr>
							<a href="{{route('register')}}" class="btn btn-primary btn-xs" style="text-align: right; margin-top: 7px;" >Register Now</a>
			</div>
		</div>
			
	</div>
	
	</div>

				
</p>
</div>
{{--

<div class="container">
    <h1>Types of Scholarships</h1>
  <hr>
  <div class="row">
    <div class="col-md-2 mb-3">
        <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Merit Based Scholarships</a>

  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Merit Cum Means Scholarships</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Income Based Scholarships</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="sports-tab" data-toggle="tab" href="#sports" role="tab" aria-controls="sports" aria-selected="false">Sports Scholarships</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="crisis-tab" data-toggle="tab" href="#crisis" role="tab" aria-controls="crisis" aria-selected="false">Crisis Based Scholarships</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="abroad-tab" data-toggle="tab" href="#abroad" role="tab" aria-controls="abroad" aria-selected="false">Study Abroad Scholarship</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="loan-tab" data-toggle="tab" href="#loan" role="tab" aria-controls="loan" aria-selected="false">Loan Scholarship</a>
  </li>
</ul>
    </div>
    <!-- /.col-md-4 -->
        <div class="col-md-10">
      <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <h2>Merit Based Scholarships</h2>
    <p>Merit scholarships are typically awarded to students with academic excellence, athletic, or artistic achievements. Many providers offer scholarships to students who have high grades as well as leadership roles, SAT/ACT scores, and involvement in community service.</p>
    <div class="dropdown">
    	 <img src="{{asset('external/img/b.png')}}" width="25%" >
    	 <div class="dropdown-content">
  			<img src="{{asset('external/img/b.png')}}" alt="Cinque Terre" width="50%">
  			<div class="desc">Beautiful Cinque Terre</div>
  		</div>
    </div>
   

  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <h2>Merit Cum Means Scholarships</h2>
  <p>Merit scholarships are typically awarded on the basis of academic, athletic or artistic merit, in addition to special interests. Some merit scholarships also consider financial need, but rewarding talent is the primary objective. ... The first step is to make sure you qualify for the scholarship.</p>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <h2>Income Based Scholarships</h2>
    <p>Students qualify for need-based scholarships based on their family's income. Still, many need-based scholarships take into account an applicant's grades and test scores. Applicants with great academics and financial need have many opportunities for scholarships.</p>
  
  </div>
  <div class="tab-pane fade" id="sports" role="tabpanel" aria-labelledby="sports-tab">
  <h2>Sports Scholarships</h2>
    <p>An athletic scholarship is a form of scholarship to attend a college or university or a private high school awarded to an individual based predominantly on his or her ability to play in a sport. Athletic scholarships are common in the United States, but in a majority of countries they are rare or non-existent.</p>
  
  </div>
  <div class="tab-pane fade" id="crisis" role="tabpanel" aria-labelledby="crisis-tab">
  <h2>Crisis Based Scholarships</h2>
    <p>The Educational Crisis Scholarship is an Initiative for students with financial disabilities. The primary objective of the program is to provide economic benefit to all sections of society. The ECSS Program is directly aimed at the students who are dropping out of school or college due to insufficient finance for studying for various personal and family crises. It observes that the economic benefit should reach to all sections of the society and they believe, through education an overall monetary and social development of the society is possible.</p>
  
  </div>
  <div class="tab-pane fade" id="loan" role="tabpanel" aria-labelledby="loan-tab">
  <h2>Loan </h2>
    <p>Loan Scholarships</p>
  
  </div>
</div>
    </div>
    <!-- /.col-md-8 -->
  </div>
  
  
  
</div>
--}}
<!-- /.container -->

<div class="container" style="margin-top: 50px;">
    
<center><h1 style="text-align: left;" > TYPES OF SCHOLARSHIPS</h1></center>
<hr>

</div>
<div class="container">
  
    
  
  <div class="card-deck">
  <div class="card">
    
    <div class="card-body">
    
        <center><h5 class="card-title"><strong>Merit Based Scholarship</strong></h5></center>
        <p class="card-text">Merit scholarships are typically awarded to students with academic excellence, athletic, or artistic achievements. Many providers offer scholarships to students who have high grades as well as leadership roles, SAT/ACT scores, and involvement in community service.</p>     
    </div>
    
  </div>
  <div class="card">
    
    <div class="card-body">
      <center><h5 class="card-title"><strong>Income Based Scholarship</strong></h5></center>
      <p class="card-text">Students qualify for need-based scholarships based on their family's income. Still, many need-based scholarships take into account an applicant's grades and test scores. Applicants with great academics and financial need have many opportunities for scholarships.</p>
    </div>
    
  </div>
  <div class="card">
    
    <div class="card-body">
      <center><h5 class="card-title"><strong>Merit besed Scholarship</strong></h5></center>
      <p class="card-text">Merit scholarships are typically awarded on the basis of academic, athletic or artistic merit, in addition to special interests. Some merit scholarships also consider financial need, but rewarding talent is the primary objective.The first step is to make sure you qualify scholarship.</p>
      
    </div>
    
  </div>
  <div class="card">
    
    <div class="card-body">
      <center><h5 class="card-title"><strong>Crisis Based Scholarship</strong></h5></center>
      <p class="card-text">The Educational Crisis Scholarship Support (ECSS) program is an HDFC Bank Parivartan Initiative for students with financial disabilities. The primary objective of the program is to provide economic benefit to all sections of society.</p>
      
    </div>
    
  </div>


</div>
</div>
</div>
<div class="container" style="margin-top: 30px;">
  <div class="card-deck">
  <div class="card">
    
    <div class="card-body">
      <center><h5 class="card-title"><strong>Study Abroad Scholarship</strong></h5></center>
      <p class="card-text">A study abroad scholarship is a monetary award for students to use toward the expenses of their program such as travel, course, credits, books and lodging. Students must apply for scholarships and some can be very competitive while others are underutilized. </p>


            
    </div>
    
  </div>
  <div class="card">
    
    <div class="card-body">
      <center><h5 class="card-title"><strong>Loan Scholarship</strong></h5></center>
      <p class="card-text">Loan scholarship is one time scholarship award (which do not cover the full cost of study) and selected candidates have to repay the loan in five equal instalments of 20% between third and seventh year. Candidates must begin to repay earlier than 3rd year if they have started earning.</p>


            
    </div>
    
  </div>

  <div class="card" >
    
    <div class="card-body">
      <center><h5 class="card-title"><strong>Sports Scholarship</strong></h5></center>
      <p class="card-text">An athletic scholarship is a form of scholarship to attend a college or university or a private high school awarded to an individual based predominantly on his or her ability to play in a sport, in a majority of countries they are rare or non-existent.</p>


            
    </div>
    
  </div>

  <div class="card">
    
    <div class="card-body">
      <center><h5 class="card-title"><strong>Fellowships Scholarships</strong></h5></center>
      <p class="card-text">In academic settings, when people say "fellowship," they are generally referring to a monetary award given to a scholar to pay for his or her academic pursuits. A fellowship is typically a merit-based scholarship for advanced study of an academic subject.</p> </div>


    </div>
  </div>
</div>
<br>
<br>
 <div class="container" style="margin-top: 10px center;">

<div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
 padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
  <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFJxlsQaWc&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
  </iframe>
</div>
<a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFJxlsQaWc&#x2F;view?utm_content=DAFJxlsQaWc&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener">FORSTU Seminar PPT</a> by Sujay Joshi

@endsection