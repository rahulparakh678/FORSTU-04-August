<?php

namespace App\Http\Controllers\Student;

require_once "PHPInitiateAPI.php";

use paytm\checksum\PaytmChecksumLibrary;
use App\Caste;
use App\Coursetype;
use App\Course;
use App\StudentCourses;
use App\StudentProfile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\StoreStudentProfileRequest;
use App\Http\Requests\UpdateStudentProfileRequest;
use App\Http\Requests\StorePersonalDetails;
use App\Http\Requests\StoreFamilyDetails;
use App\Http\Requests\StoreAddressDetails;
use App\Http\Requests\StoreBankDetails;
use App\Http\Requests\StoreCourseDetails;
use Storage;
use auth;
use Redirect;

use Carbon\Carbon;



class ProfileController extends Controller
{
    //

    public function invoice()
    {
        if(StudentProfile::where('user_id',auth()->user()->id)->exists())
        {
            $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
            $invoice = \ConsoleTVs\Invoices\Classes\Invoice::make()
                ->addItem('Test Item', 10.25, 2, 1412)
                
                ->number('FS00'.$profile->id)
                ->with_pagination(true)
                ->duplicate_header(true)
                ->due_date(Carbon::now()->addMonths(1))
                ->notes('Lrem ipsum dolor sit amet, consectetur adipiscing elit.')
                ->customer([
                    'name'      => $profile->fullname,
                    
                    'phone'     => $profile->mobile,
                    'location'  => '',
                    'zip'       => '',
                    'city'      => 'India',
                    'country'   => '',

                ])
                ->download('demo')
                //or save it somewhere
                ->save('public/myinvoicename.pdf');
        }
        else{
            return view('auth.dkkkpcop');
        }
        
        
        
    }

    public function getcourse(Request $request)
    {
        if(!$request->course_type_id)
        {
            $html = '<option value="">'.trans('global.pleaseSelect').'</option>';
        }
        else
        {
            $html = '';
            $course_names = Course::where('course_type_id', $request->course_type_id)->get();
        foreach ($course_names as $course_name) {
            $html .= '<option value="'.$course_name->id.'">'.$course_name->course_name.'</option>';
            }   
        }
        return response()->json(['html' => $html]);
    }
    
    public function getstudentcourse(Request $request)
    {
        if(!$request->course_type_id)
        {
            $html = '<option value="">'.trans('global.pleaseSelect').'</option>';
        }
        else
        {
            $html = '';
            $course_names = StudentCourses::where('course_type_id', $request->course_type_id)->get();
        foreach ($course_names as $course_name) {
            $html .= '<option value="'.$course_name->id.'">'.$course_name->course_name.'</option>';
            }   
        }
        return response()->json(['html' => $html]);
    }
    public function setcourse(Request $request)
    {
        if(!$request->course_name_id)
        {
            $html = '<option value="">'.trans('global.pleaseSelect').'</option>';
        }
        else
        {
            $html = '';
            $course_names = Course::where('id', $request->course_name_id)->first();
        
            $html .= '<option value="'.$course_names->id.'">'.$course_names->course_name.'</option>';
              
        }
        return response()->json(['html' => $html]);
    }
    public function setstudentcourse(Request $request)
    {
        if(!$request->student_course_name_id)
        {
            $html = '<option value="">'.trans('global.pleaseSelect').'</option>';
        }
        else
        {
            $html = '';
            $course_names = StudentCourses::where('id',$request->student_course_name_id)->first();
        
            $html .= '<option value="'.$course_names->id.'">'.$course_names->course_name.'</option>';
              
        }
        return response()->json(['html' => $html]);
    }
    public function create()

