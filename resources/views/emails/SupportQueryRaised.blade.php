@component('mail::message')
	Hello {{$name}}

	Greetings from FORSTU.

	Your Query is Raised Successfully.Your Query is important to us and will be resolved with next 24-72 Hours.

	
    Your Query Status can be tracked under Support Section in FORSTU Dashboard.

    Have a nice day

	Regards,
	FORSTU

@component('mail::button',['url'=>'www.forstu.co'])
Click Here to Visit FORSTU Website
@endcomponent
@endcomponent