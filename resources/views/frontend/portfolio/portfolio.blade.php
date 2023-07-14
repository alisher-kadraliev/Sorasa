<!-- portfolio-area -->
<section class="portfolio">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section__title text-center">
                    <span class="sub-title">04 - Portfolio</span>
                    <h2 class="title">All creative work</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content" id="portfolioTabContent">
        <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="all-tab">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    <div class="col">
                        @php
                            $portfolio = \App\Models\Portfolio::latest()->get();
                        @endphp
                        <div class="portfolio__active">
                            @foreach($portfolio as $item)
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset($item->img) }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>{{$item->name}}</span>
                                    <h4 class="title"><a href="portfolio-details.html">{{$item->title}}</a>
                                    </h4>
                                    <a href="{{route('portfolio.details',$item->id)}}" class="link">Case Study</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="website" role="tabpanel" aria-labelledby="website-tab">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    <div class="col">
                        <div class="portfolio__active">
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img07.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Nature of Business Strategy
                                            System</a></h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img06.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img01.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Apps Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img02.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img03.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>UX/UI Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img04.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img05.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="apps" role="tabpanel" aria-labelledby="apps-tab">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    <div class="col">
                        <div class="portfolio__active">
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img06.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Product Design and
                                            Development</a></h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img01.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Apps Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img02.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img03.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>UX/UI Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img04.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img05.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img07.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    <div class="col">
                        <div class="portfolio__active">
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img05.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Brand strategy System
                                            Management</a></h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img01.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Apps Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img02.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img03.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>UX/UI Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img04.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img06.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img07.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="landing" role="tabpanel" aria-labelledby="landing-tab">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    <div class="col">
                        <div class="portfolio__active">
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img04.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Visual Design System
                                            Management</a></h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img01.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Apps Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img02.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img03.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>UX/UI Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img05.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img06.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img07.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="branding" role="tabpanel" aria-labelledby="branding-tab">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    <div class="col">
                        <div class="portfolio__active">
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img03.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>UX/UI Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Animation Management
                                            System</a></h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img01.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Apps Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img02.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img04.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img05.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img06.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img07.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="graphic" role="tabpanel" aria-labelledby="graphic-tab">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    <div class="col">
                        <div class="portfolio__active">
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img02.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Graphic Design Management
                                            System</a></h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img01.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Apps Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img03.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>UX/UI Design</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img04.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img05.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img06.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio_img07.jpg') }}"
                                         alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span>Web Development</span>
                                    <h4 class="title"><a href="portfolio-details.html">Banking Management System</a>
                                    </h4>
                                    <a href="portfolio-details.html" class="link">Case Study</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- portfolio-area-end -->
