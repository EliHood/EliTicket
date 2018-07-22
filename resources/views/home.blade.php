@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if (Session::has('message'))
            <div class="alert alert-warning" role="alert">
                {{  Session::get('message')  }}
            </div>
        @endif
            <div class="card">
                <div class="card-header">Dashboard</div>
                 

                <div class="card-body">
                 



                    You are logged in!


                    @if (!auth()->user()->isAdmin())
                        <p>
                            See all <a href="{{ url('admin/tickets') }}">tickets</a>
                        </p>
                    @else
                        <p>
                            See all your <a href="{{ url('my_tickets') }}">tickets</a> or <a href="{{ url('new_ticket') }}">open new ticket</a>
                        </p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
