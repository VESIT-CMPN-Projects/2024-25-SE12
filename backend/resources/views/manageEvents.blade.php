@extends('layouts.app')

@section('styles')
/* General Styles */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
    color: #333;
}

/* Sidebar Styling */
.sidebar {
    width: 220px;
    background: #0b5ed7;
    padding: 15px;
    position: fixed;
    height: 100vh;
    color: white;
    top: 0;
    left: 0;
}

.sidebar a {
    display: block;
    color: white;
    text-decoration: none;
    padding: 12px;
    font-weight: 600;
    border-radius: 5px;
    transition: background 0.3s;
}

.sidebar a:hover {
    background: #ffc107;
    color: #333;
}

/* Page Content */
.container {
    margin-left: 250px;
    padding: 30px;
}

/* Heading */
h1 {
    font-size: 26px;
    margin-bottom: 20px;
}

/* Form Container */
.card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    padding: 20px;
    margin-bottom: 20px;
    max-width : 800px;
}

/* Input Fields */
.form-control {
    width: 90%;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
    font-size: 16px;
    margin-bottom: 15px;
}

/* Button Styling */
.btn-primary {
    background-color: #0b5ed7;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 16px;
    color: white;
    cursor: pointer;
    transition: background 0.3s;
}

.btn-primary:hover {
    background-color: #084298;
}

/* Table Styling */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table th {
    background: #0b5ed7;
    color: white;
    padding: 12px;
    text-align: left;
}

.table td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
}

.table tr:nth-child(even) {
    background: #f2f2f2;
}

/* Responsive */
@media (max-width: 768px) {
    .sidebar {
        width: 100%;
        height: auto;
        position: relative;
    }
    
    .container {
        margin-left: 0;
        padding: 20px;
    }
}

@endsection

@section('content')
<div class="container">
        <div class="sidebar">
            <a href="/admin">Dashboard</a>
            <a href="/admin/manage-events">Manage Events</a>
            <a href="#donations">Donations</a>
            <a href="#settings">Settings</a>
        </div>
    <h2 class="mb-4">Manage Events</h2>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Event Form --}}
    <div class="card p-4 mb-4">
        <h4>Add New Event</h4>
        <form action="{{ route('events.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Event Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Date</label>
                <input type="date" name="date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Time</label>
                <input type="time" name="time" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Location</label>
                <input type="text" name="location" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Event</button>
        </form>
    </div>

    {{-- Events Table --}}
    <div class="card p-4">
        <h4>Existing Events</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Event Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Location</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->date }}</td>
                    <td>{{ $event->time }}</td>
                    <td>{{ $event->location }}</td>
                    <td>
                        <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
