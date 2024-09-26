@extends('layouts.layout-main')
@section('main-content')
    <!-- Breadcrumb -->
    <nav class="container mt-lg-0 pt-0" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 pt-5">
            <li class="breadcrumb-item">
                <a href="#"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Agriculture News</li>
        </ol>
    </nav>


    <!-- Page content -->
    <section class="container mt-4 mb-lg-5 pt-lg-2 pb-5">

        <!-- Page title + Layout switcher -->
        <div class="d-flex align-items-center justify-content-between mb-4 pb-1 pb-md-3">
            <h1 class="mb-0">Agriculture News</h1>
            <div class="nav flex-nowrap ms-sm-4 ms-3">
            <a href="#" class="nav-link me-2 p-0" aria-label="List view">
                <i class="bx bx-list-ul fs-4"></i>
            </a>
            <a href="#" class="nav-link p-0 active" aria-label="Grid view">
                <i class="bx bx-grid-alt fs-4"></i>
            </a>
            </div>
        </div>


        <!-- Blog grid + Sidebar -->
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="pe-xl-5">
                    <div class="masonry-grid row row-cols-sm-2 row-cols-1 g-4">

                        <!-- Item -->
                        <div class="masonry-grid-item col pb-2 pb-lg-3">
                            <article class="card border-0 bg-transparent">
                                <div class="position-relative overflow-hidden rounded-3">
                                    <a href="#" class="position-absolute top-0 start-0 w-100 h-100"
                                        aria-label="Read more"></a>
                                    <a href="#"
                                        class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3"
                                        data-bs-toggle="tooltip" data-bs-placement="left" title="Read later"
                                        aria-label="Read later">
                                        <i class="bx bx-bookmark"></i>
                                    </a>
                                    <img src="assets/img/blog/05.jpg" alt="Image">
                                </div>
                                <div class="card-body pb-1 px-0">
                                    <a href="#"
                                        class="badge fs-sm text-white bg-info shadow-info text-decoration-none mb-3">Agriculture</a>
                                    <h3 class="h4">
                                        <a href="#">Sustainable Farming Practices for the Future</a>
                                    </h3>
                                    <p class="mb-4">Exploring innovative techniques in sustainable farming to ensure food security and environmental protection.</p>
                                    <div class="d-flex align-items-center text-muted">
                                        <div class="fs-sm border-end pe-3 me-3">Oct 9, 2023</div>
                                        <div class="d-flex align-items-center me-3">
                                            <i class="bx bx-like fs-lg me-1"></i>
                                            <span class="fs-sm">5</span>
                                        </div>
                                        <div class="d-flex align-items-center me-3">
                                            <i class="bx bx-comment fs-lg me-1"></i>
                                            <span class="fs-sm">0</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-share-alt fs-lg me-1"></i>
                                            <span class="fs-sm">2</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Item -->
                        <div class="masonry-grid-item col pb-2 pb-lg-3">
                            <article class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-3">
                                        <a href="#"
                                            class="badge fs-sm text-white bg-warning shadow-warning text-decoration-none">Agriculture</a>
                                        <a href="#"
                                            class="btn btn-icon btn-secondary btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3"
                                            data-bs-toggle="tooltip" data-bs-placement="left" title="Read later"
                                            aria-label="Read later">
                                            <i class="bx bx-bookmark"></i>
                                        </a>
                                    </div>
                                    <h3 class="h4">
                                        <a href="#">The Impact of Climate Change on Crop Yields</a>
                                    </h3>
                                    <p class="mb-3">Exploring how changing weather patterns are affecting crop production and what farmers can do to adapt.</p>
                                    <div class="d-flex align-items-center text-muted">
                                        <div class="fs-sm border-end pe-3 me-3">Sep 3, 2023</div>
                                        <div class="d-flex align-items-center me-3">
                                            <i class="bx bx-like fs-lg me-1"></i>
                                            <span class="fs-sm">8</span>
                                        </div>
                                        <div class="d-flex align-items-center me-3">
                                            <i class="bx bx-comment fs-lg me-1"></i>
                                            <span class="fs-sm">7</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-share-alt fs-lg me-1"></i>
                                            <span class="fs-sm">4</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Item -->
                        <div class="masonry-grid-item col pb-2 pb-lg-3">
                            <article class="card border-0 bg-transparent">
                                <div class="position-relative overflow-hidden rounded-3">
                                    <a href="#" class="position-absolute top-0 start-0 w-100 h-100"
                                        aria-label="Read more"></a>
                                    <a href="#"
                                        class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3"
                                        data-bs-toggle="tooltip" data-bs-placement="left" title="Read later"
                                        aria-label="Read later">
                                        <i class="bx bx-bookmark"></i>
                                    </a>
                                    <img src="assets/img/blog/02.jpg" alt="Image">
                                </div>
                                <div class="card-body pb-1 px-0">
                                    <a href="#"
                                        class="badge fs-sm text-white bg-danger shadow-danger text-decoration-none mb-3">Agriculture</a>
                                    <h3 class="h4">
                                        <a href="#">Innovations in Precision Farming</a>
                                    </h3>
                                    <p class="mb-4">How technology is revolutionizing farming practices, making them more efficient and sustainable.</p>
                                    <div class="d-flex align-items-center text-muted">
                                        <div class="fs-sm border-end pe-3 me-3">Aug 19, 2023</div>
                                        <div class="d-flex align-items-center me-3">
                                            <i class="bx bx-like fs-lg me-1"></i>
                                            <span class="fs-sm">5</span>
                                        </div>
                                        <div class="d-flex align-items-center me-3">
                                            <i class="bx bx-comment fs-lg me-1"></i>
                                            <span class="fs-sm">3</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-share-alt fs-lg me-1"></i>
                                            <span class="fs-sm">9</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Item -->
                        <div class="masonry-grid-item col pb-2 pb-lg-3">
                            <article class="card border-0 bg-transparent">
                                <div class="position-relative overflow-hidden rounded-3">
                                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
                                    <div
                                        class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 zindex-2">
                                        <a href="../external.html?link=https://www.youtube.com/watch?v=vTgKtoU--Z8"
                                            class="btn btn-video btn-icon btn-lg bg-white stretched-link"
                                            data-bs-toggle="video" aria-label="Play video">
                                            <i class="bx bx-play"></i>
                                        </a>
                                    </div>
                                    <a href="#"
                                        class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3"
                                        data-bs-toggle="tooltip" data-bs-placement="left" title="Read later"
                                        aria-label="Read later">
                                        <i class="bx bx-bookmark"></i>
                                    </a>
                                    <img src="assets/img/blog/01.jpg" alt="Image">
                                </div>
                                <div class="card-body pb-1 px-0">
                                    <a href="#"
                                        class="badge fs-sm text-white bg-success shadow-success text-decoration-none mb-3">Agriculture</a>
                                    <h3 class="h4">
                                        <a href="#">The Future of Vertical Farming</a>
                                    </h3>
                                    <p class="mb-4">Examining the potential of vertical farming to meet the food demands of a growing population.</p>
                                    <div class="d-flex align-items-center text-muted">
                                        <div class="fs-sm border-end pe-3 me-3">Aug 19, 2023</div>
                                        <div class="d-flex align-items-center me-3">
                                            <i class="bx bx-like fs-lg me-1"></i>
                                            <span class="fs-sm">5</span>
                                        </div>
                                        <div class="d-flex align-items-center me-3">
                                            <i class="bx bx-comment fs-lg me-1"></i>
                                            <span class="fs-sm">3</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-share-alt fs-lg me-1"></i>
                                            <span class="fs-sm">9</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Item -->
                        <div class="masonry-grid-item col pb-2 pb-lg-3">
                            <article class="card border-0 bg-transparent">
                                <div class="position-relative overflow-hidden rounded-3">
                                    <a href="#" class="position-absolute top-0 start-0 w-100 h-100"
                                        aria-label="Read more"></a>
                                    <a href="#"
                                        class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3"
                                        data-bs-toggle="tooltip" data-bs-placement="left" title="Read later"
                                        aria-label="Read later">
                                        <i class="bx bx-bookmark"></i>
                                    </a>
                                    <img src="assets/img/blog/03.jpg" alt="Image">
                                </div>
                                <div class="card-body pb-1 px-0">
                                    <a href="#"
                                        class="badge fs-sm text-white bg-info shadow-info text-decoration-none mb-3">Agriculture</a>
                                    <h3 class="h4">
                                        <a href="#">Organic Farming: Benefits and Challenges</a>
                                    </h3>
                                    <p class="mb-4">Discussing the advantages and obstacles of organic farming in today's agricultural landscape.</p>
                                    <div class="d-flex align-items-center text-muted">
                                        <div class="fs-sm border-end pe-3 me-3">Sep 16, 2023</div>
                                        <div class="d-flex align-items-center me-3">
                                            <i class="bx bx-like fs-lg me-1"></i>
                                            <span class="fs-sm">5</span>
                                        </div>
                                        <div class="d-flex align-items-center me-3">
                                            <i class="bx bx-comment fs-lg me-1"></i>
                                            <span class="fs-sm">7</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-share-alt fs-lg me-1"></i>
                                            <span class="fs-sm">4</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Item -->
                        <div class="masonry-grid-item col pb-2 pb-lg-3">
                            <article class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-3">
                                        <a href="#"
                                            class="badge fs-sm text-white bg-warning shadow-warning text-decoration-none">Agriculture</a>
                                        <a href="#"
                                            class="btn btn-icon btn-secondary btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3"
                                            data-bs-toggle="tooltip" data-bs-placement="left" title="Read later"
                                            aria-label="Read later">
                                            <i class="bx bx-bookmark"></i>
                                        </a>
                                    </div>
                                    <h3 class="h4">
                                        <a href="#">The Role of Drones in Modern Farming</a>
                                    </h3>
                                    <p class="mb-3">How drones are being used to monitor crops, manage fields, and improve agricultural efficiency.</p>
                                    <div class="d-flex align-items-center text-muted">
                                        <div class="fs-sm border-end pe-3 me-3">Sep 3, 2023</div>
                                        <div class="d-flex align-items-center me-3">
                                            <i class="bx bx-like fs-lg me-1"></i>
                                            <span class="fs-sm">0</span>
                                        </div>
                                        <div class="d-flex align-items-center me-3">
                                            <i class="bx bx-comment fs-lg me-1"></i>
                                            <span class="fs-sm">1</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-share-alt fs-lg me-1"></i>
                                            <span class="fs-sm">2</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- Load more button -->
                    <button type="button" class="btn btn-lg btn-outline-primary w-100 mt-4">
                        <i class="bx bx-down-arrow-alt fs-xl me-2"></i>
                        Show more
                    </button>
                </div>
            </div>


            <!-- Sidebar (Offcanvas below lg breakpoint) -->
            <aside class="col-xl-3 col-lg-4">
                <div class="offcanvas-lg offcanvas-end" id="blog-sidebar" tabindex="-1">

                    <!-- Header -->
                    <div class="offcanvas-header border-bottom">
                        <h3 class="offcanvas-title fs-lg">Sidebar</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            data-bs-target="#blog-sidebar" aria-label="Close"></button>
                    </div>

                    <!-- Body -->
                    <div class="offcanvas-body">

                        <!-- Search form -->
                        <form class="input-group mb-4">
                            <input type="text" placeholder="Search the blog..." class="form-control rounded pe-5">
                            <i
                                class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 fs-lg zindex-5"></i>
                        </form>

                        <!-- Categories -->
                        <div class="card card-body mb-4">
                            <h3 class="h5">Categories</h3>
                            <ul class="nav flex-column fs-sm">
                                <li class="nav-item mb-1">
                                    <a href="#" class="nav-link py-1 px-0 active">All topics <span
                                            class="fw-normal opacity-60 ms-1">(48)</span></a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="nav-link py-1 px-0">Crop Management <span
                                            class="fw-normal opacity-60 ms-1">(12)</span></a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="nav-link py-1 px-0">Sustainable Farming <span
                                            class="fw-normal opacity-60 ms-1">(5)</span></a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="nav-link py-1 px-0">Agricultural Technology <span
                                            class="fw-normal opacity-60 ms-1">(10)</span></a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="nav-link py-1 px-0">Livestock Management <span
                                            class="fw-normal opacity-60 ms-1">(9)</span></a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#" class="nav-link py-1 px-0">Market Trends <span
                                            class="fw-normal opacity-60 ms-1">(4)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link py-1 px-0">Policy &amp; Regulation <span
                                            class="fw-normal opacity-60 ms-1">(3)</span></a>
                                </li>
                            </ul>
                        </div>

                        <!-- Popular posts -->
                        <div class="card card-body border-0 position-relative mb-4">
                            <span
                                class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-primary opacity-10 rounded-3"></span>
                            <div class="position-relative zindex-2">
                                <h3 class="h5">Popular posts</h3>
                                <ul class="list-unstyled mb-0">
                                    <li class="border-bottom pb-3 mb-3">
                                        <h4 class="h6 mb-2">
                                            <a href="#">Top 5 Sustainable Farming Practices</a>
                                        </h4>
                                        <div class="d-flex align-items-center text-muted pt-1">
                                            <div class="fs-xs border-end pe-3 me-3">12 hours ago</div>
                                            <div class="d-flex align-items-center me-3">
                                                <i class="bx bx-like fs-base me-1"></i>
                                                <span class="fs-xs">8</span>
                                            </div>
                                            <div class="d-flex align-items-center me-3">
                                                <i class="bx bx-comment fs-base me-1"></i>
                                                <span class="fs-xs">4</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="bx bx-share-alt fs-base me-1"></i>
                                                <span class="fs-xs">2</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="border-bottom pb-3 mb-3">
                                        <h4 class="h6 mb-2">
                                            <a href="#">How Climate Change is Affecting Agriculture</a>
                                        </h4>
                                        <div class="d-flex align-items-center text-muted pt-1">
                                            <div class="fs-xs border-end pe-3 me-3">Oct 9, 2023</div>
                                            <div class="d-flex align-items-center me-3">
                                                <i class="bx bx-like fs-base me-1"></i>
                                                <span class="fs-xs">4</span>
                                            </div>
                                            <div class="d-flex align-items-center me-3">
                                                <i class="bx bx-comment fs-base me-1"></i>
                                                <span class="fs-xs">1</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="bx bx-share-alt fs-base me-1"></i>
                                                <span class="fs-xs">0</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h4 class="h6 mb-2">
                                            <a href="#">The Rise of Organic Farming</a>
                                        </h4>
                                        <div class="d-flex align-items-center text-muted pt-1">
                                            <div class="fs-xs border-end pe-3 me-3">Sep 13, 2023</div>
                                            <div class="d-flex align-items-center me-3">
                                                <i class="bx bx-like fs-base me-1"></i>
                                                <span class="fs-xs">5</span>
                                            </div>
                                            <div class="d-flex align-items-center me-3">
                                                <i class="bx bx-comment fs-base me-1"></i>
                                                <span class="fs-xs">2</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="bx bx-share-alt fs-base me-1"></i>
                                                <span class="fs-xs">4</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Tags -->
                        <div class="card card-body mb-4">
                            <h3 class="h5">Tags</h3>
                            <div class="d-flex flex-wrap">
                                <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#farming</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#agriculture</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#sustainability</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#technology</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#organic</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#crops</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#livestock</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#innovation</a>
                            </div>
                        </div>

                        <!-- Follow Us -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="mb-4">Follow Us</h5>
                                <a href="#" class="btn btn-icon btn-sm btn-secondary btn-linkedin me-2 mb-2"
                                    aria-label="LinkedIn">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-sm btn-secondary btn-facebook me-2 mb-2"
                                    aria-label="Facebook">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-sm btn-secondary btn-twitter me-2 mb-2"
                                    aria-label="Twitter">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-sm btn-secondary btn-instagram me-2 mb-2"
                                    aria-label="Instagram">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Advertising -->
                        <div class="card border-0 bg-faded-primary bg-repeat-0 bg-size-cover"
                            style="min-height: 25rem; background-image: url(assets/img/blog/banner.png);">
                            <div class="card-body">
                                <h5 class="h3 mb-4 pb-2 text-center">Ad Banner</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </section>
@endsection
