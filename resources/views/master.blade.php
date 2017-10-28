
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mustapha Alaouy">

    <title>Artisans Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="/">Home</a></li>
            @if (Auth::check())
              <li role="presentation"><a href="{{ route('post.create') }}">New</a></li>
              <li role="presentation"><a href="/auth/logout">Logout</a></li>
            @else
              <li role="presentation"><a href="/auth/login">Login</a></li>
              <li role="presentation"><a href="/auth/register">Register</a></li>
            @endif
          </ul>
        </nav>
        <h3 class="text-muted">Artisans Blog</h3>
      </div>
      
      <div class="row marketing">
        @yield('content')
      </div>

      <footer class="footer">
        <p>&copy; MPHPA {{ date('Y') }}</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
