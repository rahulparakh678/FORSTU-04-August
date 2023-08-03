<!DOCTYPE html>
<html lang="en">

<head>
    <title>FORSTU</title>


   {{--@include('feed::links')--}}
    @include('partials.template.head')

    

    
        <!-- Font Awesome -->
<script src="https://use.fontawesome.com/0b0c8d0220.js"></script>

    <!-- Google Tag Manager -->

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5FSZ96"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
   
   <!-- Header Section Begin -->
  
    @include('partials.template.nav')
    @include('partials.template.hero')
    
    <!-- Home About Begin -->
   
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="home__about__text" >
                        <div class="section-title" >
                            <center><h2>ASSITANCE FOR SCHOLARSHIPS AVAILABLE IN INDIA</h2></center>
                            <center><h4>Finance your Education With 2000+ Private Scholarships Available in India</h4></center>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="home__about__item" style="border-left: 5px solid #88C417 ; padding-left: 10px;">
                                    <h4 >1 Register Now </h4>
                                    <p>Register Now & Create your profile and submit the correct educational details and upload required documents. </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="home__about__item" style="border-left: 5px solid #88C417 ; padding-left: 10px;">
                                    <h4>2 Scholarship Facilitation Centre</h4>
                                    <p>Enroll in Scholarship Facilitation Centre(SFC) and we will forward your application to all eligible scholarship providers in India according to your course</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="home__about__item" style="border-left: 5px solid #88C417 ; padding-left: 10px;">
                                    <h4>3 Recieve Scholarship</h4>
                                    <p>Incase you are selected as scholar,you will recieve notification from FORSTU. Recieve Scholarship Benefit directly into Bank Account.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                             <div class="col-md-4">
                                <a href="{{route('register')}}" class="primary-btn">Register FOR FREE</a><br><br>
                            </div>
                            <div class="col-md-5">
                                {{--<a href="{{route('register')}}" class="primary-btn" style="margin-left:200px;">Schedule a Free Scholarship Consultation</a><br><br>--}}
                                <button type="button" class="primary-btn" data-toggle="modal" data-target="#exampleModal">
                                    Schedule Free Scholarship Consultation
                                </button><br><br>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel" style="text-align:center;">Schedule Free Scholarship Consultation</h5>
                                                <br><br>
                                                
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                                
                                            </div>
                                            <div>
                                                <p style="margin-left: 20px;">
                                                    Take the first step towards your scholarship journey.Get free consultation regarding available scholarship opportunities for you profile.
                                                </p>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="fullname" placeholder="Enter your full name"><br>
                                                    <input type="text" class="form-control" name="email" placeholder="Enter your Emailaddress"><br>
                                                    <input type="text" class="form-control" name="mobile" placeholder="Enter your 10 digit Mobile Number"><br>
                                                </div>
                                            
                                            </div>
                                            <div class="modal-footer">
                                                 
                                                 <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <a href="{{route('aboutus')}}" class="primary-btn">Know More About Us</a><br><br>
                            </div>
                        </div>
                                             
                        
                    </div>
                </div>
                
            </div>
        </div>
    <hr>
       
    @include('partials.template.impact')
<hr>
    <!-- Counter End -->
