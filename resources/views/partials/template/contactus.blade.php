@extends('layouts.main')
@section('content')

<style type="text/css">
	
body {
    font-family: 'Rubik', sans-serif;
    color: #757575;
    font-size: 18px;
    line-height: 32px;
}

.thm-container {
    width: 100%;
    max-width: 1200px;
    padding-left: 15px;
    padding-right: 15px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}

.contact-form-content {
    background: #F5F6FA;
    padding: 80px 0;
    padding-left: 80px;
    padding-right: 80px;
}

.thm-container .title {
    margin-bottom: 50px;
}

.thm-container .title span {
    font-family: 'Rubik', sans-serif;
    font-size: 20px;
    color: #FF4328;
}

.thm-container .title h2 {
    color: #212121;
    font-size: 60px;
    line-height: 60px;
    font-weight: bold;
}

.contact-form input, 
.contact-form textarea {
    border: none;
    outline: none;
    width: 100%;
    height: 68px;
    border-radius: 35px;
    background: #fff;
    color: #757575;
    font-size: 16px;
    padding-left: 50px;
    margin-bottom: 20px;
    display: block;
}

.contact-form textarea {
    height: 182px;
    padding-top: 20px;
}

.thm-btn {
    border: none;
    outline: none;
    display: inline-block;
    vertical-align: middle;
    background: #191970;
    color: #FFFFFF;
    border-radius: 35px;
    font-family: 'Rubik';
    font-weight: 500;
    font-size: 16px;
    padding: 18px 69px;
    -webkit-transition: all .4s;
    transition: all .4s;
}

.contact-info {
    margin-left: -30px;
    border: 2px solid #EBEDF4;
    padding-top: 75px;
    padding-bottom: 80px;
}

.single-contact-info h4 {
    color: #212121;
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 10px;
}

.contact-info .social a {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    color: #fff;
    font-size: 18px;
    line-height: 59px;
    text-align: center;
    line-height: 50px;
    margin-top: 10px;
    display:inline-block;
    font-family: FontAwesome;
    margin:5px;
}

.contact-info .social a.fa-instagram {
    background: #FEC931;
}

.contact-info .social a.fa-whatsapp {
    background: #075E54;
}

.contact-info .social a.fa-facebook-f {
    background: #2884C6;
}

.contact-info .social a.fa-youtube {
    background: #FF4328;
}


</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Rubik:400,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik:400,500" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="thm-container">
	@if(session('message'))
                    <div class="row md-12">
                        <div class="col-lg-12">
                            <div class="alert alert-primary" role="alert">{{ session('message') }}</div>
                        </div>
                    </div>
    @endif
         <div class="row">
             <div class="col-md-8">
                 <div class="contact-form-content">
                     <div class="title">
                         <span>Contact with us</span>
                         <h2>Send Message</h2>
                     </div><!-- /.title -->
                     <form method="POST" action="{{route('enquiry')}}" enctype="multipart/form-data" class="contact-form">
        			@csrf
                         <input type="text" name="fullname" placeholder="Your full name" required> 
                         <input type="email" name="emailaddress" placeholder="Your email address" required>
                         <input type="text" name="mobile" placeholder="Mobile Number" required>
                         <textarea name="comments" placeholder="Your Message" required=></textarea>
                         <button type="submit" class="thm-btn yellow-bg">Submit Now</button>
                         <div class="form-result"></div><!-- /.form-result -->
                     </form>
                 </div><!-- /.contact-form-content -->
             </div><!-- /.col-md-8 -->
             <div class="col-md-4">
                 <div class="contact-info text-center">
                     <div class="title text-center">
                        <span>Contact info</span>
                        <h3>FORSTU EDUTECH LLP</h3>
                     </div><!-- /.title -->
                     <div class="single-contact-info">
                         <h4>Address</h4>
                         <p>Mauji Spaces, 11, Sahajeevan Society ICS Colony, Bhoslenagar, Ashok Nagar, Pune, Maharashtra 411007</p>
                     </div><!-- /.single-contact-info -->
                     <div class="single-contact-info">
                         <h4>Phone</h4>
                         <p>+91 7757039556 </p>
                     </div><!-- /.single-contact-info -->
                     <div class="single-contact-info">
                         <h4>Email</h4>
                         <p>info@forstu.co</p>
                     </div><!-- /.single-contact-info -->
                     <div class="single-contact-info">
                         <h4>Follow</h4>
                         <div class="social">
                            <a href="https://www.instagram.com/forstuofficial/" class="fab fa-instagram"></a><!--  
                             --><a href="https://www.facebook.com/FORSTUOFFICIAL/" class="fab fa-facebook-f hvr-pulse"></a><!--  
                             --><a href="https://www.youtube.com/channel/UCmpYESe5t3ICN6EOTRcBplw" class="fab fa-youtube hvr-pulse"></a>
                             <a href="https://wa.me/917757039556/?text=Hello%20I%20want%20to%20know%20more%20about%20FORSTU" class="fab fa-whatsapp hvr-pulse"></a>

                        </div><!-- /.social -->
                     </div><!-- /.single-contact-info -->
                 </div><!-- /.contact-info -->
             </div><!-- /.col-md-4 -->
         </div><!-- /.row -->
     </div>
@endsection