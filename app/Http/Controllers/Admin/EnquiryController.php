<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enquiry;
class EnquiryController extends Controller
{
    //

    public function index()
    {
    	$enquiries=Enquiry::all();
    	return view('admin.enquiry.index',compact('enquiries'));
    }
    public function create( Request $request)
    {
       
    	$enquiry = Enquiry::create($request->all());

        return redirect('contactus')->with('message','Enquiry form Submitted Successfully. Our team will get in touch with you shortly');
        
    }

    public function destroy(Request $id)
    {
    	
    	/*
    	$enquiry=Enquiry::where('id',$id)->first();
    	if($enquiry !=null)
    	{
    		$enquiry->delete();
    	return redirect()->back()->with('message','Enquiry Deleted Successfully');
    	}
    	else
    	{
    		return redirect()->back()->with('message','Enquiry not found');
    	}
    	*/
    }
}
