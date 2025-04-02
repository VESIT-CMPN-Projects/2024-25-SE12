@extends('layouts.app')

@section('title', 'Contact Us')

@section('styles')
    
    body {
      font-family: Arial, sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .logo {
      height: 70px;
    }

    .navbar {
      background-color: #fff;
      padding: 15px 0;
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

    main {
      flex: 1;
      display: flex;
    }

    .sidebar {
      background-color: #c8daf8;
      /* Light blue */
      width: 200px;
      min-width: 200px;
      position: relative;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding-top: 20px;
      padding-bottom: 70px;
      /* Space for user profile */
    }

    @media (max-width: 768px) {
      .sidebar {
        display: none;
      }
    }

    .sidebar a {
      padding: 10px 15px;
      text-decoration: none;
      font-size: 16px;
      color: black;
      display: block;
    }

    .sidebar a:hover {
      background-color: #f1f1f1;
      /* Light gray for hover */
    }

    /* Main content styling */
    .content {
      flex-grow: 1;
      padding: 20px;
    }

    .card {
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .card h4 {
      font-size: 16px;
      font-weight: 600;
    }

    .card p {
      font-size: 20px;
      font-weight: bold;
    }

    .card.bg-primary {
      background-color: #0b5ed7;
      /* Blue */
    }

    .card.bg-success {
      background-color: #28a745;
      /* Green */
    }

    .card.bg-warning {
      background-color: #ffc107;
      /* Yellow */
      color: #fff;
    }

    .table-striped tbody tr:nth-of-type(odd) {
      background-color: #f9f9f9;
      /* Light gray for table rows */
    }

    .table-striped tbody tr:hover {
      background-color: #f1f1f1;
      /* Light gray on hover */
    }

    /* Modal styling */
    .modal-content {
      border-radius: 8px;
    }

    .modal-header {
      background-color: #fef577;
      /* Yellow header for emphasis */
    }

    .modal-title {
      font-weight: 600;
      color: #333;
    }

    .modal-body input {
      border-radius: 5px;
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
      font-weight: bold;
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
      font-weight: bold;
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

    .contact-query{
        margin-top:30px;
    }

    .main-content {
      background-color: #f8f9fa;
      min-height: calc(100vh - 70px - 300px);
    }

    @media (max-width: 992px) {
      .sidebar {
        min-height: auto;
        border-right: none;
      }
    }
 @endsection

@section('content')
@include('layouts.navbar')
  <!-- Main Content -->
  <main>
        <div class="sidebar">
            <a href="#dashboard">Dashboard</a>
            <a href="#events">Manage Events</a>
            <a href="#donations">Donations</a>
            <a href="#settings">Settings</a>
        </div>

        <div class="content">

            <div class="alert alert-info">
                <strong>New Donation:</strong> $200 received from Jane Doe!
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
                        <th>ID</th>
                        <th>Donor Name</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Jane Doe</td>
                        <td>$200</td>
                        <td>2025-04-02</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>John Smith</td>
                        <td>$500</td>
                        <td>2025-04-01</td>
                    </tr>
                </tbody>
            </table>

            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewMore">View More</button>

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

        <script>
            // Donations Chart
            const ctx = document.getElementById('donationsChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                    datasets: [{
                        label: 'Donations ($)',
                        data: [500, 1000, 1500, 2000, 2500],
                        backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    }]
                }
            });
        </script>
    </main>
@include('layouts.footer')
@include('layouts.homeScripts')
@endsection