@include('partials.template.category')
   <!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Recognition from Industry & Government</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>
                                        <img class=" img-fluid" src="https://forstubucket1.s3.ap-south-1.amazonaws.com/logos/startupindia.png">
                                    </p>
                                    <h4 class="card-title">DPIIT </h4>
                                    <h4 class="card-title">Recognition</h4>
                                    
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">DPIIT Recogntion</h4>

                                    <p class="card-text">Recognized as a Startup by the Department for Promotion of Industry and Internal Trade.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>
                                    <img class=" img-fluid" src="https://forstubucket1.s3.ap-south-1.amazonaws.com/logos/nitiayogg.png"></p>
                                    
                                    <h4 class="card-title">Top </h4>
                                    <h4 class="card-title">Social Innovators</h4>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Top 30 Social Innovators</h4>
                                    <p class="card-text">One of the TOP 30 Best Social Innovators by Atal Innovation Mission(NITI AAYOG) & United Nations Development Programme India in association with Citi Foundation.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>
                                    <img class=" img-fluid" src="https://forstubucket1.s3.ap-south-1.amazonaws.com/logos/aw.png"></p>
                                    <h4 class="card-title">AWS</h4>
                                    <h4 class="card-title">Activate</h4>
                                    
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">AWS Activate</h4>

                                    <p class="card-text">Enrolled Under AWS Activate Program.Access to AWS Cloud Services totalling $1000.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://forstubucket1.s3.ap-south-1.amazonaws.com/logos/indovention.png"></p>
                                    <h4 class="card-title">Best</h4>
                                    <h4 class="card-title">Business Plan</h4>
                                    
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Best Business Plan</h4>
                                    <p class="card-text">Awarded First Prize in the Business Plan Competion at Indovention 2019 organized by M.E.S Garware College of Commerce Pune,Maharashtra India.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            
        </div>
    </div>
</section>
   
  {{--  @include('partials.template.testimonial') --}}
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-6499c407-2043-4f31-9634-be6d40b7d6ff"></div>
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Partnered Institutions & NGO's</h5>
        <div class="row">
            <!-- Team member -->
            
            <div class="col-xs-12 col-sm-6 col-md-2">
                
                <div class="card" style="min-height: 150px;">
<img class=" img-fluid" src="https://forstubucket1.s3.ap-south-1.amazonaws.com/logos/walchandlogo.png" alt="card image" >
                </div>
                            
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2">
                
                <div class="card" style="min-height: 150px;">
                               <img class=" img-fluid" src="https://forstubucket1.s3.ap-south-1.amazonaws.com/logos/anantaseva.png" alt="card image">
                </div>
                            
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="card" style="min-height: 150px;">
                    <img class=" img-fluid" src="https://forstubucket1.s3.ap-south-1.amazonaws.com/logos/yug.png" alt="card image">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="card" style="min-height: 150px;">
                    <img class=" img-fluid" src="https://forstubucket1.s3.ap-south-1.amazonaws.com/logos/amp.png" alt="card image">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="card" style="min-height: 150px;">
                    <img class=" img-fluid" src="https://forstubucket1.s3.ap-south-1.amazonaws.com/logos/pure.png" alt="card image">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="card" style="min-height: 150px;">
                    <img class=" img-fluid" src="https://forstubucket1.s3.ap-south-1.amazonaws.com/logos/ydf.png" alt="card image">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="card" style="min-height: 150px;">
                    <img class=" img-fluid" src="https://forstubucket1.s3.ap-south-1.amazonaws.com/logos/joshconnect.png" alt="card image">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="card" style="min-height: 150px;">
                    <img class=" img-fluid" src="https://forstubucket1.s3.ap-south-1.amazonaws.com/logos/ulf.png" alt="card image">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="card" style="min-height: 150px;">
                    <img class=" img-fluid" src="https://forstubucket1.s3.ap-south-1.amazonaws.com/logos/rsml.png" alt="card image">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="card" style="min-height: 150px;">
                    <img class=" img-fluid" src="https://forstubucket1.s3.ap-south-1.amazonaws.com/logos/isbms.png" alt="card image">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="card" style="min-height: 150px;">
                    <img class=" img-fluid" src="https://forstubucket1.s3.ap-south-1.amazonaws.com/logos/edifice.png" alt="card image">
                </div>
            </div>


            <!-- ./Team member -->
            
            
            
            
        </div>
    </div>

</section>
    @include('partials.template.footer')

   <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N5FSZ96');</script>
<!-- End Google Tag Manager --> 

</body>
<style type="text/css">
    
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #88C417;
    border-color: #88C417;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color:#323232;

    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #88C417 !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #88C417 !important;
}

.frontside .card .card-body img {
    
    
}


</style>

</html>