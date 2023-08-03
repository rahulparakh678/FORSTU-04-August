@extends('layouts.student')
@section('content')

<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
<style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #f50c0c;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>


    <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
       <i>X</i>
      </div>
        <h1>Failed</h1> 
        <p>Dear {{$name}} Your payment is failed<br/> Please Try Again</p>
        
        <p> Error code {{$respcode ?? ''}} {{$respmsg ?? ''}} </p>
        <hr>

        <a href="{{ route('sfc') }}" class="btn btn-primary">Click here to Try Again</a>
      </div>

      <hr>
      <h5>{{$user_id}}</h5>
      <h5>{{$name}}</h5>
      <h5>{{$status}}</h5>
      <h5>{{$respmsg}}</h5>
      <h5>{{$txn_date}}</h5>
      <h5>{{$txn_paymentmode}}</h5>

       

                     

                     

@endsection