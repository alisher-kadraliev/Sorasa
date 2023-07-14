@extends('frontend.main_master')
@section('component')


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;

            case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;

            case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;

            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
        @endif
    </script>
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">Contact us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__wrap__icon">
            <ul>
                @php
                    $multi = \App\Models\MultiImage::all()
                @endphp
                @foreach($multi as $multis)
                    <li><img src="{{asset($multis->multi_image)}}" alt=""></li>
                @endforeach
            </ul>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- contact-map -->
{{--    <div id="contact-map">--}}
{{--        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96811.54759587669!2d-74.01263924803828!3d40.6880494567041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1636195194646!5m2!1sen!2sbd"--}}
{{--                allowfullscreen loading="lazy"></iframe>--}}
{{--    </div>--}}
    <!-- contact-map-end -->

    <!-- contact-area -->
    <div class="contact-area">
        <div class="container">
            <form action="{{route('contact.store')}}" method="post" class="contact__form">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="name" id="name" placeholder="Enter your name*">
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" id="email" placeholder="Enter your mail*">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="subject" id="subject" placeholder="Enter your subject*">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="phone" id="phone" placeholder="Your Phone*">
                    </div>
                </div>
                <textarea name="message" id="message"  placeholder="Enter your massage*"></textarea>
                <button type="submit" class="btn">send massage</button>
            </form>
        </div>
    </div>
    <!-- contact-area-end -->

    <!-- contact-info-area -->
    <section class="contact-info-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact__info">
                        <div class="contact__info__icon">
                            <img src="{{asset('frontend/assets/img/icons/contact_icon01.png')}}" alt="">
                        </div>
                        <div class="contact__info__content">
                            <h4 class="title">Contact me</h4>
                            <span>Upwork: <a href="https://www.upwork.com/freelancers/~01889949474e115e69" class="text-dark">Alisher Kadraliev</a></span>
                            <span>Github: <a href="https://github.com/alisher-kadraliev " class="text-dark">Alisher Kadraliev</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact__info">
                        <div class="contact__info__icon ">
                            <img src="{{asset('frontend/assets/img/icons/contact_icon02.png')}}" alt="">
                        </div>
                        <div class="contact__info__content">
                            <h4 class="title">Phone Number</h4>
                            <span><a href="https://t.me/recently11" class="text-dark">Telegram</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact__info">
                        <div class="contact__info__icon">
                            <img src="{{asset('frontend/assets/img/icons/contact_icon03.png')}}" alt="">
                        </div>
                        <div class="contact__info__content">
                            <h4 class="title">Mail Address</h4>
                            <span>alisherkadraliev@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-area-end -->


</main>
@endsection

