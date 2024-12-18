<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center align-item-center">
      <div class="col-md-6">
        <div class="form-container">
          <h2 class="text-center mb-4">Login Form</h2>
          <form action="loginAction.php" method="post">
            <div class="form-group">
              <label for="name">Username</label>
              <input type="text" class="form-control" id="username" name="l_username" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="l_password" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
            <p style="text-align: center;">Already registered? <a href="../Register/register.php">Click here</a> for Register</p>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
