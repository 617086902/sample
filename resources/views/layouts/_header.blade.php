<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Sample</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="{{route('about')}}">About</a></li>
        <li><a href="{{route('help')}}">Help</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
          <li><a href="{{ route('users.show', Auth::user()->id) }}">个人中心</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">个人中心</a></li>
                <li><a href="#">编辑资料</a></li>
              <li role="separator" class="divider"></li>
              <li>
                <a id="logout" href="#">
                  <form action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                  </form>
                </a>
              </li>
            </ul>
          </li>
        @else
          <li><a href="{{route('login')}}">登陆</a></li>
        @endif
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
