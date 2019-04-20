 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Seem')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    @yield('content')
    <ul>
    	<li><a href = "/">Home</a></li>
        <li><a href = "/contact">Contact</a></li>
        <li><a href = "/about">About</a></li>
    </ul>
</body>
</html>
