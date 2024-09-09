@extends('layouts.layout-main')
@section('main-content')
    <!-- Hero -->
    <section class="position-relative pt-5" style="background-color: #151922;" data-bs-theme="dark">

        <!-- Content -->
        <div class="container position-relative zindex-2 pt-5 pb-2 pb-md-0">

            <!-- Breadcrumb -->
            <nav class="pt-lg-4" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index-2.html"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Contacts v.1</li>
                </ol>
            </nav>

            <div class="row justify-content-center pt-3 mt-3">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10 text-center">
                    <h1 class="mb-4">Get in Touch</h1>
                    <p class="text-body fs-lg pb-3 mb-3">Have a project in mind? To request a quote contact us directly or
                        fill out the form and let us know how we can help.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-icon btn-secondary btn-facebook rounded-circle mx-2"
                            aria-label="Facebook">
                            <i class="bx bxl-facebook"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-secondary btn-instagram rounded-circle mx-2"
                            aria-label="Instagram">
                            <i class="bx bxl-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-secondary btn-google rounded-circle mx-2"
                            aria-label="Google">
                            <i class="bx bxl-google"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-secondary btn-twitter rounded-circle mx-2"
                            aria-label="Twitter">
                            <i class="bx bxl-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom shape -->
        <div class="d-flex position-absolute top-100 start-0 w-100 overflow-hidden mt-n5" style="color: #151922;">
            <div class="position-relative start-50 translate-middle-x flex-shrink-0 mt-n5 mt-md-n3 mt-lg-n1"
                style="width: 3788px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="3788" height="144" viewBox="0 0 3788 144">
                    <path fill="currentColor" d="M0,0h3788.7c-525,90.2-1181.7,143.9-1894.3,143.9S525,90.2,0,0z" />
                </svg>
            </div>
        </div>
    </section>


    <!-- Email + Phone -->
    <section class="container py-5 my-md-2 my-lg-4 my-xl-5">
        <div class="row justify-content-center pt-5 pb-1 pb-sm-2 pb-md-3">
            <div class="col-xxl-8 col-xl-9 col-lg-10 pt-sm-2 pt-md-5">
                <div class="d-sm-flex">
                    <div
                        class="d-flex flex-column w-sm-50 border-0 bg-transparent text-center px-sm-1 px-md-5 pb-3 pb-sm-0 mb-4 mb-sm-0">
                        <div class="card-body p-0">
                            <div class="d-inline-block bg-secondary text-primary rounded-circle fs-3 lh-1 p-3 mb-3">
                                <i class="bx bx-envelope"></i>
                            </div>
                            <p class="pb-2 pb-sm-3 mb-3">Please feel free to drop us a line. We will respond as soon as
                                possible.</p>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="mailto:email@example.com" class="btn btn-lg btn-primary">Send email</a>
                        </div>
                    </div>
                    <div class="vr text-border d-none d-sm-inline-block m-4"></div>
                    <div class="card w-sm-50 border-0 bg-transparent text-center px-sm-1 px-md-5">
                        <div class="card-body p-0">
                            <div class="d-inline-block bg-secondary text-primary rounded-circle fs-3 lh-1 p-3 mb-3">
                                <i class="bx bx-phone-call"></i>
                            </div>
                            <p class="pb-2 pb-sm-3 mb-3">If you need immediate assistance feel free to call us any time.</p>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="tel:4065550120" class="btn btn-lg btn-primary">Call&nbsp;us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FAQ (Accordion) -->
    <section class="container mb-5">
        <div class="bg-secondary rounded-3 py-5 px-3 px-sm-4 px-md-0">
            <h2 class="text-center pt-md-1 pt-lg-3 pt-xl-4 pb-4 mt-xl-1 mb-2">Frequently Asked Questions</h2>
            <div class="row justify-content-center pb-lg-4 pb-xl-5">
                <div class="col-xl-8 col-lg-9 col-md-10 pb-md-2">
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
