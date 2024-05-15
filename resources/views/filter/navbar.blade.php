<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('images/task_list_logo.png') }}" alt="Logo" style="max-width: 50px; height: auto;">
  </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('back') }}">back</a>
        </li>
        
        <li>
          <form action="{{ route('logout') }}" method="post">
              @csrf
              <button type="submit" class="nav-link">deconnect</button>
          </form>
      </li>
         
         
</nav>