<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('https://erp.silicon.ac.in/Admission/upload/image/sit_logo.png') }}" alt="Logo" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fw-bold" aria-current="page" href="{{ route('index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="{{ route('about') }}">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link fw-bold dropdown-toggle" href="{{ route('contact') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clubs
          </a>
          <ul class="bg-secondary-subtle dropdown-menu fw-bold">
            <li><a class="dropdown-item fw-bold" href="#">Sports Club</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item fw-bold" href="#">Dance Club</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item fw-bold" href="#">Music Club</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item fw-bold" href="#">Drama Club</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item fw-bold" href="#">Photgraphy Club</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold">Events</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link fw-bold "href="{{ url('login') }}" >Login/SignUp</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold "href="{{ url('adminLog') }}" >Admin</a>
        </li>
    
      </ul>
    </div>
  </div>
</nav>