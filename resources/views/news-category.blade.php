<?php
use App\Models\PostCategory;
use App\Models\NewsPost;
use App\Models\Utils;
if (!isset($header_style)) {
    $header_style = 11;
}

?>@extends('layouts.layout-main')
@section('main-content')
    <!-- Breadcrumb -->
    <nav class="container mt-lg-4 pt-5" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 pt-5">
            <li class="breadcrumb-item">
                <a href="{{ url('') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">News</li>
        </ol>
    </nav>


    <!-- Page content -->
    <section class="container mt-4 mb-lg-5 pt-lg-2 pb-5">

        <!-- Page title + Layout switcher + Search form -->
        <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
            <div class="col-lg-5 col-md-4">
                <h1 class="mb-2 mb-md-0">News</h1>
            </div>
            <div class="col-lg-7 col-md-8">
                <div class="row gy-2">
                    <div class="col-lg-5 col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center me-sm-4 me-3">
                                <a href="{{ url('news') }}" class="nav-link me-2 p-0 active">
                                    <i class="bx bx-list-ul fs-4"></i>
                                </a>
                                <a href="{{ url('news') }}" class="nav-link p-0">
                                    <i class="bx bx-grid-alt fs-4"></i>
                                </a>
                            </div>
                            <select class="form-select">
                                <option>All categories</option>
                                @foreach (PostCategory::all() as $cat)
                                    <option value="{{ $cat->name }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control pe-5 rounded" placeholder="Search the news...">
                            <i
                                class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 zindex-5 fs-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach (NewsPost::all() as $post)
            <!-- Item -->
            <article class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="row g-0">
                    <div class="col-sm-4 position-relative bg-position-center bg-repeat-0 bg-size-cover"
                        style="background-image: url({{ url('storage/' . $post->photo) }}); min-height: 15rem;">
                        <a href="{{ url('news/' . $post->id) }}" class="position-absolute top-0 start-0 w-100 h-100"
                            aria-label="Read more"></a>
                        <a href="{{ url('news/' . $post->id) }}"
                            class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                            <i class="bx bx-bookmark"></i>
                        </a>
                    </div>
                    <div class="col-sm-8">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <a href="news" class="badge fs-sm text-nav bg-secondary text-decoration-none">{{   $post->category->name }}</a>
                                <span class="fs-sm text-muted border-start ps-3 ms-3">{{ Utils::my_date($post->created_at) }}</span>
                            </div>
                            <h3 class="h4">
                                <a href="{{ url('news/' . $post->id) }}" title="{{ $post->title }}">
                                    {{ Str::limit($post->title, 60) }}
                                </a>
                            </h3>
                            <p> {{ Str::limit($post->description, 300) }}</p>
                            <hr class="my-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="{{ url('admin/members/'.$post->created_by->id) }}"
                                    class="d-flex align-items-center fw-bold text-dark text-decoration-none me-3">
                                    <img src="{{   $post->created_by->avatar  }}" class="rounded-circle me-3" width="48"
                                        alt="Avatar">
                                        {{   $post->created_by->name }}
                                </a>
                                <div class="d-flex align-items-center text-muted">
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
                        </div>
                    </div>
                </div>
            </article>
        @endforeach


    </section>


    <!-- Subscription CTA -->
    <section class="py-5 border-top border-primary">
        <div class="container py-md-3 py-lg-5">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-11">
                    <h2 class="h1 d-md-inline-block position-relative mb-md-5 mb-sm-4 text-sm-start text-center">
                        Don't Want to Miss Anything?

                        <!-- Arrow shape -->
                        <svg class="d-md-block d-none position-absolute top-0 ms-4 ps-1" style="left: 100%;"
                            xmlns="http://www.w3.org/2000/svg" width="65" height="68" fill="#6366f1">
                            <path
                                d="M53.9527 51.0012c8.396-10.5668 2.0302-26.0134-11.7481-26.7511-.6899-.0646-1.4612.0015-2.1258.0431.1243 9.0462-4.1714 18.8896-11.5618 21.3814-6.6695 2.2133-10.3337-4.2224-7.5813-9.676 3.2966-6.4755 9.103-11.8504 16.1678-13.8189-.5654-5.6953-3.3436-10.7672-9.485-12.48517C17.2678 6.8204 6.49364 16.3681 4.98841 26.127c-.09276 1.0297-1.68569.9497-1.59293-.0801C3.98732 12.9139 19.7395 2.55212 31.9628 8.5787c4.7253 2.3813 7.2649 7.3963 7.9368 13.067 7.4237-.9311 14.5154 3.3683 18.3422 9.5422 4.3988 7.1623 2.3584 15.1401-2.6322 21.1108-.7826.9653-2.3331-.3572-1.6569-1.2975zM26.7754 32.1845c-1.9411 2.2411-4.076 5.0872-4.3542 8.1764-.3036 2.9829 3.7601 3.0525 5.4905 2.7645 2.1568-.3863 3.7221-2.3164 4.8863-4.0419 2.6228-3.6308 4.3657-9.0752 4.4844-14.2563-4.0808 1.279-7.6514 4.2327-10.507 7.3573zm24.6311 25.592c-.7061-2.9738-1.2243-6.1031-1.1591-9.143.0423-1.242 1.767-1.0805 1.8313.1372.1284 2.435.815 4.8532 1.4764 7.1651l4.1619-1.4098c1.0153-.4586 2.4373-1.5714 3.6544-1.1804.6087.1954.7347.7264.6475 1.3068-.2302 1.3976-2.4683 1.9147-3.5901 2.398-1.8429.7619-3.6293 1.2865-5.5477 1.7298-.6391.1476-1.3233-.3665-1.4746-1.0037z" />
                        </svg>
                    </h2>

                    <!-- Title + checkboxes -->
                    <div class="row gy-4 align-items-center mb-lg-5 mb-4 pb-3">
                        <div class="col-md-3">
                            <h3 class="h5 mb-0 text-sm-start text-center">Sign up for Newsletters</h3>
                        </div>
                        <div class="col-md-9">
                            <div class="row row-cols-sm-3 row-cols-2 gy-2">
                                <div class="col">
                                    <div class="form-check mb-0">
                                        <input type="checkbox" id="s-daily-newsletter" class="form-check-input">
                                        <label for="s-daily-newsletter" class="form-check-label">Daily Newsletter</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check mb-0">
                                        <input type="checkbox" id="s-advertising-updates" class="form-check-input" checked>
                                        <label for="s-advertising-updates" class="form-check-label">Advertising
                                            Updates</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check mb-0">
                                        <input type="checkbox" id="s-week-in-review" class="form-check-input">
                                        <label for="s-week-in-review" class="form-check-label">Week in Review</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check mb-0">
                                        <input type="checkbox" id="s-event-updates" class="form-check-input">
                                        <label for="s-event-updates" class="form-check-label">Event Updates</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check mb-0">
                                        <input type="checkbox" id="s-startups-weekly" class="form-check-input">
                                        <label for="s-startups-weekly" class="form-check-label">Startups Weekly</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check mb-0">
                                        <input id="s-podcasts" type="checkbox" class="form-check-input">
                                        <label for="s-podcasts" class="form-check-label">Podcasts</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Email field -->
                    <form class="d-flex flex-sm-row flex-column mb-3 needs-validation" novalidate>
                        <div class="input-group me-sm-3 mb-sm-0 mb-3">
                            <i
                                class="bx bx-envelope position-absolute start-0 top-50 translate-middle-y ms-3 zindex-5 fs-5 text-muted"></i>
                            <input type="email" class="form-control form-control-lg rounded-3 ps-5"
                                placeholder="Your email" required>
                            <div class="invalid-tooltip position-absolute start-0 top-0 mt-n4">Please provide a valid email
                                address!</div>
                        </div>
                        <button class="btn btn-lg btn-primary">Subscribe *</button>
                    </form>
                    <div class="form-text fs-sm text-sm-start text-center">
                        * Yes, I agree to the <a href="#">terms</a> and <a href="#">privacy policy</a>.
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
