<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css'); }} ">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-md bg-blue fixed-top">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/students">Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/lessons">Lessons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/contact">Contact</a>
          </li>
          
        </ul>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>@yield('title')</h1>
        <p class="lead"> @yield('content')</p>
      </div>
     
    </main>

</body>
</html>