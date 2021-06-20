<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>
            @yield('title')
        </title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        
        <link rel="shortcut icon" href="{{env('ROOT')."/favicon.ico"}}">

	</head>
    
<body>

    @include('layouts.header')

    <!-- CONTENT START -->
    @yield('content')
    <!-- CONTENT END -->
    
    <!-- FOOTER START -->
    @include('layouts.footer')
    <!-- FOOTER END -->
    
    </body>
    
</html>