@extends('layouts.layout-main')
@section('main-content')
    <section class="position-relative pt-0 py-lg-0 mt-0 mt-md-0">

        <!-- Swiper tabs (Project images) -->
        <div class="swiper-tabs position-md-absolute top-0 end-0 w-md-50 h-100">
            <div id="project-1"
                class="swiper-tab position-md-absolute w-100 h-100 bg-position-center bg-repeat-0 bg-size-cover active"
                style="background-image: url(assets/img/portfolio/slider/01.jpg);">
                <div class="ratio ratio-1x1"></div>
            </div>
            <div id="project-2"
                class="swiper-tab position-md-absolute w-100 h-100 bg-position-center bg-repeat-0 bg-size-cover"
                style="background-image: url(assets/img/portfolio/slider/02.jpg);">
                <div class="ratio ratio-1x1"></div>
            </div>
            <div id="project-3"
                class="swiper-tab position-md-absolute w-100 h-100 bg-position-center bg-repeat-0 bg-size-cover"
                style="background-image: url(assets/img/portfolio/slider/03.jpg);">
                <div class="ratio ratio-1x1"></div>
            </div>
        </div>


        <div class="container pt-1 pt-lg-2">
            <div class="row">
                <div class="col-lg-5 col-md-6">

                    <!-- Breadcrumb -->
                    <nav class="d-none d-md-block pt-4 mt-lg-3" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index-2.html"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Portfolio Slider View</li>
                        </ol>
                    </nav>

                    <!-- Project description (Slider) -->
                    <div class="d-none d-lg-block" style="height: 160px;"></div>
                    <div class="d-none d-md-block d-lg-none" style="height: 80px;"></div>
                    <div class="swiper pt-4 pt-md-0"
                        data-swiper-options='{
            "spaceBetween": 30,
            "loop": true,
            "tabs": true,
            "pagination": {
              "el": ".swiper-pagination",
              "type": "fraction"
            },
            "navigation": {
              "prevEl": ".btn-prev",
              "nextEl": ".btn-next"
            }
          }'>
                        <div class="swiper-wrapper">

                            <!-- Item -->
                            <div class="swiper-slide" data-swiper-tab="#project-1">
                                <h2 class="h1 mb-4">3D Shape Illustration</h2>
                                <p class="pb-3 mb-3">Proin odio elit fringilla pellentesque erat sapien, cursus id. Sed mi
                                    semper amet fringilla. Eget morbi arcu ac vestibulum sodales. Montes, integer lacinia
                                    amet tristique tincidunt.</p>
                                <table class="mb-5">
                                    <tbody>
                                        <tr>
                                            <th class="text-dark fw-bold pb-2" scope="row">Client</th>
                                            <td class="ps-3 ps-sm-4 pb-2">Createx Inc.</td>
                                        </tr>
                                        <tr>
                                            <th class="text-dark fw-bold pb-2" scope="row">Category</th>
                                            <td class="ps-3 ps-sm-4 pb-2">Graphic Design</td>
                                        </tr>
                                        <tr>
                                            <th class="text-dark fw-bold pb-2" scope="row">Date</th>
                                            <td class="ps-3 ps-sm-4 pb-2">29 November 2023</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="portfolio-single-project.html" class="btn btn-primary shadow-primary mt-n2">Read
                                    more</a>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide" data-swiper-tab="#project-2">
                                <h2 class="h1 mb-4">Scene of Human Head</h2>
                                <p class="pb-3 mb-3">Sed vehicula nibh quis ipsum gravida, sit amet convallis est sodales.
                                    Integer pulvinar suscipit ipsum, sed facilisis libero vehicula semper. Donec vitae dolor
                                    fermentum lorem pretium condimentum.</p>
                                <table class="mb-5">
                                    <tbody>
                                        <tr>
                                            <th class="text-dark fw-bold pb-2" scope="row">Client</th>
                                            <td class="ps-3 ps-sm-4 pb-2">Lorem Ipsum Ltd.</td>
                                        </tr>
                                        <tr>
                                            <th class="text-dark fw-bold pb-2" scope="row">Category</th>
                                            <td class="ps-3 ps-sm-4 pb-2">Motion Design</td>
                                        </tr>
                                        <tr>
                                            <th class="text-dark fw-bold pb-2" scope="row">Date</th>
                                            <td class="ps-3 ps-sm-4 pb-2">15 October 2023</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="portfolio-single-project.html" class="btn btn-primary shadow-primary mt-n2">Read
                                    more</a>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide" data-swiper-tab="#project-3">
                                <h2 class="h1 mb-4">Blue Whale Shape</h2>
                                <p class="pb-3 mb-3">Sed vehicula nibh quis ipsum gravida, sit amet convallis est sodales.
                                    Integer pulvinar suscipit ipsum, sed facilisis libero vehicula semper. Donec vitae dolor
                                    fermentum lorem pretium condimentum.</p>
                                <table class="mb-5">
                                    <tbody>
                                        <tr>
                                            <th class="text-dark fw-bold pb-2" scope="row">Client</th>
                                            <td class="ps-3 ps-sm-4 pb-2">Great Company LLC</td>
                                        </tr>
                                        <tr>
                                            <th class="text-dark fw-bold pb-2" scope="row">Category</th>
                                            <td class="ps-3 ps-sm-4 pb-2">3D Design</td>
                                        </tr>
                                        <tr>
                                            <th class="text-dark fw-bold pb-2" scope="row">Date</th>
                                            <td class="ps-3 ps-sm-4 pb-2">18 September 2023</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="portfolio-single-project.html" class="btn btn-primary shadow-primary mt-n2">Read
                                    more</a>
                            </div>
                        </div>
                        <div class="d-none d-lg-block" style="height: 160px;"></div>
                        <div class="d-none d-md-block d-lg-none" style="height: 80px;"></div>
                        <div class="d-md-none" style="height: 40px;"></div>

                        <!-- Prev / Next buttons + Counter -->
                        <div class="d-flex align-items-center ps-2 pb-5">
                            <button type="button" class="btn btn-prev btn-icon btn-sm position-static"
                                aria-label="Previous">
                                <i class="bx bx-chevron-left"></i>
                            </button>
                            <div class="swiper-pagination position-static w-auto mx-3" style="min-width: 30px;"></div>
                            <button type="button" class="btn btn-next btn-icon btn-sm position-static" aria-label="Next">
                                <i class="bx bx-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
