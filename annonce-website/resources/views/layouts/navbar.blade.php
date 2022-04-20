<div class="">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}">anounce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item dropdown d-flex">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            @auth
           {{ auth()->user()->name}}
           @endauth
           @guest
            account
           @endguest
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @guest
                <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
            @endguest
            @auth
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form id="logoutForm" action="{{route('logout')}}" method="post">
                        @csrf
                    </form>
                    <a class="dropdown-item" href="#"
                        onclick="document.getElementById('logoutForm').submit()">Logout</a>
                </li>
            @endauth
          </ul>
        </li>
        @auth
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                anounces
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                    <a class="dropdown-item" href="">
                        My anounce
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{route('anounces.create')}}">
                        Create anounce
                    </a>
                </li>
            </ul>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>

</div>

