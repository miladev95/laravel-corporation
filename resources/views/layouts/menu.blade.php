<nav class="navbar navbar-default main-navigation qt-box-shadow">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="mobile-menu-text">MENU</span>
                <span class="mobile-menu-bars">
          <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
        </span>
            </button>
        </div>



        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav">
                @foreach ($Menu as $menu)
                    <?php  $hasChild = false ;?>
                    @foreach ($Menu as $child)
                        @if($menu->id == $child->parent)
                            <?php $hasChild = true; ?>
                        @endif
                    @endforeach
                    @if($menu-> parent == 0)
                        <li class="dropdown">
                            @if($hasChild)
                                <a href="{!! $menu->link !!}" class="dropdown-toggle" data-toggle="dropdown">{!! $menu->title !!}<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    @foreach ($Menu as $child)
                                        @if($menu->id == $child->parent)
                                            <li class=""><a href="{!! $child->link !!}">{!! $child->title !!}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            @else
                                <a href="{!! $menu->link !!}" class="dropdown-toggle" data-toggle="dropdown">{!! $menu->title !!}</a>
                            @endif
                        </li>
                    @endif
                @endforeach

            </ul>

        </div>

    </div>
</nav>
