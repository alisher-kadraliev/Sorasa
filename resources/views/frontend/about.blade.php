@extends('frontend.main_master')
@section('component')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">About me</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About Me</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__wrap__icon">
                <ul>
                    @foreach($multiImage as $index => $img)
                        @if($index < 6)
                            <li><img src="{{ asset($img->multi_image) }}" ></li>
                        @else
                            @break
                        @endif
                    @endforeach
                </ul>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- about-area -->
        <section class="about about__style__two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about__image">
                            <img src="{{$about->about_img}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <div class="section__title">
                                <span class="sub-title">01 - About me</span>
                                <h2 class="title">{{$about->title}}</h2>
                            </div>
                            <div class="about__exp">
                                <div class="about__exp__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }}" alt="">
                                </div>
                                <div class="about__exp__content">
                                    <p>{{$about->short_title}}</p>
                                </div>
                            </div>
                            <p class="desc">{{$about->short_description}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="about__info__wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="about-tab" data-bs-toggle="tab"
                                            data-bs-target="#about" type="button"
                                            role="tab" aria-controls="about" aria-selected="true">About
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="skills-tab" data-bs-toggle="tab"
                                            data-bs-target="#skills" type="button"
                                            role="tab" aria-controls="skills" aria-selected="false">Skills
                                    </button>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="about" role="tabpanel"
                                     aria-labelledby="about-tab">
                                    {!! $about->long_description !!}
                                </div>
                                <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                                    <div class="about__skill__wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Communication</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 60%;"
                                                             aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">60%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Laravel</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 60%;"
                                                             aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">60%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Php</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 90%;"
                                                             aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">90%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Javascript</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 80%;"
                                                             aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">80%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">Adobe Tools</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                             aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="percentage">50%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                                    <div class="about__award__wrap">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-sm-9">
                                                <div class="about__award__item">
                                                    <div class="award__logo">
                                                        <img
                                                            src="{{ asset('frontend/assets/img/images/awards_01.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="award__content">
                                                        <h5 class="title">Best ux designer award in 2002</h5>
                                                        <p>There are many variations of passages of Lorem Ipsum
                                                            available, but the majority have suffered alteration in some
                                                            form, by injected humour,</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-9">
                                                <div class="about__award__item">
                                                    <div class="award__logo">
                                                        <img
                                                            src="{{ asset('frontend/assets/img/images/awards_02.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="award__content">
                                                        <h5 class="title">BBA final examination 2001</h5>
                                                        <p>There are many variations of passages of Lorem Ipsum
                                                            available, but the majority have suffered alteration in some
                                                            form, by injected humour,</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-9">
                                                <div class="about__award__item">
                                                    <div class="award__logo">
                                                        <img
                                                            src="{{ asset('frontend/assets/img/images/awards_03.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="award__content">
                                                        <h5 class="title">User research award 2020</h5>
                                                        <p>There are many variations of passages of Lorem Ipsum
                                                            available, but the majority have suffered alteration in some
                                                            form, by injected humour,</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-9">
                                                <div class="about__award__item">
                                                    <div class="award__logo">
                                                        <img
                                                            src="{{ asset('frontend/assets/img/images/awards_04.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="award__content">
                                                        <h5 class="title">Dsigning award 2021</h5>
                                                        <p>There are many variations of passages of Lorem Ipsum
                                                            available, but the majority have suffered alteration in some
                                                            form, by injected humour,</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="education" role="tabpanel"
                                     aria-labelledby="education-tab">
                                    <div class="about__education__wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="about__education__item">
                                                    <h3 class="title">DPR Engineering Dhaka University</h3>
                                                    <span class="date">2004 – 2016</span>
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour,There are many variations of passages of Lorem
                                                        Ipsum available, but the majority have suffered
                                                        alteration in some form, by injected humour.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__education__item">
                                                    <h3 class="title">Product Designer at google</h3>
                                                    <span class="date">2021 – Present</span>
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour,There are many variations of passages of Lorem
                                                        Ipsum available.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__education__item">
                                                    <h3 class="title">Computer Science - england</h3>
                                                    <span class="date">2008 – 2012</span>
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour,There are many variations of passages of Lorem
                                                        Ipsum available.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__education__item">
                                                    <h3 class="title">Pro product design with udemey</h3>
                                                    <span class="date">2016 - 2020</span>
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour,There are many variations of passages of Lorem
                                                        Ipsum available, but the majority have suffered
                                                        alteration in some form, by injected humour.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- services-area -->
        <section class="services__style__two">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="section__title text-center">
                            <span class="sub-title">02 - my Services</span>
                            <h2 class="title">Provide awesome service</h2>
                        </div>
                    </div>
                </div>
                <div class="services__style__two__wrap">
                    <div class="row gx-0">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="services__style__two__item">
                                <div class="services__style__two__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/services_light_icon01.png') }}"
                                         alt="">
                                </div>
                                <div class="services__style__two__content">
                                    <h3 class="title"><a href="services-details.html">Business Strategy</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the
                                        majority.</p>
                                    <a href="services-details.html" class="services__btn"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="services__style__two__item">
                                <div class="services__style__two__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/services_light_icon02.png') }}"
                                         alt="">
                                </div>
                                <div class="services__style__two__content">
                                    <h3 class="title"><a href="services-details.html">Visual Design</a></h3>
                                    <p>Strategy is a forward-looking plan for your brand’s behavior.Strategy is a
                                        forward-looking plan.</p>
                                    <a href="services-details.html" class="services__btn"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="services__style__two__item">
                                <div class="services__style__two__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/services_light_icon03.png') }}"
                                         alt="">
                                </div>
                                <div class="services__style__two__content">
                                    <h3 class="title"><a href="services-details.html">Product Design</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the
                                        majority.</p>
                                    <a href="services-details.html" class="services__btn"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="services__style__two__item">
                                <div class="services__style__two__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/services_light_icon05.png') }}"
                                         alt="">
                                </div>
                                <div class="services__style__two__content">
                                    <h3 class="title"><a href="services-details.html">Animation</a></h3>
                                    <p>Strategy is a forward-looking plan for your brand’s behavior.Strategy is a
                                        forward-looking plan.</p>
                                    <a href="services-details.html" class="services__btn"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="services__style__two__item">
                                <div class="services__style__two__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/services_light_icon06.png') }}"
                                         alt="">
                                </div>
                                <div class="services__style__two__content">
                                    <h3 class="title"><a href="services-details.html">Marketing</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the
                                        majority.</p>
                                    <a href="services-details.html" class="services__btn"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="services__style__two__item">
                                <div class="services__style__two__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/services_light_icon05.png') }}"
                                         alt="">
                                </div>
                                <div class="services__style__two__content">
                                    <h3 class="title"><a href="services-details.html">Brand strategy</a></h3>
                                    <p>Strategy is a forward-looking plan for your brand’s behavior.Strategy is a
                                        forward-looking plan.</p>
                                    <a href="services-details.html" class="services__btn"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="services__style__two__item">
                                <div class="services__style__two__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/services_light_icon04.png') }}"
                                         alt="">
                                </div>
                                <div class="services__style__two__content">
                                    <h3 class="title"><a href="services-details.html">Graphic Design</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the
                                        majority.</p>
                                    <a href="services-details.html" class="services__btn"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="services__style__two__item">
                                <div class="services__style__two__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/services_light_icon07.png') }}"
                                         alt="">
                                </div>
                                <div class="services__style__two__content">
                                    <h3 class="title"><a href="services-details.html">Visual Design</a></h3>
                                    <p>Strategy is a forward-looking plan for your brand’s behavior.Strategy is a
                                        forward-looking plan.</p>
                                    <a href="services-details.html" class="services__btn"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial testimonial__style__two">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-11">
                        <div class="testimonial__wrap">
                            <div class="section__title text-center">
                                <span class="sub-title">06 - Client Feedback</span>
                                <h2 class="title">Some happy clients feedback</h2>
                            </div>
                            <div class="testimonial__two__active">
                                <div class="testimonial__item">
                                    <div class="testimonial__icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="testimonial__content">
                                        <p>Be first comment client</p>
                                        <div class="testimonial__avatar">
                                            <span>WPBakery/ uSA</span>
                                            <div class="testi__avatar__img">
                                                <img src="{{ asset('frontend/assets/img/images/testi_avatar01.png') }}"
                                                     alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="testimonial__arrow"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial__two__icons">
                <ul>
                    @php
                        $multi = \App\Models\MultiImage::all()
                    @endphp
                    @foreach($multi as $index => $multis)
                        @if($index < 6)
                        <li><img src="{{asset($multis->multi_image)}}" alt=""></li>
                        @else
                            @break
                        @endif
                    @endforeach
                </ul>
            </div>
        </section>
        <!-- testimonial-area-end -->
        @php
            $portfolio = \App\Models\Portfolio::latest()->get();
        @endphp
        <!-- blog-area -->
        <section class="blog blog__style__two">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    @foreach($portfolio as $index =>  $item)
                        @if($index < 3)
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog__post__item mx-2">
                            <div class="blog__post__thumb">
                                <a href="{{route('portfolio.details',$item->id)}}"><img
                                        src="{{ asset($item->img) }}" alt=""></a>
                                <div class="blog__post__tags">
                                    <a href="{{route('portfolio.details',$item->id)}}">{{$item->title}}</a>
                                </div>
                            </div>
                            <div class="blog__post__content">
                                <h3 class="title"><a href="{{route('portfolio.details',$item->id)}}">{{$item->name}}</a></h3>
                                <a href="{{route('portfolio.details',$item->id)}}" class="read__more">Read mORe</a>
                            </div>
                        </div>
                    </div>
                        @else
                            @break
                        @endif
                    @endforeach
                </div>
                <div class="blog__button text-center">
                    <a href="{{route('blog.index')}}" class="btn">more blog</a>
                </div>

            </div>
        </section>
        <!-- blog-area-end -->

        <section class="homeContact homeContact__style__two">
            <div class="container">
                <div class="homeContact__wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section__title">
                                <span class="sub-title">07 - Say hello</span>
                                <h2 class="title">Any questions? Feel free <br> to contact</h2>
                            </div>
                            <div class="homeContact__content">
                                <h2 class="mail"><a href="#">alisherkadraliev@gmail.com</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="homeContact__form">
                                <form action="{{route('contact.store')}}" method="post">
                                    @csrf
                                    <input type="text" name="name" id="name" placeholder="Enter name*">
                                    <input type="email" name="email" id="email"  placeholder="Enter mail*">
                                    <input type="number" name="phone" id="phone" placeholder="Enter number*">
                                    <textarea name="message" id="message"  placeholder="Enter Massage*"></textarea>
                                    <button type="submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
