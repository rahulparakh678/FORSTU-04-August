<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Documents;
class DocumentsController extends Controller
{
    //
    public function index()
    {
        $documents=Documents::all();
        return view('admin.documents.index',compact('documents'));
    }

    public function storedocname(Request $request)
    {
        $doc=Documents::create($request->all());
        $documents=Documents::all();
        return view('admin.documents.index',compact('documents'));
    }
    public function updocname(Request $request,$id)
    {
        
        //$documents=Documents::select('document_name')->get();
        //$documents=Documents::where('id',$id)->first();
        //$documents=Documents::update($request->all());
        //$documents->update($request->all());
        //$documents=Documents::select('document_name')->get();
        $documents=Documents::where('id',$id)->first();
        //$profile->profile_remarks=$request->profile_remarks;
        $documents->document_name=$request->document_name;
        $documents->save();
        $documents=Documents::select('id','document_name')->get();
        //return redirect()->back()->with('message',' Details Saved Successfully');
        //return view('admin.documents.index',compact('documents'));
        return  redirect()->route('documents.index');
    }

    public function deletedocument(Request $request,$id)
    {
        $doc=Documents::where('id',$id)->first();
        $doc->delete();
        return  redirect()->route('documents.index');
    }
}
