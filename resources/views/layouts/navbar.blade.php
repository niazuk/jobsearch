<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="/"><img src="{{asset('images/AMP_Logo_Nav.png')}}" width="150px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about')}}">About Us</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{route('job.index')}}">Current Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('job.create')}}">Create Job</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contact')}}" tabindex="-1" aria-disabled="true">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="/filter">
      @csrf
      <input class="form-control mr-sm-2" id="filter" type="text" placeholder="Job Filter" name="filter" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Job Filter</button>
    </form>
  </div>
</nav>