@extends('layouts.scholarshipprovider')
@section('content')

<style type="text/css">
  
  .photo-gallery {
  color:#313437;
  background-color:#fff;
}

.photo-gallery p {
  color:#7d8285;
}

.photo-gallery h2 {
  font-weight:bold;
  margin-bottom:40px;
  padding-top:40px;
  color:inherit;
}

@media (max-width:767px) {
  .photo-gallery h2 {
    margin-bottom:25px;
    padding-top:25px;
    font-size:24px;
  }
}

.photo-gallery .intro {
  font-size:16px;
  max-width:500px;
  margin:0 auto 40px;
}

.photo-gallery .intro p {
  margin-bottom:0;
}

.photo-gallery .photos {
  padding-bottom:20px;
}

.photo-gallery .item {
  padding-bottom:30px;
}




</style>

<ul class="nav nav-pills mb-3 bg-dark" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-banner-tab" data-toggle="pill" href="#pills-banner" role="tab" aria-controls="pills-banner" aria-selected="true">Website Banner</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-email-tab" data-toggle="pill" href="#pills-email" role="tab" aria-controls="pills-email" aria-selected="false">Email Campaigns</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-article-tab" data-toggle="pill" href="#pills-article" role="tab" aria-controls="pills-article" aria-selected="false">Articles & Blogs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-social-tab" data-toggle="pill" href="#pills-social" role="tab" aria-controls="pills-social" aria-selected="false">Social Media</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-offline-tab" data-toggle="pill" href="#pills-offline" role="tab" aria-controls="pills-offline" aria-selected="false">Offline Media</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" id="pills-online-tab" data-toggle="pill" href="#pills-online" role="tab" aria-controls="pills-online" aria-selected="false">Online Media</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-onground-tab" data-toggle="pill" href="#pills-onground" role="tab" aria-controls="pills-contact" aria-selected="false">Onground Activities</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-banner" role="tabpanel" aria-labelledby="pills-banner-tab">Hello This is Website Banners
  
  <div class="photo-gallery">
    <div class="container">
      <div class="row photos">
        <div class="col-sm-6 col-md-4 col-lg-3 item">
          <a href="{{asset('external/img/4.png')}}" data-lightbox="photos" target="_blank">
            <img class="img-fluid" src="{{asset('external/img/4.png')}}">
          </a>
        </div>
      </div>
    </div>
    
  </div>


  </div>
  <div class="tab-pane fade" id="pills-email" role="tabpanel" aria-labelledby="pills-email-tab">This is email campaigns</div>
  <div class="tab-pane fade" id="pills-article" role="tabpanel" aria-labelledby="pills-article-tab">This is articles & blogs</div>
  <div class="tab-pane fade" id="pills-social" role="tabpanel" aria-labelledby="pills-social-tab">This is Social Media</div>
  <div class="tab-pane fade" id="pills-offline" role="tabpanel" aria-labelledby="pills-offline-tab">This is Offline Media</div>
   <div class="tab-pane fade" id="pills-online" role="tabpanel" aria-labelledby="pills-online-tab">This is Online Media</div>
    <div class="tab-pane fade" id="pills-onground" role="tabpanel" aria-labelledby="pills-onground-tab">This is Onground Activities </div>
</div>


@endsection

@section('scripts')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

@endsection