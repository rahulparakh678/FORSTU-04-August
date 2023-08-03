@extends('layouts.ngo')

@section('content')

<div class="container">
    <div class="row justify-content-center  ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }} & Recieve Free Scholarship Update According to Your Course</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">

                        @csrf

                        <input type="hidden" name="user_type" value="student">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">Mobile Number</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>

                            <div class="col-md-6">
                                <input type="radio" name="gender" value="male" required="" >Male
                                <input type="radio" name="gender" value="female">Female
                                <input type="radio" name="other" value="female">Other
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-eye-slash" id="eye"></i></span>
                                </div>

                                

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-eye-slash" id="eye1"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('NGO Code (Optional)') }}</label>

                            <div class="col-md-6">
                                <input id="ref_code" type="text" class="form-control"  name="ref_code" value="SPTI2021" readonly  autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                By signing up to create an account I accept <a href="{{route('terms')}}" style="color:green; ">Term & Conditions</a>  and <a href="{{route('privacy')}}" style="color: green;">Privacy Policy.</a> 
                                <br>
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="{{route('login')}}" style="float: right; text-decoration: none;color:green; ">Already have account ! Login Here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

    <script type="text/javascript">
       $(function(){
  
  $('#eye').click(function(){
       
        if($(this).hasClass('fa-eye-slash')){
           
          $(this).removeClass('fa-eye-slash');
          
          $(this).addClass('fa-eye');
          
          $('#password').attr('type','text');
            
        }else{
         
          $(this).removeClass('fa-eye');
          
          $(this).addClass('fa-eye-slash');  
          
          $('#password').attr('type','password');
        }
    });

  $('#eye1').click(function(){
       
        if($(this).hasClass('fa-eye-slash')){
           
          $(this).removeClass('fa-eye-slash');
          
          $(this).addClass('fa-eye');
          
          $('#password-confirm').attr('type','text');
            
        }else{
         
          $(this).removeClass('fa-eye');
          
          $(this).addClass('fa-eye-slash');  
          
          $('#password-confirm').attr('type','password');
        }
    });
});
    </script>

@endsection