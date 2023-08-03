@component('mail::message')
	Hello {{$details['fullname']}}

	Greetings from FORSTU

	Congratulations on your selection in {{$details['schemename']}}.

	We are pleased to inform you that the scholarship amount for the {{$details['schemename']}} has been disbursed. 
	
	The scholarship amount has been successfully credited to your designated bank account.

	We advise you to check your bank account to ensure that the funds have been received. If you encounter any issues or discrepancies, please notify us immediately so that we can address them promptly.

	Have a nice day

	Regards,
	FORSTU


@endcomponent


