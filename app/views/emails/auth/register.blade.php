<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div>Hello {{ $user['fullname'] }}</div>

		<p>Thank you for registering with us, in order to login please use the following:</p>
		<p>E-mail Address: {{ $user['email'] }}</p>
		<p>Password: {{ $password }}</p>
	</body>
</html>
