@extends('layouts.main')

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" required>

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
                            <label for="state" class="col-md-4 col-form-label text-md-right">State</label>

                            <div class="col-md-6">
                               <select class="form-control {{ $errors->has('current_state') ? 'is-invalid' : '' }}" name="state" id="state" required>
                                    <option value disabled {{ old('current_state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                        @foreach(App\StudentProfile::STATE_SELECT as $key => $label)
                                            <option value="{{ $key }}" {{ old('current_state',$profile->current_state ?? '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="course" class="col-md-4 col-form-label text-md-right">Course of Study</label>

                            <div class="col-md-6">
                                <select class="form-control" name="course" id="course">
                                    <option value disabled="" selected>Please Select Course</option>
                                    <option value="Class 1-10">Class 1-10</option>
                                    <option value="Class 11-12">Class 11-12</option>
                                    <option value="Diploma">Diploma/Polytechnic</option>
                                    <option value="Undergraduation">Undergraduation</option>
                                    <option value="Postgraduation">Postgraduation</option>
                                </select>
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
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Referral Code (Optional)') }}</label>

                            <div class="col-md-6">
                                <input id="ref_code" type="text" class="form-control"  name="ref_code" value="ACM" readonly autofocus>
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
   
    $(document).ready(function() {
    
});
</script>

    
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