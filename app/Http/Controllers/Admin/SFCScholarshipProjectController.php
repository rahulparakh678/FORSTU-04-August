<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SFCScholarshipProject;
use App\Http\Requests\StoreSFCUserAssignmentRequest;
use App\User;


class SFCScholarshipProjectController extends Controller
{
    //

    public function sfcprojectsindex()
    {
        $sfcproject=SFCScholarshipProject::where('id',1)->first();
        $userids = User::pluck('name', 'id');
        return view('admin.sfcprojects.index',compact('userids','sfcproject'));
    }

    public function sfcprojectuserassignment(StoreSFCUserAssignmentRequest $request)
    {
       // $sfcproject=$request->all();
        //$sfcproject['user_id']=json_encode($sfcproject['user_id']);

        //SFCScholarshipProject::create($sfcproject);
        $sfcProject =SFCScholarshipProject::create($request->all());
        $sfcProject->userids()->sync($request->input('userids', []));
        $userids = User::pluck('name', 'id');
       

        return view('admin.sfcprojects.index',compact('userids'));

    }
}
