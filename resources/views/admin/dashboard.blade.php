@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to the Admin Dashboard</h1>
        <!-- Add admin dashboard content here -->
        <div class="container-fluid">
            <div class="row content">
                <div class="col-sm-6">
                    <h4>Admin</h4>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li><a href="{{ route('admin.venue.booklist') }}">Venue Booklist</a></li>
                        <li><a href="{{ route('admin.event.audience') }}">Event Audience List</a></li>
                        <li><a href="{{ route('admin.venues') }}">Venues</a></li>
                        <li><a href="{{ route('admin.reports') }}">Reports</a></li>
                        <li><a href="{{ route('admin.users') }}">Users</a></li>
                    </ul>
                    <br>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
                <!-- Add the main content area here -->
            </div>
        </div>
    </div>
@endsection
