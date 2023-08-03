<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyScholarshipAchieverRequest;
use App\Http\Requests\StoreScholarshipAchieverRequest;
use App\Http\Requests\UpdateScholarshipAchieverRequest;
use App\ScholarshipAchiever;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ScholarshipAchieversController extends Controller
{
    

    public function index()
    {
        abort_if(Gate::denies('scholarship_achiever_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $scholarshipAchievers = ScholarshipAchiever::all();

        return view('admin.scholarshipAchievers.index', compact('scholarshipAchievers'));
    }

    public function create()
    {
        abort_if(Gate::denies('scholarship_achiever_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.scholarshipAchievers.create');
    }

    public function store(StoreScholarshipAchieverRequest $request)
    {
        $scholarshipAchiever = ScholarshipAchiever::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $scholarshipAchiever->id]);
        }

        return redirect()->route('admin.scholarship-achievers.index');
    }

    public function edit(ScholarshipAchiever $scholarshipAchiever)
    {
        abort_if(Gate::denies('scholarship_achiever_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.scholarshipAchievers.edit', compact('scholarshipAchiever'));
    }

    public function update(UpdateScholarshipAchieverRequest $request, ScholarshipAchiever $scholarshipAchiever)
    {
        $scholarshipAchiever->update($request->all());

        return redirect()->route('admin.scholarship-achievers.index');
    }

    public function show(ScholarshipAchiever $scholarshipAchiever)
    {
        abort_if(Gate::denies('scholarship_achiever_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.scholarshipAchievers.show', compact('scholarshipAchiever'));
    }

    public function destroy(ScholarshipAchiever $scholarshipAchiever)
    {
        abort_if(Gate::denies('scholarship_achiever_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $scholarshipAchiever->delete();

        return back();
    }

    public function massDestroy(MassDestroyScholarshipAchieverRequest $request)
    {
        ScholarshipAchiever::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('scholarship_achiever_create') && Gate::denies('scholarship_achiever_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ScholarshipAchiever();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}