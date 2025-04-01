@extends('layouts.app')

@section('title','Home Page')

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
        
        .hero-section {
            background-image: url("{{ asset('assets/images/home_page_slider.jpg') }}");
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 0 0;
            position: relative;
            margin-bottom: 0;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(27, 26, 26, 0.5);
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            padding-left: 20px;
        }
        
        .hero-title {
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 10px;
            line-height: 1.2;
        }
        
        .btn-white {
            background-color: white;
            color: #333;
            border-radius: 0;
            padding: 6px 15px;
            font-size: 14px;
            font-weight: 400;
        }
        
        .btn-play {
            background-color: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            border-radius: 0;
            padding: 6px 15px;
            font-size: 14px;
        }
        
        .btn-play i {
            margin-right: 5px;
        }
        
        .stats-bar {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 10px 0;
            position: relative;
            z-index: 2;
            margin-top: 120px;
        }
        
        .stats-bar p {
            margin-bottom: 0;
            font-size: 14px;
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
        
        .about-section {
            padding: 50px 0;
        }
        
        .about-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            line-height: 1.3;
        }
        
        .about-text {
            font-size: 15px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 20px;
            text-align: justify;
            margin-right: 20px;
        }
        
        .learn-more-btn {
            background-color: #ffc107;
            color: #333;
            border-radius: 5px;
            padding: 6px 20px;
            font-size: 14px;
            font-weight: 500;
            border: none;
            font-weight: 600;
        }
        
        .video-container {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            margin-top: 30px;
        }
        
        .supporters-section {
            padding: 10px 0 50px;
        }
        
        .supporter-logo {
            text-align: center;
            padding: 15px;
        }
        
        .what-we-do-section {
            background-color: #cce5ff;
            padding: 60px 0;
        }
        
        .what-we-do-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 30px;
            line-height: 1.3;
        }
        
        .service-box {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
        }
        
        .service-icon {
            width: 30px;
            height: 30px;
            background-color: #e9ecef;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }
        
        .service-title {
            font-weight: 700;
            font-size: 17px;
            margin-bottom: 8px;
        }
        
        .service-desc {
            font-size: 15px;
            color: #666;
            line-height: 1.5;
        }
        
        .child-image {
            border-radius: 8px;
            overflow: hidden;
            margin-top: 40px;
        }
        
        .projects-section {
            padding: 60px 0;
        }
        
        .project-card {
            border-radius: 10px;
            overflow: hidden;
            height: 300px;
            width:100%;
            color: white;
            position: relative;
            background-size: cover;
            background-position: center;
        }

        .project-overlay {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            height: 100%;
            text-align: justify;
        }

        .project-card h3 {
            font-weight: bold;
            margin-bottom: 40px;
            font-size: 1.8rem;
        }

        .project-card p {
            font-size: 15px;
            margin-bottom: 15px;
            opacity: 0.9;
        }

        .btn-learn-more {
            background-color: white;
            color: #000;
            border-radius:10px;
            padding: 6px 12px;
            font-size: 15px;
            font-weight: 500;
        }

        .donation-section {
            background-color: #cce5ff;
            color:black;
            padding: 40px 0;
        }

        .donate-heading{
            font-size: 40px;
        }

        .donut-chart-container {
            position: relative;
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
        }

        .cta-section {
            background-image: url('{{ asset('assets/images/pathshala3.jpg') }}');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 60px 0;
            text-align: center;
            position: relative;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(24, 24, 24, 0.5);
        }

        .cta-content{
            padding: 40px;
            color: white;
            filter:brightness(1);
        }

        .btn-cta {
            margin: 8px;
            padding: 10px 20px;
            font-weight: 600;
        }

        .event-heading{
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
          
        .divider {
            color: #fff;
            margin: 0 10px;
        }

        .mobile-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: white;
            padding: 10px 0;
            display: flex;
            justify-content: space-around;
            align-items: center;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
            z-index: 1000;
        }
        
        .mobile-nav button {
            background: none;
            border: none;
            font-size: 20px;
            color: #555;
        }

        @media (max-width: 768px) {
            .donut-chart-container {
                margin-top: 30px;
            }
        }

        @media (max-width: 992px) {
            .hero-title {
                font-size: 32px;
            }
            
            .about-title, .what-we-do-title {
                font-size: 24px;
            }
        }

        @media (max-width: 768px) {
            .hero-content {
                padding-left: 15px;
                padding-right: 15px;
            }
            
            .stats-bar {
                text-align: center;
            }
            
            .stats-bar p:last-child {
                margin-top: 5px;
            }
        }
@endsection
<!-- Hero Section -->
@section('content')
@include('layouts.navbar')
<main>
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6">
                <div class="hero-content">
                    <h1 class="hero-title">Crafting Bright<br>Tomorrows</h1>
                    <div class="d-flex mt-4">
                        <button class="btn btn-white me-3">What we do</button>
                        <button class="btn btn-play">
                            <i class="fas fa-play"></i> Play Video
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="stats-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>{{ $children_count ?? '230' }} children under our care</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>{{ $donations_count ?? '58' }} donations collected</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="mb-4">
                    <span class="section-divider"></span>
                    <span class="section-label">KNOW ABOUT US</span>
                </div>
                <h2 class="about-title">We are the changemakers<br>in the society</h2>
                <p class="about-text">
                    "Small acts, when multiplied by millions of people, can transform the world". Keeping 
                    this thought in mind to make this world a better place to live in, Muskurate Raho was 
                    founded on 28th February, 2021 by its Founders Nishi Mishra and Roshan Shrivastav. 
                    Muskurate Raho was created with the primary goal of sensitizing people about the 
                    Environmental issues and promoting public welfare. In addition to beach cleanups 
                    and plantation drives in extension, we are one of the few organizations to conduct 
                    relief operations through digital platform, irrespective of caste, religion or creed (in 
                    proper condition). Through project Pathshala we aim toward bright future of 
                    underprivileged children with every stroke. We also visit orphanages often to bring 
                    smile and joy in life of such innocent souls, as the organization's motto, "Keep 
                    Smiling", suggests.
                </p>
                <button class="btn learn-more-btn">Learn more</button>
            </div>
            <div class="col-lg-5">
                <div class="video-container">
                    <img src="{{ asset('assets/images/pathshala.jpg') }}" alt="About Video" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
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

<!-- What We Do Section -->
<section class="what-we-do-section">
    <div class="container">
        <div class="mb-4">
            <span class="section-divider"></span>
            <span class="section-label">WHAT WE DO</span>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="what-we-do-title">We bring smile to lives &<br>our planet</h2>
                
                <div class="service-box">
                    <div class="d-flex align-items-center">
                        <div class="service-icon">
                            <i class="fas fa-recycle"></i>
                        </div>
                    </div>
                    <h5 class="service-title">Sustainable Waste Management</h5>
                    <p class="service-desc mb-0">
                        We aim to solve open waste management, focusing mainly on reducing plastic waste by organizing weekly beach cleanup drive.
                    </p>
                </div>
                
                <div class="service-box">
                    <div class="d-flex align-items-center">
                        <div class="service-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                    </div>
                    <h5 class="service-title">Saving our Saviours</h5>
                    <p class="service-desc mb-0">
                        Plants don't need us, but we need them. We conduct plantation drive during monsoon season and restoration during rest of the season.
                    </p>
                </div>
                
                <div class="service-box">
                    <div class="d-flex align-items-center">
                        <div class="service-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                    </div>
                    <h5 class="service-title">Crafting Bright Tomorrow's</h5>
                    <p class="service-desc mb-0">
                        Project Pathshala is a transformative initiative empowering underprivileged students through art and craft education.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-6 d-flex justify-content-center pt-5 mt-3">
                <div class="child-image">
                    <img src="{{ asset('assets/images/plantation.jpg') }}" alt="plantation image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="container py-5">
    <div class="mb-4">
        <span class="section-divider"></span>
        <span class="section-label">PROJECTS WE HAVE DONE</span>
    </div>
    <h2 class="mb-2" style="font-size: 2rem; font-weight: 700;">Creating Impact Since 2021</h2>
    <p class="mb-4" style="font-size: 0.95rem;">It is when you give of yourself that you truly give</p>
    
    <div class="row g-4">
        <!-- Project 1 -->
        <div class="col-md-6 col-lg-3">
            <div class="project-card" style="background-image: url('https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-4.0.3');">
                <div class="project-overlay">
                    <h3>3100+</h3>
                    <p>Saplings planted. Fruit flowers to fruit, our teams work day by day to ensure you have the best of what nature offers.</p>
                    <button class="btn btn-learn-more">Learn more</button>
                </div>
            </div>
        </div>
        
        <!-- Project 2 -->
        <div class="col-md-6 col-lg-3">
            <div class="project-card" style="background-image: url('https://images.unsplash.com/photo-1518398046578-8cca57782e17?ixlib=rb-4.0.3');">
                <div class="project-overlay">
                    <h3>13600+</h3>
                    <p>Changemakers joined. Our goal: manage, go extra mile and together we can make an impact.</p>
                    <button class="btn btn-learn-more">Learn more</button>
                </div>
            </div>
        </div>
        
        <!-- Project 3 -->
        <div class="col-md-6 col-lg-3">
            <div class="project-card" style="background-image: url('https://images.unsplash.com/photo-1528190336454-13cd56b45b5a?ixlib=rb-4.0.3');">
                <div class="project-overlay">
                    <h3>2+</h3>
                    <p>Lakh Kg of garbage collected. Our volunteers work hard to clean earth and promote biodegradable waste.</p>
                    <button class="btn btn-learn-more">Learn more</button>
                </div>
            </div>
        </div>
        
        <!-- Project 4 -->
        <div class="col-md-6 col-lg-3">
            <div class="project-card" style="background-image: url('https://images.unsplash.com/photo-1511632765486-a01980e01a18?ixlib=rb-4.0.3');">
                <div class="project-overlay">
                    <h3>200+</h3>
                    <p>Children impacted. Children are great imitators. So give them something great to imitate.</p>
                    <button class="btn btn-learn-more">Learn more</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Donation Statistics Section -->
<section class="donation-section">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="donate-heading fw-bold">How we spend your donations and where it goes</h2>
                <p class="my-4">We understand that when you make a donation, you want to know exactly where your money is going and we pledge to be transparent.</p>
                
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <span class="me-2" style="display: inline-block; width: 15px; height: 15px; background-color: #0d6efd;"></span>
                            <span>40% child care home</span>
                        </div>
                        <div class="mb-3">
                            <span class="me-2" style="display: inline-block; width: 15px; height: 15px; background-color: #ffc107;"></span>
                            <span>10% excursions</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <span class="me-2" style="display: inline-block; width: 15px; height: 15px; background-color: #d63384;"></span>
                            <span>35% cleanliness program</span>
                        </div>
                        <div class="mb-3">
                            <span class="me-2" style="display: inline-block; width: 15px; height: 15px; background-color: #20c997;"></span>
                            <span>5% feeding the poor</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="donut-chart-container">
                    <canvas id="donationChart" width="300" height="300"></canvas>
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

<!-- Mobile Navigation Footer (visible only on small screens) -->
<div class="d-md-none mobile-nav">
    <button type="button">
        <i class="fas fa-bars"></i>
    </button>
    <button type="button">
        <i class="far fa-square"></i>
    </button>
    <button type="button">
        <i class="fas fa-chevron-left"></i>
    </button>
</div>
</main>

@include('layouts.footer')
@include('layouts.homeScripts')
@endsection