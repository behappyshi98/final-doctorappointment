





@extends('layouts.link')



@section('con')


<section id="hero">
    <div id="heroCarousel" data-bs-interval="2000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(myfile/img/slide/firstdoctor.jpg)">
          <div class="container"  style="font-family: 'Times New Roman', Times, serif">
            <h2>Welcome to <span>Safe Life Medical Center</span></h2>
            <p>Welcome to Safe Life Medical Center! Your trusted partner in health and wellness. Experience seamless doctor appointments and personalized care at your fingertips. Let's embark on your journey to better health together."

            </p>
            <a href="{{ route('profile') }}" class="btn-get-started scrollto"> View Doctor Profiles</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(myfile/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>Lorem Ipsum Dolor</h2>
            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(myfile/img/slide/slide-3.jpg)">
          <div class="container">
            <h2>Sequi ea ut et est quaerat</h2>
            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->



  <main id="main">
  <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="">Patient Profile Creation</a></h4>
            <p class="description">Users can create detailed health profiles, including medical history, allergies, and current medications, allowing medical professionals to tailor treatments and appointments according to individual needs.
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title"><a href="">Specialist Recommendations</a></h4>
            <p class="description">the system suggests relevant specialists for consultation and provides seamless referrals, ensuring patients receive specialized care when necessary.
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="fas fa-thermometer"></i></div>
            <h4 class="title"><a href="">Real-Time Availability Tracking</a></h4>
            <p class="description">Patients can view real-time availability of doctors and specialists, allowing them to book appointments efficiently based on their schedules and reducing waiting times and ensuring prompt care.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="">Prescription Management</a></h4>
            <p class="description">manage their medications online, with automatic reminders for medication adherence and timely follow-ups, promoting better health outcomes and continuity of care.</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Featured Services Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <h3>In an emergency? Need help now?</h3>
        <p> Your safety and health matter to us above all else.</p>
        <a class="cta-btn scrollto" href="{{ route('login') }}">Make an Make an Appointment</a>
      </div>

    </div>
  </section><!-- End Cta Section -->



  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</h2>
        <h4>About Safe Life Medical Centre: Pioneers in Compassionate Healthcare</h4>
      </div>

      <div class="row">
        <div class="col-lg-6" data-aos="fade-right">
          <img src="myfile/img/safe.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>History of safe life medical centre </h3>
          <p class="fst-italic">
            Safe Life Medical Centre has been a cornerstone of exceptional healthcare in our community for over two decades. Founded by a team of dedicated medical professionals with a vision to provide comprehensive and compassionate care to all, Safe Life Medical Centre has since grown to become a trusted name synonymous with excellence in healthcare services.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> From humble beginnings as a small clinic, we have steadily expanded our facilities and services to meet the evolving needs of our patients. Over the years, we have nurtured a culture of patient-centered care, where every individual is treated with respect, dignity, and empathy.</li>
            <li><i class="bi bi-check-circle"></i> Our commitment to innovation and continuous improvement has enabled us to stay at the forefront of medical advancements, offering state-of-the-art diagnostics, treatments, and preventive care services. </li>

          </ul>

        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->





   <!-- ======= Doctors Section ======= -->
   <section id="doctors" class="doctors section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Doctors</h2>
        <p>Explore profiles of our esteemed medical professionals, each dedicated to delivering exceptional care tailored to your needs. From experienced general practitioners to specialized experts, meet the skilled individuals committed to safeguarding your health and well-being.</p>
      </div>

      <div class="row">


        @foreach ($heros as $hero )

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="{{ $hero->image }}" class="img-fluid" alt="">

            </div>
            <div class="member-info">
              <h4>{{ $hero->name }}</h4>
              <span>{{ $hero->specialist }}</span>

              <a href="{{ route('login') }}" class="btn btn-primary">appointment</a></span>
            </div>
          </div>
        </div>

        @endforeach


      <!--  <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="myfile/img/doctors/doctors-2.jpg" class="img-fluid" alt="">

            </div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Anesthesiologist</span>

                  <a href="{{ route('login') }}" class="btn btn-primary">appointment</a></span>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="myfile/img/doctors/doctors-4.jpg" class="img-fluid" alt="">

            </div>
            <div class="member-info">
              <h4>Amanda Jepson</h4>
              <span>Neurosurgeon</span>

                  <a href="{{ route('login') }}" class="btn btn-primary">appointment</a></span>
            </div>
          </div>
        </div>-->





      </div>

    </div>
  </section><!-- End Doctors Section -->

  <!-- ======= Departments Section ======= -->
  <section id="departments" class="departments">
    <div class="container" data-aos="fade-up">

      <div class="section-title">

        <h2>Departments</h2>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                <h4>Neurology</h4>
                <p>Delve into the intricate realm of neurological care with our dedicated team of neurologists. Whether you're seeking management for chronic conditions like epilepsy or need diagnostics for complex neurological disorders, our specialists are here to provide compassionate support and personalized treatment plans. With cutting-edge technology and a commitment to innovation, we strive to improve neurological outcomes and enhance quality of life for every patient.</p>
              </a>
            </li>




            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                <h4>Hepatology</h4>
                <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
              </a>
            </li>

          </ul>
        </div>
        <div class="col-lg-8">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <h3>Cardiology</h3>
              <p class="fst-italic">Our cardiology department is staffed with renowned experts in heart health.</p>
              <img src="myfile/img/departments-1.jpg" alt="" class="img-fluid">
              <p>From routine screenings to complex interventions, we offer comprehensive cardiac care tailored to each patient's needs. Our state-of-the-art facilities and advanced diagnostic tools ensure accurate assessments and effective treatments for cardiovascular conditions, promoting heart health and longevity.</p>
            </div>


          </div>
        </div>
      </div>

    </div>
  </section><!-- End Departments Section -->


  <section id="contact" class="contact">
    <div class="container">

       <div class="section-title">
        <h2>Contact</h2>

  <div class="col-lg-6">
    <form action="" method="post" role="form" class="php-email-form">
      <div class="row">
        <div class="col-md-6 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
        </div>
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
      </div>
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
      </div>
      <div class="text-center"><button type="submit">Send Message</button></div>
    </form>
  </div>

</div>

</div>
</section> <!--End Contact Section-->

</main>

  @endsection


