@extends('layouts.main')

@section('content')
    @if (session('status'))
        <div class="alert alert-success text-center">
            {{ session('status') }}
        </div>
    @endif


    <!-- =========================================================================================== -->
    <!-- =========================== Widget Menu =================================================== -->
    <!-- =========================================================================================== -->

    @include('layouts.menu')


    <!-- =========================================================================================== -->
    <!-- =================== Wide Featured Image =================================================== -->
    <!-- =========================================================================================== -->

    <section class="qt-middle">

        <!-- For a center image, just wrap tag below in .container -->
        <div class="qt-featured-image qt-header-featured-image qt-header-featured-image-wide">
            <img src="{{ asset($gallery[0]->image) }}" alt="Blog Listing">
        </div>

    </section>

<!-- =========================================================================================== -->
<!-- =================== Begin page content ==================================================== -->
<!-- =========================================================================================== -->

<section class="qt-page-wrapper">
  <div class="container">

    <div class="row">

      <div class="col-md-8">
          <div class="qt-page-header">
              <h2>اخبار<small></small></h2>
              <ol class="breadcrumb">
                  <li class="active">اخبار</li>
                  <li><a href="{{url("/")}}">صفحه اصلی</a></li>
              </ol>
          </div>
        <div class="qt-page-header">
          <h2>{{$post->title}}<small> </small></h2>

        </div>

        <div class="qt-post-meta">
            <?php
            $postTag = $post->tags;
            $postTag = explode("-",$postTag);
            ?>
            <span><i class="fa fa-tags fa-fw"></i>
            @foreach($postTag as $tagItem)
                    <a href="{{action("TagsController@index",['tag'=>$tagItem])}}">{{$tagItem}}</a>
            @endforeach
            </span>
        </div>

        <div class="qt-page-body">

            {!!  $post->content !!}


          <section class="qt-comments-wrapper">

            <hr>



            <!-- Blog Comments -->

            <!-- Comments Form -->
            <div class="well">

              <h4>گذاشتن نظر</h4>

              <table>
                  <form method="post">
                      <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="نام خود را وارد کنید" required>
                      </div>
                      <div class="form-group">
                    <input type="email" name="email"  class="form-control" placeholder="ایمیل خود را وارد کنید" required>
                      </div>
                    <div class="form-group">
                      <textarea class="form-control" placeholder="کامنت خود را وارد کنید" name="comment" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">ارسال</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <input type="hidden" name="id" value="{{ $post->id }}"/>
                  </form>
              </table>
              <hr>

              <!-- Posted Comments -->

                @foreach($postComment as $commentItem)

              <!-- Comment -->
              <div class="media">

                <a class="pull-left" href="#">
                  <img class="media-object" width="64" alt="">
                </a>

                <div class="media-body">
                  <h4 class="media-heading">{{ $commentItem->date }} -- {{ $commentItem->name }}  </h4>
                   {{$commentItem->comment}}
                </div>
              </div>
               @endforeach

            </div>

          </section>

        </div>


      </div>

      <div class="col-md-4">

<!-- =========================================================================================== -->
<!-- =========================== Widget Search ================================================= -->
<!-- =========================================================================================== -->
      @include('layouts.search-side')

          <!-- =========================================================================================== -->
<!-- =========================== Widget Newsletter ============================================= -->
<!-- =========================================================================================== -->

       @include('layouts.join-news-side')


<!-- =========================================================================================== -->
<!-- =========================================================================================== -->
<!-- =========================================================================================== -->

      </div>

    </div>

  </div>
</section>


    <!-- =========================================================================================== -->
    <!-- =========================== Recent Photo Galleries========================================= -->
    <!-- =========================================================================================== -->

    @include('layouts.last-pics')


@endsection
