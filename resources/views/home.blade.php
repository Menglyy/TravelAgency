@extends('layouts.app')

@section('content')
<style>
  @import url('https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@400;500;700&family=Poppins:wght@300;400;500&display=swap');

  :root {
    --lg-font: 'Kaisei Tokumin', serif;
    --sm-font: 'Poppins', sans-serif;
    --green: #20d261;
  }

  .bg-primary {
    background-color: var(--green) !important;
  }

  .btn:not(.nav-btns button) {
    background-color: #fff;
    color: rgb(85, 85, 85);
    padding: 10px 28px;
    border-radius: 25px;
    border: 1px solid rgb(85, 85, 85);
  }

  .btn:not(.nav-btns button):hover {
    background-color: var(--green);
    color: #fff;
    border-color: var(--green);
  }

  .navbar {
    -webkit-box-shadow: 0 3px 9px 3px rgba(0, 0, 0, 0.1);
    box-shadow: 0 3px 9px 3px rgba(0, 0, 0, 0.1);
  }

  .navbar-brand img {
    width: 30px;
  }

  .navbar-brand span {
    letter-spacing: 2px;
    font-family: var(--lg-font);
  }

  .nav-link:hover {
    color: var(--green) !important;
  }

  .nav-item {
    border-bottom: 0.5px solid rgba(0, 0, 0, 0.05);
  }

  .carousel-inner img {
    height: 700px;
    object-fit: cover;
  }

  .destination-card {
    position: relative;
    overflow: hidden;
    cursor: pointer;
    border-radius: 10px;
  }

  .destination-card img {
    width: 100%;
    transition: transform 0.5s ease;
  }

  .destination-card:hover img {
    transform: scale(1.1);
  }

  .destination-card .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.5s ease;
  }

  .destination-card:hover .overlay {
    background-color: rgba(0, 0, 0, 0.6);
  }

  .destination-card .overlay h3,
  .destination-card .overlay p {
    margin: 0;
  }

  footer .brand {
    font-family: var(--lg-font);
    letter-spacing: 2px;
  }

  footer a:hover {
    color: var(--green) !important;
  }

  .icon-text {
    display: flex;
    align-items: center;
    margin: 10px 0;
  }

  .icon-text i {
    font-size: 24px;
    margin-right: 10px;
  }

  .booking-form {
    max-width: 400px;
    margin: 20px auto;
  }

  .icon-container {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
  }

  .icon-container i {
    font-size: 1.5rem;
    margin-right: 0.5rem;
  }

  .form-group i {
    position: absolute;
    margin: 10px 0 0 10px;
  }

  .form-group select,
  .form-group input {
    padding-left: 2.5rem;
  }

  .tabs {
    display: flex;
    border-bottom: 1px solid #dee2e6;
    margin-bottom: 1rem;
  }

  .tab {
    padding: 0.5rem 1rem;
    cursor: pointer;
  }

  .tab.active {
    border-bottom: 2px solid #007bff;
    color: #007bff;
  }
</style>
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="{{ asset('assets/carousel-1.jpg') }}" class="d-block w-100" alt="Slide 1">
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>TOURS & TRAVEL</h1>
          <p class="opacity-75">Discover Amazing Places With Us</p>
          <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item active">
      <img src="{{ asset('assets/carousel-2.jpg') }}" class="d-block w-100" alt="Slide 2">
      <div class="container">
        <div class="carousel-caption">
          <h1>TOURS & TRAVEL</h1>
          <p>Let's Discover The World Together</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/carousel-3.jpg') }}" class="d-block w-100" alt="Slide 3">
      <div class="container">
        <div class="carousel-caption text-end">
          <h1>TOURS & TRAVEL</h1>
          <p>Experience New Places With Us</p>
          <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Title -->
<section class="py-5 text-center">
  <div class="container">
    <h2 class="mb-5">Why book with Us?</h2>
    <div class="row">
      <div class="col-md-3">
        <i class="fa-solid fa-money-check-dollar" style="font-size: 2rem;"></i>
        <h5 class="mt-3">Free cancellation</h5>
        <p>Stay flexible on your trip.</p>
      </div>
      <div class="col-md-3">
        <i class="fa-solid fa-globe" style="font-size: 2rem;"></i>
        <h5 class="mt-3">300,000+ experiences</h5>
        <p>Make memories around the world.</p>
      </div>
      <div class="col-md-3">
        <i class="fa-regular fa-calendar" style="font-size: 2rem;"></i>
        <h5 class="mt-3">Reserve now, pay later</h5>
        <p>Book your spot.</p>
      </div>
      <div class="col-md-3">
        <i class="fa-regular fa-star" style="font-size: 2rem;"></i>
        <h5 class="mt-3">Trusted reviews</h5>
        <p>4.3 stars from 140,000+ Trustpilot reviews.</p>
      </div>
    </div>
  </div>
