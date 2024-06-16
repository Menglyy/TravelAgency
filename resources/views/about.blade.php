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

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        color: #333;
    }


    .contact-info-section {
        background: #f9f9f9;
        padding: 50px 20px;
        text-align: center;
    }

    .contact-info {
        display: flex;
        justify-content: center;
        gap: 40px;
        flex-wrap: wrap;
    }

    .info-item {
        width: 250px;
        padding: 20px;
        background: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        text-align: center;
    }

    .info-item i {
        font-size: 36px;
        color: var(--green);
    }

    .info-item h3 {
        font-size: 24px;
        margin: 20px 0 10px;
    }

    .info-item p,
    .info-item a {
        font-size: 18px;
        color: #555;
        margin: 0;
    }

    .info-item a {
        color: var(--green);
        text-decoration: none;
    }

    .contact-form-section {
        padding: 50px 20px;
        text-align: center;
    }

    .contact-form-section h2 {
        font-size: 36px;
        margin-bottom: 10px;
    }

    .contact-form-section p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    .contact-form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .contact-form input,
    .contact-form textarea {
        width: 80%;
        max-width: 600px;
        padding: 15px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    .contact-form button {
        background-color: var(--green);
        color: white;
        padding: 15px 30px;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .contact-form button:hover {
        background-color: #0056b3;
    }

    .carousel-caption {
        text-align: center;
        margin: auto;
        color: white;
    }

    .map-section {
        display: flex;
        justify-content: center; 
        align-items: center; 
        height: 50vh;
    }

    #map {
        width: 600px; 
        max-width: 100%; 
    }

</style>
<!-- <section id="about" class="py-5 mt-5">
    <div class="container py-5">
        <div class="row gy-lg-5 align-items-center">
            <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                <div class="title pt-3 pb-5">
                    <h2 class="position-relative d-inline-block ms-4">About Us</h2>
                </div>
                <p class="lead text-muted">Heng Mengly, CoST University Student</p>
                <p>
                    I am a IT student & currently participated in a CamCyber Online
                    Traning Course for more understanding and learning about
                    Full-Stack Developing Skills. <br />
                    I'm really grateful and thankful for getting invited into CamCyber
                    Online Traning course. <br />
                    I am really in the need of a Mentor, Team work support, be more
                    specific, and become finanical Independent.
                </p>
            </div>
            <div class="col-lg-6 order-lg-0">
                <img src="{{ asset('assets/mengly.jpg') }}" alt="" class="img-fluid" />
            </div>
        </div>
    </div>
</section> -->
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.pexels.com/photos/1141853/pexels-photo-1141853.jpeg?cs=srgb&dl=pexels-tae-fuller-331517-1141853.jpg&fm=jpg" width="100%" height="800px" alt="contact-img">
            <div class="carousel-caption">
                <h1>Contact Us</h1>
                <p>Get Intouch</p>
            </div>
        </div>
    </div>
</div>

<section class="contact-info-section">
    <div class="contact-info">
        <div class="info-item">
            <i class="fas fa-phone-alt"></i>
            <h3>Phone</h3>
            <p>+855 61 65 5151</p>
        </div>
        <div class="info-item">
            <i class="fas fa-envelope"></i>
            <h3>Email</h3>
            <p>contact@gomengly.com</p>
        </div>
        <div class="info-item">
            <i class="fas fa-map-marked-alt"></i>
            <h3>Location</h3>
            <p>Phnom Penh, Cambodia</p>
            <a href="https://maps.google.com">View on Google Map</a>
        </div>
    </div>
</section>
<section class="contact-form-section">
    <h2>Leave us your info</h2>
    <p>...and we will get back to you.</p>
    <form class="contact-form" action="#" method="post">
        <input type="text" name="name" placeholder="Fullname" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" placeholder="Message" required></textarea>
        <button class="btn btn-primary">Submit</button>
    </form>
</section>
<section class="map-section">
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.9099455101314!2d104.86851047578227!3d11.55831334428376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951b83795d97b%3A0x735f8f7a3e5bc507!2sThe%20University%20of%20Cambodia!5e0!3m2!1sen!2skh!4v1718541063826!5m2!1sen!2skh" width="600px" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

</section>
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