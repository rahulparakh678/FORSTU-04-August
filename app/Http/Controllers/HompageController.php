<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scholarship;
use App\ScholarshipAchiever;
use Redirect;
use App\Fraud;
use Excel;
use App\FaqQuestion;
use App\Coursetype;
use App\Course;
use DB;

class HompageController extends Controller
{
    //
    

    public function index()
    {	
    	//$scholarships=Scholarship::latest()->limit(5)->where('status','Active')->get();
    	return view('welcome');
    }

   public function msscet()
    {
        return view('auth.msscet');
    }






   public function apcoer()
    {
        return view('auth.apcoer');
    }

    public function sndcoe()
    {
        return view('auth.sndcoe');
    }
   public function bitbarshi()
    {
        return view('auth.bitbarshi');
    }
  




    public function ktpcop()
    {
        return view('auth.ktpcop');
    }
    public function ktpcomba()
    {
        return view('auth.ktpcomba');
    }
    public function ktpcet()
    {
        return view('auth.ktpcet');
    }
    public function ktpccs()
    {
        return view('auth.ktpccs');
    }
    public function kasturbai()
    {
        return view('auth.kasturbai');
    }
    public function mcn()
    {
        return view('auth.mcn');
    }
    public function dddpc()
    {
        return view('auth.dddpc');
    }
    public function rpcoe()
    {
        return view('auth.rpcoe');
    }
    public function success()
    {
        return view('auth.success');
    }
    public function skncoe()
    {
        return view('auth.skncoe');
    }

    public function svpmcoe()
    {
        return view('auth.svpmcoe');
    }
    public function svpmioe()
    {
        return view('auth.svpmioe');
    }
    public function svpmiom()
    {
        return view('auth.svpmiom');
    }
    public function svpmcop()
    {
        return view('auth.svpmcop');
    }
    public function svpmccsce()
    {
        return view('auth.svpmccsce');
    }
    public function giop()
    {
        return view('auth.giop');
    }
    public function gcop()
    {
        return view('auth.gcop');
    }
    public function gcoe()
    {
        return view('auth.gcoe');
    }
    public function rcpit()
    {
        return view('auth.rcpit');
    }
    public function hrpiper()
    {
        return view('auth.hrpiper');
    }
    public function hrpiop()
    {
        return view('auth.hrpiop');
    }
    public function rcpiper()
    {
        return view('auth.rcpiper');
    }
    public function rcpiop()
    {
        return view('auth.rcpiop');
    }
    /*
    public function ktpcop()
    {
        return view('auth.ktpcop');
    }*/
    public function sanjeevani()
    {
        return view('auth.sanjeevani');
    }


    public function roshni(){
        return view('auth.roshni');
    }

    public function college_register()
    {
        return view('partials.template.college_register');
    }

    public function sveriengg()
    {
        return view('auth.sveriengg');
    }
    public function sverimba()
    {
        return view('auth.sverimba');
    }
    public function sveripoly()
    {
        return view('auth.sveripoly');
    }
    public function sveribpharm()
    {
        return view('auth.sveribpharm');
    }
    public function sveridpharm()
    {
        return view('auth.sveridpharm');
    }
    public function coep()
    {
        return view('auth.coep');
    }

    public function vedant()
    {
        return view('auth.vedant');
    }
    public function ismrp()
    {
        return view('auth.ismrp');
    }

    public function famt()
    {
        return view('auth.famt');
    }
    public function dcpgri()
    {
        return view('auth.dcpgri');
    }

    public function scoev()
    {
        return view('auth.scoev');
    }

    public function siom()
    {
        return view('auth.siom');
    }

    public function sfjpc()
    {
        return view('auth.sfjpc');
    }

    public function moderncoe()
    {
        return view('auth.moderncoe');
    }

