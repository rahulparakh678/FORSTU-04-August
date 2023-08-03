@extends('layouts.student')

@section('content')

<div class="card" id="bank_details">

	<div class="card-header">
		<div class="card-title">
			Bank Details
		</div>
		<div class="card-body">
			<form method="POST" action=" {{ route('storebankdetails')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="bankdetails_completed" value="Yes">
            <div class="form-group">
                <label class="required" for="account_number">{{ trans('cruds.studentDetail.fields.account_number') }}</label>
                <input class="form-control {{ $errors->has('account_number') ? 'is-invalid' : '' }}" type="text" name="account_number" id="account_number" value="{{ old('account_number', $profile->account_number) }}"  minlength="6" maxlength="18" required>
                @if($errors->has('account_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('account_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.account_number_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="bank_ifsc">{{ trans('cruds.studentDetail.fields.bank_ifsc') }}</label>
                <input class="form-control {{ $errors->has('bank_ifsc') ? 'is-invalid' : '' }}" type="text" name="bank_ifsc" id="bank_ifsc" value="{{ old('bank_ifsc',$profile->bank_ifsc) }}" required>
                @if($errors->has('bank_ifsc'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bank_ifsc') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.bank_ifsc_helper') }}</span>
            </div>
            
             <strong class="required">Bank details are required for Fund Disbursement of Scholarship Incase you are selected</strong><br><br>

             <div class="form-group">
             	<button class="btn btn-danger btn-block" type="submit">
                Save Details
                </button>
             </div>
        	</form>
		</div>
	</div>
</div>
@endsection