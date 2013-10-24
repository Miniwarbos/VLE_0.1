<?php 
include 'core/init.php';
include 'includes/overall/header.php';
?>
  <link href="styles/signin.css" rel="stylesheet">
	<img src="styles/img/bg.jpg" class="bg">
    <div class="container">
      <form class="form-signin" action='login.php' method='PST'>
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name='username' class="form-control" placeholder="username" autofocus>
        <input type="password" name='password' class="form-control" placeholder="password">
        <button class="btn btn-lg btn-primary btn-block" value='log in' type="submit">Sign in</button>
      </form>
    </div>
<?php include 'includes/overall/footer.php'; ?>