<div class="qt-widget-box">

    <div class="qt-widget-header">
        <h3>عضویت در خبرنامه</h3>
    </div>

    <div class="qt-widget-body">
        <p>برای دریافت آخرین اخبار سایت ابتدا ایمیل خود را وارد و روی گزینه عضویت کلیک کنید</p>
        <table>
            <form role="form" action="{{ url('/joinnews')  }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                    <input type="email" id="email" name="email" class="form-control" placeholder="ایمیل خود را وارد کنید" required>
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">عضویت</button>
                  </span>
                </div>
            </form>
        </table>
    </div>

</div>
