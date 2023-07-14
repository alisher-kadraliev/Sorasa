<section class="blog">
    <div class="container">
        <div class="row gx-0 justify-content-center">
@php
    $blogs = \App\Models\Blog::all();
    @endphp
            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="blog__post__item mx-2">
                        <div class="blog__post__thumb">
                            <a href="{{route('single_blog',$blog->id)}}"><img
                                    src="{{ asset($blog->img) }}" alt=""></a>
                            <div class="blog__post__tags">
                                <a href="{{route('single_blog',$blog->id)}}">{{$blog['category']['blog_category']}}</a>

                            </div>
                        </div>
                        <div class="blog__post__content">
                            <h3 class="title"><a href="{{route('single_blog',$blog->id)}}">{{$blog->title}}</a></h3>
                            <a href="{{route('single_blog',$blog->id)}}" class="read__more">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="blog__button text-center">
            <a href="{{route('blog.index')}}" class="btn">more blog</a>
        </div>
    </div>
</section>
