@extends('layouts.app')

@section('title', 'Admin')

@section('styles')
    
    body {
  font-family: Arial, sans-serif;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  background-color: #f8f9fa;
  color: #333;
}


/* HEADER STYLES */
      .logo {
        height: 50px;
      }

      .navbar {
        background-color: #fff;
        padding: 10px 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
      }

      .navbar-brand {
        font-weight: bold;
        color: #0b5ed7;
        font-size: 18px;
      }

      .nav-link {
        color: #333;
        font-size: 15px;
        margin-right: 10px;
        font-weight: 600;
      }

      .donate-btn {
        background-color: #fef577;
        color: #333;
        border-radius: 5px;
        padding: 5px 15px;
        font-size: 15px;
        font-weight: 600;
        border: solid 1px #a79d0d;
      }
/* Main Layout */
main {
  flex: 1;
  display: flex;
  padding: 20px;
  gap: 20px;
}

/* Sidebar */
.sidebar {
  background-color: #d5e7ff; /* Lightened Blue */
  width: 220px;
  min-width: 220px;
  position: relative;
  padding: 20px 15px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.sidebar a {
  display: block;
  padding: 12px 15px;
  text-decoration: none;
  font-size: 16px;
  color: black;
  font-weight: 600;
  transition: background 0.3s ease;
  border-radius: 5px;
}

.sidebar a:hover {
  background-color: #bdd5f8; /* Softer hover */
}

/* Responsive Sidebar */
@media (max-width: 768px) {
  .sidebar {
    display: none;
  }
}

/* Content Section */
.content {
  flex-grow: 1;
  padding: 20px;
}

/* Cards */
.card {
  border-radius: 10px;
  padding: 15px;
  color: white;
  text-align: center;
  font-size: 18px;
  font-weight: bold;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card h4 {
  font-size: 18px;
  font-weight: 600;
}

.bg-primary {
  background-color: #5390d9; /* Softer Blue */
}

.bg-success {
  background-color: #28a745;
}

.bg-warning {
  background-color: #ffc107;
  color: #fff;
}

/* Tables */
.table {
  background-color: white;
  border-radius: 8px;
  overflow: hidden;
}

.table th {
  background-color: #5390d9; /* Light Blue Header */
  color: white;
  padding: 12px;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}

.table-striped tbody tr:hover {
  background-color: #f1f1f1;
}

/* Modal */
.modal-content {
  border-radius: 10px;
}

.modal-header {
  background-color: #fef577;
}

.modal-title {
  font-weight: 600;
  color: #333;
}

.modal-footer .btn {
  font-weight: 600;
  border-radius: 5px;
}

.footer-top {
    background-color: #000;
    color: white;
    padding: 40px 0;
}

.footer-bottom {
    background-color: #fef577;
    color: #000;
    padding: 10px 0;
    font-size: 14px;
}

.logo-container img {
    width: 150px;
    height: 150px;
    border-radius: 10px;
}

.footer-menu h5 {
    font-size: 18px;
    margin-bottom: 15px;
}

.footer-menu ul {
    list-style: none;
    padding-left: 0;
}

.footer-menu ul li {
    margin-bottom: 8px;
}

.footer-menu ul li a {
    color: var(--light-text);
    text-decoration: none;
}

.footer-menu ul li a:hover {
    text-decoration: underline;
}

.subscribe-section h5 {
    font-size: 20px;
    margin-bottom: 20px;
}

.subscribe-form {
    display: flex;
}

.subscribe-form input {
    border: 1px solid #4f4d4d;
    color: white;
}

.social-icons {
    margin-top: 20px;
}

.social-icons a {
    color: white;
    font-size: 20px;
    margin-right: 15px;
}


/* Contact Query */
.contact-query {
  margin-top: 30px;
}

/* Donations Chart */
#donationsChart {
  background: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

 @endsection

@section('content')
@include('layouts.navbar')
  <!-- Main Content -->
  <main>
        <div class="sidebar">
            <a href="#dashboard">Dashboard</a>
            <a href="/admin/manage-events">Manage Events</a>
            <a href="#donations">Donations</a>
            <a href="#settings">Settings</a>
        </div>

        <div class="content">

            <div class="alert alert-info">
                <strong>Alert:</strong> New Donation Recieved !!!
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-primary text-white p-3">
                        <h4>Total Donations</h4>
                        <p>$5000</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-success text-white p-3">
                        <h4>Total Volunteers</h4>
                        <p>120</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning text-white p-3">
                        <h4>Upcoming Events</h4>
                        <p>5</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <canvas id="donationsChart"></canvas>
                </div>
            </div>

            <div>

            </div>
            <h3>Donations</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Location</th>
                        <th>Amount</th>
                        <th>Transaction_ID</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($donations as $donation)
                        <tr>
                            <td>{{ $donation->full_name }}</td>
                            <td>{{ $donation->email }}</td>
                            <td>{{ $donation->phone }}</td>
                            <td>{{ $donation-> location}}</td>
                            <td>{{ $donation->amount }}</td>
                            <td>{{ $donation-> transaction_id}}</td>
                            <td>{{ $donation-> message}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


            <div class="contact-query">
            <h3>Contact Queries</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->subject ?? 'N/A' }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>{{ $contact->created_at->format('d M Y, h:i A') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </main>
@include('layouts.footer')
@include('layouts.adminScripts')
@endsection