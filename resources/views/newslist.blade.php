@extends('layouts.main')

@section('content')

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
    <img src="{{ $gallery[0]->image }}" alt="Blog Listing">
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
          <h2>لیست نوشته ها<small></small></h2>
          <ol class="breadcrumb">
	<li class="active">لیست اخبار</li>
            <li><a href="{{url("/")}}">صفحه اصلی</a></li>
          </ol>
        </div>

        <div class="qt-page-body">


          <ul class="list-unstyled row qt-blog-listing">
            @foreach($news as $newsItem)
            <li class="col-md-12 qt-blog-listing-item">

              <h3><a href="{{action('SingleNewsController@index',['id'=>$newsItem->id])}}">{{$newsItem->title}}</a></h3>

              <div class="qt-post-meta">
                <span><i class="fa fa-calendar fa-fw"></i>{{ $newsItem->date }}</span>
                  <?php
                    $newsTag = $newsItem->tags;
                    $newsTag = explode("-",$newsTag);
                  ?>
                <span><i class="fa fa-tags fa-fw"></i>
                    @foreach($newsTag as $tagItem)
                        <a href="{{action("TagsController@index",$tagItem)}}">{{$tagItem}}</a>
                    @endforeach
                </span>
              </div>

              <a class="fade qt-blog-listing-item-img" href="{{action("SingleNewsController@index",['id'=>$newsItem->id])}}">
                <img src="{{ $newsItem->image }}" alt="A good news item title for the blog">
              </a>

              <p>
                  {!!  \Illuminate\Support\Str::limit($newsItem->content,100,$end="...")  !!}<a class="qt-sidebar-read-more" href="{{action("SingleNewsController@index",['id'=>$newsItem->id])}}">ادامه <i class="fa  fa-arrow-circle-right"></i></a>
              </p>

            </li>
            @endforeach


          </ul>

          <!-- Pager for the blog archive -->

          <hr>

          <div class="well well-lg qt-blog-navbar">
            <div class="row">
              <div class="col-sm-4 col-sm-push-2">
                @if($totalPages != $currentPage)
                    <a href="{{action("NewsListController@index",['page'=>$currentPage+1])}}" class="btn btn-primary btn-lg btn-block"> <i class="fa fa-arrow-circle-left"></i> بعدی</a>
                @endif
              </div>
              <div class="col-sm-4 col-sm-push-2">
                  @if($currentPage != 1)
                    <a href="{{action("NewsListController@index",['page'=>$currentPage-1])}}" class="btn btn-primary btn-lg btn-block"> قبلی <i class="fa fa-arrow-circle-right"></i></a>
                  @endif
              </div>
            </div>
          </div>

          <!-- End: Pager -->

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




