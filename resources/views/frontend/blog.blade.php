@extends('frontend.main_master')
@section('component')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">Recent Article</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
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


        <!-- blog-area -->
        <section class="standard__blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        @foreach($allblogs as $item)
                            <div class="standard__blog__post">
                                <div class="standard__blog__thumb">
                                    <a href="{{route('single_blog',$item->id)}}"><img src="{{asset($item->img)}}"  alt=""></a>
                                    <a href="{{route('single_blog',$item->id)}}" class="blog__link"><i class="far fa-long-arrow-right"></i></a>
                                </div>
                                <div class="standard__blog__content">
                                    {{--                            <div class="blog__post__avatar">--}}

                                    {{--                                <div class="thumb"><img src="assets/img/blog/blog_avatar.png" alt=""></div>--}}
                                    {{--                                <span class="post__by">By : <a href="#">{{ $item->user->name }}</a></span>--}}
                                    {{--                            </div>--}}
                                    <h2 class="title"><a href="{{route('single_blog',$item->id)}}">{{$item->title}}</a></h2>
                                    <p>{!! Illuminate\Support\Str::limit($item->description,500) !!}</p>
                                    <ul class="blog__post__meta">
                                        <li><i class="fal fa-calendar-alt"></i> {{Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</li>
                                        {{--                                <li><i class="fal fa-comments-alt"></i> <a href="#">Comment (08)</a></li>--}}
                                        {{--                                <li class="post-share"><a href="#"><i class="fal fa-share-all"></i> (18)</a></li>--}}
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                        {{--                    <div class="pagination-wrap">--}}
                        {{--                        <nav aria-label="Page navigation example">--}}
                        {{--                            <ul class="pagination">--}}
                        {{--                                <li class="page-item"><a class="page-link" href="#"><i class="far fa-long-arrow-left"></i></a></li>--}}
                        {{--                                <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
                        {{--                                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                        {{--                                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                        {{--                                <li class="page-item"><a class="page-link" href="#">...</a></li>--}}
                        {{--                                <li class="page-item"><a class="page-link" href="#"><i class="far fa-long-arrow-right"></i></a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </nav>--}}
                        {{--                    </div>--}}
                    </div>
                    <div class="col-lg-4">
                        <aside class="blog__sidebar">
                            <div class="widget">
                                <form action="#" class="search-form">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="fal fa-search"></i></button>
                                </form>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Recent Blog</h4>
                                <ul class="rc__post">
                                    @foreach($allblogs as $all)
                                        <li class="rc__post__item">
                                            <div class="rc__post__thumb">
                                                <a href="{{route('single_blog',$all->id)}}"><img src="{{asset($all->img)}}" alt=""></a>
                                            </div>
                                            <div class="rc__post__content">
                                                <h5 class="title"><a href="{{route('single_blog',$all->id)}}">{{$all->title}}</a></h5>
                                                <span class="post-date"><i class="fal fa-calendar-alt"></i>{{Carbon\Carbon::parse($all->created_at)->diffForHumans()}}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Categories</h4>
                                <ul class="sidebar__cat">
                                    @foreach($categories as $cat)
                                        <li class="sidebar__cat__item"><a href="{{route('category.post',$cat->id)}}">{{$cat->blog_category}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            {{--                        <div class="widget">--}}
                            {{--                            <h4 class="widget-title">Recent Comment</h4>--}}
                            {{--                            <ul class="sidebar__comment">--}}
                            {{--                                <li class="sidebar__comment__item">--}}
                            {{--                                    <a href="blog-details.html">Rasalina Sponde</a>--}}
                            {{--                                    <p>There are many variations of passages of lorem ipsum available, but the majority have</p>--}}
                            {{--                                </li>--}}
                            {{--                                <li class="sidebar__comment__item">--}}
                            {{--                                    <a href="blog-details.html">Rasalina Sponde</a>--}}
                            {{--                                    <p>There are many variations of passages of lorem ipsum available, but the majority have</p>--}}
                            {{--                                </li>--}}
                            {{--                                <li class="sidebar__comment__item">--}}
                            {{--                                    <a href="blog-details.html">Rasalina Sponde</a>--}}
                            {{--                                    <p>There are many variations of passages of lorem ipsum available, but the majority have</p>--}}
                            {{--                                </li>--}}
                            {{--                                <li class="sidebar__comment__item">--}}
                            {{--                                    <a href="blog-details.html">Rasalina Sponde</a>--}}
                            {{--                                    <p>There are many variations of passages of lorem ipsum available, but the majority have</p>--}}
                            {{--                                </li>--}}
                            {{--                            </ul>--}}
                            {{--                        </div>--}}
                            <div class="widget">
                                <h4 class="widget-title">Popular Tags</h4>
                                <ul class="sidebar__tags">
                                    @foreach($tags as $tag)
                                        <li><a href="">{{$tag->tags}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                    </div>
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
