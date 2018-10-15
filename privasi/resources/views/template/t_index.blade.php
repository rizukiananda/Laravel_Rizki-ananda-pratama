<!doctype html>
<html>
    <head>
        
        <title>Laravel 5.6</title>
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE-edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
    
		{!! Html::style('assets/css/bootstrap.min.css') !!} 
	
    </head>
    <body style='background-color:#F8F8FF;'>
	
	@yield('content')
	
	{!! HTML::script('assets/js/jquery.min.js') !!}
	{!! HTML::script('assets/js/bootstrap.min.js') !!}
	</body>
</html>