    public function indiapost()
    {
        return view('auth.indiapost');
    }
    public function coap()
    {
        return view('auth.coap');
    }
    public function coarc()
    {
        return view('auth.coarc');
    }
    public function mpim()
    {
        return view('auth.mpim');
    }
    public function sgrspoly()
    {
        return view('auth.sgrspoly');
    }
    public function sgrscop()
    {
        return view('auth.sgrscop');
    }
    public function sucop()
    {
        return view('auth.sucop');
    }
    public function sucdip()
    {
        return view('auth.sucdip');
    }
    public function coph()
    {
        return view('auth.coph');
    }
    public function coem()
    {
        return view('auth.coem');
    }
    public function iotm()
    {
        return view('auth.iotm');
    }
    public function iterm()
    {
        return view('auth.iterm');
    }
    public function lch()
    {
        return view('auth.lch');
    }
    public function amc()
    {
        return view('auth.amc');
    }
    public function rmacs()
    {
        return view('auth.rmacs');
    }
    public function bgc()
    {
        return view('auth.bgc');
    }
    public function wcacs()
    {
        return view('auth.wcacs');
    }
    public function jrwcacs()
    {
        return view('auth.jrwcacs');
    }
    
    public function awcacs()
    {
        return view('auth.awcacs');
    }
    public function apc()
    {
        return view('auth.apc');
    }
    public function sbc()
    {
        return view('auth.sbc');
    }
    public function jramc()
    {
        return view('auth.jramc');
    }
    public function jrawcacs()
    {
        return view('auth.jrawcacs');
    }
    public function eon()
    {
        return view('auth.eon');
    }
    public function jrca()
    {
        return view('auth.jrca');
    }
    public function smvjc()
    {
        return view('auth.smvjc');
    }
    public function vssjc()
    {
        return view('auth.vssjc');
    }
    public function bgjc()
    {
     return view('auth.bgjc');   
    }
    public function lmvjc()
    {
        return view('auth.lmvjc');
    }
    public function ssvjc()
    {
        return view('auth.ssvjc');
    }
    public function pesjc()
    {
        return view('auth.pesjc');
    }
    public function pnjc()
    {
        return view('auth.pnjc');
    }
    public function sstjc()
    {
        return view ('auth.sstjc');
    }
    public function njc(){
        return view('auth.njc');
    }
    public function ssvjcb()
    {
        return view('auth.ssvjcb');
    }
    public function cydpson()
    {
        return view('auth.cydpson');
    }
    public function ssjcb()
    {
        return view('auth.ssjcb');
    }
    public function smvs()
    {
        return view('auth.smvs');
    }
    public function mgvjc()
    {
        return view('auth.mgvjc');
    }
    public function snjc()
    {
        return view('auth.snjc');
    }
    public function swjc()
    {
        return view('auth.swjc');
    }

    public function nesjc()
    {
        return view('auth.nesjc');
    }
    public function nessjc()
    {
        return view('auth.nessjc');
    }
    public function skjc()
    {
        return view('auth.skjc');
    }
    public function smvujc()
    {
        return view('auth.smvujc');
    }
    public function nesjcc()
    {
        return view('auth.nesjcc');
    }
    public function skvk()
    {
        return view('auth.skvk');
    }
    public function sbjc()
    {
        return view('auth.sbjc');
    }
    public function shjc()
    {
        return view('auth.shjc');
    }
    

    


    public function jrmmcp()
    {
        return view('auth.jrmmcp');
    }
    public function srmmcp()
    {
        return view('auth.srmmcp');
    }
    public function nwimsr()
    {
        return view('auth.nwimsr');
    }
    public function aissmspoly()
    {
        return view('auth.aissmspoly');
    }

    public function aissmschmct()
    {
        return view('auth.aissmshmcet');
    }

    public function aissmsiom()
    {
        return view('auth.aissmsiom');
    }
    public function dkkkpiti()
    {
        return view('auth.dkkkpiti'); 
    }
    public function dkkkpmim()
    {
        return view('auth.dkkkpmim'); 
    }
    public function dkkkpjrcls()
    {
        return view('auth.dkkkpjrcls'); 
    }
    public function dkkkpbpp()
    {
        return view('auth.dkkkpbpp'); 
    }
    public function dkkkpcop()
    {
        return view('auth.dkkkpcop'); 
    }

    
    public function aissmscoe()
    {
        return view('auth.aissmscoe');
    }

    public function aissmsioit()
    {
        return view('auth.aissmsioit');
    }

    public function vapm()
    {
        return view('auth.vapm');
    }

    public function scop()
    {
        return view('auth.scope');
    }

