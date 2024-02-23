<nav class="navbar navbar-expand-lg bg-danger navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">Vulp Blog |</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav"> 
        <a class="nav-link {{ request()->segment(1) == '' ? 'active' : ''}}" href="/">Home</a>
        <a class="nav-link {{ request()->segment(1) == 'about' ? 'active' : ''}}" href="/about">About</a>
        <a class="nav-link {{ request()->segment(1) == 'posts' ? 'active' : ''}}" href="/posts">Blogs</a>  
        <a class="nav-link {{ request()->segment(1) == 'categories' ? 'active' : ''}}" href="/categories">Categories</a>  
      </div>

      <div class="navbar-nav ms-auto">
      @auth
        <div class="dropdown ms-auto">
          <a class="nav-link dropdown-toggle" href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
            </li>
          </ul>
        </div>
      @else
        <a class="nav-link ms-auto {{ request()->segment(1) == 'login' ? 'active' : ''}}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
      @endauth
      </div>
    </div>
  </div>
</nav>

