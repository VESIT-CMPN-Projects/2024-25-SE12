@extends('layouts.app')

@section('title', 'Our Team')

@section('styles')
    html, body {
      height: 100%;
      margin: 0;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background-color: white;
      margin: 0;
      color: #333;
      display: flex;
      flex-direction: column;
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
    .section-header {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .section-header h4 {
      margin: 0;
      font-weight: bold;
      font-size: 24px;
      margin-left: 15px;
      padding-top:30px;
    }

    .section-header hr {
      width: 50px;
      border: none;
      height: 1px;
      background-color: black;
      margin-top: 42px;
    }

    .section-background {
      background-color: rgba(179, 212, 255, 1);
      padding: 0;
      height: auto; /* Changed to auto for responsiveness */
    }

    .section-p {
      font-size: 42px;
      font-weight: bold;
      margin-bottom: 40px;
      margin-top: 40px;
      text-align: left;
    }

    .carousel-wrapper {
      overflow: hidden;
      position: relative;
      margin-bottom: 60px;
    }

    .card-container {
      display: flex;
      transition: transform 0.5s ease;
    }

    .card {
      background-color: white;
      color: black;
      border-radius: 15px;
      width: 350px;
      height: 450px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      flex: 0 0 350px;
      margin-right: 20px;
    }

    .card img {
      border-radius: 50%;
      width: 160px;
      height: 160px;
      object-fit: cover;
    }

    .carousel-control-prev, .carousel-control-next {
      width: 40px;
      height: 40px;
      opacity: 1; /* Make arrows always visible */
      transition: opacity 0.3s ease;
      cursor: pointer;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .carousel-control-prev-icon, .carousel-control-next-icon {
      background-image: none; /* Remove default arrow image */
    }

    .carousel-control-prev::before, .carousel-control-next::before {
      content: '';
      border: solid black; /* Change arrow color to black */
      border-width: 0 3px 3px 0;
      display: inline-block;
      padding: 3px;
    }

    .carousel-control-prev::before {
      transform: rotate(135deg);
      -webkit-transform: rotate(135deg);
      
    }

    .carousel-control-next::before {
      transform: rotate(-45deg);
      -webkit-transform: rotate(-45deg);
    }
    .carousel-control-prev, .carousel-control-next {
      width: 40px;
      height: 40px;
      opacity: 1; /* Make arrows always visible */
      transition: opacity 0.3s ease;
      cursor: pointer;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .carousel-control-prev-icon, .carousel-control-next-icon {
      background-image: none; /* Remove default arrow image */
    }

    .carousel-control-prev::before, .carousel-control-next::before {
      content: '';
      border: solid black; /* Change arrow color to black */
      border-width: 0 4px 4px 0; /* Increase arrow size */
      display: inline-block;
      padding: 5px; /* Increase arrow size */
    }

    .carousel-control-prev::before {
      transform: rotate(135deg);
      -webkit-transform: rotate(135deg);
    }

    .carousel-control-next::before {
      transform: rotate(-45deg);
      -webkit-transform: rotate(-45deg);
    }

    .carousel-control-prev {
      left: 25px; /* Add spacing from left border */
    }
    .section-header h4 {
      font-size: 20px;
    }

    .section-header hr {
      width: 70px;
    }

    footer {
      flex-shrink: 0;
      width: 100%;
      padding-top: 50px; /* Reduced padding-top */
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
      text-align: center;
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
      color: white;
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
      color: black;
    }

    .subscribe-form button {
      background-color: #fff;
      color: black;
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
    @media (max-width: 1200px) {
      .card {
        width: 300px;
        height: 420px;
      }
    }

    @media (max-width: 992px) {
      .card {
        width: 280px;
        height: 400px;
      }
      .section-p{
          font-size: 32px;
      }
    }
        @media (max-width: 768px) {
      .card {
        width: 250px;
        height: 380px;
      }
      .section-p{
          font-size: 28px;
      }
    }
        @media (max-width: 576px) {
      .card {
        width: 220px;
        height: 350px;
      }
      .section-p{
          font-size: 24px;
      }
    }
@endsection

@section('content')
@include('layouts.navbar')

<div class="section-background">
    <div class="container">
        <div class="section-header">
            <hr />
            <h4>Our Team</h4>
        </div>
        <p class="section-p">Teamwork makes all the difference <br> and brings the 'extra' into the ordinary</p>

        <!-- Core Team Section -->
        <div id="coreTeamSection"></div>

        <!-- Volunteers Section -->
        <div id="volunteerSection"></div>

        <!-- Interns Section -->
        <div id="internSection"></div>

    </div>
</div>

@include('layouts.footer')

<script>
  function generateSection(title, prefix, containerId) {
    let sectionHTML = `
      <h3 class="text-center my-4">${title}</h3>
      <div class="carousel-wrapper">
        <div id="${prefix}Carousel" class="card-container">`;

    for (let i = 0; i < 9; i++) {
      sectionHTML += `
        <div class="card p-4">
          <img src="{{ asset('assets/images/${prefix}${i + 1}.jpg') }}" alt="${title} ${i + 1}" class="img-fluid" />
          <h5 class="mt-3">${title} ${i + 1}</h5>
          <p>${title}</p>
        </div>`;
    }

    sectionHTML += `
        </div>
        <button class="carousel-control-prev" id="${prefix}Prev" onclick="scrollCarousel('${prefix}', -1)">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" id="${prefix}Next" onclick="scrollCarousel('${prefix}', 1)">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>`;

    // Append the generated HTML to the respective section in the DOM
    document.getElementById(containerId).innerHTML = sectionHTML;
  }

  function scrollCarousel(prefix, direction) {
    const container = document.getElementById(`${prefix}Carousel`);
    const cardWidth = container.children[0].offsetWidth + 20; // Including margin
    const visibleCards = Math.floor(container.parentElement.offsetWidth / cardWidth);
    const totalCards = container.children.length;
    const maxScroll = Math.max(0, (totalCards - visibleCards) * cardWidth);
    let currentScroll = container.dataset.scroll ? parseInt(container.dataset.scroll) : 0;

    currentScroll += direction * cardWidth * visibleCards;
    currentScroll = Math.max(0, Math.min(currentScroll, maxScroll));

    container.dataset.scroll = currentScroll;
    container.style.transform = `translateX(-${currentScroll}px)`;
  }

  // Generate the sections after the page loads
  window.onload = function() {
    generateSection('Core Team Members', 'core', 'coreTeamSection');
    generateSection('Volunteers', 'volunteer', 'volunteerSection');
    generateSection('Interns', 'intern', 'internSection');
  };
</script>

@endsection
