@extends('layouts.app')

@section('title','Dashboard')

@section('styles')

      /* Base styles */
      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        overflow-x: hidden;
      }

      /* HEADER STYLES */
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

      /* MAIN CONTENT STYLES */
      main {
        flex: 1;
        display: flex;
      }

      .sidebar {
        background-color: #c8daf8;
        width: 200px;
        min-width: 200px;
        position: relative;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding-top: 20px;
        padding-bottom: 70px; /* Space for user profile */
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
      }

      .content {
        flex: 1;
        padding: 40px;
        overflow-y: auto;
      }

      .dashboard-card {
        background-color: #c8daf8;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
      }

      .event-image {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 5px;
      }

      .small-logo {
        width: 100px;
        margin-bottom: 20px;
      }

      .volunteer-avatar {
        width: 30px;
        height: 30px;
        border-radius: 50%;
      }

      .side_list h6 {
        font-weight: bold;
        font-size: 20px;
      }

      .user-profile {
        position: absolute;
        bottom: 20px;
        left: 20px;
        display: flex;
        align-items: center;
      }

      .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
      }

      .overview-stats {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        flex-wrap: wrap;
      }

      .stat-box {
        text-align: center;
        margin-bottom: 15px;
      }

      .stat-label {
        font-size: 12px;
        color: #000000;
        text-transform: uppercase;
        font-weight: 600;
      }

      .stat-value {
        font-size: 20px;
        font-weight: bold;
      }

      .event-details {
        padding-left: 20px;
      }

      .section-label {
        font-size: 14px;
        color: #000000;
        text-transform: uppercase;
        font-weight: 600;
      }

      .event-title {
        font-weight: bold;
        margin-bottom: 10px;
      }

      .bottom_list h6 {
        font-size: 20px;
        font-weight: bold;
      }

      .table {
        font-size: 14px;
      }

      .event-buttons {
        margin-bottom: 15px;
      }
      
      .event-buttons .btn {
        padding: 8px 20px;
        border-radius: 5px;
        font-weight: 500;
        transition: all 0.3s ease;
      }
      
      .event-buttons .btn-outline-primary:hover {
        background-color: #0d6efd;
        color: white;
      }
      
      @media (max-width: 576px) {
        .event-buttons .btn {
          display: block;
          width: 80%;
          margin: 10px auto;
        }
        
        .event-buttons .btn:first-child {
          margin-right: auto !important;
        }
      }

      @media (max-width: 576px) {
        .overview-stats {
          flex-direction: column;
          align-items: center;
        }
      }

      /* FOOTER STYLES */
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
      @endsection

