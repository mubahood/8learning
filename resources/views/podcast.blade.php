@extends('layouts.layout-main')
@section('main-content')
    <!-- Breadcrumb -->
    <nav class="container pt-4 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="index-2.html"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="blog-grid-with-sidebar.html">Blog</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Podcast</li>
        </ol>
    </nav>


    <!-- Post title + Meta  -->
    <section class="container mt-4 mb-5 pt-2 pb-lg-5">
        <div class="row gy-4">
            <div class="col-lg-7 col-md-6">
                <img src="assets/img/blog/podcasts/06.jpg" alt="Cover" class="rounded-3">
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="ms-xl-5 ms-lg-4 ps-xxl-34">
                    <h3 class="h6 mb-2">
                        <svg class="me-2 mt-n1" xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                            fill="none">
                            <path
                                d="M20 12.5003v-1.707c0-4.44199-3.479-8.16099-7.755-8.28999-2.204-.051-4.251.736-5.816 2.256S4 8.31831 4 10.5003v2c-1.103 0-2 .897-2 2v4c0 1.103.897 2 2 2h2v-10c0-1.63699.646-3.16599 1.821-4.30599s2.735-1.739 4.363-1.691c3.208.096 5.816 2.918 5.816 6.28999v9.707h2c1.103 0 2-.897 2-2v-4c0-1.103-.897-2-2-2z"
                                fill="url(#A)" />
                            <path d="M7 12.5003h2v8H7v-8zm8 0h2v8h-2v-8z" fill="url(#A)" />
                            <defs>
                                <linearGradient id="A" x1="2" y1="11.5437" x2="22" y2="11.5437"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#6366f1" />
                                    <stop offset=".5" stop-color="#8b5cf6" />
                                    <stop offset="1" stop-color="#d946ef" />
                                </linearGradient>
                            </defs>
                        </svg>
                        Podcast
                    </h3>
                    <h1 class="display-5 pb-md-3">How to Choose a Fantastic SEO Agency</h1>
                    <div class="d-flex align-items-center flex-wrap text-muted mb-lg-5 mb-md-4 mb-3">
                        <div class="fs-xs border-end pe-3 me-3 mb-2">
                            <span class="badge bg-faded-primary text-primary fs-base">Startups</span>
                        </div>
                        <div class="fs-sm border-end pe-3 me-3 mb-2">10 hours ago</div>
                        <div class="d-flex mb-2">
                            <div class="d-flex align-items-center me-3">
                                <i class="bx bx-like fs-base me-1"></i>
                                <span class="fs-sm">18</span>
                            </div>
                            <div class="d-flex align-items-center me-3">
                                <i class="bx bx-comment fs-base me-1"></i>
                                <span class="fs-sm">4</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bx bx-share-alt fs-base me-1"></i>
                                <span class="fs-sm">2</span>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0 fs-lg">Massa massa sapien tristique cras enim. Diam at tempus tempus iaculis mattis et.
                        Platea facilisis cursus congue diam in amet. Velit urna cras leo viverra mauris aenean arcu, cursus.
                        Commodo rhoncus sit vulputate maecenas augue amet arcu libero. Lobortis enim, ut dui rutrum tempor
                        at rutrum aenean pharetra. Quis vulputate egestas sed arcu.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Post content -->
    <section class="container mb-5 pb-lg-5">
        <div class="row gy-md-5 gy-4">

            <!-- Author -->
            <div class="col-lg-3 col-md-4 order-md-2 position-relative">
                <div class="sticky-top ms-xxl-5 ps-lg-4" style="top: 105px !important;">
                    <div class="d-flex align-items-center position-relative mb-lg-5 mb-4">
                        <img src="assets/img/avatar/06.jpg" class="rounded-circle me-3" width="60" alt="Avatar">
                        <div>
                            <h4 class="h6 mb-1">Hosted by</h4>
                            <a href="#" class="fw-semibold stretched-link">Jenny Wilson</a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-lg btn-outline-secondary mb-3">
                        <i class="bx bx-like me-2 lead"></i>
                        Like it
                        <span class="badge bg-primary shadow-primary ms-3">8</span>
                    </button>
                </div>
            </div>

            <!-- Player + Timeline -->
            <div class="col-lg-9 col-md-8 order-md-1">
                <div class="card p-lg-4 p-md-2 mb-4 mb-lg-5">

                    <!-- Audio player -->
                    <div class="audio-player card-body p-2 p-sm-4">
                        <audio src="assets/audio/sample.wav" preload="auto"></audio>
                        <button type="button" class="ap-play-button btn btn-icon btn-primary shadow-primary"
                            aria-label="Play/pause"></button>
                        <span class="ap-current-time flex-shr fw-medium mx-3 mx-lg-4">0:00</span>
                        <input type="range" class="ap-seek-slider" max="100" value="0">
                        <span class="ap-duration flex-shr fw-medium mx-3 mx-lg-4">0:00</span>
                        <div class="dropup">
                            <button type="button" class="ap-volume-button btn btn-icon btn-secondary"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                                aria-expanded="false" aria-label="Volume">
                                <i class="bx bx-volume-full"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-dark my-1">
                                <input type="range" class="ap-volume-slider" max="100" value="100">
                            </div>
                        </div>
                        <a href="assets/audio/sample.wav" download="audio-sample" class="btn btn-icon btn-secondary ms-2"
                            aria-label="Download">
                            <i class="bx bx-download"></i>
                        </a>
                    </div>
                </div>
                <h3 class="h4 mb-4 pt-2 pt-md-0">Timeline</h3>
                <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-2">
                        <span class="flex-shrink-0 fw-medium text-nowrap me-2" style="width: 80px;">00:05:12</span>
                        Diam erat molestie duis auctor sit quis.
                    </li>
                    <li class="d-flex mb-2">
                        <span class="flex-shrink-0 fw-medium text-nowrap me-2 text-primary"
                            style="width: 80px;">00:28:19</span>
                        Non mi eget molestie pretium commodo urna duis facilisis turpis.
                    </li>
                    <li class="d-flex mb-2">
                        <span class="flex-shrink-0 fw-medium text-nowrap me-2" style="width: 80px;">00:45:37</span>
                        Sit placerat adipiscing interdum libero neque, aliquam nec imperdiet ullamcorper.
                    </li>
                    <li class="d-flex mb-2">
                        <span class="flex-shrink-0 fw-medium text-nowrap me-2" style="width: 80px;">00:56:04</span>
                        Pulvinar eu porttitor nulla morbi varius tristique leo.
                    </li>
                    <li class="d-flex mb-2">
                        <span class="flex-shrink-0 fw-medium text-nowrap me-2" style="width: 80px;">01:32:17</span>
                        Cras et gravida iaculis vel at quis euismod.
                    </li>
                    <li class="d-flex mb-2">
                        <span class="flex-shrink-0 fw-medium text-nowrap me-2" style="width: 80px;">01:50:43</span>
                        Volutpat malesuada nulla lectus justo tempus est sollicitudin.
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <!-- Post comments -->
    <section class="container mb-4 pb-lg-3">
        <h2 class="h1">4 comments</h2>
        <div class="row">

            <!-- Comments -->
            <div class="col-lg-9">

                <!-- Comment -->
                <div class="py-4">
                    <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                        <div class="d-flex align-items-center me-3">
                            <img src="assets/img/avatar/03.jpg" class="rounded-circle" width="48" alt="Avatar">
                            <div class="ps-3">
                                <h6 class="fw-semibold mb-0">Esther Howard</h6>
                                <span class="fs-sm text-muted">4 mins ago</span>
                            </div>
                        </div>
                        <a href="#" class="nav-link fs-sm px-0">
                            <i class="bx bx-share fs-lg me-2"></i>
                            Reply
                        </a>
                    </div>
                    <p class="mb-0">Nibh enim porta ut augue felis, donec sit luctus. Quis ullamcorper dolor sit mauris.
                        Hendrerit eu libero, eu tristique sodales ultrices etiam adipiscing. Donec viverra sodales arcu
                        gravida nibh at. Neque lobortis quis porta integer et placerat lectus scelerisque. Velit eget
                        malesuada morbi faucibus at sed euismod. Tortor, eu ut id tincidunt leo placerat luctus.</p>
                </div>

                <hr class="my-2">

                <!-- Comment -->
                <div class="py-4">
                    <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                        <div class="d-flex align-items-center me-3">
                            <img src="assets/img/avatar/02.jpg" class="rounded-circle" width="48" alt="Avatar">
                            <div class="ps-3">
                                <h6 class="fw-semibold mb-0">Ralph Edwards</h6>
                                <span class="fs-sm text-muted">September 9 at 12:48</span>
                            </div>
                        </div>
                        <a href="#" class="nav-link fs-sm px-0">
                            <i class="bx bx-share fs-lg me-2"></i>
                            Reply
                        </a>
                    </div>
                    <p class="mb-0 pb-2">Eget amet, ac scelerisque tellus sed. Sapien duis sit neque pulvinar. Est sit
                        aenean nisl etiam donec mattis ut diam. Luctus massa eu nunc aliquam viverra tempus, eu amet,
                        luctus. Ac faucibus vestibulum eu lacus. Ullamcorper sem ultrices tincidunt pharetra?</p>

                    <!-- Comment reply -->
                    <div class="position-relative ps-4 mt-4">
                        <span class="position-absolute top-0 start-0 w-1 h-100 bg-primary"></span>
                        <div class="d-flex align-items-center justify-content-between ps-3 pb-2 mb-1">
                            <div class="d-flex align-items-center me-3">
                                <img src="assets/img/avatar/05.jpg" class="rounded-circle" width="48"
                                    alt="Avatar">
                                <div class="ps-3">
                                    <h6 class="fw-semibold mb-0">Albert Flores</h6>
                                    <span class="fs-sm text-muted">16 hours ago</span>
                                </div>
                            </div>
                            <a href="#" class="nav-link fs-sm px-0">
                                <i class="bx bx-share fs-lg me-2"></i>
                                Reply
                            </a>
                        </div>
                        <p class="ps-3 mb-0"><a href="#" class="fw-semibold text-decoration-none">@Ralph
                                Edwards</a> Vulputate malesuada amet, consequat ullamcorper. Orci, cras maecenas in sit
                            purus pellentesque. Ridiculus blandit pellentesque eget arcu morbi nisl. Morbi volutpat
                            adipiscing sapien sed ut tempor.</p>
                    </div>
                </div>

                <hr class="my-2">

                <!-- Comment -->
                <div class="py-4">
                    <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                        <div class="d-flex align-items-center me-3">
                            <img src="assets/img/avatar/07.jpg" class="rounded-circle" width="48" alt="Avatar">
                            <div class="ps-3">
                                <h6 class="fw-semibold mb-0">Cameron Williamson</h6>
                                <span class="fs-sm text-muted">March 24 at 8:20</span>
                            </div>
                        </div>
                        <a href="#" class="nav-link fs-sm px-0">
                            <i class="bx bx-share fs-lg me-2"></i>
                            Reply
                        </a>
                    </div>
                    <p class="mb-0">Mattis id ut sed arcu metus elit faucibus condimentum aliquam. Nam adipiscing diam et
                        suspendisse. Sagittis massa maecenas laoreet nulla amet nunc sagittis, pulvinar neque. Duis
                        imperdiet ipsum suspendisse massa lectus habitasse. Id ante volutpat hendrerit augue parturient
                        eget. Ac vitae posuere leo morbi vitae at hac lectus. Nibh neque quam quis amet mattis sit. Faucibus
                        risus at sit tempus ut.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Comment form + Subscription -->
    <section class="container mb-4 pb-2 mb-md-5 pb-lg-5">
        <div class="row gy-5">

            <!-- Comment form -->
            <div class="col-lg-9">
                <div class="card p-md-5 p-4 border-0 bg-secondary">
                    <div class="card-body w-100 mx-auto px-0" style="max-width: 746px;">
                        <h2 class="mb-4 pb-3">Leave a Comment</h2>
                        <form class="row gy-4 needs-validation" novalidate>
                            <div class="col-sm-6 col-12">
                                <label for="c-name" class="form-label fs-base">Name</label>
                                <input id="c-name" type="text" class="form-control form-control-lg" required>
                                <span class="invalid-tooltip">Please, enter your name.</span>
                            </div>
                            <div class="col-sm-6 col-12">
                                <label for="c-email" class="form-label fs-base">Email</label>
                                <input id="c-email" type="email" class="form-control form-control-lg" required>
                                <span class="invalid-tooltip">Please, provide a valid email address.</span>
                            </div>
                            <div class="col-12">
                                <label for="c-comment" class="form-label fs-base">Comment</label>
                                <textarea id="c-comment" class="form-control form-control-lg" rows="3" placeholder="Type your comment here..."
                                    required></textarea>
                                <span class="invalid-tooltip">Please, enter your comment.</span>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input id="c-save" type="checkbox" class="form-check-input">
                                    <label for="c-save" class="form-check-label">Save my name and email in this browser
                                        for the next time I comment.</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-lg btn-primary w-sm-auto w-100 mt-2">Post
                                    comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Subscription form + Sharing -->
            <div class="col-lg-3 position-relative">
                <div class="sticky-top ms-xl-5 ms-lg-4 ps-xxl-4" style="top: 70px !important;">
                    <div class="row gy-lg-5 gy-4 justify-content-center text-lg-start text-center">

                        <!-- Subscription form -->
                        <div class="col-lg-12 col-sm-7 col-11">
                            <h6 class="fs-lg">Enjoy this post? Join our newsletter</h6>
                            <form class="needs-validation" novalidate>
                                <div class="input-group mb-3">
                                    <i
                                        class="bx bx-envelope position-absolute start-0 top-50 translate-middle-y zindex-5 ms-3 text-muted d-lg-inline-block d-none"></i>
                                    <input type="email" placeholder="Your Email"
                                        class="form-control ps-lg-5 rounded text-lg-start text-center" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                            </form>
                        </div>

                        <!-- Sharing -->
                        <div class="col-lg-12 col-sm-7 col-11">
                            <h6 class="fs-lg">Don't forget to share it</h6>
                            <div class="mb-4 pb-lg-3">
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin me-2 mb-2"
                                    aria-label="LinkedIn">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook me-2 mb-2"
                                    aria-label="Facebook">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter me-2 mb-2"
                                    aria-label="Twitter">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-instagram me-2 mb-2"
                                    aria-label="Instagram">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Related podcasts (Slider below xl breakpoint) -->
    <section class="container mb-5 pt-md-4">
        <div class="d-flex flex-sm-row flex-column align-items-center justify-content-between mb-4 pb-1 pb-md-3">
            <h2 class="h1 mb-sm-0">Related Podcasts</h2>
            <a href="blog-grid-with-sidebar.html" class="btn btn-lg btn-outline-primary ms-4">
                All podcasts
                <i class="bx bx-right-arrow-alt ms-1 me-n1 lh-1 lead"></i>
            </a>
        </div>

        <!-- Carousel -->
        <div class="swiper"
            data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 24,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 2
            },
            "768": {
              "slidesPerView": 3
            },
            "1000": {
              "slidesPerView": 3
            },
            "1200": {
              "slidesPerView": 4
            }
          }
        }'>
            <div class="swiper-wrapper">

                <!-- Item -->
                <div class="swiper-slide h-auto pb-3">
                    <article>
                        <div class="d-block position-relative rounded-3 mb-3">
                            <a href="#"
                                class="btn btn-icon btn-light bg-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3"
                                data-bs-toggle="tooltip" data-bs-placement="left" title="Listen later"
                                aria-label="Listen later">
                                <i class="bx bx-bookmark"></i>
                            </a>
                            <img src="assets/img/avatar/06.jpg"
                                class="position-absolute top-0 start-0 rounded-circle zindex-2 mt-3 ms-3" width="48"
                                alt="Avatar">
                            <span class="badge bg-dark position-absolute bottom-0 end-0 zindex-2 mb-3 me-3">0:25:43</span>
                            <a href="blog-podcast.html"
                                class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"
                                aria-label="Listen podcast"></a>
                            <img src="assets/img/blog/podcasts/04.jpg" class="rounded-3" alt="Image">
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Digital</a>
                            <span class="fs-sm text-muted border-start ps-3 ms-3">2 hours ago</span>
                        </div>
                        <h3 class="h5">
                            <a href="blog-podcast.html">IOS and the Changing landscape of Data Privacy</a>
                        </h3>
                        <div class="d-flex align-items-center text-muted">
                            <div class="d-flex align-items-center me-3">
                                <i class="bx bx-like fs-lg me-1"></i>
                                <span class="fs-sm">4</span>
                            </div>
                            <div class="d-flex align-items-center me-3">
                                <i class="bx bx-comment fs-lg me-1"></i>
                                <span class="fs-sm">2</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bx bx-share-alt fs-lg me-1"></i>
                                <span class="fs-sm">0</span>
                            </div>
                        </div>
                        <a href="blog-podcast.html" class="btn btn-link px-0 mt-3">
                            <i class="bx bx-play-circle fs-lg me-2"></i>
                            Listen now
                        </a>
                    </article>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto pb-3">
                    <article>
                        <div class="d-block position-relative rounded-3 mb-3">
                            <a href="#"
                                class="btn btn-icon btn-light bg-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3"
                                data-bs-toggle="tooltip" data-bs-placement="left" title="Listen later"
                                aria-label="Listen later">
                                <i class="bx bx-bookmark"></i>
                            </a>
                            <img src="assets/img/avatar/05.jpg"
                                class="position-absolute top-0 start-0 rounded-circle zindex-2 mt-3 ms-3" width="48"
                                alt="Avatar">
                            <span class="badge bg-dark position-absolute bottom-0 end-0 zindex-2 mb-3 me-3">1:12:05</span>
                            <a href="blog-podcast.html"
                                class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"
                                aria-label="Listen podcast"></a>
                            <img src="assets/img/blog/podcasts/05.jpg" class="rounded-3" alt="Image">
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Processes
                                &amp; Tools</a>
                            <span class="fs-sm text-muted border-start ps-3 ms-3">10 hours ago</span>
                        </div>
                        <h3 class="h5">
                            <a href="blog-podcast.html">Behavioral Science and Digital Marketing</a>
                        </h3>
                        <div class="d-flex align-items-center text-muted">
                            <div class="d-flex align-items-center me-3">
                                <i class="bx bx-like fs-lg me-1"></i>
                                <span class="fs-sm">9</span>
                            </div>
                            <div class="d-flex align-items-center me-3">
                                <i class="bx bx-comment fs-lg me-1"></i>
                                <span class="fs-sm">5</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bx bx-share-alt fs-lg me-1"></i>
                                <span class="fs-sm">6</span>
                            </div>
                        </div>
                        <a href="blog-podcast.html" class="btn btn-link px-0 mt-3">
                            <i class="bx bx-play-circle fs-lg me-2"></i>
                            Listen now
                        </a>
                    </article>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto pb-3">
                    <article>
                        <div class="d-block position-relative rounded-3 mb-3">
                            <a href="#"
                                class="btn btn-icon btn-light bg-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3"
                                data-bs-toggle="tooltip" data-bs-placement="left" title="Listen later"
                                aria-label="Listen later">
                                <i class="bx bx-bookmark"></i>
                            </a>
                            <img src="assets/img/avatar/01.jpg"
                                class="position-absolute top-0 start-0 rounded-circle zindex-2 mt-3 ms-3" width="48"
                                alt="Avatar">
                            <span class="badge bg-dark position-absolute bottom-0 end-0 zindex-2 mb-3 me-3">0:32:15</span>
                            <a href="blog-podcast.html"
                                class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"
                                aria-label="Listen podcast"></a>
                            <img src="assets/img/blog/podcasts/02.jpg" class="rounded-3" alt="Image">
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <a href="#"
                                class="badge fs-sm text-nav bg-secondary text-decoration-none">Technology</a>
                            <span class="fs-sm text-muted border-start ps-3 ms-3">10 hours ago</span>
                        </div>
                        <h3 class="h5">
                            <a href="blog-podcast.html">Why You Should Care About Your Competitors</a>
                        </h3>
                        <div class="d-flex align-items-center text-muted">
                            <div class="d-flex align-items-center me-3">
                                <i class="bx bx-like fs-lg me-1"></i>
                                <span class="fs-sm">45</span>
                            </div>
                            <div class="d-flex align-items-center me-3">
                                <i class="bx bx-comment fs-lg me-1"></i>
                                <span class="fs-sm">12</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bx bx-share-alt fs-lg me-1"></i>
                                <span class="fs-sm">6</span>
                            </div>
                        </div>
                        <a href="blog-podcast.html" class="btn btn-link px-0 mt-3">
                            <i class="bx bx-play-circle fs-lg me-2"></i>
                            Listen now
                        </a>
                    </article>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto pb-3">
                    <article>
                        <div class="d-block position-relative rounded-3 mb-3">
                            <a href="#"
                                class="btn btn-icon btn-light bg-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3"
                                data-bs-toggle="tooltip" data-bs-placement="left" title="Listen later"
                                aria-label="Listen later">
                                <i class="bx bx-bookmark"></i>
                            </a>
                            <img src="assets/img/avatar/04.jpg"
                                class="position-absolute top-0 start-0 rounded-circle zindex-2 mt-3 ms-3" width="48"
                                alt="Avatar">
                            <span class="badge bg-dark position-absolute bottom-0 end-0 zindex-2 mb-3 me-3">0:48:02</span>
                            <a href="blog-podcast.html"
                                class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"
                                aria-label="Listen podcast"></a>
                            <img src="assets/img/blog/podcasts/03.jpg" class="rounded-3" alt="Image">
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Marketing</a>
                            <span class="fs-sm text-muted border-start ps-3 ms-3">1 day ago</span>
                        </div>
                        <h3 class="h5">
                            <a href="blog-podcast.html">Tips for Marketing Managers: How to Maximise Leads</a>
                        </h3>
                        <div class="d-flex align-items-center text-muted">
                            <div class="d-flex align-items-center me-3">
                                <i class="bx bx-like fs-lg me-1"></i>
                                <span class="fs-sm">10</span>
                            </div>
                            <div class="d-flex align-items-center me-3">
                                <i class="bx bx-comment fs-lg me-1"></i>
                                <span class="fs-sm">4</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bx bx-share-alt fs-lg me-1"></i>
                                <span class="fs-sm">6</span>
                            </div>
                        </div>
                        <a href="blog-podcast.html" class="btn btn-link px-0 mt-3">
                            <i class="bx bx-play-circle fs-lg me-2"></i>
                            Listen now
                        </a>
                    </article>
                </div>
            </div>

            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
        </div>
    </section>
@endsection
