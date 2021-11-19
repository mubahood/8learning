@php
    use App\Models\Utils;
    use App\Models\TrafficRecord;
    use App\Models\Participant;
    Utils::start_session();
    if(isset($_GET['ref'])){
        $ref = trim($_GET['ref']);
        if(strlen($ref)>1){
            $init_ref = true;
            if(isset($_SESSION['ref'])){
                if($_SESSION['ref'] == 'none'){
                    $init_ref = true;
                }else{
                    $init_ref = false;
                }
            }
            if($init_ref){
                $tra = new TrafficRecord();
                $tra->ref = $ref;
                if($tra->save()){
                    $_SESSION['ref'] = $ref;
                }
            } 
        }
    }
    
    if(!isset($_SESSION['ref'])){
        $_SESSION['ref'] = 'none';
    }

    if(isset($_GET['clear'])){
        unset($_SESSION['done']);
        $_SESSION['done'] = false;
        header("Location: ".url("/"));
        die();
    }

    if(!isset($_SESSION['done'])){
        $_SESSION['done'] = false;
    }

    if(isset($_POST['email'])){
        $email = trim($_POST['email']);
        if(strlen($email)>3){
            $Participant = new Participant();
            $Participant->name = $_POST['name'];
            $Participant->email = $_POST['email'];
            $Participant->whatsapp = $_POST['whatsapp'];
            $Participant->country = $_POST['country'];
            $Participant->message = $_POST['message'];
            $Participant->ref = $_SESSION['ref'];

            if(strlen($Participant->email)<2){
                dd("Email too short!");
            }
            $val = Participant::where('email',$Participant->email)->first();
            if($val != null){
                $_SESSION['done'] = true;
                dd("This  email is already registered.");
            }

            if($Participant->save()){
                $_SESSION['done'] = true;
                $_SESSION['msg'] = "You have successfully registered for the conference!, 
                We are going to contact you and give you
                more details through your whastapp number and email. THANK YOU!";
                header("Location: ".url("/"));
                die();
            }else{
                dd("Something went wrong. Please try again.");
            }
        }
    }

@endphp<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Web programming workshop - online</title>
  <meta content="8Learning presents a 60 Minutes workshop that will give you a very clear path to learn
  web-programming from zero! in African Environment Setup" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{url("/")}}" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">

      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#team">SPEAKERS</a></li> 
          <li><a class="getstarted scrollto " href="#contact">REGISTER FOR WORKSHOP NOW!</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-7 d-flex flex-column justify-content-center">
            @if (isset($_SESSION['msg']))
            @php
                $_SESSION['msg'] = null; 
            @endphp
            <div class="alert alert-success mt-5" >
                <b>Congs!</b><br>
                {{$_SESSION['msg']}}
            </div>
            @endif
          <h1 data-aos="fade-up">Web programming for dummies</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">
            Among a very few <span class="text-primary">freelance skills in Africa</span> that you can teach yourself
            anytime, anywhere and start earning from them
            regardless to your <span class="text-primary"></span>age</span>, <span class="text-primary">gender</span> or
            <span class="text-primary">academic qualifications</span> is computer programming.
          </h2>
          <br>
          <h2 data-aos="fade-up" data-aos-delay="400">
            Research has it, Very many Ugandans and Africans at large, have found it challenging to discover a clear
            path to take to attain such technological skills.
          </h2>
          <br>

          <h2 data-aos="fade-up" data-aos-delay="400">
            Eight Learning Institute of Technology and Management brings you a strictly <span class="text-primary">60 Minutes workshop</span> that will give
            you a very clear path to learn
            web-programming from zero! in <span class="text-primary">African Environment Setup</span>.
            <br>
            <br>
            DATE: --/--/---- : --:-- PM (GTM+3)
          </h2>


          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#contact"
                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span class="d-none d-md-block">REGISTER FOR WORKSHOP NOW</span>
                <span class="d-block d-md-none">REGISTER NOW</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <br>
          <h2 data-aos="fade-up " data-aos-delay="400">
            Sign Up for the online conference now! – to be added on a list of African Youths who will be oriented
            clearly on how they can learn and earn from web programming, regardless to their age, gender or academic
            qualifications. <a href="#contact">SIGN UP NOW</a>
          </h2>
        </div>
        <div class="col-lg-5 hero-img mt-5 d-none d-md-block" data-aos="zoom-out" data-aos-delay="200">
          {{-- <img src="assets/img/static_web.svg" class="img-fluid" alt=""> --}}
          <img src="assets/img/dummy.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">







    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>SPEAKERS</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/1.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mr. Tusiime Bob</h4>
                <span>Lorem ipsum dolor</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum
                  exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/1.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mr. Isaac Mbabazi</h4>
                <span>Lorem ipsum dolor</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis.
                  Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/2.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mr. Muhindo Mubarak</h4>
                <span>Software Developer</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut
                  architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/3.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Prof. Jude T. Lubega</h4>
                <span>Vice-Chancellor of Nkumba University</span>
                <p>Jude Lubega is a professor of Computer Science and currently serves as the Deputy Vice Chancellor of
                  Uganda Technology and Management University. The Deputy Vice-Chancellor deputizes the Vice Chancellor.
                </p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Team Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>REGISTER FOR WORKSHOP</p>
          <br>
          <h2>Fill the form bellow to be added on list of participants who will attend the workshop.</h2>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Magdalene Lane, Opposite Ndere <br>
                    Cultural Centre, Kisaasi – Ntinda</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>P.O. BOX 36859, Kampala <br>
                    +414 – 666 -784 | 0778-167-775</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@8technologies.net<br> info@8learning.org</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            @if ($_SESSION['done'])
                <div class="alert alert-success">
                    <p>You have already submited your registration form and we received it successfully!</p>
                    <p> Would you like to clear history and access the form again? </p>

                    <a class="btn btn-success" href="{{url("/?clear=1")}}">CLEAR HISTORY</a>
                </div>
            @endif


            @if (!$_SESSION['done'])
            <form action="/" method="post" class="php-email-form">
                @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                  <small class="text-muted">E.g John Doe</small>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                  <small class="text-muted">E.g john@mail.com</small>
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="whatsapp" placeholder="Whatsapp number" required>
                  <small class="text-muted">E.g +256 780 112233. - We will use it to send the conference link and remider.</small>
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="country" placeholder="Your country" required>
                  <small class="text-muted">Please tell us your country.</small>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control"  name="message" rows="3" placeholder="Any message?"></textarea>
                  <small class="text-muted">This is message field is optional.</small>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">ADD ME ON THE LIST</button>
                </div>

              </div>
            </form>
            @endif
          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->


  

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">



    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>8learning</span></strong>. All Rights Reserved
      </div>
      <div class="credits"> 
        Learn more about <a target="_blank" href="https://8learning.org/">Eight Learning Institute of Technology, Business and Management</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script> 
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>