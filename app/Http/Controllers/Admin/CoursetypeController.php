<?php

namespace App\Http\Controllers\Admin;

use App\Coursetype;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCoursetypeRequest;
use App\Http\Requests\StoreCoursetypeRequest;
use App\Http\Requests\UpdateCoursetypeRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CoursetypeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('coursetype_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coursetypes = Coursetype::all();

        return view('admin.coursetypes.index', compact('coursetypes'));
    }

    public function create()
    {
        abort_if(Gate::denies('coursetype_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.coursetypes.create');
    }

    public function store(StoreCoursetypeRequest $request)
    {
        $coursetype = Coursetype::create($request->all());

        return redirect()->route('admin.coursetypes.index');
    }

    public function edit(Coursetype $coursetype)
    {
        abort_if(Gate::denies('coursetype_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.coursetypes.edit', compact('coursetype'));
    }

    public function update(UpdateCoursetypeRequest $request, Coursetype $coursetype)
    {
        $coursetype->update($request->all());

        return redirect()->route('admin.coursetypes.index');
    }

    public function show(Coursetype $coursetype)
    {
        abort_if(Gate::denies('coursetype_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.coursetypes.show', compact('coursetype'));
    }

    public function destroy(Coursetype $coursetype)
    {
        abort_if(Gate::denies('coursetype_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coursetype->delete();

        return back();
    }

    public function massDestroy(MassDestroyCoursetypeRequest $request)
    {
        Coursetype::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}