@component('mail::message')
	
	Hello {{$name}}

	Greetings from FORSTU.

	Our Team has Replied to Your Query. Kindly Check Response under Support Section in FORSTU Dashboard.

    Have a nice day

 	Regards,
	FORSTU

@component('mail::button',['url'=>'www.forstu.co'])
Click Here to Visit FORSTU Website
@endcomponent
@endcomponent