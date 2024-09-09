@extends('layouts.layout-main')
@section('main-content')
    <!-- Hero section with layer parallax gfx -->
    <section class="position-relative py-5">

        <!-- Gradient BG -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-primary opacity-10"></div>

        <!-- Content -->
        <div class="container position-relative zindex-2 py-lg-4">
            <div class="row">
                <div class="col-lg-5 d-flex flex-column pt-lg-4 pt-xl-5">
                    <h5 class="my-2">Welcome!</h5>
                    <h1 class="display-3 mb-4">Learn <span class="text-primary">Farming Online</span> with No Limits</h1>
                    <p class="fs-lg mb-5">Enjoy our great selection of Farming courses. Choose from more than 25K online video
                        courses and become an IT expert now!</p>

                    <!-- Desktop form -->
                    <form class="d-none d-sm-flex mb-5">
                        <div class="input-group d-block d-sm-flex input-group-lg me-3">
                            <input type="text" class="form-control w-50" placeholder="Search courses...">
                            <select class="form-select w-50">
                                <option value="" selected disabled>Categories</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Mobile Development">Mobile Development</option>
                                <option value="Programming">Programming</option>
                                <option value="Game Development">Game Development</option>
                                <option value="Software Testing">Software Testing</option>
                                <option value="Software Engineering">Software Engineering</option>
                                <option value="Network & Security">Network &amp; Security</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-icon btn-primary btn-lg" aria-label="Search">
                            <i class="bx bx-search"></i>
                        </button>
                    </form>

                    <!-- Mobile form -->
                    <form class="d-sm-none mb-5">
                        <input type="text" class="form-control form-control-lg mb-2" placeholder="Search courses...">
                        <select class="form-select form-select-lg mb-2">
                            <option value="" selected disabled>Categories</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Mobile Development">Mobile Development</option>
                            <option value="Programming">Programming</option>
                            <option value="Game Development">Game Development</option>
                            <option value="Software Testing">Software Testing</option>
                            <option value="Software Engineering">Software Engineering</option>
                            <option value="Network & Security">Network &amp; Security</option>
                        </select>
                        <button type="submit" class="btn btn-icon btn-primary btn-lg w-100 d-sm-none" aria-label="Search">
                            <i class="bx bx-search"></i>
                        </button>
                    </form>
                    <div class="d-flex align-items-center mt-auto mb-3 mb-lg-0 pb-4 pb-lg-0 pb-xl-5">
                        <div class="d-flex me-3">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded-circle"
                                style="width: 52px; height: 52px;">
                                <img src="assets/img/avatar/08.jpg" class="rounded-circle" width="48" alt="Avatar">
                            </div>
                            <div class="d-flex align-items-center justify-content-center bg-light rounded-circle ms-n3"
                                style="width: 52px; height: 52px;">
                                <img src="assets/img/avatar/15.jpg" class="rounded-circle" width="48" alt="Avatar">
                            </div>
                            <div class="d-flex align-items-center justify-content-center bg-light rounded-circle ms-n3"
                                style="width: 52px; height: 52px;">
                                <img src="assets/img/avatar/16.jpg" class="rounded-circle" width="48" alt="Avatar">
                            </div>
                        </div>
                        <span class="fs-sm"><span class="text-primary fw-semibold">10K+</span> students are already with
                            us</span>
                    </div>
                </div>
                <div class="col-lg-7">

                    <!-- Parallax gfx -->
                    <div class="parallax mx-auto me-lg-0" style="max-width: 648px;">
                        <div class="parallax-layer" data-depth="0.1">
                            <img src="assets/img/landing/online-courses/hero/layer01.png" alt="Layer">
                        </div>
                        <div class="parallax-layer" data-depth="0.13">
                            <img src="assets/img/landing/online-courses/hero/layer02.png" alt="Layer">
                        </div>
                        <div class="parallax-layer zindex-5" data-depth="-0.12">
                            <img src="assets/img/landing/online-courses/hero/layer03.png" alt="Layer">
                        </div>
                        <div class="parallax-layer zindex-3" data-depth="0.27">
                            <img src="assets/img/landing/online-courses/hero/layer04.png" alt="Layer">
                        </div>
                        <div class="parallax-layer zindex-1" data-depth="-0.18">
                            <img src="assets/img/landing/online-courses/hero/layer05.png" alt="Layer">
                        </div>
                        <div class="parallax-layer zindex-1" data-depth="0.1">
                            <img src="assets/img/landing/online-courses/hero/layer06.png" alt="Layer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Popular courses -->
    <section class="container mt-2 mt-sm-3 py-md-3 py-lg-5">
        <div class="row py-5">
            <div class="col-lg-3 col-md-4">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs flex-nowrap overflow-auto flex-md-column pb-2 pb-md-0 mb-3 mb-md-5" role="tablist">
                    <li class="nav-item">
                        <a href="#" class="nav-link d-inline-block text-nowrap active" role="tab"
                            aria-selected="true">Web Development</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-inline-block text-nowrap" role="tab"
                            aria-selected="false">Data Science</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-inline-block text-nowrap" role="tab"
                            aria-selected="false">Mobile Development</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-inline-block text-nowrap" role="tab"
                            aria-selected="false">Programming</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-inline-block text-nowrap" role="tab"
                            aria-selected="false">Game Development</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-inline-block text-nowrap" role="tab"
                            aria-selected="false">Software Testing</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-inline-block text-nowrap" role="tab"
                            aria-selected="false">Software Engineering</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-inline-block text-nowrap" role="tab"
                            aria-selected="false">Network &amp; Security</a>
                    </li>
                </ul>
                <a href="portfolio-courses.html" class="btn btn-outline-primary btn-lg d-none d-md-inline-flex">
                    See all courses
                    <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                </a>
            </div>
            <div class="col-lg-9 col-md-8">

                <!-- Title + prev/next buttons -->
                <div class="d-flex align-items-center justify-content-between pb-4 mb-3">
                    <h2 class="h1 mb-0 me-3">Popular Courses</h2>
                    <div class="d-flex">
                        <button type="button" id="popular-prev" class="btn btn-prev btn-icon btn-sm me-2"
                            aria-label="Previous">
                            <i class="bx bx-chevron-left"></i>
                        </button>
                        <button type="button" id="popular-next" class="btn btn-next btn-icon btn-sm ms-2"
                            aria-label="Next">
                            <i class="bx bx-chevron-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Courses slider -->
                <div class="swiper swiper-nav-onhover mx-n2"
                    data-swiper-options='{
              "slidesPerView": 1,
              "spaceBetween": 8,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "navigation": {
                "prevEl": "#popular-prev",
                "nextEl": "#popular-next"
              },
              "breakpoints": {
                "560": {
                  "slidesPerView": 2
                },
                "768": {
                  "slidesPerView": 1
                },
                "850": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }'>
                    <div class="swiper-wrapper">

                        <!-- Item -->
                        <div class="swiper-slide h-auto pb-3">
                            <article class="card h-100 border-0 shadow-sm mx-2">
                                <div class="position-relative">
                                    <a href="portfolio-single-course.html"
                                        class="d-block position-absolute w-100 h-100 top-0 start-0"
                                        aria-label="Course link"></a>
                                    <span class="badge bg-success position-absolute top-0 start-0 zindex-2 mt-3 ms-3">Best
                                        Seller</span>
                                    <a href="#"
                                        class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3"
                                        data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites"
                                        aria-label="Save to Favorites">
                                        <i class="bx bx-bookmark"></i>
                                    </a>
                                    <img src="assets/img/portfolio/courses/01.jpg" class="card-img-top" alt="Image">
                                </div>
                                <div class="card-body pb-3">
                                    <h3 class="h5 mb-2">
                                        <a href="portfolio-single-course.html">Fullstack Web Developer Course from
                                            Scratch</a>
                                    </h3>
                                    <p class="fs-sm mb-2">By Albert Flores</p>
                                    <p class="fs-lg fw-semibold text-primary mb-0">FREE</p>
                                </div>
                                <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                                    <div class="d-flex align-items-center me-4">
                                        <i class="bx bx-time fs-xl me-1"></i>
                                        220 hours
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="bx bx-like fs-xl me-1"></i>
                                        94% (4.2K)
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide h-auto pb-3">
                            <article class="card h-100 border-0 shadow-sm mx-2">
                                <div class="position-relative">
                                    <a href="portfolio-single-course.html"
                                        class="d-block position-absolute w-100 h-100 top-0 start-0"
                                        aria-label="Course link"></a>
                                    <a href="#"
                                        class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3"
                                        data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites"
                                        aria-label="Save to Favorites">
                                        <i class="bx bx-bookmark"></i>
                                    </a>
                                    <img src="assets/img/portfolio/courses/02.jpg" class="card-img-top" alt="Image">
                                </div>
                                <div class="card-body pb-3">
                                    <h3 class="h5 mb-2">
                                        <a href="portfolio-single-course.html">HTML, CSS, JavaScript Web Developer</a>
                                    </h3>
                                    <p class="fs-sm mb-2">By Jenny Wilson &amp; Marvin McKinney</p>
                                    <p class="fs-lg fw-semibold text-primary mb-0">FREE</p>
                                </div>
                                <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                                    <div class="d-flex align-items-center me-4">
                                        <i class="bx bx-time fs-xl me-1"></i>
                                        160 hours
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="bx bx-like fs-xl me-1"></i>
                                        92% (3.1K)
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide h-auto pb-3">
                            <article class="card h-100 border-0 shadow-sm mx-2">
                                <div class="position-relative">
                                    <a href="portfolio-single-course.html"
                                        class="d-block position-absolute w-100 h-100 top-0 start-0"
                                        aria-label="Course link"></a>
                                    <span
                                        class="badge bg-danger position-absolute top-0 start-0 zindex-2 mt-3 ms-3">Sale!</span>
                                    <a href="#"
                                        class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3"
                                        data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites"
                                        aria-label="Save to Favorites">
                                        <i class="bx bx-bookmark"></i>
                                    </a>
                                    <img src="assets/img/portfolio/courses/03.jpg" class="card-img-top" alt="Image">
                                </div>
                                <div class="card-body pb-3">
                                    <h3 class="h5 mb-2">
                                        <a href="portfolio-single-course.html">HTML, CSS, JavaScript Web Developer</a>
                                    </h3>
                                    <p class="fs-sm mb-2">By Robert Fox</p>
                                    <p class="text-muted mb-0"><span
                                            class="fs-lg fw-semibold text-danger me-2">FREE</span><del>UGX 45,000</del></p>
                                </div>
                                <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                                    <div class="d-flex align-items-center me-4">
                                        <i class="bx bx-time fs-xl me-1"></i>
                                        210 hours
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="bx bx-like fs-xl me-1"></i>
                                        98% (2.7K)
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide h-auto pb-3">
                            <article class="card h-100 border-0 shadow-sm mx-2">
                                <div class="position-relative">
                                    <a href="portfolio-single-course.html"
                                        class="d-block position-absolute w-100 h-100 top-0 start-0"
                                        aria-label="Course link"></a>
                                    <a href="#"
                                        class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3"
                                        data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites"
                                        aria-label="Save to Favorites">
                                        <i class="bx bx-bookmark"></i>
                                    </a>
                                    <img src="assets/img/portfolio/courses/05.jpg" class="card-img-top" alt="Image">
                                </div>
                                <div class="card-body pb-3">
                                    <h3 class="h5 mb-2">
                                        <a href="portfolio-single-course.html">Data Science &amp; Machine Learning with
                                            Python</a>
                                    </h3>
                                    <p class="fs-sm mb-2">By Esther Howard</p>
                                    <p class="fs-lg fw-semibold text-primary mb-0">FREE</p>
                                </div>
                                <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                                    <div class="d-flex align-items-center me-4">
                                        <i class="bx bx-time fs-xl me-1"></i>
                                        170 hours
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="bx bx-like fs-xl me-1"></i>
                                        96% (3.8K)
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide h-auto pb-3">
                            <article class="card h-100 border-0 shadow-sm mx-2">
                                <div class="position-relative">
                                    <a href="portfolio-single-course.html"
                                        class="d-block position-absolute w-100 h-100 top-0 start-0"
                                        aria-label="Course link"></a>
                                    <a href="#"
                                        class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3"
                                        data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites"
                                        aria-label="Save to Favorites">
                                        <i class="bx bx-bookmark"></i>
                                    </a>
                                    <img src="assets/img/portfolio/courses/08.jpg" class="card-img-top" alt="Image">
                                </div>
                                <div class="card-body pb-3">
                                    <h3 class="h5 mb-2">
                                        <a href="portfolio-single-course.html">The Ultimate Guide to Unity Game
                                            Development</a>
                                    </h3>
                                    <p class="fs-sm mb-2">By Albert Flores</p>
                                    <p class="fs-lg fw-semibold text-primary mb-0">FREE</p>
                                </div>
                                <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                                    <div class="d-flex align-items-center me-4">
                                        <i class="bx bx-time fs-xl me-1"></i>
                                        250 hours
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="bx bx-like fs-xl me-1"></i>
                                        95% (5.4K)
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- Pagination (bullets) -->
                    <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
                </div>
                <a href="portfolio-courses.html" class="btn btn-outline-primary btn-lg w-100 d-md-none mt-3">
                    See all courses
                    <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                </a>
            </div>
        </div>
    </section>


    <!-- How it works (Steps) -->
    <section class="container pt-4 pt-lg-0 pb-4 pb-lg-5">
        <h2 class="h1 text-center pb-3 pb-md-0 mb-md-5">How Does It Work?</h2>
        <div class="steps">
            <div class="step pt-0 pt-md-3 pb-5">
                <div class="step-number">
                    <div class="step-number-inner">1</div>
                </div>
                <div class="step-body d-flex align-items-center ps-xl-5">
                    <div class="rellax d-none d-lg-block flex-shrink-0 mx-4 mx-xl-5" data-rellax-percentage="0.5"
                        data-rellax-speed="-0.3" data-disable-parallax-down="lg">
                        <img src="assets/img/landing/online-courses/steps/01-dark.svg" class="d-dark-mode-none"
                            width="306" alt="Illustration">
                        <img src="assets/img/landing/online-courses/steps/01-light.svg" class="d-none d-dark-mode-block"
                            width="306" alt="Illustration">
                    </div>
                    <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5" data-rellax-speed="0.4"
                        data-disable-parallax-down="lg">
                        <h3 class="h4">Find what fascinates you &amp; choose your course</h3>
                        <p class="mb-0">Nulla faucibus mauris pellentesque blandit faucibus non. Sit ut et at suspendisse
                            gravida hendrerit scelerisque tempus placerat.</p>
                    </div>
                </div>
            </div>
            <div class="step pt-0 pt-md-4 pb-5">
                <div class="step-number">
                    <div class="step-number-inner">2</div>
                </div>
                <div class="step-body d-flex align-items-center ps-xl-5">
                    <div class="rellax d-none d-lg-block flex-shrink-0 mx-4 mx-xl-5" data-rellax-percentage="0.5"
                        data-rellax-speed="-0.5" data-disable-parallax-down="lg">
                        <img src="assets/img/landing/online-courses/steps/02-dark.svg" class="d-dark-mode-none"
                            width="306" alt="Illustration">
                        <img src="assets/img/landing/online-courses/steps/02-light.svg" class="d-none d-dark-mode-block"
                            width="306" alt="Illustration">
                    </div>
                    <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5" data-rellax-speed="0.5"
                        data-disable-parallax-down="lg">
                        <h3 class="h4">Learn by doing</h3>
                        <p class="mb-0">Tristique sed pharetra feugiat tempor sagittis. Ultricies eu bibendum adipiscing
                            lacinia. Quisque praesent aliquam tempus phasellus ut integer ac nunc dapibus.</p>
                    </div>
                </div>
            </div>
            <div class="step pt-0 pt-md-4 pb-5">
                <div class="step-number">
                    <div class="step-number-inner">3</div>
                </div>
                <div class="step-body d-flex align-items-center ps-xl-5">
                    <div class="rellax d-none d-lg-block flex-shrink-0 mx-4 mx-xl-5" data-rellax-percentage="0.5"
                        data-rellax-speed="-0.3" data-disable-parallax-down="lg">
                        <img src="assets/img/landing/online-courses/steps/03-dark.svg" class="d-dark-mode-none"
                            width="306" alt="Illustration">
                        <img src="assets/img/landing/online-courses/steps/03-light.svg" class="d-none d-dark-mode-block"
                            width="306" alt="Illustration">
                    </div>
                    <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5" data-rellax-speed="0.4"
                        data-disable-parallax-down="lg">
                        <h3 class="h4">Get instant expert feedback</h3>
                        <p class="mb-0">Duis euismod enim, facilisis risus tellus pharetra lectus diam neque. Nec
                            ultrices mi faucibus est. Magna ullamcorper potenti elementum ultricies auctor nec volutpat
                            augue.</p>
                    </div>
                </div>
            </div>
            <div class="step pt-0 pt-md-4 pb-5">
                <div class="step-number">
                    <div class="step-number-inner">4</div>
                </div>
                <div class="step-body d-flex align-items-center ps-xl-5">
                    <div class="rellax d-none d-lg-block flex-shrink-0 mx-4 mx-xl-5" data-rellax-percentage="0.5"
                        data-rellax-speed="-0.5" data-disable-parallax-down="lg">
                        <img src="assets/img/landing/online-courses/steps/04-dark.svg" class="d-dark-mode-none"
                            width="306" alt="Illustration">
                        <img src="assets/img/landing/online-courses/steps/04-light.svg" class="d-none d-dark-mode-block"
                            width="306" alt="Illustration">
                    </div>
                    <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5" data-rellax-speed="0.6"
                        data-disable-parallax-down="lg">
                        <h3 class="h4">Put your learning into practice &amp; find your dream job</h3>
                        <p class="mb-0">Sed fermentum ut nibh duis. Dolor pretium arcu, tincidunt ultrices tristique arcu
                            cursus massa gravida tortor nulla, mollis id pretium.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- What you get (Icon boxes) -->
    <section class="container pt-1 pt-xl-3 pb-5">
        <h2 class="h1 text-center pb-3 pb-md-0 mb-md-5">What You Get</h2>
        <div class="swiper swiper-nav-onhover mt-n3 mx-n2"
            data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 8,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "600": {
              "slidesPerView": 2
            },
            "1000": {
              "slidesPerView": 3
            }
          }
        }'>
            <div class="swiper-wrapper">

                <!-- Item -->
                <div class="swiper-slide h-auto py-3">
                    <div class="card card-hover h-100 mx-2">
                        <div class="card-body">
                            <div class="d-table position-relative p-3 mb-4">
                                <img src="assets/img/landing/online-courses/icons/01.svg"
                                    class="position-relative zindex-2" width="32" alt="Icon">
                                <span
                                    class="bg-primary position-absolute top-0 start-0 w-100 h-100 rounded-circle opacity-8"></span>
                            </div>
                            <h3 class="h5 pb-1 mb-2">25K+ Online Video Courses</h3>
                            <p class="mb-0">Leo condimentum dignissim venenatis sit dignissim vel. Adipiscing tristique
                                dictum vitae elementum neque.</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto py-3">
                    <div class="card card-hover h-100 mx-2">
                        <div class="card-body">
                            <div class="d-table position-relative p-3 mb-4">
                                <img src="assets/img/landing/online-courses/icons/02.svg"
                                    class="position-relative zindex-2" width="32" alt="Icon">
                                <span
                                    class="bg-primary position-absolute top-0 start-0 w-100 h-100 rounded-circle opacity-8"></span>
                            </div>
                            <h3 class="h5 pb-1 mb-2">Mentor-Based Learning</h3>
                            <p class="mb-0">Ac dapibus lacus, malesuada ridiculus donec condimentum nunc vestibulum. Mi
                                feugiat tellus faucibus fermentum mattis ultrices.</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto py-3">
                    <div class="card card-hover h-100 mx-2">
                        <div class="card-body">
                            <div class="d-table position-relative p-3 mb-4">
                                <img src="assets/img/landing/online-courses/icons/03.svg"
                                    class="position-relative zindex-2" width="32" alt="Icon">
                                <span
                                    class="bg-primary position-absolute top-0 start-0 w-100 h-100 rounded-circle opacity-8"></span>
                            </div>
                            <h3 class="h5 pb-1 mb-2">Lifetime Access</h3>
                            <p class="mb-0">Donec interdum risus convallis tristique quis elit. Sapien turpis enim,
                                viverra cursus facilisis dignissim condimentum.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
        </div>
    </section>


    <!-- Testimonials -->
    <section class="container pt-md-2 pb-5">
        <div class="row">
            <div class="col-md-5">
                <div class="card h-100 border-0 overflow-hidden px-md-4">
                    <span
                        class="bg-gradient-primary position-absolute top-0 start-0 w-100 h-100 opacity-10 d-none d-md-block"></span>
                    <div
                        class="card-body d-flex flex-column align-items-center justify-content-center position-relative zindex-2 p-0 pb-2 p-lg-4">
                        <h2 class="h1 text-center text-md-start p-lg-4">What Our Students Say About Online Courses</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card border-0 shadow-sm p-4 p-xxl-5">
                    <div class="d-flex justify-content-between pb-4 mb-2">
                        <span class="btn btn-icon btn-primary btn-lg shadow-primary pe-none">
                            <i class="bx bxs-quote-left"></i>
                        </span>
                        <div class="d-flex">
                            <button type="button" id="testimonials-prev" class="btn btn-prev btn-icon btn-sm me-2"
                                aria-label="Previous">
                                <i class="bx bx-chevron-left"></i>
                            </button>
                            <button type="button" id="testimonials-next" class="btn btn-next btn-icon btn-sm ms-2"
                                aria-label="Next">
                                <i class="bx bx-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Slider -->
                    <div class="swiper mx-0 mb-md-n2 mb-xxl-n3"
                        data-swiper-options='{
                "spaceBetween": 24,
                "loop": true,
                "pagination": {
                  "el": ".swiper-pagination",
                  "clickable": true
                },
                "navigation": {
                  "prevEl": "#testimonials-prev",
                  "nextEl": "#testimonials-next"
                }
              }'>
                        <div class="swiper-wrapper">

                            <!-- Item -->
                            <div class="swiper-slide h-auto">
                                <figure class="card h-100 position-relative border-0 bg-transparent">
                                    <blockquote class="card-body p-0 mb-0">
                                        <p class="fs-lg mb-0">Vestibulum nunc lectus auctor quis. Natoque lectus tortor
                                            lacus, eu. Nunc feugiat nisl maecenas nulla hac morbi. Vitae, donec facilisis
                                            sed nunc netus. Venenatis posuere faucibus enim est. Vel dignissim morbi blandit
                                            morbi tellus. Arcu ullamcorper quis enim.</p>
                                    </blockquote>
                                    <figcaption class="card-footer border-0 d-flex align-items-center w-100 pb-2">
                                        <img src="assets/img/avatar/13.jpg" width="60" class="rounded-circle"
                                            alt="Ralph Edwards">
                                        <div class="ps-3">
                                            <h6 class="fw-semibold lh-base mb-0">Ralph Edwards</h6>
                                            <span class="fs-sm text-muted">Head of Marketing at Lorem Ltd. </span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide h-auto">
                                <figure class="card h-100 position-relative border-0 bg-transparent">
                                    <blockquote class="card-body p-0 mb-0">
                                        <p class="fs-lg mb-0">Mi semper risus ultricies orci pulvinar in at enim orci. Quis
                                            facilisis nunc pellentesque in ullamcorper sit. Lorem blandit arcu sapien,
                                            senectus libero, amet dapibus cursus quam. Eget pellentesque eu purus volutpat
                                            adipiscing malesuada. Purus nisi, tortor vel lacus.</p>
                                    </blockquote>
                                    <figcaption class="card-footer border-0 d-flex align-items-center w-100 pb-2">
                                        <img src="assets/img/avatar/14.jpg" width="60" class="rounded-circle"
                                            alt="Annette Black">
                                        <div class="ps-3">
                                            <h6 class="fw-semibold lh-base mb-0">Annette Black</h6>
                                            <span class="fs-sm text-muted">Strategic Advisor at Company LLC</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide h-auto">
                                <figure class="card h-100 position-relative border-0 bg-transparent">
                                    <blockquote class="card-body p-0 mb-0">
                                        <p class="fs-lg mb-0">Ac at sed sit senectus massa. Massa ante amet ultrices magna
                                            porta tempor. Aliquet diam in et magna ultricies mi at. Lectus enim, vel enim
                                            egestas nam pellentesque et leo. Elit mi faucibus laoreet aliquam pellentesque
                                            sed aliquet integer massa. Orci leo tortor ornare.</p>
                                    </blockquote>
                                    <figcaption class="card-footer border-0 d-flex align-items-center w-100 pb-2">
                                        <img src="assets/img/avatar/11.jpg" width="60" class="rounded-circle"
                                            alt="Darrell Steward">
                                        <div class="ps-3">
                                            <h6 class="fw-semibold lh-base mb-0">Darrell Steward</h6>
                                            <span class="fs-sm text-muted">Project Manager at Ipsum Ltd.</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        <!-- Pagination (bullets) -->
                        <div class="swiper-pagination position-relative mt-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Brands (Carousel) -->
    <section class="container mt-2 mb-lg-2 mb-xl-4 pt-3 pt-lg-5 pb-5">
        <h2 class="text-center pb-md-2">Trusted by Leading Universities &amp; Companies</h2>
        <div class="swiper mx-n2"
            data-swiper-options='{
          "slidesPerView": 2,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 3,
              "spaceBetween": 8
            },
            "650": {
              "slidesPerView": 4,
              "spaceBetween": 8
            },
            "900": {
              "slidesPerView": 5,
              "spaceBetween": 8
            },
            "1100": {
              "slidesPerView": 6,
              "spaceBetween": 8
            }
          }
        }'>
            <div class="swiper-wrapper">

                <!-- Item -->
                <div class="swiper-slide py-3">
                    <a href="#" class="card card-body card-hover px-2 mx-2">
                        <img src="assets/img/brands/01.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                    </a>
                </div>

                <!-- Item -->
                <div class="swiper-slide py-3">
                    <a href="#" class="card card-body card-hover px-2 mx-2">
                        <img src="assets/img/brands/02.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                    </a>
                </div>

                <!-- Item -->
                <div class="swiper-slide py-3">
                    <a href="#" class="card card-body card-hover px-2 mx-2">
                        <img src="assets/img/brands/03.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                    </a>
                </div>

                <!-- Item -->
                <div class="swiper-slide py-3">
                    <a href="#" class="card card-body card-hover px-2 mx-2">
                        <img src="assets/img/brands/04.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                    </a>
                </div>

                <!-- Item -->
                <div class="swiper-slide py-3">
                    <a href="#" class="card card-body card-hover px-2 mx-2">
                        <img src="assets/img/brands/05.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                    </a>
                </div>

                <!-- Item -->
                <div class="swiper-slide py-3">
                    <a href="#" class="card card-body card-hover px-2 mx-2">
                        <img src="assets/img/brands/06.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                    </a>
                </div>
            </div>

            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative pt-2 mt-4"></div>
        </div>
    </section>


    <!-- FAQ (Accordion) -->
    <section class="container pt-1 pt-lg-3 mb-5">
        <div class="position-relative bg-primary rounded-3 overflow-hidden px-3 px-sm-4 px-md-0 py-5">

            <!-- Parallax patterns -->
            <div class="rellax position-absolute top-0 start-0 w-100 h-100 d-none d-lg-block" data-rellax-percentage="0.5"
                data-rellax-speed="1.75">
                <img src="assets/img/landing/online-courses/pattern-1.svg"
                    class="position-absolute top-0 start-100 translate-middle ms-n4" alt="Pattern">
                <img src="assets/img/landing/online-courses/pattern-2.svg"
                    class="position-absolute top-50 start-0 mt-n5 ms-n5" alt="Pattern">
                <img src="assets/img/landing/online-courses/pattern-3.svg"
                    class="position-absolute top-100 start-100 translate-middle ms-n5 mt-n5" alt="Pattern">
            </div>

            <div class="row justify-content-center position-relative zindex-2 py-lg-4">
                <div class="col-xl-8 col-lg-9 col-md-10 py-2">
                    <h2 class="h1 text-light text-center mt-n2 mt-lg-0 mb-4 mb-lg-5">Frequently Asked Questions</h2>
                    <div class="accordion" id="faq">

                        <!-- Item -->
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button shadow-none rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#q-1" aria-expanded="true"
                                    aria-controls="q-1">What if I don't have any professional background?</button>
                            </h3>
                            <div class="accordion-collapse collapse show" id="q-1" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu,
                                        viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis
                                        arcu velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie
                                        lorem scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod
                                        montes, duis egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut
                                        consequat.</p>
                                    <p>Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus et
                                        lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor
                                        vulputate. Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim
                                        amet adipiscing massa integer.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#q-2" aria-expanded="false"
                                    aria-controls="q-2">How is this different from other courses on the market?</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="q-2" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in facilisis nibh.
                                        Vestibulum ac porttitor sapien. Curabitur laoreet malesuada gravida. Phasellus
                                        vehicula vestibulum consequat. Curabitur feugiat eget sem vitae laoreet. Fusce
                                        porttitor finibus tellus, quis condimentum nibh. Vestibulum ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere cubilia curae; Vivamus vehicula malesuada
                                        magna at viverra. Fusce non est eget libero convallis fringilla suspendisse.</p>
                                    <p>Nunc dolor velit, interdum finibus bibendum vel, mattis a magna. Mauris mollis sapien
                                        ac mi aliquet varius. Proin nec est nibh. Dignissim amet adipiscing massa integer.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#q-3" aria-expanded="false"
                                    aria-controls="q-3">How much time does it take to do my homework per week? What if I
                                    don't like it?</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="q-3" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Suspendisse viverra volutpat eros. Curabitur in scelerisque lacus, quis fringilla
                                        sem. Nunc rutrum vel magna et ullamcorper. Sed consectetur augue vitae ligula
                                        consectetur, eu dapibus justo molestie. Phasellus sit amet metus magna. Sed
                                        tincidunt tempus felis vitae commodo. Etiam lobortis justo in elit pretium, sit amet
                                        aliquet tellus euismod. Curabitur in purus sed turpis aliquet pretium. Nunc ut magna
                                        tempus, iaculis sem id, vulputate ipsum. Etiam fermentum malesuada quam, in tempus
                                        purus pulvinar at. Vestibulum auctor congue pharetra. Class aptent taciti sociosqu
                                        ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla facilisi. Nunc
                                        dolor velit, interdum finibus bibendum vel, mattis a magna. Mauris mollis sapien ac
                                        mi aliquet varius. Proin nec est nibh. In hac habitasse platea dictumst. Nullam
                                        porta risus vitae lectus pellentesque interdum. Proin ac leo fermentum, volutpat
                                        odio ut, lacinia erat. Suspendisse potenti. Praesent vitae faucibus lectus. Sed
                                        tincidunt at ex id maximus. Morbi tristique ullamcorper velit, non cursus libero
                                        eleifend quis. Aliquam aliquam odio dui.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#q-4" aria-expanded="false"
                                    aria-controls="q-4">Is there any kind of certificate of completion?</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="q-4" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu,
                                        viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis
                                        arcu velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie
                                        lorem scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod
                                        montes, duis egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut
                                        consequat.</p>
                                    <p>Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus et
                                        lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor
                                        vulputate. Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim
                                        amet adipiscing massa integer.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#q-5" aria-expanded="false"
                                    aria-controls="q-5">YouTube is full of free tutorials, videos and courses. Why should I
                                    take any courses here?</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="q-5" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in facilisis nibh.
                                        Vestibulum ac porttitor sapien. Curabitur laoreet malesuada gravida. Phasellus
                                        vehicula vestibulum consequat. Curabitur feugiat eget sem vitae laoreet. Fusce
                                        porttitor finibus tellus, quis condimentum nibh. Vestibulum ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere cubilia curae; Vivamus vehicula malesuada
                                        magna at viverra. Fusce non est eget libero convallis fringilla suspendisse.</p>
                                    <p>Nunc dolor velit, interdum finibus bibendum vel, mattis a magna. Mauris mollis sapien
                                        ac mi aliquet varius. Proin nec est nibh. Dignissim amet adipiscing massa integer.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item border-0 rounded-3 shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#q-6" aria-expanded="false"
                                    aria-controls="q-6">What happens if I forget or lose my password?</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="q-6" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Suspendisse viverra volutpat eros. Curabitur in scelerisque lacus, quis fringilla
                                        sem. Nunc rutrum vel magna et ullamcorper. Sed consectetur augue vitae ligula
                                        consectetur, eu dapibus justo molestie. Phasellus sit amet metus magna. Sed
                                        tincidunt tempus felis vitae commodo. Etiam lobortis justo in elit pretium, sit amet
                                        aliquet tellus euismod. Curabitur in purus sed turpis aliquet pretium. Nunc ut magna
                                        tempus, iaculis sem id, vulputate ipsum. Etiam fermentum malesuada quam, in tempus
                                        purus pulvinar at. Vestibulum auctor congue pharetra. Class aptent taciti sociosqu
                                        ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla facilisi. Nunc
                                        dolor velit, interdum finibus bibendum vel, mattis a magna. Mauris mollis sapien ac
                                        mi aliquet varius. Proin nec est nibh. In hac habitasse platea dictumst. Nullam
                                        porta risus vitae lectus pellentesque interdum. Proin ac leo fermentum, volutpat
                                        odio ut, lacinia erat. Suspendisse potenti. Praesent vitae faucibus lectus. Sed
                                        tincidunt at ex id maximus. Morbi tristique ullamcorper velit, non cursus libero
                                        eleifend quis. Aliquam aliquam odio dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   
@endsection
