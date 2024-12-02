
<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex mx-3">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            @if (Auth::check())
              <a class ="nav-link" href="{{Route('article.index')}}">Articles</a>
            @else
            <a class="nav-link" href="{{Route('indexpublic')}}">Articles</a>
            @endif
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{Route('article.create')}}">Ajouter un article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{Route('dashboard')}}">Dashboard</a>
          </li>
          @endauth
        </ul>
      </div>
      @auth
      <div class="nav-item">
        <form action="{{Route('logout')}}" method="POST">
          @csrf
          <button type="submit" class="btn btn-danger">Logout</button>
        </form>
      </div>
      @endauth
      @if (!Auth::check())
      <div class="nav-item">
        <a href="{{Route('loginform')}}" class="btn btn-danger">Login</a>
      </div>
      @endif
      
</nav>



