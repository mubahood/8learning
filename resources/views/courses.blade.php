@extends('layouts.layout-main')
@section('main-content')

  <!-- Page content -->
  <section class="container">


    <!-- Breadcrumb -->
    <nav class="pt-4 mt-lg-3" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a href="landing-online-courses.html"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Courses</li>
      </ol>
    </nav>


    <!-- Page title + Filters -->
    <div class="d-lg-flex align-items-center justify-content-between py-4 mt-lg-2">
      <h1 class="me-3">Courses</h1>
      <div class="d-md-flex mb-3">
        <select class="form-select me-md-4 mb-2 mb-md-0" style="min-width: 240px;">
          <option value="All">All categories</option>
          <option value="Web Development">Web Development</option>
          <option value="Mobile Development">Mobile Development</option>
          <option value="Programming">Programming</option>
          <option value="Game Development">Game Development</option>
          <option value="Software Testing">Software Testing</option>
          <option value="Software Engineering">Software Engineering</option>
          <option value="Network & Security">Network &amp; Security</option>
        </select>
        <div class="position-relative" style="min-width: 300px;">
          <input type="text" class="form-control pe-5" placeholder="Search courses">
          <i class="bx bx-search text-nav fs-lg position-absolute top-50 end-0 translate-middle-y me-3"></i>
        </div>
      </div>
    </div>


    <!-- Courses grid -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-3 gx-md-4 mt-n2 mt-sm-0">

      <!-- Item -->
      <div class="col pb-1 pb-lg-3 mb-4">
        <article class="card h-100 border-0 shadow-sm">
          <div class="position-relative">
            <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0" aria-label="Course link"></a>
            <span class="badge bg-success position-absolute top-0 start-0 zindex-2 mt-3 ms-3">Best Seller</span>
            <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites" aria-label="Save to Favorites">
              <i class="bx bx-bookmark"></i>
            </a>
            <img src="assets/img/portfolio/courses/01.jpg" class="card-img-top" alt="Image">
          </div>
          <div class="card-body pb-3">
            <h3 class="h5 mb-2">
              <a href="portfolio-single-course.html">Fullstack Web Developer Course from Scratch</a>
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
      <div class="col pb-1 pb-lg-3 mb-4">
        <article class="card h-100 border-0 shadow-sm">
          <div class="position-relative">
            <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0" aria-label="Course link"></a>
            <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites" aria-label="Save to Favorites">
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
      <div class="col pb-1 pb-lg-3 mb-4">
        <article class="card h-100 border-0 shadow-sm">
          <div class="position-relative">
            <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0" aria-label="Course link"></a>
            <span class="badge bg-danger position-absolute top-0 start-0 zindex-2 mt-3 ms-3">Sale!</span>
            <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites" aria-label="Save to Favorites">
              <i class="bx bx-bookmark"></i>
            </a>
            <img src="assets/img/portfolio/courses/03.jpg" class="card-img-top" alt="Image">
          </div>
          <div class="card-body pb-3">
            <h3 class="h5 mb-2">
              <a href="portfolio-single-course.html">HTML, CSS, JavaScript Web Developer</a>
            </h3>
            <p class="fs-sm mb-2">By Robert Fox</p>
            <p class="text-muted mb-0"><span class="fs-lg fw-semibold text-danger me-2">FREE</span><del>FREE</del></p>
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
      <div class="col pb-1 pb-lg-3 mb-4">
        <article class="card h-100 border-0 shadow-sm">
          <div class="position-relative">
            <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0" aria-label="Course link"></a>
            <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites" aria-label="Save to Favorites">
              <i class="bx bx-bookmark"></i>
            </a>
            <img src="assets/img/portfolio/courses/04.jpg" class="card-img-top" alt="Image">
          </div>
          <div class="card-body pb-3">
            <h3 class="h5 mb-2">
              <a href="portfolio-single-course.html">iOS &amp; Swift - The Complete iOS App Development Course</a>
            </h3>
            <p class="fs-sm mb-2">By Marvin McKinney</p>
            <p class="fs-lg fw-semibold text-primary mb-0">FREE</p>
          </div>
          <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
            <div class="d-flex align-items-center me-4">
              <i class="bx bx-time fs-xl me-1"></i>
              170 hours
            </div>
            <div class="d-flex align-items-center">
              <i class="bx bx-like fs-xl me-1"></i>
              95% (3.3K)
            </div>
          </div>
        </article>
      </div>

      <!-- Item -->
      <div class="col pb-1 pb-lg-3 mb-4">
        <article class="card h-100 border-0 shadow-sm">
          <div class="position-relative">
            <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0" aria-label="Course link"></a>
            <span class="badge bg-success position-absolute top-0 start-0 zindex-2 mt-3 ms-3">Best Seller</span>
            <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites" aria-label="Save to Favorites">
              <i class="bx bx-bookmark"></i>
            </a>
            <img src="assets/img/portfolio/courses/05.jpg" class="card-img-top" alt="Image">
          </div>
          <div class="card-body pb-3">
            <h3 class="h5 mb-2">
              <a href="portfolio-single-course.html">Data Science &amp; Machine Learning with Python</a>
            </h3>
            <p class="fs-sm mb-2">By Esther Howard</p>
            <p class="fs-lg fw-semibold text-primary mb-0">FREE</p>
          </div>
          <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
            <div class="d-flex align-items-center me-4">
              <i class="bx bx-time fs-xl me-1"></i>
              150 hours
            </div>
            <div class="d-flex align-items-center">
              <i class="bx bx-like fs-xl me-1"></i>
              96% (3.8K)
            </div>
          </div>
        </article>
      </div>

      <!-- Item -->
      <div class="col pb-1 pb-lg-3 mb-4">
        <article class="card h-100 border-0 shadow-sm">
          <div class="position-relative">
            <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0" aria-label="Course link"></a>
            <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites" aria-label="Save to Favorites">
              <i class="bx bx-bookmark"></i>
            </a>
            <img src="assets/img/portfolio/courses/06.jpg" class="card-img-top" alt="Image">
          </div>
          <div class="card-body pb-3">
            <h3 class="h5 mb-2">
              <a href="portfolio-single-course.html">Creative CSS Drawing Course: Make Art With CSS</a>
            </h3>
            <p class="fs-sm mb-2">By Robert Fox</p>
            <p class="fs-lg fw-semibold text-primary mb-0">FREE</p>
          </div>
          <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
            <div class="d-flex align-items-center me-4">
              <i class="bx bx-time fs-xl me-1"></i>
              110 hours
            </div>
            <div class="d-flex align-items-center">
              <i class="bx bx-like fs-xl me-1"></i>
              92% (5.3K)
            </div>
          </div>
        </article>
      </div>

      <!-- Item -->
      <div class="col pb-1 pb-lg-3 mb-4">
        <article class="card h-100 border-0 shadow-sm">
          <div class="position-relative">
            <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0" aria-label="Course link"></a>
            <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites" aria-label="Save to Favorites">
              <i class="bx bx-bookmark"></i>
            </a>
            <img src="assets/img/portfolio/courses/07.jpg" class="card-img-top" alt="Image">
          </div>
          <div class="card-body pb-3">
            <h3 class="h5 mb-2">
              <a href="portfolio-single-course.html">Blender Character Creator v2.0 for Video Games Design</a>
            </h3>
            <p class="fs-sm mb-2">By Ralph Edwards</p>
            <p class="fs-lg fw-semibold text-primary mb-0">FREE</p>
          </div>
          <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
            <div class="d-flex align-items-center me-4">
              <i class="bx bx-time fs-xl me-1"></i>
              160 hours
            </div>
            <div class="d-flex align-items-center">
              <i class="bx bx-like fs-xl me-1"></i>
              93% (4.5K)
            </div>
          </div>
        </article>
      </div>

      <!-- Item -->
      <div class="col pb-1 pb-lg-3 mb-4">
        <article class="card h-100 border-0 shadow-sm">
          <div class="position-relative">
            <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0" aria-label="Course link"></a>
            <span class="badge bg-danger position-absolute top-0 start-0 zindex-2 mt-3 ms-3">Sale!</span>
            <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites" aria-label="Save to Favorites">
              <i class="bx bx-bookmark"></i>
            </a>
            <img src="assets/img/portfolio/courses/08.jpg" class="card-img-top" alt="Image">
          </div>
          <div class="card-body pb-3">
            <h3 class="h5 mb-2">
              <a href="portfolio-single-course.html">The Ultimate Guide to 2D Mobile Game Development with Unity</a>
            </h3>
            <p class="fs-sm mb-2">By Albert Flores</p>
            <p class="text-muted mb-0"><span class="fs-lg fw-semibold text-danger me-2">FREE</span><del>FREE</del></p>
          </div>
          <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
            <div class="d-flex align-items-center me-4">
              <i class="bx bx-time fs-xl me-1"></i>
              230 hours
            </div>
            <div class="d-flex align-items-center">
              <i class="bx bx-like fs-xl me-1"></i>
              97% (4.1K)
            </div>
          </div>
        </article>
      </div>

      <!-- Item -->
      <div class="col pb-1 pb-lg-3 mb-4 d-sm-none d-lg-block">
        <article class="card h-100 border-0 shadow-sm">
          <div class="position-relative">
            <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0" aria-label="Course link"></a>
            <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites" aria-label="Save to Favorites">
              <i class="bx bx-bookmark"></i>
            </a>
            <img src="assets/img/portfolio/courses/09.jpg" class="card-img-top" alt="Image">
          </div>
          <div class="card-body pb-3">
            <h3 class="h5 mb-2">
              <a href="portfolio-single-course.html">Learn JMETER from Scratch on Live Apps-Performance Testing</a>
            </h3>
            <p class="fs-sm mb-2">By Jenny Wilson</p>
            <p class="fs-lg fw-semibold text-primary mb-0">FREE</p>
          </div>
          <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
            <div class="d-flex align-items-center me-4">
              <i class="bx bx-time fs-xl me-1"></i>
              120 hours
            </div>
            <div class="d-flex align-items-center">
              <i class="bx bx-like fs-xl me-1"></i>
              92% (3.8K)
            </div>
          </div>
        </article>
      </div>
    </div>

    <!-- Pagination: Basic example -->
    <nav class="pb-5" aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a href="#" class="page-link">
            <i class="bx bx-chevron-left ms-n1 me-1"></i>
            Prev
          </a>
        </li>
        <li class="page-item disabled d-sm-none">
          <span class="page-link text-body">1 / 4</span>
        </li>
        <li class="page-item active d-none d-sm-block" aria-current="page">
          <span class="page-link">
            1
            <span class="visually-hidden">(current)</span>
          </span>
        </li>
        <li class="page-item d-none d-sm-block">
          <a href="#" class="page-link">2</a>
        </li>
        <li class="page-item d-none d-sm-block">
          <a href="#" class="page-link">3</a>
        </li>
        <li class="page-item d-none d-sm-block">
          <a href="#" class="page-link">4</a>
        </li>
        <li class="page-item">
          <a href="#" class="page-link">
            Next
            <i class="bx bx-chevron-right me-n1 ms-1"></i>
          </a>
        </li>
      </ul>
    </nav>


    <!-- Sign up CTA -->
    <div class="bg-secondary rounded-3 my-2 my-md-4 my-lg-5 py-5 px-3 px-md-0">
      <div class="row align-items-center">
        <div class="col-md-5 offset-lg-1 text-center text-md-start ps-md-5 ps-lg-0 ps-xl-5 pb-2 pb-md-0 mb-4 mb-md-0">
          <p class="lead mb-3">Ready to get started?</p>
          <h2 class="h1 pb-2 pb-md-4">Take Your <span class="text-primary">Skills</span> to the Next Level</h2>
          <a href="#" class="btn btn-primary btn-lg">Sign up now!</a>
        </div>
        <div class="col-lg-6 col-md-7">
          <div class="d-table mx-auto">
            <img src="assets/img/landing/online-courses/steps/04-dark.svg" class="d-dark-mode-none" width="380" alt="Illustration">
            <img src="assets/img/landing/online-courses/steps/04-light.svg" class="d-none d-dark-mode-block" width="380" alt="Illustration">
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
