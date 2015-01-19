<html lang="en">
	<head>
		<title>Test Pagina</title>
	</head>

	<body>
		@include('includes.error')

		<form method="POST" action={{ URL::to('/login') }}>
			<input type="text" name="gebruikersnaam">
			<input type="password" name="wachtwoord">
			<input type="submit" value="Log in">
		</form>
	</body>
</html>