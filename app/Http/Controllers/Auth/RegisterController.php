<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationSubmitted;

Use App\Mail\StudentRegistered;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::STUDENT;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'regex:/^[a-zA-Z\s]*$/', 'max:255'],
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255', 'unique:users'],
            'mobile'=>['regex:/^[6-9]\d{9}$/','unique:users'],
            'gender'=>['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
       $caste = $data['caste'] ?? null;
    $college = $data['college'] ?? null;
    $current_year = $data['current_year'] ?? null;


         $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'user_type' => $data['user_type'],
            'mobile' => $data['mobile'],
            'gender' => $data['gender'],
            'state' => $data['state'],
            'course'=> $data['course'],
            'password' => Hash::make($data['password']),
            'ref_code' => $data['ref_code'],
            'caste' => $caste,
            'college' => $college,
            'current_year'=>$current_year,


           
        ]);
         //Mail::to($data['email'])->send(new StudentRegistered($data['name']));
         Mail::to($data['email'])->send(new StudentRegistered($data['name']));
            
        return $user;

        
    }
}
