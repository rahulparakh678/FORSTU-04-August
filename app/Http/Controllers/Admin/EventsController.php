<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Event;
use Illuminate\Http\Request;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Redirect;

class EventsController extends Controller
{
    //
    /*
    public function show(Request $request, Event $event)
    {
        return redirect::to($event->link);
    }*/

    public function index()
    {
        $scholarships=Event::all();
        return view('admin.scholarships.feeds.index',compact('scholarships'));
    }

    public function store(Request $request)
    {
        $scholarship=Event::create($request->all());

        FeedItem::create()
           ->title($request->title)
           ->summary($request->description)
           ->author($request->author)
           ->link($request->link);
         //function tofeeditem($request);
            
            
            
                   

        return redirect()->route('scholarshipfeed');
        
    }

    public function edit(Request $request,$id)
    {
        $scholarships=Event::where('id',$id)->first();
        return view('admin.scholarships.feeds.edit',compact('scholarships'));
    }

    public function updatefeedstatus(Request $request , $id)
    {
        $scholarship=Event::where('id',$id)->first();
        $scholarship->status=$request->status;
        $scholarship->save();
        return redirect()->route('scholarshipfeed');
    }
}
