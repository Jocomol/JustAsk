<?php
session_start ();
?>

	<?php
	if (isset ( $_SESSION ['loggedin'] ) && $_SESSION ['loggedin'] == true) {
		echo "<p>You are logged as " . $_SESSION ['user'] ['name'] . "</p>";
	} else {

		?>

		<form class="form-signin" method="post" action="login-check.php">
			<h2 class="form-signin-heading">Please sign in</h2>
			<label for="inputEmail" class="sr-only">Email address</label>

			<input type="email" id="inputEmail" class="form-control"
				placeholder="Email address" name="username" required autofocus>

			<label
			for="inputPassword" class="sr-only">Password</label>

			<input
			type="password" name="password" id="inputPassword"
			class="form-control" placeholder="Password" required>

			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>


		<?php
	}
	?>
	</div>
	<!-- /container -->

</body>

</body>
</html>
