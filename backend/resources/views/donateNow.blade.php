@extends('layouts.app')

@section('title', 'Donate Page')

@section('styles')
    body {
    font-family: 'Roboto', sans-serif;
    background-color: white;
    margin: 0;
    color: #333;
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

/* Hero Section Styling (Blue Section) */
.hero-section {
    background-color: rgba(179, 212, 255, 1);
    padding: 60px 0;
}

.hero-title {
    display: flex;
    align-items: center;
    gap: 10px;
}

.custom-hr {
    width: 50px;
    height: 2px;
    background-color: black;
    opacity: 1;
    border: none;
}

.hero-section h6 {
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    margin: 0;
    padding-top: 1px;
}

.hero-section h2 {
    font-size: 46px;
    padding-left: 55px;
}

.hero-section p {
    font-size: 18px;
    padding-left: 55px;
    padding-top: 20px;
}

.donate-btn2 {
    background-color: rgba(242, 201, 76, 1);
    border: none;
    padding: 12px 24px;
    font-weight: bold;
    font-size: 18px;
    margin-left: 55px;
    margin-top: 20px;
}

/* Active Tab Style */
.nav-tabs .nav-link.active {
    border-bottom: 3px solid rgba(242, 201, 76, 1);
    font-weight: bold;
}

.mt-7 {
    margin-top: 90px;
}

.pb-6 {
    padding-top: 10px;
}

.section-divider {
    border: none;
    height: 1px;
    background-color: gray;
    width: 85%;
    margin: 20px auto;
    transform: translateY(-20px);
}

/* Image Styling */
.rounded-img {
    border-radius: 20px;
    width: 65%;
    height: auto;
    display: block;
    margin: 0 auto;
}

.cta-section {
    background-image: url('{{ asset ('assets/images/pathshala3.jpg')}}');
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

/* Justify Content */
.text-justify {
    text-align: justify;
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

@media (max-width: 768px) {
    .col-md-6 {
        width: 100%;
        margin-bottom: 20px;
    }

    .hero-section h2 {
        font-size: 32px;
        padding-left: 20px;
    }

    .hero-section p {
        font-size: 16px;
        padding-left: 20px;
    }

    .donate-btn2 {
        margin-left: 20px;
    }

    .rounded-img {
        width: 100%;
    }

    .hero-section {
        padding: 40px 0;
    }

    .mt-7 {
        margin-top: 30px;
    }

    .logo-container img {
        width: 100px;
        height: 100px;
    }
}

@media (max-width: 576px) {
    .hero-section h2 {
        font-size: 28px;
    }
}
@endsection

@section('content')
@include('layouts.navbar')

    <main>
        <div class="container-fluid hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="hero-title">
                            <hr class="custom-hr">
                            <h6 class="mb-0">Donate</h6>
                        </div>
                        <h2 class="fw-bold mt-2">Making a donation for our <br> children.</h2>
                        <p class="text-justify">When you donate, you're supporting effective care to children with special
                            needs—an investment in the leaders of tomorrow.</p>
                        <button class="btn donate-btn2">Donate now</button>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset ('assets/images/Donatepage-image1.png')}}" alt="Donation Box" class="img-fluid rounded-img">
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="fw-bold mb-5">How you can contribute to <br> caring for our kids</h1>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Recusandae
                        voluptates vel ratione totam ipsum adipisci debitis,<br> quam quae nesciunt quos id, non cumque
                        mollitia? Voluptas? <br>Suspendisse varius enim in eros elementum tristique.</p>
                </div>

                <div class="col-md-6">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#overview">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#impact">Impact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#benefits">What You Get</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-7">
                        <div id="overview" class="tab-pane fade show active">
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                varius enim in eros elementum tristique.</p>
                        </div>
                        <div id="impact" class="tab-pane fade">
                            <p class="text-justify">Information about the impact of your donation. Your contribution helps
                                us provide better care for children in need.</p>
                        </div>
                        <div id="benefits" class="tab-pane fade">
                            <p class="text-justify">As a donor, you'll receive regular updates on how your funds are making
                                a difference. Thank you for your support!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="section-divider">

        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-4 text-start">
                    <h1 class="fw-bold">How we use your <br> donation</h1>

                </div>

                <div class="col-md-4 text-start pb-6 ">
                    <p class="text-justify">Your donation helps us <br>Your support enables us to expand our outreach,
                        ensure <br> safety for children, and provide life-changing resources.</p>
                </div>

                <div class="col-md-4 text-start pb-6">
                    <p class="text-justify">We ensure transparency <br>We provide detailed reports on how your donation is
                        spent and ensure every penny makes a positive impact.</p>
                </div>
            </div>
        </div>
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
    @endsection