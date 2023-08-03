<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyScholarshipProviderRequest;
use App\Http\Requests\StoreScholarshipProviderRequest;
use App\Http\Requests\UpdateScholarshipProviderRequest;
use App\ScholarshipProvider;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\SaveProfile;
use DB;
class ScholarshipProvidersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('scholarship_provider_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $scholarshipProviders = ScholarshipProvider::all();

        return view('admin.scholarshipProviders.index', compact('scholarshipProviders'));
    }

    public function create()
    {
        abort_if(Gate::denies('scholarship_provider_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.scholarshipProviders.create');
    }

     public function sfccreate()
    {
        

        return view('admin.scholarshipProviders.sfccreate');
    }


    public function store(StoreScholarshipProviderRequest $request)
    {
        $scholarshipProvider = ScholarshipProvider::create($request->all());

        User::create([
            'name'=>request('organization_name'),
            'email'=>request('email'),
            'user_type'=>'provider',

            'password'=>bcrypt('password'),
        ]);

        return redirect()->route('admin.scholarship-providers.index');
    }

    public function sfcstore(StoreScholarshipProviderRequest $request)
    {
        $scholarshipProvider = ScholarshipProvider::create($request->all());

        User::create([
            'name'=>request('organization_name'),
            'email'=>request('email'),
            'user_type'=>'sfcngo',
            'ref_code'=>request('ref_code'),
            'password'=>bcrypt('password'),
        ]);

        return redirect()->route('admin.scholarship-providers.index');
    }

    public function edit(ScholarshipProvider $scholarshipProvider)
    {
        abort_if(Gate::denies('scholarship_provider_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.scholarshipProviders.edit', compact('scholarshipProvider'));
    }

    public function update(UpdateScholarshipProviderRequest $request, ScholarshipProvider $scholarshipProvider)
    {
        $scholarshipProvider->update($request->all());

        return redirect()->route('admin.scholarship-providers.index');
    }

    public function show(ScholarshipProvider $scholarshipProvider)
    {
        abort_if(Gate::denies('scholarship_provider_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.scholarshipProviders.show', compact('scholarshipProvider'));
    }

    public function destroy(ScholarshipProvider $scholarshipProvider)
    {
        abort_if(Gate::denies('scholarship_provider_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $scholarshipProvider->delete();

        return back();
    }

    public function massDestroy(MassDestroyScholarshipProviderRequest $request)
    {
        ScholarshipProvider::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function save_data(Request $request)
    {
        //dd($request->all());
        //$checkedarray=$request->all();
        //return $checkedarray;

        //$input=$request->all();
        //$input['profile_id'] = $request->input('profile_id[]');
        //$input['categories'] = $request->input('categories');
       // $input = $request->all();
       
        
        //$data=SaveProfile::create($input);
        //$saveProfile=new SaveProfile();
        //$saveProfile->categories=$request->input('categories');
        //$saveProfile->save();
        //return $saveProfile;
        //$input = $request->all();
        //$input['categories'] = $request->input('categories');
        //$data=$request->input('categories');
        //global data1=" ";
        
        
        //$data=$request->all();
        //$i=0;
        //define('i',0);
        //for($i=1;i<count($request->categories);$i++)
        //{
            //$data1=SaveProfile::create($request->categories[i]);
        //}
        
        //for($i=0;i<sizeof($data);$i++)
        //{
            //SaveProfile::create($profile)
          //DB::table('save_profiles')->insert('categories'->implode(",",$data[0]));
            //SaveProfile::create($data);
        //}
        $input['categories'] = $request->input('categories');
        $a=$request->input('categories');
        $data=$input['categories'];

        foreach($data as $categor)
        {
            $d1=new SaveProfile();
            $d1->categories=$categor;
            $d1->save();
        }
    // foreach($data as $data1)
      //  {
          //$data1=SaveProfile::create([
            //'categories'=>$request->categories
          //]);

        // } 
        //}
       // define('i',0);
        //for($i=0;i>5;$i++)
        //{
            //$data1=SaveProfile::create($request->categories[i]);
          //  $data1=SaveProfile::create([
            //'categories'=>$request->categories[0]
          //]);
        //}

        return $request->categories;



    }

   


}