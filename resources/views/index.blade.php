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
                    <h1 class="display-3 mb-4">Learn <span class="text-primary">IT Online</span> with No Limits
                    </h1>
                    <p class="fs-lg mb-5">Enjoy our great selection of IT courses. Choose from more than 25K online
                        video courses and become an IT expert now!</p>

                    <!-- Desktop form -->
                    <form class="d-none d-sm-flex mb-5">
                        <a href="{{ url('register') }}" class="btn btn-primary w-100" rel="noopener">
                            <i class="bx bx-box fs-4 lh-1 me-1"></i> &nbsp;BROWSE OUR COURSES
                        </a>
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
                        <button type="submit" class="btn btn-icon btn-primary btn-lg w-100 d-sm-none">
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
                        <span class="fs-sm"><span class="text-primary fw-semibold">10K+</span> students are already
                            with us</span>
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
            <div class="col-lg-9 col-md-8">

                <!-- Title + prev/next buttons -->
                <div class="d-flex align-items-center justify-content-between pb-4 mb-3">
                    <h2 class="h1 mb-0 me-3">Popular Courses</h2>
                    <div class="d-flex">
                        <button type="button" id="popular-prev" class="btn btn-prev btn-icon btn-sm me-2">
                            <i class="bx bx-chevron-left"></i>
                        </button>
                        <button type="button" id="popular-next" class="btn btn-next btn-icon btn-sm ms-2">
                            <i class="bx bx-chevron-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Courses slider -->
                <div class="swiper swiper-nav-onhover mx-n2">
                    <div class="swiper-wrapper">

                        @foreach ($top_courses as $item)
                            <!-- Item -->
                            <div class="swiper-slide h-auto pb-3">
                                <article class="card h-100 border-0 shadow-sm mx-2">
                                    <div class="position-relative">
                                        <a href="portfolio-single-course.html"
                                            class="d-block position-absolute w-100 h-100 top-0 start-0"></a>
                                        <span
                                            class="badge bg-success position-absolute top-0 start-0 zindex-2 mt-3 ms-3">Best
                                            Seller</span>
                                        <a href="#"
                                            class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3"
                                            data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites">
                                            <i class="bx bx-bookmark"></i>
                                        </a>
                                        <img src="assets/img/portfolio/courses/01.jpg" class="card-img-top"
                                            alt="Image">
                                    </div>
                                    <div class="card-body pb-3">
                                        <h3 class="h5 mb-2">
                                            <a href="portfolio-single-course.html">{{ $item->name }}</a>
                                        </h3>
                                        <p class="fs-sm mb-2">By Albert Flores</p>
                                        <p class="fs-lg fw-semibold text-primary mb-0">$12.50</p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                                        <div class="d-flex align-items-center me-4">
                                            <i class="bx bx-time fs-xl me-1"></i> 220 hours
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-like fs-xl me-1"></i> 94% (4.2K)
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
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
@endsection
