<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Ticket;

use Illuminate\Support\Facades\Auth;


class TicketsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create(){

    	return view('tickets.create');
    }



   public function store(Request $request, AppMailer $mailer)
	{
	    $this->validate($request, [
	            'title'     => 'required',
	            'priority'  => 'required',
	            'message'   => 'required'
	    ]);

        $ticket = new Ticket([
            'title'     => $request['title'],
            'user_id'   => Auth::user()->id,
            'ticket_id' => strtoupper(str_random(10)),
            'priority'  => $request['priority'],
            'message'   => $request['message'],
            'status'    => "Open",
        ]);

        $ticket->save();

        $mailer->sendTicketInformation(Auth::user(), $ticket);

        return redirect()->back()->with("status", "A ticket with ID: #$ticket->ticket_id has been opened.");
	}

    public function userTickets()
    {
        $user = Auth::user()->id;
        $tickets = Ticket::Pageinate($user)->paginate(10);


        return view('tickets.user_tickets', compact('tickets'));
    }

    public function show($ticket_id)
    {
        $ticket = Ticket::GetTicket($ticket_id)->firstOrFail();

        $comments = $ticket->comments;

  

        return view('tickets.show', compact('ticket','comments'));
    }





}
