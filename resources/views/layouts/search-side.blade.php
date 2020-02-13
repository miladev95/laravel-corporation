<div class="qt-widget-box">

    <div class="qt-widget-header">
        <h3>جستجو در سایت</h3>
    </div>

    <div class="qt-widget-body">
        <table>
        <form role="form" action="{{ url('/search')  }}"  method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" name="search" class="form-control" placeholder="متن مورد نظر را وارد کنید" required>
                <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">جستجو</button>
              </span>
            </div>
        </form>
        </table>

    </div>
</div>
