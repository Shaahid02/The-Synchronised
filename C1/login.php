<?php
session_start();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Set the session variable to indicate that the user is logged in
  $_SESSION['logged_in'] = true;

  // Redirect to the home page or dashboard
  header('Location: dashboard(C1).php');
  exit();

}

?>

<!-- Display the login form with any error messages -->
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    .login-form {
  max-width: 400px;
  margin: 0 auto;
  text-align: center;
  padding: 20px;
  background-color: #f7f7f7;
  border: 1px solid #ddd;
}
.login-form input[type=text],
.login-form input[type=password] {
  display: block;
  margin: 10px auto;
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 3px;
}
.login-form input[type=submit] {
  display: block;
  margin: 20px auto 0;
  padding: 10px 20px;
  background-color: #0073aa;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}
.login-form input[type=submit]:hover {
  background-color: #005e8d;
}
  </style>
</head>
<body>

  <div class="login-form">
    <form name="loginform" id="loginform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" class="input" value="" />
      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="input" value="" />
      <input type="submit" name="submit" id="submit" value="Log In" />
    </form>
  </div>

</body>
</html>
