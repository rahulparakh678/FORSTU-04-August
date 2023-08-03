@extends('layouts.student')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.css" rel="stylesheet">
<div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <h1 >Our Plans</h2>
                <p class="mt-4 title-subtitle mx-auto">Pick a plan that best describes your need</p>
            </div>
        </div>                
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="bg-white mt-3 price-box">
                    <div class="pricing-name text-center">
                        <h4 class="mb-0">Free</h4>
                    </div>
                    <div class="plan-price text-center mt-4">
                        <h1 class="text-custom font-weight-normal mb-0">Rs 0<span>/Year</span></h1>
                    </div>
                    <div class="price-features mt-5">
                        <p><i class="mdi mdi-check"></i> <span class="font-weight-bold"> Recieve for free Scholarship Updates on Whatsapp</span></p>
                        <p><i class="mdi mdi-check"></i> <span class="font-weight-bold">2000+ Scholarships Information on Forstu</span></p>
                        <p><i class="mdi mdi-check"></i> <span class="font-weight-bold">Apply for Scholarships Hosted on FORSTU</span></p>
                        
                    </div>
                    <div class="text-center mt-5">

                        @if(isset($profiles->paid))
                           
                            @if($profiles->paid =='NO')
                               
                            <a href="#" class="btn btn-custom">Free Plan is Activated.</a>
                            @elseif($profiles->paid =='YES')
                                <a href="#" class="btn btn-custom">You are already Enrolled.</a>
                            @else
                            <a href="{{route('freeplan')}}" class="btn btn-custom">Activate Free Plan</a>
                            @endif
                        @elseif(isset($profiles->id))
                            <a href="{{route('freeplan')}}" class="btn btn-custom">Activate Free Plan</a>
                        @else
                         Visit Dashboard Page & Create Profile First to Activate Free Plan  
                         {{$profiles->id ?? ''}}
                        @endif
                        {{--
                        @if(isset($profiles->paid))
                            @if($profiles->paid !=='NO')
                            <a href="{{route('freeplan')}}" class="btn btn-custom">Activate Free Plan</a>
                            @endif
                        @elseif(isset($profiles->paid))
                            @if($profiles->paid =='NO')
                                <a href="#" class="btn btn-custom">Free Plan is Activated.</a>
                            @endif
                        @else
                            <a href="{{route('freeplan')}}" class="btn btn-custom">Activate Free Plan</a>
                        @endif
                        --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white mt-3 price-box">
                    <div class="pricing-name text-center">
                        <h4 class="mb-0">Paid</h4>
                        <h5>Scholarship Facilitation Centre</h5>
                    </div>
                    <div class="plan-price text-center mt-4">
                        <h1 class="text-custom font-weight-normal mb-0">Rs 1800<span>/Year</span></h1>
                    </div>
                    <div class="price-features mt-5">
                        <p><i class="mdi mdi-check"></i><span class="font-weight-bold">We find Matching Scholarships for You</span></p>
                        <p><i class="mdi mdi-check"></i><span class="font-weight-bold">Auto Application Submission of All Matching Scholarship Applications in India.</span></p>
                        <p><i class="mdi mdi-check"></i>  <span class="font-weight-bold">Tracking Scholarship Application Status</span></p>
                        <p><i class="mdi mdi-check"></i><span class="font-weight-bold">Scholarship Interview Assistance</span></p>
                        <p><i class="mdi mdi-check"></i><span class="font-weight-bold">Scholarship Renewals</span></p>
                        
                    </div>
                    
                    @if(isset($profiles->paid))
                    @if($profiles->paid==='YES')
                        <a href="#" class="btn btn-custom">You are already enrolled.</a>
                        <a href="{{route('invoice')}}" class="btn btn-primary">Download Payment Reciept </a>
                    @endif 
                    @else
                    <div class="text-center mt-5">
                        <button class="btn btn-custom" id="blinkCheckoutPayment" name="submit">Pay Now.</button>
                        
                    </div>
                    @endif
                </div>
            </div>
            {{--
            <div class="col-lg-4">
                <div class="bg-white mt-3 price-box">
                    <div class="pricing-name text-center">
                        <h4 class="mb-0">Paid</h4>
                        <h5>Student 2 Scholar Program</h5>
                    </div>
                    <div class="plan-price text-center mt-4">
                        <h1 class="text-custom font-weight-normal mb-0">Rs 1800<span>/Year</span></h1>
                    </div>
                    <div class="price-features mt-5">
                        <p><i class="mdi mdi-check"></i><span class="font-weight-bold">We find Matching Scholarships for You</span></p>
                        <p><i class="mdi mdi-check"></i><span class="font-weight-bold">Auto Application Submission of All Matching Scholarship Applications in India.</span></p>
                        <p><i class="mdi mdi-check"></i>  <span class="font-weight-bold">Tracking Scholarship Application Status</span></p>
                        <p><i class="mdi mdi-check"></i><span class="font-weight-bold">Scholarship Interview Assistance</span></p>
                        <p><i class="mdi mdi-check"></i><span class="font-weight-bold">Scholarship Renewals</span></p>
                        
                    </div>
                    <div class="text-center mt-5">
                        <button class="btn btn-custom" id="blinkCheckoutPayment1" name="submit">Pay Now.</button>
                    @if(isset($profiles->paid))
                    @if($profiles->paid==='YES')
                        <a href="#" class="btn btn-custom">You are already enrolled.</a>
                        <a href="{{route('invoice')}}" class="btn btn-primary">Download Payment Reciept </a>
                    @endif 
                    @else
                    <div class="text-center mt-5">
                        <button class="btn btn-custom" id="blinkCheckoutPayment" name="submit">Pay Now.</button>
                        
                    </div>
                    @endif
                </div>
            </div>
            --}}
        </div>
    </div>
 <div class="whatsappFloater"><a href="https://api.whatsapp.com/send?phone=919373606334&amp;&amp;text=Hi!&nbsp;I’d like to chat with an scholarship expert and know more about FORSTU.&amp;source=&amp;data=" target="_blank" class="color-white"><img src="https://leverageedunew.s3.amazonaws.com/whatsapp-icon-2.svg" style="height:60px;width:60px" id="indexed"></a></div>
<style type="text/css">



.text-custom,
.navbar-custom .navbar-nav li a:hover,
.navbar-custom .navbar-nav li a:active,
.navbar-custom .navbar-nav li.active a,
.service-box .services-icon,
.price-features p i,
.faq-icon,
.social .social-icon:hover {
    color: #88C417 !important;
}

.bg-custom,
.btn-custom,
.timeline-page .timeline-item .date-label-left::after,
.timeline-page .timeline-item .duration-right::after,.back-to-top:hover {
    background-color: #88C417;
}

.btn-custom,
.custom-form .form-control:focus,
.social .social-icon:hover,
.registration-input-box:focus {
    border-color: #88C417;
}

.service-box .services-icon,
.price-features p i {
    background-color: #def6b0;
}

.btn-custom:hover,
.btn-custom:focus,
.btn-custom:active,
.btn-custom.active,
.btn-custom.focus,
.btn-custom:active,
.btn-custom:focus,
.btn-custom:hover,
.open > .dropdown-toggle.btn-custom {
    border-color: #88C417;
    background-color: #88C417;
}


.price-box {
    padding: 40px 50px;
    box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
    border-radius: 10px;
    position: relative;
    z-index: 1;
    overflow: hidden;
    -moz-transition: ease all 0.35s;
    -o-transition: ease all 0.35s;
    -webkit-transition: ease all 0.35s;
    transition: ease all 0.35s;
    top: 0;
}

.plan-price h1 span {
    font-size: 16px;
    color: #000;
}

.price-features p i {
    height: 20px;
    width: 20px;
    display: inline-block;
    text-align: center;
    line-height: 20px;
    font-size: 14px;
    border-radius: 50%;
    margin-right: 20px;
}

.whatsappFloater, .whatsappFloater-cf {
                                    position: fixed;
                                    bottom: 20px;
                                    z-index: 9999;
        }
        .whatsappFloater {
    right: 20px;
}

</style>
@endsection
@section('scripts')      

<script type="text/javascript">
  document.getElementById("blinkCheckoutPayment").addEventListener("click", function(){
            openBlinkCheckoutPopup('<?php echo $result['orderId']?>','<?php echo $result['txnToken']?>','<?php echo $result['amount']?>');
          }
         );
         
        function openBlinkCheckoutPopup(orderId, txnToken, amount)
         {
          // console.log(orderId, txnToken, amount);
          var config = {
            "root": "",
            "flow": "DEFAULT",
            "data": {
              "orderId": orderId, 
              "token": txnToken, 
              "tokenType": "TXN_TOKEN",
              "amount": amount
         },
            "handler": {
            "notifyMerchant": function(eventName,data){
              console.log("notifyMerchant handler function called");
              console.log("eventName => ",eventName);
              console.log("data => ",data);
              location.reload();
            } 
            }
          };
           if(window.Paytm && window.Paytm.CheckoutJS){
              // initialze configuration using init method 
              window.Paytm.CheckoutJS.init(config).then(function onSuccess() {
                // after successfully updating configuration, invoke checkoutjs
                window.Paytm.CheckoutJS.invoke();
              }).catch(function onError(error){
                console.log("error => ",error);
              });
          }
        }

       
</script>
<script type="text/javascript">
  document.getElementById("blinkCheckoutPayment1").addEventListener("click", function(){
            openBlinkCheckoutPopup('<?php echo $result['orderId']?>','<?php echo $result['txnToken']?>','<?php echo $result['amount']?>');
          }
         );
         
        function openBlinkCheckoutPopup(orderId, txnToken, amount)
         {
          // console.log(orderId, txnToken, amount);
          var config = {
            "root": "",
            "flow": "DEFAULT",
            "data": {
              "orderId": orderId, 
              "token": txnToken, 
              "tokenType": "TXN_TOKEN",
              "amount": amount, 
         },
            "handler": {
            "notifyMerchant": function(eventName,data){
              console.log("notifyMerchant handler function called");
              console.log("eventName => ",eventName);
              console.log("data => ",data);
              location.reload();
            } 
            }
          };
           if(window.Paytm && window.Paytm.CheckoutJS){
              // initialze configuration using init method 
              window.Paytm.CheckoutJS.init(config).then(function onSuccess() {
                // after successfully updating configuration, invoke checkoutjs
                window.Paytm.CheckoutJS.invoke();
              }).catch(function onError(error){
                console.log("error => ",error);
              });
          }
        }

       
</script>

@endsection