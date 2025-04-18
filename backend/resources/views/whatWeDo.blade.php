@extends('layouts.app')

@section('title','What We Do')

@section('styles')
        body {
            font-family: Arial, sans-serif;
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

        /* General Styles */


        /* Section 1 - Hero Section */
        .container {
            max-width: 1400px;
            font-size: 1.2rem;
        }

        .Heading1 {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .Heading1 hr {
            width: 50px;
            height: 2px;
            background-color: black;
            border: none;
            margin: 0;
            flex-shrink: 0;
            align-self: center;
        }

        .Heading1 p {
            font-weight: bold;
            text-transform: uppercase;
            margin: 0;
            font-size: 0.9rem;
        }

        .Heading2 {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .Heading2 hr {
            width: 45px;
            height: 2px;
            background-color: black;
            border: none;
            margin: 0;
            flex-shrink: 0;
            align-self: center;
            margin-bottom: 5px;
        }

        .Heading2 p {
            font-weight: bold;
            text-transform: uppercase;
            margin: 0;
        }

        /* Headings */
        .section-heading {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 35px;
        }

        .justify-text {
            text-align: justify;
        }



        /* Buttons */
        .btn-custom {
            margin-top: 20px;
            background-color: #ffc107;
            color: black;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 25px;
            transition: background 0.3s ease-in-out;
        }

        .btn-custom:hover {
            background-color: #002a6d;
        }

        /* Image Styling */
        .img-fluid {
            height: 400px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Background Styling */
        .bg-lightblue {
            background-color: #e3f2fd;
            padding: 60px 50px;
            margin: 10px;


        }

        /* Feature Boxes */
        .feature-box {
            display: flex;
            align-items: center;
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .feature-box:hover {
            transform: translateY(-5px);
        }

        .icon {
            font-size: 2rem;
            margin-right: 15px;
            align-self: start;
        }

        h5 {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .feature-box {
                flex-direction: column;
                text-align: center;
            }

            .icon {
                margin-bottom: 10px;
            }
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

        #impact-stats {
            background-color: #f8f9fa;
            padding: 50px 0;
        }

        #impact-stats h2 {
            margin-bottom: 30px;
            font-size: 2rem;
            color: #333;
        }

        /* Impact Card Styling */
        .impact-card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            text-align: center;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            width: 320px;
        }

        .impact-card img {
            width: 100%;
            height: 400px;
            /* Adjust as needed */
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
            filter: brightness(0.5);

        }

        /* Overlay Effect */
        .impact-card h3,
        .impact-card p,
        .impact-card button {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            text-align: center;
            z-index: 2;
        }

        .impact-card h3 {
            top: 30%;
            font-size: 2.5rem;
            font-weight: bold;
        }

        .impact-card p {
            top: 50%;
            font-size: 1.5rem;
            font-weight: 500;
        }

        .impact-card button {
            max-width: 50%;
            bottom: 10%;
            background-color: #ffc107;
            color: #333;
            font-size: 1rem;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            transition: background 0.3s ease-in-out;
        }

        .impact-card:hover {
            transform: translateY(-5px);
        }

        .impact-card:hover img {
            transform: scale(1.1);
        }

        .impact-card button:hover {
            background-color: #007bff;
            color: white;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .impact-card h3 {
                font-size: 1.8rem;
            }

            .impact-card p {
                font-size: 0.9rem;
            }

            .impact-card button {
                font-size: 0.8rem;
                padding: 6px 12px;
            }
        }

        @media (max-width: 576px) {
            .impact-card h3 {
                font-size: 1.5rem;
            }

            .impact-card p {
                font-size: 0.8rem;
            }

            .impact-card button {
                font-size: 0.7rem;
                padding: 5px 10px;
            }
        }

        .banner {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
            text-align: center;
            color: white;
        }

        .banner-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.8);
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            /* Dark overlay for better text contrast */
            z-index: 0;
        }

        .banner-content {
            position: relative;
            z-index: 1;
            padding: 20px;
        }


        /* Styling for the event section */
        .event-heading {
            font-size: 28px;
            text-align: left;
            color: #000;
        }

        /* Event card container */
        .event-card {
            background: #FFD700;
            /* Yellow background */
            border-radius: 12px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: transform 0.3s ease-in-out;
            position: relative;
        }

        .event-card:hover {
            transform: scale(1.05);
        }

        /* Event date and month styling */
        .event-date {
            font-size: 32px;
            font-weight: bold;
            color: #000;
            text-align: center;
        }

        .event-month {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            text-align: center;
            text-transform: uppercase;
        }

        /* Event title */
        .event-title {
            font-size: 18px;
            font-weight: bold;
            color: #000;
        }

        /* Arrow icon styling */
        .event-arrow {
            font-size: 24px;
            color: #000;
        }

        .event-arrow i {
            transition: transform 0.3s ease-in-out;
        }

        .event-card:hover .event-arrow i {
            transform: translateX(5px);
        }
@endsection

@section('content')
@include('layouts.navbar')
    <main>
        <!-- Section 1 -->
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="Heading1">
                        <hr>
                        <p class="main-heading text-uppercase">WHAT WE DO</p>
                    </div>
                    <br><br>
                    <h2 class="section-heading fw-bold">We bring smile to lives & our planet</h2>
                    <p class="justify-text">At Muskurate Raho, we work to bring smiles to lives and our planet by
                        driving sustainable waste management through weekly beach cleanups, conducting plantation and
                        restoration drives to save our saviors, and empowering underprivileged students through Project
                        Pathshala’s transformative art and craft education initiatives.</p>
                    <button class="btn btn-custom me-2"><a href="/projects" style="color:black;text-decoration:none;">View Our Projects →</a></button>
                </div>
                <div class="col-md-6 text-md-end">
                    <img src="{{ asset ('assets/images/whatweDo-image1.jpg')}}" alt="Smiling children" class="img-fluid rounded">
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="bg-lightblue">
            <div class="container py-5">
                <h2 class="text-center section-heading">What we do for our kids with special needs</h2>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="feature-box">
                            <i class="fas fa-home icon"></i>
                            <div>
                                <h5>Family Support</h5>
                                <p>Comprehensive support services for families.</p>
                            </div>
                        </div>
                        <div class="feature-box mt-4">
                            <i class="fas fa-box icon"></i>
                            <div>
                                <h5>Basic Amenities</h5>
                                <p>Providing essential facilities and necessary resources.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <i class="fas fa-heart icon"></i>
                            <div>
                                <h5>Health Benefits</h5>
                                <p> Enhancing health with specialized programs.</p>
                            </div>
                        </div>
                        <div class="feature-box mt-4">
                            <i class="fas fa-hand-holding-heart icon"></i>
                            <div>
                                <h5>Therapy</h5>
                                <p>Personalized therapy sessions to foster growth.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <i class="fas fa-book icon"></i>
                            <div>
                                <h5>Education</h5>
                                <p>Quality education and learning opportunities.</p>
                            </div>
                        </div>
                        <div class="feature-box mt-4">
                            <i class="fas fa-users icon"></i>
                            <div>
                                <h5>Public Outreach</h5>
                                <p>Active community engagement for inclusion.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="impact-stats" class="container py-5">
            <div class="Heading2">
                <hr>
                <h6 class="main-heading text-uppercase fw-bold">Projects We Have Done</h6>
            </div>
            <br>
            <h2 class="fw-bold">Creating Impact Since 2021</h2>

            <div class="row mt-4">
                <!-- Impact 1 -->
                <div class="col-md-3">
                    <div class="impact-card">
                        <img src="{{ asset ('assets/images/plantation.jpg')}}" alt="Saplings Planted">
                        <h3>3100+</h3>
                        <p>Saplings planted.</p>
                        <button class="btn btn-light">Learn more</button>
                    </div>
                </div>

                <!-- Impact 2 -->
                <div class="col-md-3">
                    <div class="impact-card">
                        <img src="{{ asset ('assets/images/whatweDo-image3.png')}}" alt="Changemakers Joined">
                        <h3>13600+</h3>
                        <p>Changemakers joined.</p>
                        <button class="btn btn-light">Learn more</button>
                    </div>
                </div>

                <!-- Impact 3 -->
                <div class="col-md-3">
                    <div class="impact-card">
                        <img src="{{ asset ('assets/images/whatweDo - image2.png')}}" alt="Garbage Collected">
                        <h3>2+ Lakh</h3>
                        <p>Kgs of garbage collected.</p>
                        <button class="btn btn-light">Learn more</button>
                    </div>
                </div>

                <!-- Impact 4 -->
                <div class="col-md-3">
                    <div class="impact-card">
                        <img src="{{ asset ('assets/images/pathshala.jpg') }}" alt="Children Impacted">
                        <h3>200+</h3>
                        <p>Children impacted.</p>
                        <button class="btn btn-light">Learn more</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4: Contribution Banner -->
        <section id="contribution-banner" class="mt-5">
            <div class="banner">
                <img src="{{ asset ('assets/images/pathshala3.jpg')}}" alt="Contribute" class="banner-img">
                <div class="banner-overlay"></div>
                <div class="banner-content">
                    <p class="fw-bold fs-4">You can contribute to provide a place for children with special needs!</p>
                    <button class="btn btn-warning me-2">Join as a volunteer</button>
                    <button class="btn btn-light">Donate</button>
                </div>
            </div>
        </section>

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
@include('layouts.homeScripts')
@endsection