</section>
<!-- card component -->
<div id="destination"></div>
<section class="container my-5">
  <h2 class="text-center mb-4">Explore Top Destinations</h2>
  <div class="row">
    @foreach($details as $detail)
    <div class="col-md-4 mb-4">
      <div class="destination-card" data-toggle="modal" data-target="#detailModal" data-id="{{ $detail->id }}" data-title="{{ $detail->title }}" data-img="{{ $detail->image }}" data-desc="{{ $detail->desc }}" data-content="{{ $detail->content }}" data-date="{{ $detail->date }}">
        <img src="{{ $detail->image }}" alt="{{ $detail->title }}">
        <div class="overlay">
          <div>
            <h3>{{ $detail->title }}</h3>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>

<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <main class="container mt-5">
          <div class="row align-items-center">
            <div class="col-md-6 text-center">
              <img src="" alt="Image" class="img-fluid mb-4" id="modalImage" style="border-radius: 10px;">
            </div>

            <div class="col-md-6">

              <div class="container">
                <div class="booking-form">
                  <div class="icon-container">
                    <i class="fa-solid fa-tag"></i>
                    <span>Price</span>
                  </div>
                  <h3>From $1,200 <i class="bi bi-info-circle"></i></h3>

                  <div class="tabs">
                    <div class="tab active">Booking Form</div>

                  </div>

                  <div class="form-group position-relative">
                    <div class="form-group">

                      <label for="date">Date:</label>

                      <input type="date" class="form-control" name="date" value="{{ $detail->date }}" />

                    </div>

                  </div>

                  <div class="form-group mt-3">

                    <label for="seats">Available: 30 seats</label>
                  </div>

                  <div class="form-group position-relative">
                    <i class="fa-solid fa-users"></i>
                    <select class="form-control">
                      <option>Number of peoples</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>

                    </select>
                  </div>

                  <button type="button" class="btn btn-primary btn-block mt-3">Proceed Booking</button>
                </div>
              </div>
            </div>
          </div>
        </main>
        <p id="modalDesc">Description</p>
        <p id="modalContent">Content</p>

        <div class="row text-center">
          <div class="col icon-text">
            <i class="far fa-clock"></i>
            <div>48 Hours</div>
          </div>
          <div class="col icon-text">
            <i class="fas fa-users"></i>
            <div>Max Guests: 30</div>
          </div>
          <div class="col icon-text">
            <i class="fas fa-wifi"></i>
            <div>Wifi Available</div>
          </div>
          <div class="col icon-text">
            <i class="far fa-calendar-alt"></i>
            <div>Apr - Oct</div>
          </div>
        </div>

        <h5 class="mt-4">FAQs</h5>
        <section class="faq-section container">
          <h1 class="text-center faq-title">Frequently Asked Questions</h1>
          <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button faq-header" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  How long will it take to receive my refund?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body faq-body">
                Typically, it takes about 7-14 business days for the refund to be reflected on your bank statement. The exact duration depends on the processing speed of your bank or credit card issuer.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed faq-header" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  What is travel insurance?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body faq-body">

                  Finding your dream tour
                  Adventuring FAQ
                  Booking a tour on TourRadar
                  River cruise FAQ
                  Pricing and payments
                  Canceling my tour
                  Travel Credits & TourRadar savings
                  Manage my account
                  Travel insurance
                  General info
                  XCover by Cover Genius insurance before booking
                  XCover by Cover Genius insurance after booking
                  Visas
                  Flights
                  Travel Agents
                  Affiliate partners
                  What is travel insurance?
                  Travel insurance provides financial protection and support during unforeseen circumstances that might affect your travel plans. This type of insurance can cover a wide range of situations, including trip cancellations, interruptions, medical emergencies, and baggage issues.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed faq-header" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Can I change or cancel my order?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body faq-body">
                  Yes, you can change or cancel your order within 24 hours of placing it. Please contact our customer support team as soon as possible to make any changes.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed faq-header" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                What happens if I miss my payment?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body faq-body">
                If a payment is missed, our Payment Solutions team will proactively reach out to you. They will discuss the situation and explore options, such as updating or changing card details, to ensure the payment can be completed.
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>

