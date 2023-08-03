@component('mail::message')
	Hello {{$name}}

	Welcome to FORSTU

	We are glad to have you here.

	FORSTU is an Online Scholarship Platform Connecting Students with Different Scholarships Opportunities.

	Activate your Free Plan Today by Loggin In to See All Available Scholarships.

	Incase you are facing any difficulties Kindly Drop a Query through Support Section in your Dashboard.

    Have a nice day

	Regards,
	FORSTU
@component('mail::button',['url'=>'http://forstu.co/'])
Click Here to Visit Website
@endcomponent
@endcomponent
