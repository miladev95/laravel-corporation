<div class="qt-widget-box">

    <div class="qt-widget-header">
        <h3>Join Newsletter</h3>
    </div>

    <div class="qt-widget-body">
        <p>To get the latest news on the site, first enter your email and click on the Subscribe option</p>
        <table>
            <form role="form" action="{{ url('/joinnews')  }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                  </span>
                </div>
            </form>
        </table>
    </div>

</div>