<!-- blog -->
<section class="container marketing" id="blog">
  <div class="container mt-5">
    <h1 class="text-center">Book the World's Best Tours </h1>
  </div>
  <main class="container mt-5">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h3>Sunrise Angkor Wat from Siem Reap</h3>
        <p>The UNESCO-listed Angkor Wat is the star attraction of Cambodia and the magnificent temple complex is even more atmospheric at sunrise. This full-day small-group tour from Siem Reap makes an early start to avoid the crowds and visits highlights including Angkor Thom, Ta Prohm, and Bayon temple (entrance fees at your expense). Hotel pickup and drop-off is included.</p>

        <button class="btn btn-primary">Explore more</button>
      </div>
      <div class="col-md-6 text-center">
        <img src="https://media.tacdn.com/media/attractions-splice-spp-674x446/11/8a/3b/73.jpg" alt="Sunset" class="img-fluid rounded shadow">
      </div>
    </div>
  </main>

  <main class="container mt-5">
    <div class="row align-items-center">
      <div class="col-md-6 text-center">
        <img src="https://www.angkorenterprise.gov.kh/upload/images/1546938113316.jpg" alt="Sunset" class="img-fluid rounded shadow">
      </div>

      <div class="col-md-6">
        <h3>Bayon Temple</h3>
        <p>Visit central Angkor Thom (Bayon consists 54towers and 216faces of Buddhisatva Avalokesvara) which was built by the Angkor’s greatest King Jayavaraman VII at the end of 12th , Baphoun which was the one the most spectacular temples in its heyday, Terrace of Elephant which was used for the public ceremonies and served as the stage for the king’s grand audience hall, Terrace of leper king one of Angkor’s mysteries, the ancient Royal Palace Phimeanakas.</p>

        <button class="btn btn-primary">See More</button>
      </div>
    </div>
  </main>

  <hr class="featurette-divider">

</section>
<!-- footer -->
<footer class="bg-light py-5">
  <div class="container">
    <div class="row text-black g-4">
      <div class="col-md-6 col-lg-3">
        <a class="text-uppercase text-decoration-none brand text-black" href="index.html">Mengly</a>
        <p class="text-black mt-3">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
          mollitia quisquam veniam odit cupiditate, ullam aut voluptas velit
          dolor ipsam?
        </p>
      </div>

      <div class="col-md-6 col-lg-3">
        <h5 class="fw-light">Links</h5>
        <ul class="list-unstyled">
          <li class="my-3">
            <a href="#" class="text-black text-decoration-none">
              <i class="fas fa-chevron-right me-1"></i> Home
            </a>
          </li>
          <li class="my-3">
            <a href="#" class="text-black text-decoration-none">
              <i class="fas fa-chevron-right me-1"></i> Destination
            </a>
          </li>
          <li class="my-3">
            <a href="#" class="text-black text-decoration-none">
              <i class="fas fa-chevron-right me-1"></i> Blogs
            </a>
          </li>
          <li class="my-3">
            <a href="#" class="text-black text-decoration-none">
              <i class="fas fa-chevron-right me-1"></i> About Us
            </a>
          </li>
        </ul>
      </div>

      <div class="col-md-6 col-lg-3">
        <h5 class="fw-light mb-3">Contact Us</h5>
        <div class="d-flex justify-content-start align-items-start my-2">
          <span class="me-3">
            <i class="fas fa-map-marked-alt"></i>
          </span>
          <span class="fw-light"> Preak Leab, Phnom Penh, Cambodia </span>
        </div>
        <div class="d-flex justify-content-start align-items-start my-2">
          <span class="me-3">
            <i class="fas fa-envelope"></i>
          </span>
          <span class="fw-light"> hengmenglyx6677@gmail.com </span>
        </div>
        <div class="d-flex justify-content-start align-items-start my-2">
          <span class="me-3">
            <i class="fas fa-phone-alt"></i>
          </span>
          <span class="fw-light"> +855 61 65 5151 </span>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <h5 class="fw-light mb-3">Follow Us</h5>
        <div>
          <ul class="list-unstyled d-flex">
            <li>
              <a href="https://www.facebook.com/Erricxheng" class="text-black text-decoration-none fs-4 me-4">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="#" class="text-black text-decoration-none fs-4 me-4">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/erricgps/" class="text-black text-decoration-none fs-4 me-4">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="https://t.me/menglyx" class="text-black text-decoration-none fs-4 me-4">
                <i class="fab fa-telegram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
@endsection