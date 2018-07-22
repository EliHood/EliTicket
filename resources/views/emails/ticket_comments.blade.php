@extends('layouts.app')

@section('title', 'Ticket Comments')

@section('content') 

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <p>
                {{ $comment->comment }}
            </p>
            ---
            <p>Replied by: {{ $user->name }}</p>
            <p>Title: {{ $ticket->title }}</p>
            <p>Title: {{ $ticket->ticket_id }}</p>
            <p>Status: {{ $ticket->status }}</p>
            <p>
                You can view the ticket at any time at {{ url('tickets/'. $ticket->ticket_id) }}
            </p>
        </div>
    </div>
</div>

@endsection