    public function armietdp()
    {
        return view('auth.armietdp');
    }
    public function armietengg()
    {
        return view('auth.armietengg');
    }
    public function snjbengg()
    {
        return view('auth.snjbengg');
    }
    public function snjbpharmacy()
    {
        return view('auth.snjbpharmacy');
    }
    public function snjbacs()
    {
        return view('auth.snjbacs');
    }

    public function svip()
    {
        return view('auth.svip_register');
    }

    public function mcon()
    {
        return view('auth.mcon_register');
    }
    
    public function jrrsml()
    {
        return view('auth.jrrsml');
    }
    public function tarpan()
    {
        return view('auth.tarpan_register');
    }
    public function at()
    {
        return view('auth.at');
    }
    public function hrpawc()
    {
        return view('auth.hrpawc');
    }
    public function sw()
    {
        return view('auth.sm_register');
    }
    public function vijay()
    {
        return view('auth.ab_register');
    }
    public function ms()
    {
        return view('auth.ms_register');
    }


    public function muman()
    {
        return view('auth.muman_register');
    }

    public function sandipani()
    {
        return view('auth.sandipani_register');
    }



    public function adcet()
    {
        return view('auth.adcet_register');
    }

    public function adcdp()
    {
        return view('auth.adcdp_register');
    }

    public function adcbp()
    {
        return view('auth.adcbp_register');
    }
    public function adamc()
    {
        return view('auth.adamc_register');
    }


    public function ulf()
    {
        return view('auth.ngo_register');
    }

    public function vjti()
    {
        return view('auth.vjti');
    }
    public function spce()
    {
        return view('auth.spce');
    }
    public function wce()
    {
        return view('auth.wce');
    }

    public function yug()
    {
        return view('auth.yug_register');
    }

    public function aboutus()
    {
        return view('partials.template.aboutus');
    }

    public function contactus()
    {
        return view('partials.template.contactus');
    }

    public function educo()
    {
        return view('auth.educo_register');
    }

    public function rsml()
    {
        return view('auth.rsml');
    }

    public function amp()
    {
        return view('auth.amp_register');
    }

    public function executive()
    {
        return view('auth.exec_register');
    }
    public function sparsha()
    {
        return view('auth.sparsha');
    }

    public function spti()
    {
        return view('auth.spti_register');
    }
    public function services()
    {
        return view('partials.template.services');
    }

    public function edifice()
    {
        return view('auth.edifice_register');
    }
    public function asmac()
    {
        return view('auth.asmac_register');
    }
    public function isbm()
    {
        return view('auth.isbm_register');
    }

    public function scholarships(Request $request)
    {
        $category=request('category');
        if ($category) {
            # code...
            $scholarships=Scholarship::where('category_id',$category)->paginate(5);
            return view('students.als',compact('scholarships'));
        }else{
            $scholarships=Scholarship::latest()->paginate(6);
            return view('students.als',compact('scholarships'));   
        }
    	
    }

    public function showsdetails($id)
    {
        //$scholarships=Scholarship::where('scheme_name',$scheme_name)->first();
        //$id=Scholarship::select('id')->where('scheme_name',$scheme_name)->first();
        $scholarships=Scholarship::find($id);
        $studentcourse=DB::table('course_scholarship')->where('scholarship_id',$id)->get();
        return view('partials.template.sdetails',compact('scholarships','studentcourse'));
        //return view('partials.template.sdetails',compact('scholarships'));
    }

    public function achievers()
    {
        $achievers=ScholarshipAchiever::orderBy('scholarshipamount','DESC')->paginate(6);
        return view('partials.template.achiever',compact('achievers'));
    }

    public function terms()
    {
        return view('partials.template.terms_conditions');
    }

    public function privacy()
    {
        return view('partials.template.privacy');
    }

    public function disclaimer()
    {
        return view('partials.template.disclaimer');
    }

    public function upload(Request $request)
    {
         $request->logo->storeAs('logos','logo1.png');
         return Redirect::back();
    }

    public function faq()
    {
        $faqs=FaqQuestion::all();
        return view('partials.template.faq',compact('faqs'));
    }

    public function activescholarships()
    {
        $course_types = Coursetype::all()->pluck('course_type_name', 'id')->prepend(trans('Please select course type'), '');
        $scholarships=Scholarship::orderBy('status','ASC')->paginate(9);
        return view('students.activescholarship',compact('scholarships','course_types'));
    }
    public function getcourses(Request $request)
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
}
