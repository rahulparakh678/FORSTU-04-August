@component('mail::message')
	Hello {{$details['fullname']}}

	Greetings from FORSTU

	 FORSTU have recently reviewed your profile and have identified some remarks that require your attention.

	 Here are the remarks that have been highlighted:
	
	 
	 @component('mail::table')
     
     Remark:
 @foreach($details['profile_remarks'] as $remark)
     	{{$remark}}
     @endforeach()
     @endcomponent
	
	We kindly request that you take the necessary action to address these remarks promptly.

	Be attentive over email and your mobile number you have provided.Scholarship Providers may reach you out for verification procedures.

	Incase you are facing any difficulties Kindly Drop a Query through Support Section in your Dashboard.

	Have a nice day

	Regards,
	FORSTU


@endcomponent


