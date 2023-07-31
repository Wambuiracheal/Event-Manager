@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Event Details</h1>
            <p><strong>Event Name:</strong> {{ $event->event_name }}</p>
            <p><strong>Description:</strong> {{ $event->description }}</p>
            <p><strong>Start Date:</strong> {{ $event->start_date }}</p>
            <p><strong>End Date:</strong> {{ $event->end_date }}</p>
            <p><strong>Location:</strong> {{ $event->location }}</p>
            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-info">Edit Event</a>
        </div>
    </div>
</div>
@endsection
