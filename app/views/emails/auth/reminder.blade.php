<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<p>
			To reset your password, complete this form: {{ URL::to(handles("orchestra/foundation::forgot/reset/{$token}")) }}.
		</p>
	</body>
</html>
