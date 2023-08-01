@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create New Event</h1>
            <form action="{{ route('events.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="event_name">Event Name</label>
                    <input type="text" name="event_name" id="event_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="datetime-local" name="start_date" id="start_date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="end_date">End Date</label>
                    <input type="datetime-local" name="end_date" id="end_date" class="form-control" required>
                </div>
            
                <div class="form-group">
                    <label for="location">Location</label>
                    <textarea type="text" name="location" id="location" class="form-control" required></textarea>
                </div>
            
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="number" name="amount" id="amount" class="form-control" required>
                </div>
            
                <br>
                <button type="submit" class="btn btn-primary">Create Event</button>
            </form>
            
        </div>
    </div>
</div>
@endsection
