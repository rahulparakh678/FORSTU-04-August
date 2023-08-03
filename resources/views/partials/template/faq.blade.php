@extends('layouts.main')
@section('content')

<div class="container">
	
	<div id="accordion">
    @foreach($faqs as $faq)
		<div class="card" id="personal_details">
			<div class="card-header collapsed card-link " data-toggle="collapse" data-target="#{{$faq->id}}" >
                {{$faq->question}} 
                <i class="fa fa-plus float-right" aria-hidden="true"></i>
        	</div>
        	
        	<div id="{{$faq->id}}" class="collapse" data-parent="#accordion">
            	<div class="card-body">
       				<p>{!! $faq->answer !!}</p>
           	    </div>

           	</div> 
		</div>
	</div>@endforeach
	 
</div>           

<!--container-->
@endsection