    {
    	
        //
        if(StudentProfile::where('user_id',auth()->user()->id)->exists())
        {
            $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
            $castes = Caste::all()->pluck('caste_name', 'id')->prepend(trans('global.pleaseSelect'), '');
            $course_types = Coursetype::all()->pluck('course_type_name', 'id')->prepend(trans('Please select course type'), '');
            return view('students.profile.create',compact('castes','course_types','profile'));
        }
        

        $castes = Caste::all()->pluck('caste_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $course_types = Coursetype::all()->pluck('course_type_name', 'id')->prepend(trans('Please select course type'), '');

           //$course_names = Course::all()->pluck('course_name', 'id')->prepend(trans('global.pleaseSelect'), '');
            return view('students.profile.create',compact('castes','course_types'));

    	
    }

    public function personaldetails()

    {
        $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
        $castes = Caste::all()->pluck('caste_name', 'id')->prepend(trans('global.pleaseSelect'), '');
       
            
        return view('students.profile.personal_details',compact('castes','profile'));
    }

    public function preview()
    {
        
        return Redirect::to('/students')->with('message','Your Profile is Completed Successfully. Our Verification team will contact you in next 2-3 days for KYC Process');
    }

    public function updatedetails(Request $request)
    {
        
            //$personaldetails=StudentProfile::create($request->all());
            $personaldetails=StudentProfile::where('user_id',auth()->user()->id)->first();
            $personaldetails->update($request->all());
            return redirect()->back()->with('message',' Details Saved Successfully');
        
       
        
    }
    public function servicedetails(Request $request)
    {
        
            //$personaldetails=StudentProfile::create($request->all());
            $personaldetails=StudentProfile::where('user_id',auth()->user()->id)->first();
            $personaldetails->update($request->all());
            
        
          return Redirect::to('/students')->with('message','Your Profile is Completed Successfully. Our Verification team will contact you in next 2-3 days for KYC Process');
        
    }


    public function sfc()
    {
        if(StudentProfile::where('user_id',auth()->user()->id)->where('paid','YES')->exists())
        {
            $profile=StudentProfile::where('user_id',auth()->user()->id)->where('paid','YES')->first();
            $profiles=StudentProfile::where('user_id',auth()->user()->id)->first();
            $result = getTransactionToken();
            return view('students.sfc',compact('result','profile','profiles'));
        }
        else{
            $result = getTransactionToken();
            return view('students.sfc',compact('result'));
            
        }
        
    }
    
    public function storepersonal(StorePersonalDetails $request)
    {
        $studentDetail = StudentProfile::create($request->all());
        $castes = Caste::all()->pluck('caste_name', 'id')->prepend(trans('global.pleaseSelect'), '');

         $course_types = Coursetype::all()->pluck('course_type_name', 'id')->prepend(trans('Please select course type'), '');
         $course = Course::all()->pluck('course_name', 'id')->prepend(trans('Please select course'), '');
         $studentcourse=StudentCourses::all()->pluck('course_name','id')->prepend(trans('Please select course'), '');
         $profile=StudentProfile::where('user_id',auth()->user()->id)->first();


         return view('students.profile.family_details',compact('profile'));
    }

    public function loadfamily()
    {
         $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
        return view('students.profile.family_details',compact('profile'));
    }

    public function storefamily(StoreFamilyDetails $request,StudentProfile $profile)
    {
       // $studentDetail = StudentProfile::create($request->all());
       
        $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
         $profile->update($request->all());
        return view('students.profile.address',compact('profile'));
    }
    public function storbasicdetails(Request $request,StudentProfile $profile){
        


         if(StudentProfile::where('user_id',auth()->user()->id)->exists())
        {
             $profile=StudentProfile::where('user_id',Auth::user()->id)->first();
             $studentcourse=StudentCourses::all();
             $course_types = Coursetype::all();
             return view('students.home',compact('profile','studentcourse','course_types'))->with('message','Profile Saved Successfully');
        }
        else

        {
            //$profile=StudentProfile::where('user_id',auth()->user()->id)->first();
         
            $profiles = StudentProfile::create($request->all());
            $studentcourse=StudentCourses::all();
            $course_types = Coursetype::all();
            $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
            return view('students.home' ,compact('studentcourse','course_types','profile'))->with('message','Profile Created Successfully');
            //return Redirect::back()->with('message','Profile Created Successfully');
            //return redirect()->route('students.home')->with(compact('studentcourse','course_types'));

        }
        
    }

    public function loadadd(){
         $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
        return view('students.profile.address',compact('profile'));

    }

     public function storeaddress(StoreAddressDetails $request,StudentProfile $profile)
    {
       // $studentDetail = StudentProfile::create($request->all());
        
        $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
        $profile->update($request->all());
        return view('students.profile.bankdetails',compact('profile'));
    }
    public function loadbank(){
        $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
        return view('students.profile.bankdetails',compact('profile'));

    }
    public function storebankdetails(StoreBankDetails $request,StudentProfile $profile)
    {
       // $studentDetail = StudentProfile::create($request->all());
       
        $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
         $profile->update($request->all());
        //$course_types = Coursetype::all()->pluck('course_type', 'id')->prepend(trans('Please select course type'), '');
         $course_types=Coursetype::all();
         $course = Course::all()->pluck('course_name', 'id')->prepend(trans('Please select course'), '');
         $studentcourse=StudentCourses::all()->pluck('course_name','id')->prepend(trans('Please select course'), '');
        return view('students.profile.coursedetails',compact('profile','course_types','course','studentcourse'));

    }

    public function loadcourse(){
        $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
       $course=Course::all()->pluck('course_name', 'id');

        //$course_types = Coursetype::all()->pluck('course_type', 'id')->prepend(trans('Please select course type'), '');
       $course_types=Coursetype::all();
         $studentcourse=StudentCourses::all()->pluck('course_name','id')->prepend(trans('Please select course'), '');
        return view('students.profile.coursedetails',compact('profile','course_types','course','studentcourse'));
    }
    public function storecoursedetails(StoreCourseDetails $request,StudentProfile $profile)
    {
       // $studentDetail = StudentProfile::create($request->all());
        
        $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
        $profile->update($request->all());
        $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
        return view('students.profile.educationaldetails',compact('profile'))->with('message','Course Details Successfully Saved');

    }

    public function loadeducationaldetails()
    {
        $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
        return view('students.profile.educationaldetails',compact('profile'));
    }


    public function storedetails(Request $request,StudentProfile $profile)
    {
       // $studentDetail = StudentProfile::create($request->all());
        
        $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
        $profile->update($request->all());
        //$profile->personaldetails_completed='Yes'
        //$profile->save();
        return view('students.profile.family_details',compact('profile'));

    }

    public function storessc()
    {
        $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
        return view('students.profile.educationaldetails',compact('profile'));
    }

    public function storesscdetails(Request $request)
    {
        $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
        $profile->update($request->all());

        return view('students.profile.educationaldetails',compact('profile'));
    }
    
    
    

    public function store(StorePersonalDetails $request)
    {
        
    	$studentDetail = StudentProfile::create($request->all());
    	//return redirect()->back()->with('message','Profile is completed successfully Now Upload documents in documents Section');
        //$personaldetails=StudentProfile::create($request->all());
        //return redirect()->back()->with('Personal Details Saved Successfully');
        $castes = Caste::all()->pluck('caste_name', 'id')->prepend(trans('global.pleaseSelect'), '');

         $course_types = Coursetype::all()->pluck('course_type_name', 'id')->prepend(trans('Please select course type'), '');
         $course = Course::all()->pluck('course_name', 'id')->prepend(trans('Please select course'), '');
         $studentcourse=StudentCourses::all()->pluck('course_name','id')->prepend(trans('Please select course'), '');
         $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
        
         return view('students.profile.edit', compact('profile','castes','course_types','course','studentcourse'));


    }

    public function edit(StudentProfile $profile,$id)
    {
        $profile=StudentProfile::where('user_id',$id)->first();
        $castes = Caste::all()->pluck('caste_name', 'id')->prepend(trans('global.pleaseSelect'), '');

         $course_types = Coursetype::all()->pluck('course_type_name', 'id')->prepend(trans('Please select course type'), '');

         $course = Course::all()->pluck('course_name', 'id')->prepend(trans('Please select course'), '');
         $studentcourse=StudentCourses::all()->pluck('course_name', 'id')->prepend(trans('Please select course'), '');
        
        return view('students.profile.edit', compact('profile','castes','course_types','course','studentcourse'));
    }

    public function update(UpdateStudentProfileRequest $request, StudentProfile $profile)
    {
        $profile->update($request->all());

        //return redirect()->back()->with('message','Profile is Updated successfully Now Upload documents in documents Section');

        return Redirect::to('/students')->with('message','Profile Updated successfully');
    }

    public function documents()
    {
        $user_id=auth()->user()->id;
        $profiles=StudentProfile::where('user_id',$user_id)->first();
        return view('students.profile.documents',compact('profiles'));
    }
 
    public function paadharupload(Request $request)
    {
        
        $user_id=auth()->user()->id;
        if (isset($user_id)) {
            // code...

            $paadhar=$request->file('paadhar')->store('documents','s3');
            Storage::disk('s3')->setVisibility($paadhar,'public');
            
            
            //StudentProfile::where('user_id',$user_id)->update([
           //'paadhar' =>$url
        //]);
            $url=Storage::disk('s3')->url($paadhar);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->paadhar=$url;
            $profile->save();
            return redirect()->back()->with('message','Parents Aadhar card uploaded successfully');
            
        }
        else{
            return redirect()->back()->with('message','Unable to upload');
        }
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        
        

        
        
    }
    
    public function aadharupload(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $aadhar_card=$request->file('aadhar_card')->store('documents','s3');
        Storage::disk('s3')->setVisibility($aadhar_card,'public');
        //$aadhar_card=strval($aadhar_card);
        //StudentProfile::where('user_id',$user_id)->update([
          //  'aadhar_card' => Storage::disk('s3')->url($aadhar_card)
        //]);
        $url=Storage::disk('s3')->url($aadhar_card);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->aadhar_card=$url;
            $profile->save();
        return redirect()->back()->with('message','Aadhar card uploaded successfully');
    }
    public function panupload(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $pan_card=$request->file('pan_card')->store('documents','s3');
        Storage::disk('s3')->setVisibility($pan_card,'public');
        //StudentProfile::where('user_id',$user_id)->update([
          //  'pan_card' => Storage::disk('s3')->url($pan_card)
        //]);
        $url=Storage::disk('s3')->url($pan_card);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->pan_card=$url;
            $profile->save();
        return redirect()->back()->with('message','Pan card uploaded successfully');
    }
    public function ration_card(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $ration_card=$request->file('ration_card')->store('documents','s3');
        Storage::disk('s3')->setVisibility($ration_card,'public');
        //StudentProfile::where('user_id',$user_id)->update([
          //  'pan_card' => Storage::disk('s3')->url($pan_card)
        //]);
        $url=Storage::disk('s3')->url($ration_card);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->ration_card=$url;
            $profile->save();
        return redirect()->back()->with('message','Ration Card uploaded successfully');
    }
    public function casteupload(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $caste_certificate=$request->file('caste_certificate')->store('documents','s3');
        Storage::disk('s3')->setVisibility($caste_certificate,'public');
        
        //StudentProfile::where('user_id',$user_id)->update([
          //  'caste_certificate' => //Storage::disk('s3')->url($caste_certificate)
        //]);
        $url=Storage::disk('s3')->url($caste_certificate);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->caste_certificate=$url;
            $profile->save();
        return redirect()->back()->with('message','Caste Certificate uploaded successfully');
    }
    public function phupload(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $physically_handicapped_certificate=$request->file('physically_handicapped_certificate')->store('documents','s3');
        Storage::disk('s3')->setVisibility($physically_handicapped_certificate,'public');
        
        //StudentProfile::where('user_id',$user_id)->update([
            //'physically_handicapped_certificate' => //Storage::disk('s3')->url($physically_handicapped_certificate)
        //]);

        $url=Storage::disk('s3')->url($physically_handicapped_certificate);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->physically_handicapped_certificate=$url;
            $profile->save();
        //return redirect()->back()->with('message','Caste Certificate uploaded successfully');
        return redirect()->back()->with('message','Physically Handicapped Certificate uploaded successfully');
    }
    public function deathupload(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $death_certificate=$request->file('death_certificate')->store('documents','s3');
        Storage::disk('s3')->setVisibility($death_certificate,'public');
        
        //StudentProfile::where('user_id',$user_id)->update([
          //  'death_certificate' => //Storage::disk('s3')->url($death_certificate)
        //]);
        $url=Storage::disk('s3')->url($death_certificate);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->death_certificate=$url;
            $profile->save();
        
        return redirect()->back()->with('message','Death Certificate uploaded successfully');
    }
     public function photoupload(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');

        $photo=$request->file('photo')->store('documents','s3');
        Storage::disk('s3')->setVisibility($photo,'public');
        //StudentProfile::where('user_id',$user_id)->update([
          //  'photo' => Storage::disk('s3')->url($photo)
        //]);

        $url=Storage::disk('s3')->url($photo);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->photo=$url;
            $profile->save();
        
        
        
        return redirect()->back()->with('message','Photo uploaded successfully');
    }
     public function addproofupload(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');

        $address_proof=$request->file('address_proof')->store('documents','s3');
        Storage::disk('s3')->setVisibility($address_proof,'public');
       // StudentProfile::where('user_id',$user_id)->update([
         //   'address_proof' => Storage::disk('s3')->url($address_proof)
        //]);

        $url=Storage::disk('s3')->url($address_proof);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->address_proof=$url;
            $profile->save();
        
        
        return redirect()->back()->with('message','Address Proof uploaded successfully');
    }
    public function domupload(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $domicile_certificate=$request->file('domicile_certificate')->store('documents','s3');
        Storage::disk('s3')->setVisibility($domicile_certificate,'public');
        
        //StudentProfile::where('user_id',$user_id)->update([
          //  'domicile_certificate' => //Storage::disk('s3')->url($domicile_certificate)
        //]);

        $url=Storage::disk('s3')->url($domicile_certificate);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->domicile_certificate=$url;
            $profile->save();
        
        return redirect()->back()->with('message','Domicile Certificate uploaded successfully');
    }
    public function icupload(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $income_certificate=$request->file('income_certificate')->store('documents','s3');
        Storage::disk('s3')->setVisibility($income_certificate,'public');
        //StudentProfile::where('user_id',$user_id)->update([
          //  'income_certificate' => Storage::disk('s3')->url($income_certificate)
        //]);
        $url=Storage::disk('s3')->url($income_certificate);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->income_certificate=$url;
            $profile->save();
        
        return redirect()->back()->with('message','Income Certificate uploaded successfully');
    }
    public function passbookupload(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $bank_passbook=$request->file('bank_passbook')->store('documents','s3');
        Storage::disk('s3')->setVisibility($bank_passbook,'public');
        //StudentProfile::where('user_id',$user_id)->update([
          //  'bank_passbook' => Storage::disk('s3')->url($bank_passbook)
        //]);

        $url=Storage::disk('s3')->url($bank_passbook);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->bank_passbook=$url;
            $profile->save();

        return redirect()->back()->with('message','Bank Passbook uploaded successfully');
    }
    public function clgidupload(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $clg_id_card=$request->file('clg_id_card')->store('documents','s3');
        Storage::disk('s3')->setVisibility($clg_id_card,'public');
        //StudentProfile::where('user_id',$user_id)->update([
          //  'clg_id_card' => Storage::disk('s3')->url($clg_id_card)
        //]);

        $url=Storage::disk('s3')->url($clg_id_card);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->clg_id_card=$url;
            $profile->save();


        return redirect()->back()->with('message','ID Card uploaded successfully');
    }
    public function feestructureupload(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $feestructure=$request->file('feestructure')->store('documents','s3');
        Storage::disk('s3')->setVisibility($feestructure,'public');
        //StudentProfile::where('user_id',$user_id)->update([
          //  'feestructure' => Storage::disk('s3')->url($feestructure)
        //]);
        $url=Storage::disk('s3')->url($feestructure);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->feestructure=$url;
            $profile->save();
        return redirect()->back()->with('message','Fees Structure uploaded successfully');
    }
    public function bonafideupload(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $bonafide_certificate=$request->file('bonafide_certificate')->store('documents','s3');
        Storage::disk('s3')->setVisibility($bonafide_certificate,'public');
        
        //StudentProfile::where('user_id',$user_id)->update([
          //  'bonafide_certificate' => //Storage::disk('s3')->url($bonafide_certificate)
        //]);
        $url=Storage::disk('s3')->url($bonafide_certificate);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->bonafide_certificate=$url;
            $profile->save();
        return redirect()->back()->with('message','Bonafide Certificate uploaded successfully');
    }
    public function admissionupload(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $admission_letter=$request->file('admission_letter')->store('documents','s3');
        Storage::disk('s3')->setVisibility($admission_letter,'public');
        
       // StudentProfile::where('user_id',$user_id)->update([
         //   'admission_letter' => Storage::disk('s3')->url($admission_letter)
        //]);
        $url=Storage::disk('s3')->url($admission_letter);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->admission_letter=$url;
            $profile->save();
        return redirect()->back()->with('message','Admission Letter uploaded successfully');
    }
    public function cfupload(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $currentyear_fees_reciept=$request->file('currentyear_fees_reciept')->store('documents','s3');
        Storage::disk('s3')->setVisibility($currentyear_fees_reciept,'public');
        
        //StudentProfile::where('user_id',$user_id)->update([
          //  'currentyear_fees_reciept' => Storage::disk('s3')->url($currentyear_fees_reciept)
        //]);
        $url=Storage::disk('s3')->url($currentyear_fees_reciept);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->currentyear_fees_reciept=$url;
            $profile->save();

        return redirect()->back()->with('message','Fees Reciept uploaded successfully');
    }
    public function hfupload(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $hostel_reciept=$request->file('hostel_reciept')->store('documents','s3');
        Storage::disk('s3')->setVisibility($hostel_reciept,'public');
        
        //StudentProfile::where('user_id',$user_id)->update([
          //  'hostel_reciept' => Storage::disk('s3')->url($hostel_reciept)
        //]);
        $url=Storage::disk('s3')->url($hostel_reciept);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->hostel_reciept=$url;
            $profile->save();

        return redirect()->back()->with('message','Hostel Fees Reciept uploaded successfully');
    }
    public function class10upload(Request $request)
    {
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $class10_marksheet=$request->file('class10_marksheet')->store('documents','s3');
        Storage::disk('s3')->setVisibility($class10_marksheet,'public');
        
        //StudentProfile::where('user_id',$user_id)->update([
          //  'class10_marksheet' => Storage::disk('s3')->url($class10_marksheet)
        //]);
        $url=Storage::disk('s3')->url($class10_marksheet);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->class10_marksheet=$url;
            $profile->save();

        return redirect()->back()->with('message','Class 10 Marksheet uploaded successfully');
    }
    public function class12upload(Request $request)
    {
        //$user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        //$class12_marksheet=$request->file('class12_marksheet')->store('documents','s3');
        //Storage::disk('s3')->setVisibility($class12_marksheet,'public');
        
        //StudentProfile::where('user_id',$user_id)->update([
          //  'class12_marksheet' => Storage::disk('s3')->url($class12_marksheet)
        //]);
        //$url=Storage::disk('s3')->url($class12_marksheet);
          //  $profile=StudentProfile::where('user_id',$user_id)->first();
            //$profile->$class12_marksheet=$url;
            //$profile->save();

        
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $user_id=auth()->user()->id;
        $class12_marksheet=$request->file('class12_marksheet')->store('documents','s3');
        Storage::disk('s3')->setVisibility($class12_marksheet,'public');
        
        $url=Storage::disk('s3')->url($class12_marksheet);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->class12_marksheet=$url;
            $profile->save();


        return redirect()->back()->with('message','Class 12 Marksheet uploaded successfully');
    }
    public function diplomaupload(Request $request)
    {
       // $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        //$diploma_marksheet=$request->file('diploma_marksheet')->store('documents','s3');
        //Storage::disk('s3')->setVisibility($diploma_marksheet,'public');
        
        //StudentProfile::where('user_id',$user_id)->update([
          //  'diploma_marksheet' => Storage::disk('s3')->url($diploma_marksheet)
        //]);
        //$url=Storage::disk('s3')->url($diploma_marksheet);
          //  $profile=StudentProfile::where('user_id',$user_id)->first();
            //$profile->$diploma_marksheet=$url;
            //$profile->save();

        $user_id=auth()->user()->id;
        $diploma_marksheet=$request->file('diploma_marksheet')->store('documents','s3');
        Storage::disk('s3')->setVisibility($diploma_marksheet,'public');
        
        $url=Storage::disk('s3')->url($diploma_marksheet);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->diploma_marksheet=$url;
            $profile->save();

        return redirect()->back()->with('message','Diploma Marksheet uploaded successfully');
    }
    public function gradupload(Request $request)
    {
        /*
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $graduation_marksheet=$request->file('graduation_marksheet')->store('documents','s3');
        Storage::disk('s3')->setVisibility($graduation_marksheet,'public');
        
        //StudentProfile::where('user_id',$user_id)->update([
          //  'graduation_marksheet' => //Storage::disk('s3')->url($graduation_marksheet)
       // ]);
        $url=Storage::disk('s3')->url($graduation_marksheet);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->$graduation_marksheet=$url;
            $profile->save();
            */
            $user_id=auth()->user()->id;
        $graduation_marksheet=$request->file('graduation_marksheet')->store('documents','s3');
        Storage::disk('s3')->setVisibility($graduation_marksheet,'public');
        
        $url=Storage::disk('s3')->url($graduation_marksheet);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->graduation_marksheet=$url;
            $profile->save();

        return redirect()->back()->with('message','Graduation Marksheet uploaded successfully');
    }

    public function prevupload(Request $request)
    {
        /*
        $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
        $previous_marksheet=$request->file('previous_marksheet')->store('documents','s3');
        Storage::disk('s3')->setVisibility($previous_marksheet,'public');
        
        
        //$previous_marksheet=strval($previous_marksheet);
        //StudentProfile::where('user_id',$user_id)->update([
          //  'previous_marksheet' => //Storage::disk('s3')->url($previous_marksheet)
        //]);
        $url=Storage::disk('s3')->url($previous_marksheet);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->$previous_marksheet=$url;
            $profile->save();

        */
            $user_id=auth()->user()->id;
        $previous_marksheet=$request->file('previous_marksheet')->store('documents','s3');
        Storage::disk('s3')->setVisibility($previous_marksheet,'public');
        
        $url=Storage::disk('s3')->url($previous_marksheet);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->previous_marksheet=$url;
            $profile->save();
        return redirect()->back()->with('message','Previous Year/Semester Marksheet uploaded successfully');
    }
    public function recommendation(Request $request)
    {
       // $user_id=auth()->user()->id;
        //$request->aadhar_card->storeAs('logos','aadhar.png');
       // $pan_card=$request->file('pan_card')->store('documents','s3');
        //Storage::disk('s3')->setVisibility($pan_card,'public');
        
       // StudentProfile::where('user_id',$user_id)->update([
        //    'pan_card' => Storage::disk('s3')->url($pan_card)
        //]);
        //return redirect()->back()->with('message','Recommendation Letter uploaded successfully');
        $user_id=auth()->user()->id;
        $pan_card=$request->file('pan_card')->store('documents','s3');
        Storage::disk('s3')->setVisibility($pan_card,'public');
        
        $url=Storage::disk('s3')->url($pan_card);
            $profile=StudentProfile::where('user_id',$user_id)->first();
            $profile->pan_card=$url;
            $profile->save();
            return redirect()->back()->with('message','Recommendation Marksheet uploaded successfully');
    }


    public function student_documents()
    {
        $profile=StudentProfile::where('user_id',auth()->user()->id)->first();
        return view('students.profile.student_documents',compact('profile'));
    }





    
}
