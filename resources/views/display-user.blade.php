<!DOCTYPE html>
<html>
<head>
	<title>Display User</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div class="container">
		<p>{{ $user->firstname }}</p>
		<p>{{ $user->lastname }}</p>
		<p>{{ $user->email }}</p>
		<p>{{ $user->password }}</p>
	</div>
</body>
</html>