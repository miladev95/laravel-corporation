<section class="qt-recent-photo-galleries">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 col-md-3 text-center">
                <h3>آخرین تصاویر</h3>
                <a href="{!! action('GalleryController@index',['page'=>1]) !!}" class="btn btn-primary btn-lg qt-recent-photo-galleries-view-all"><i class="fa fa-camera"></i> نمایش همه</a>
            </div>
            @foreach($gallery as $galleryItem)
                <div class="col-sm-4 col-md-3">
                    <a href="{{ $galleryItem->image  }}" class="qt-fade qt-photo-item">
                        <h4>{!! $galleryItem->title !!}</h4>
                        <img class="" src="{{ asset($galleryItem->image)  }}" alt="{!! $galleryItem->title !!}">
                    </a>
                </div>
            @endforeach
        </div>

    </div>

</section>
