<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','Developers Best Friend')
    </title>
		  <link href="/css/p3.css" type='text/css' rel='stylesheet'>
    <meta charset='utf-8'>


    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>
<div id="wrap">
 	<div id="main" class="container clear-top">
    <header>
        <div class="jumbotron">
  			  <h1>Developers Best Friend</h1>
  			  <p>Use this site to create place holder text or place holder users. We all need to fake it sometimes - this just makes it easier</p> 
 		 </div>
    </header>

    <section>
         @yield('content')
    </section>

   	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type='text/css' property='stylesheet'>

  		  {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
  	  @yield('body')
	</div>
</div>

 <nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container text-center">
      &copy; {{ date('Y') }}
  </div>
</nav>


</body>
</html>