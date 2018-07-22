@extends('layouts.app')

@section('title', 'Suppor Ticket Status')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <p>
                Hello {{ ucfirst($ticketOwner->name) }},
            </p>
            <p>
                Your support ticket with ID #{{ $ticket->ticket_id }} has been marked has resolved and closed.
            </p>
        </div>
    </div>
</div>


@endsection