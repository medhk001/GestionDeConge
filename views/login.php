<?php

if(isset($_POST['submit'])){
    $auth = new AuthController();
    $auth->auth();
}
// else {
// 	die(print_r($_POST));
// }

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
  <link rel="stylesheet" href="./public/styleLogin.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<?php include ('./views/includes/alerts.php');?>
		<div class="screen__content">
			<form class="login" method="post">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="Matricul" placeholder="Matricul">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" name="Password" placeholder="Password">
				</div>
				<button name="submit" class="button login__submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>  
</body>
</html>
