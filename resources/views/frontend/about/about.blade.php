<section id="aboutSection" class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="about__icons__wrap">
                    @foreach($multiImage as $img)
                    <li>
                        <img class="light" src="{{ asset($img->multi_image) }}" alt="XD">
                    </li>
                    @endforeach
                </ul>
            </div>
            @php
                $about = App\Models\About::find(1);
            @endphp
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
    </div>
</section>
