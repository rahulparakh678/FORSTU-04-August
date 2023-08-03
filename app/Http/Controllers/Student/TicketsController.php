<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTicketRequest;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Ticket;
use App\Ticketcategory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Storage;
use Auth;
use Illuminate\Support\Facades\Mail;

use App\Mail\SupportQueryRaised;
use App\Mail\SupportQueryResolved;



class TicketsController extends Controller
{
    public function index()
    {
        
        $tickets = Ticket::where('userid',auth()->user()->id)
        ->orderBy('id','DESC')
        ->get();

        return view('students.tickets.index', compact('tickets'));
    }

    public function create()
    {
        
        $categoryids = Ticketcategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('students.tickets.create', compact('categoryids'));
    }

    public function store(Request $request)
    {
        $ticket=new Ticket;
        $ticket->userid=$request->userid;
        $ticket->query=$request->query1;
        $ticket->status=$request->status;
        $ticket->categoryid_id=$request->categoryid_id;

        if($request->hasFile('photo'))
        {
            $photo=$request->file('photo')->store('tickets','s3');
            Storage::disk('s3')->setVisibility($photo,'public');
            $url=Storage::disk('s3')->url($photo);
            $ticket->photo=$url;


        }

        
        $ticket->save();
        $name=Auth::user()->name;
        Mail::to(Auth::user()->email)->send(new SupportQueryRaised($name));

        //$user_id=auth()->user()->id;
        //$photo=$request->file('photo')->store('tickets','s3');
        
        
        //$ticket = Ticket::create($request->all());
        //$ticket1=Ticket::where('userid',$user_id)->first();
        //Ticket::latest->where('userid',$user_id)->first()->update([
            //'photo' => Storage::disk('s3')->url($photo)
        //]);

        return redirect()->route('support');
    }

    
    
    public function show($id)
    {
        $ticket=Ticket::find($id);
        $ticket->load('categoryid');

        return view('students.tickets.show', compact('ticket'));
    }

    
    
}