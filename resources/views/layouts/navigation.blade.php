<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"><a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a></li>
      <li class="nav-item"><a class="nav-link" href="/tasks">Task</a></li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Subject
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @foreach ($subjects as $subject)
            <a href="/subjects/{{ $subject->id }}" class="dropdown-item">{{ $subject->name }}</a>
          @endforeach
        </div>
      </li>
  </div>
</nav>
