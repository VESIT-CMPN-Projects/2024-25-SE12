@extends('layouts.app')

@section('title', 'About Us')

@section('styles')
body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      overflow-x: hidden;
  }
  
  .logo{
      height: 70px;
  }

  .navbar {
      background-color: #fff;
      padding: 15px 0;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
  }
  
  .navbar-brand {
      font-weight: bold;
      color: #0b5ed7;
      font-size: 18px;
  }
  
  .nav-link {
      color: #333;
      font-size: 14px;
      margin-right: 10px;
      font-weight: 600;
  }
  
  .donate-btn {
      background-color: #ffc107;
      color: #333;
      border-radius: 5px;
      padding: 5px 15px;
      font-size: 14px;
      font-weight: 600;
  }
  
  
  .section-divider {
      width: 40px;
      height: 2px;
      background-color: #333;
      margin-right: 15px;
      display: inline-block;
      vertical-align: middle;
  }
  
  .section-label {
    text-transform: uppercase;
    font-size: 20px;
    font-weight: bold;
    color: #555;
    letter-spacing: 1px;
    display: inline-block;
    vertical-align: middle;
  }

    .hero-section {
    background: linear-gradient(to bottom, #ffffff 50%, #b3d4ff 50%);
    padding: 60px 0;
    position: relative;
    margin-top: -1.5rem;
  }

  .hero-title {
    margin-top: -5rem;
  }

  .hero-content {
    text-align: justify;
    font-size: 1.2rem;
    color: #333;
  }

  .hero-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #222;
  }

  .featured-vid {
    border-radius: 10px;
    overflow: hidden;
  }

  .play-button {
    cursor: pointer;
    z-index: 10;
  }

  @media (max-width: 768px) {
    .hero-title {
      font-size: 2rem;
      margin-top: -9rem;
    }


    .hero-title {
      transform: translateY(-20px); /* Move the title up by 20 pixels */
    }
  
    .hero-text {
      transform: translateY(20px); 
    }

    .hero-content {
      font-size: 1rem;
    }

    .highlight-section {
      font-size: 1rem;
      text-align: justify;
    }

    .title-content {
      flex-direction: column;
      align-items: center;
    }
  }
    
    .supporters-section {
      padding: 30px 0 50px;
    }
    
    .section-label {
      font-weight: 600;
      color: #555;
    }
    
    .supporter-logo {
      text-align: center;
      padding: 15px;
    }
    


    .award-card {
      text-align: center;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .award-icon {
      width: 60px;
      height: 60px;
      background-color: #f8f9fa;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 15px;
    }

    .award-icon i {
      color: var(--primary-color);
      font-size: 1.5rem;
    }

    .impact-section {
      background-color: #ffd700;
      padding: 60px 0;
      border-radius: 10px;
      margin-left: 70px;
      margin-right: 70px;
    }

    .impact-title {
      font-size: 2.9rem;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .impact-content {
      color: var(--dark-text);
      font-size: 1.1rem;
      text-align: justify;
    }

    /* Team Section Styles */
    .team-card {
      min-height: 550px;
      border-radius: 10px;
      overflow: hidden;
      margin-bottom: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .team-card:hover {
      transform: translateY(-5px);
    }

    .team-card img {
      width: 90%;
      height: auto;
      object-fit: cover;
    }

    .team-card .card-body {
      padding: 15px;
      text-align: center;
    }

    .team-card .card-title {
      margin-bottom: 0;
      font-weight: 600;
    }

    .team-card .card-text {
      color: #6c757d;
      font-size: 0.9rem;
    }

    .social-icons {
      margin-top: 10px;
    }

    .social-icons a {
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .social-icons a:hover {
      color: #ffc107;
    }

    .cta-section {
      background-image: url("{{asset('assets/images/pathshala3.jpg')}}");
      background-size: cover;
      background-position: center;
      color: white;
      padding: 60px 0;
      text-align: center;
      position: relative;
    }

    .cta-section::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(24, 24, 24, 0.5);
    }

    .cta-content {
      padding: 40px;
      color: white;
      filter: brightness(1);
    }

    .btn-cta {
      margin: 8px;
      padding: 10px 20px;
      font-weight: 600;
    }

    .event-heading {
      font-size: 30px;
    }

    .event-card {
      background-color: #ffd700;
      border-radius: 15px;
      padding: 20px;
      height: 100%;
      position: relative;
    }

    .event-date {
      font-size: 1.8rem;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .event-month {
      text-transform: uppercase;
      font-size: 0.9rem;
      font-weight: bold;
    }

    .event-title {
      font-weight: bold;
      margin-top: 18px;
      font-size: 25px;
    }

    .event-arrow {
      position: absolute;
      right: 20px;
      bottom: 20px;
      background-color: white;
      width: 35px;
      height: 35px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .footer-top {
      background-color: #000;
      color: white;
      padding: 40px 0;
    }

    .footer-bottom {
      background-color: #ffc107;
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
      color: #6c757d;
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

    .divider {
      color: #fff;
      margin: 0 10px;
    }
    @endsection

    @section('content')
    @include('layouts.navbar')
    
  <main>
    <!-- Hero Section -->
    <section class="hero-section mb-5">
      <section class="container py-5">
        <div class="d-flex justify-content-space-between align-items-center">
          <span class="section-divider"></span>
          <h5 class="fw-bold text-uppercase section-label">Know About Us</h5>
        </div>
        <div class="title-content align-items-center mt-1">
          <div class="d-flex justify-content-center align-items-center gap-4">
            <h1 class="hero-title">We are the changemakers in the society</h1>
            <p class="hero-content mx-auto mt-1" style="max-width: 700px">
              Our vision is a world where the diversity of live thrives, and
              people act to conserve nature for its own sake and its ability
              to fulfil our needs and enrich our lives. Our vision is to work
              upon a society which promotes sustainability, environmental
              stewardship, education and skill development for underprivileged
              children and to conduct projects for children welfare. Our
              vision is to spread positivity and happiness in all possible
              ways.
            </p>
          </div>
          <div class="featured-vid mt-4 mt-lg-0 position-relative justify-content-center">
            <video id="heroVideo" src="{{asset('assets/videos/children.mp4')}}" class="img-fluid rounded mt-5"
              style="
                  width: 80%;
                  display: block;
                  margin-left: auto;
                  margin-right: auto;
                "></video>

            <!-- Play button overlay -->
            <div class="play-button position-absolute top-50 start-50 translate-middle">
              <button id="playButton" class="btn btn-light rounded-circle p-3" style="width: 60px; height: 60px">
                <i class="fas fa-play"></i>
              </button>
            </div>
          </div>
        </div>

        <section class="highlight-section mt-5 fw-bold text-align-justify">
          <p>
            Sustainable change won't occur unless members of civil society are
            actively involved in the development process. Muskurate Raho
            educates the public to make them collaborators in its objectives.
          </p>
        </section>

        <!-- Supporters Section -->
        <section class="supporters-section">
          <div class="container">
            <div class="mb-4">
              <span class="section-divider"></span>
              <span class="section-label">OUR SUPPORTERS</span>
            </div>
            <div class="row">
              <div class="col-4 col-md-2 supporter-logo">
                <img src="/api/placeholder/100/40" alt="Logo 1" class="img-fluid">
              </div>
              <div class="col-4 col-md-2 supporter-logo">
                <img src="/api/placeholder/100/40" alt="Logo 2" class="img-fluid">
              </div>
              <div class="col-4 col-md-2 supporter-logo">
                <img src="/api/placeholder/100/40" alt="Logo 3" class="img-fluid">
              </div>
              <div class="col-4 col-md-2 supporter-logo">
                <img src="/api/placeholder/100/40" alt="Logo 4" class="img-fluid">
              </div>
              <div class="col-4 col-md-2 supporter-logo">
                <img src="/api/placeholder/100/40" alt="Logo 5" class="img-fluid">
              </div>
              <div class="col-4 col-md-2 supporter-logo">
                <img src="/api/placeholder/100/40" alt="Logo 6" class="img-fluid">
              </div>
            </div>
          </div>
        </section>


      </section>
    </section>

    <!-- Awards Section -->
    <section class="awards-section mb-5 mt-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="fw-bold">Awards & Recognitions</h2>
          <p class="text-muted">
            We're honored to be recognized for our community impact
          </p>
        </div>
        <div class="row">
          <div class="col-md-3 col-6">
            <div class="award-card">
              <div class="award-icon">
                <i class="fas fa-trophy"></i>
              </div>
              <h4 class="fs-5 fw-bold">Best NGO</h4>
              <p class="small text-muted">2022-2023</p>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="award-card">
              <div class="award-icon">
                <i class="fas fa-medal"></i>
              </div>
              <h4 class="fs-5 fw-bold">Excellence Award</h4>
              <p class="small text-muted">2021-2022</p>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="award-card">
              <div class="award-icon">
                <i class="fas fa-award"></i>
              </div>
              <h4 class="fs-5 fw-bold">Social Impact</h4>
              <p class="small text-muted">2020-2021</p>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="award-card">
              <div class="award-icon">
                <i class="fas fa-star"></i>
              </div>
              <h4 class="fs-5 fw-bold">Global Recognition</h4>
              <p class="small text-muted">2019-2020</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Impact Section -->
    <section class="impact-section mb-5">
      <div class="container">
        <div class="row">
          <h6 class="fw-bold text-uppercase">Our Journey</h6>
          <div class="col-lg-6 d-flex flex-column justify-content-center gap-3">
            <h2 class="fw-bold mb-4 impact-title">
              How we are creating impact
            </h2>
            <p class="mb-4 impact-content">
              We are committed to making a difference by addressing critical
              issues such as education, healthcare, environmental
              sustainability, and social welfare. Through our initiatives, we
              aim to empower communities, uplift underprivileged individuals,
              and create a positive and lasting impact on society.
            </p>
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <i class="fas fa-check-circle text-dark-txt me-2"></i>
              </div>
              <div>
                <p class="mb-1 impact-content">
                  Providing education to underprivileged children
                </p>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <i class="fas fa-check-circle text- me-2"></i>
              </div>
              <div>
                <p class="mb-1 impact-content">
                  Creating sustainable development programs
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="featured-image mt-4 mt-lg-0">
              <img src="{{asset('assets/images/mr_group.jpg')}}" alt="Impact image" class="img-fluid rounded" style="
                    width: 100%;
                    height: 100%;
                    display: block;
                    margin-top: -40px;
                    border-radius: 10px;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
                  " />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="team-section">
      <div class="container">
        <div class="section-header">
          <h1 class="section-title">Meet our team</h1>
          <p class="text-muted">
            Teamwork makes all the difference and brings the 'extra' into the
            ordinary.
          </p>
        </div>

        <div class="row">
          <!-- Team Member 1 -->
          <div class="col-md-3 col-sm-6">
            <div class="team-card d-flex flex-column align-items-center p-3">
              <img src="{{asset('assets/images/core_team_members/nishi.png')}}" alt="Nishi Mishra" />
              <div class="card-body">
                <h5 class="card-title">Nishi Mishra</h5>
                <p class="card-text">Founder</p>
                <div class="social-icons">
                  <a href="#"><i class="fa-brands fa-facebook text-dark"></i></a>
                  <a href="#"><i class="fa-brands fa-twitter text-dark"></i></a>
                  <a href="#"><i class="fa-brands fa-linkedin text-dark"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Team Member 2 -->
          <div class="col-md-3 col-sm-6">
            <div class="team-card d-flex flex-column align-items-center p-3">
              <img src="{{asset('assets/images/core_team_members/roshan.jpg')}}" alt="Roshan" />
              <div class="card-body">
                <h5 class="card-title">Roshan Shrivastav</h5>
                <p class="card-text">Founder</p>
                <div class="social-icons">
                  <a href="#"><i class="fa-brands fa-facebook text-dark"></i></a>
                  <a href="#"><i class="fa-brands fa-twitter text-dark"></i></a>
                  <a href="#"><i class="fa-brands fa-linkedin text-dark"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Team Member 3 -->
          <div class="col-md-3 col-sm-6">
            <div class="team-card d-flex flex-column align-items-center p-3">
              <img src="{{asset('assets/images/core_team_members/jaimin.png')}}" alt="Jaimin " />
              <div class="card-body">
                <h5 class="card-title">Jaimin Solanki</h5>
                <p class="card-text">Secretary</p>
                <div class="social-icons">
                  <a href="#"><i class="fa-brands fa-facebook text-dark"></i></a>
                  <a href="#"><i class="fa-brands fa-twitter text-dark"></i></a>
                  <a href="#"><i class="fa-brands fa-linkedin text-dark"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Team Member 4 -->
          <div class="col-md-3 col-sm-6">
            <div class="team-card d-flex flex-column align-items-center p-3">
              <img src="{{asset('assets/images/core_team_members/akhil.png')}}" alt="Adrian Dixon" />
              <div class="card-body">
                <h5 class="card-title">Akhlesh Jaiswal</h5>
                <p class="card-text">Joint Secretary</p>
                <div class="social-icons">
                  <a href="#"><i class="fa-brands fa-facebook text-dark"></i></a>
                  <a href="#"><i class="fa-brands fa-twitter text-dark"></i></a>
                  <a href="#"><i class="fa-brands fa-linkedin text-dark"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Team Member 5 -->
          <div class="col-md-3 col-sm-6">
            <div class="team-card d-flex flex-column align-items-center p-3">
              <img src="{{asset('assets/images/core_team_members/NirajMishra.png')}}" alt="Niraj Mishra" />
              <div class="card-body">
                <h5 class="card-title">Niraj Mishra</h5>
                <p class="card-text">Treasurer</p>
                <div class="social-icons">
                  <a href="#"><i class="fa-brands fa-facebook text-dark"></i></a>
                  <a href="#"><i class="fa-brands fa-twitter text-dark"></i></a>
                  <a href="#"><i class="fa-brands fa-linkedin text-dark"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Team Member 6 -->
          <div class="col-md-3 col-sm-6">
            <div class="team-card d-flex flex-column align-items-center p-3">
              <img src="{{asset('assets/images/core_team_members/kaustubh.png')}}" alt="Kaustubh" />
              <div class="card-body">
                <h5 class="card-title">Kaustubh Shelar</h5>
                <p class="card-text">Member</p>
                <div class="social-icons">
                  <a href="#"><i class="fa-brands fa-facebook text-dark"></i></a>
                  <a href="#"><i class="fa-brands fa-twitter text-dark"></i></a>
                  <a href="#"><i class="fa-brands fa-linkedin text-dark"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
<section class="container py-5">
    <div class="cta-section">
        <div class="cta-content">
            <h2 class="display-5 fw-bold mb-4">Let's donate for betterment of our society and planet</h2>
            <div>
                <button class="btn btn-warning btn-cta">Join as a volunteer</button>
                <button class="btn btn-light btn-cta">Donate</button>
            </div>
        </div>
    </div>
</section>

<!-- Events Section -->
<section class="container py-5">
    <h2 class="event-heading fw-bold mb-4">Our Events</h2>
    
    <div class="row g-4">
        <!-- Event 1 -->
        <div class="col-md-6">
            <div class="event-card">
                <div class="d-flex">
                    <div class="me-4">
                        <div class="event-date">13</div>
                        <div class="event-month">APR</div>
                    </div>
                    <div>
                        <p class="small text-uppercase fw-bold mb-1">NEXT EVENTS</p>
                        <h3 class="event-title">A day with our wonderful children</h3>
                    </div>
                </div>
                <div class="event-arrow">
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
        
        <!-- Event 2 -->
        <div class="col-md-6">
            <div class="event-card">
                <div class="d-flex">
                    <div class="me-4">
                        <div class="event-date">25</div>
                        <div class="event-month">APR</div>
                    </div>
                    <div>
                        <p class="small text-uppercase fw-bold mb-1">NEXT EVENTS</p>
                        <h3 class="event-title">Seminar: Caring for children with autism</h3>
                    </div>
                </div>
                <div class="event-arrow">
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</section>

  </main>

  @include('layouts.footer')
  @include('layouts.aboutusScripts')
  @endsection