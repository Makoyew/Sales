<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade Templating Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body style="background-color: rgb(210, 223, 241);">
    <ul class="nav nav-tabs" style="background-color: beige">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Sales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/unit">Units</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/merchandise">Merchandise</a>
        </li>
      </ul>

      <div class="container">
        @yield('content')
      </div>
</body>
</html>
