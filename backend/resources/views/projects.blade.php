@extends('layouts.app')

@section('title','Projects')

@section('styles')
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
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

       
        .project-section {
            margin: 50px 0;
        }

        .project-title {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
        }
        .project-card {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 30px;
        }
        .project-card img {
            width: 100%;
            max-width: 500px;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .project-card:nth-child(1) img {
            height: 40vh;
            width: 800vw;
            margin-bottom: 2rem;
        }
        .project-card:nth-child(2) img {
            height: 300px;
            width: 800vw;
        }
        .project-text:nth-child(2) {
            padding-bottom: 3rem;
        }
        .project-text {
            flex-grow: 1;
            text-align: left;
        }
        .project-text h1 {
            font-size: 2rem;
            color: #007bff;
            font-weight: bold;
            padding-bottom: 1rem;
        }
        .project-text p{
            font-size: 1.1rem;
        }
        .section-header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        .section-header hr {
            width: 50px;
            border: none;
            height: 2px;
            background-color: #000;
            margin-right: 10px;
            margin-top: 3.5rem;
        }

        @media (min-width: 768px) {
            .project-card {
                flex-wrap: nowrap;
                text-align: left;
            }
            .project-card img {
                margin-right: 20px;
                margin-bottom: 0;
            }
            .project-text {
                text-align: left;
            }
            .project-title {
                font-size: 3rem;
                text-align: left;
            }
            .section-header {
                justify-content: flex-start;
            }
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
            width: 100%;
            max-width: 320px;
            margin: 15px auto;
        }

        .impact-card img {
            width: 100%;
            height: 300px;
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
            font-size: 2rem;
            font-weight: bold;
        }

        .impact-card p {
            top: 50%;
            font-size: 1.2rem;
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

            .project-card img {
                margin-right: 0;
                margin-bottom: 20px;
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

        .cta-section {
            background-image: url("{{ asset('assets/images/pathshala3.jpg')}}");
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

@endsection

@section('content')
@include('layouts.navbar')

    <main>
        <div class="container">
            <div class="section-header">
                <hr>
                <h6 class="text-uppercase text-muted md-3 mt-5">Our Project</h6>
            </div>
            <h1 class="project-title">Initiatives to make this world a better place <br>to live in</h1>
            
            <div class="project-section">
                <div class="project-card">
                    <img src="{{asset('assets/images/makeover.jpg')}}" alt="MakeOver Mahim">
                    <div class="project-text">
                        <h1>MakeOver Mahim</h1>
                        <p>Muskurate Raho is excited to introduce our ambitious project, "Makeover Mahim," aimed at cleaning and preserving our beloved Mahim Beach. This initiative is a reflection of our commitment to environmental conservation, marine life protection, and community involvement. Our primary goal is to remove plastic waste, debris, and pollutants from coastal areas. By organizing regular cleanup events, we strive to restore the natural beauty of these shores. We educate communities about the importance of responsible waste disposal and recycling. Our goal is to reduce the generation of beach litter at its source. We actively involve local communities, schools, and businesses in our cleanup efforts. This engagement builds a sense of responsibility and stewardship towards the environment.</p>
                    </div>
                </div>
                <div class="project-card">
                    <img src="{{ asset ('assets/images/pathshala (1).jpg')}}" alt="Project Pathshala">
                    <div class="project-text">
                        <h1>Project Pathshala</h1>
                        <p>Project Pathsala is an inspiring initiative spearheaded by Muskurate Raho dedicated to providing underprivileged students with the essential skills and knowledge they need to break the cycle of poverty and access better opportunities. This transformative program is designed to empower these young minds with the tools and abilities necessary to build a brighter future for themselves and their communities. Skill Development Workshops, Access to Quality Education, Mentorship and Career Guidance, Community Engagement are some of the program highlights.</p>
                    </div>
                </div>
                <div class="project-card">
                    <img src="{{ asset ('assets/images/plantrestoration.jpg')}}" alt="Plant Restoration">
                    <div class="project-text">
                        <h1>Plant Restoration</h1>
                        <p>"Plant Restoration" employs a holistic approach to plant and ecosystem restoration. To rehabilitate damaged plants and ecosystems, promote sustainable land management practices, and foster community involvement in nurturing our natural environment. Our primary goal is to provide essential care to damaged plants, including watering, fertilization, pruning, and pest control, to help them regain their health and vitality. We conduct workshops, educational programs, and outreach activities to raise awareness about the importance of plant nurturing and ecosystem restoration.</p>
                    </div>
                </div>
                <div class="project-card">
                    <img src="{{ asset ('assets/images/projectsmile.jpg')}}" alt="Plantation Drive">
                    <div class="project-text">
                        <h1>Plantation Drive</h1>
                        <p>Project Green Smiles is driven by a mission to create a greener, healthier planet by planting trees and promoting sustainable forestry practices. At the core of our mission is a belief in the power of afforestation to combat climate change, enhance biodiversity, and provide socio-economic benefits to marginalized communities. Our primary goal is to plant trees and restore degraded landscapes. We aim to plant thousands of native trees each year to mitigate climate change, improve air and water quality, and preserve local ecosystems. We believe in the importance of engaging local communities. By involving them in tree planting, we not only provide them with an additional source of income but also raise awareness about the environment. We also organize training sessions on sustainable forestry practices.</p>
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
                <div class="col-md-3">
                    <div class="impact-card">
                        <img src="{{ asset ('assets/images/plantation.jpg')}}" alt="Saplings Planted">
                        <h3>3100+</h3>
                        <p>Saplings planted.</p>
                        <button class="btn btn-light">Learn more</button>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="impact-card">
                        <img src="{{ asset ('assets/images/whatweDo-image3.png')}}" alt="Changemakers Joined">
                        <h3>13600+</h3>
                        <p>Changemakers joined.</p>
                        <button class="btn btn-light">Learn more</button>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="impact-card">
                        <img src="{{ asset ('assets/images/whatweDo - image2.png')}}" alt="Garbage Collected">
                        <h3>2+ Lakh</h3>
                        <p>Kgs of garbage collected.</p>
                        <button class="btn btn-light">Learn more</button>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="impact-card">
                        <img src="{{ asset ('assets/images/pathshala.jpg')}}" alt="Children Impacted">
                        <h3>200+</h3>
                        <p>Children impacted.</p>
                        <button class="btn btn-light">Learn more</button>
                    </div>
                </div>
            </div>
        </section>
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
    </main>
    @include('layouts.footer')
    @include('layouts.homeScripts')
    @endsection