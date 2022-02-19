<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="#">Fiolina</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ( $title === 'Home') ? 'active': ''}}" aria-current="page" href="/">Home</a>
          <a class="nav-link {{ ( $title === 'About') ? 'active': ''}}" href="/about">about</a>
          <a class="nav-link {{ ( $title === 'Gallery') ? 'active': ''}}" href="/gallery">gallery</a>
          <a class="nav-link {{ ( $title === 'Contacts') ? 'active': ''}}" href="/contacts">Contact Us</a>
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
        </div>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route ('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route ('register')}}">Register</a>
          </li>
      </div>
    </div>
  </nav>