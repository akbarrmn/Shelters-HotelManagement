<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/login.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	<title>Halaman Login</title>
</head>

<body>
	<div class="container mt-5" id="container">
		<div class="form-container sign-up-container mt-2">
			<form action="#">
				<h1 class="font-weight-bold">Create Account</h1><br>
				<input type="text" placeholder="Name" /><br>
				<input type="email" placeholder="Email" /><br>
				<input type="password" placeholder="Password" /><br>
				<button class="btn btn-secondary btn-rounded">Sign up</button>
			</form>
		</div>

		<div class="form-container sign-in-container">
			<form action="#">
				<h1 class="font-weight-bold">Sign in</h1><br>
				<input type="email" placeholder="Email" /> <br>
				<input type="password" placeholder="Password" /><br>
				<button class="btn btn-secondary btn-rounded ">Sign In</button>
			</form>
		</div>

		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1 class="font-weight-bold">Good to see you!<h1>
							<p>You already have an account? <br>Sign in!</p>
							<button class="but" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1 class="font-weight-bold">Hello, Friend!</h1>
					<p>You don't have account yet? Don't worry! You still can join us</p>
					<button class="but" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
	<script>
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add('right-panel-active');
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove('right-panel-active');
		});
	</script>
</body>

</html>