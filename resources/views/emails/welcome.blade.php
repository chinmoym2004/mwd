<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Hey {{$name}},

	Click the link to activate account and get email verified <a href="{{url('auth/verification?type='.$email.'&token='.$token)}}">VERIFY NOW</a>

</body>
</html>