@section('content')
@include('layouts.navbar')

    <!-- MAIN CONTENT SECTION -->
    <main>
      <!-- Sidebar -->
      <aside class="sidebar">
        <nav>
          <a href="#"><i class="fas fa-home me-2"></i> Home</a>
          <a href="#" class="active"
            ><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a
          >
          <a href="#"><i class="fas fa-user me-2"></i> Profile</a>
          <a href="#"><i class="fas fa-cog me-2"></i> Settings</a>
        </nav>

        <!-- User Profile at Bottom -->
        <div class="user-profile">
          <img
            src="/Muskurate-Raho/backend/public/assets/images/woman.png"
            alt="User"
            class="user-avatar"
          />
          <div>
            <div>Kirti Khanna</div>
            <small class="text-muted">Online</small>
          </div>
        </div>
      </aside>

      <!-- Main Content Area -->
      <section class="content">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div>
            <div class="text small" style="font-weight: 600; color: #000000">
              OVERVIEW
            </div>
            <h4>Dashboard</h4>
          </div>
          <div>
            <i class="fas fa-search me-3"></i>
            <i class="fas fa-bell"></i>
          </div>
        </div>

        <!-- Stats Row -->
        <div class="overview-stats">
          <div class="stat-box">
            <div class="stat-label">NEXT EVENT DATE</div>
            <div class="stat-value">5/4/2025</div>
          </div>
          <div class="stat-box">
            <div class="stat-label">TOTAL DONATIONS</div>
            <div class="stat-value">24,600</div>
          </div>
          <div class="stat-box">
            <div class="stat-label">VOLUNTEERS</div>
            <div class="stat-value">24,600</div>
          </div>
          <div class="stat-box">
            <div class="stat-label">LAST UPDATE</div>
            <div class="stat-value">Today, 9:02 am</div>
          </div>
        </div>

        <!-- Event Card and Volunteer List -->
        <div class="row mb-4">
          <div class="col-md-8">
            <article class="dashboard-card">
              <div class="row d-flex align-items-center">
                <div class="col-md-5">
                  <img
                    src="/Muskurate-Raho/backend/public/assets/images/whatweDo-image3.png"
                    alt="Beach Cleanup"
                    class="event-image"
                  />
                </div>
                <div class="col-md-7 event-details">
                  <div class="section-label">OVERVIEW</div>
                  <h5 class="event-title">Beach Cleanup Drive</h5>

                  <div class="section-label mt-4">DATE</div>
                  <div>5/04/2025</div>

                  <div class="section-label mt-4">TIME</div>
                  <div>2:00PM</div>

                  <div class="section-label mt-4">LOCATION</div>
                  <div>Juhu Beach</div>

                  <div class="event-buttons mt-4 text-center">
                    <a href="#" class="btn btn-outline-primary me-2">Learn More</a>
                    <a href="#" class="btn btn-primary">Register</a>
                </div>
              </div>
            </article>
          </div>

          <div class="col-md-4 side_list">
            <h6 class="mb-3">List of volunteers</h6>
            <div class="mb-3 d-flex align-items-center">
              <img
                src="/Muskurate-Raho/backend/public/assets/images/woman.png"
                alt="Volunteer"
                class="volunteer-avatar me-2"
              />
              <div>
                <div>Rishika Sharma</div>
                <small class="text-muted">Campaign captain</small>
              </div>
            </div>
            <div class="mb-3 d-flex align-items-center">
              <img
                src="/Muskurate-Raho/backend/public/assets/images/man.jpeg"
                alt="Volunteer"
                class="volunteer-avatar me-2"
              />
              <div>
                <div>Manav Kapoor</div>
                <small class="text-muted">Event Coordinator</small>
              </div>
            </div>
            <div class="mb-3 d-flex align-items-center">
              <img
                src="/Muskurate-Raho/backend/public/assets/images/man.jpeg"
                alt="Volunteer"
                class="volunteer-avatar me-2"
              />
              <div>
                <div>Rohan Singh</div>
                <small class="text-muted">Safety and First Aid Incharge</small>
              </div>
            </div>
            <div class="mb-3 d-flex align-items-center">
              <img
                src="/Muskurate-Raho/backend/public/assets/images/woman.png"
                alt="Volunteer"
                class="volunteer-avatar me-2"
              />
              <div>
                <div>Aarya Kulkarni</div>
                <small class="text-muted"
                  >Logistics and Equipment Handler</small
                >
              </div>
            </div>
          </div>
        </div>

        <!-- Registered Volunteers Table -->
        <div class="mb-5 bottom_list">
          <h6 class="mb-3">Upcoming Events</h6>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Name of the Event</th>
                  <th>Location</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tree Plantation Drive</td>
                  <td>Sanjay Gandhi National Park</td>
                  <td>12.04.2025</td>
                </tr>
                <tr>
                  <td>Beach Cleanup Drive</td>
                  <td>Mahim Beach</td>
                  <td>20.04.2025</td>
                </tr>
                <tr>
                  <td>Project Pathshala</td>
                  <td>St. Catherine of Siena School</td>
                  <td>24.04.2025</td>
                </tr>
                <tr>
                  <td>Beach Cleanup Drive</td>
                  <td>Girgaon Chowpatty</td>
                  <td>30.04.2025</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </main>

@include('layouts.footer')
@endsection