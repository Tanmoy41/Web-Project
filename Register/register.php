<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="register.css">
</head>

<body>
  <div class="container mt-3">
    <div class="row justify-content-center align-item-center">
      <div class="col-md-6">
        <div class="form-container">
          <h2 class="text-center mb-4">Registration Form</h2>
          <form action="registerAction.php" method="post">
            <div class="form-group">
              <label for="fullname">Full Name</label>
              <input type="text" class="form-control" id="name" name="r_fullname" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="r_username" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="r_email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="r_password"
                placeholder="Enter your password">
            </div>
            <div class="form-group">
              <label for="confirm-password">Confirm Password</label>
              <input type="password" class="form-control" id="confirm-password" name="r_con_password"
                placeholder="Confirm your password">
            </div>
            <div class="form-group">
              <label for="name">Mobile No</label>
              <input type="tel" class="form-control" id="mob" name="r_mobile" placeholder="Enter your Mobile No">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
            <p style="text-align: center;">Already registered? <a href="../Login/login.php">Click here</a> for Login</p>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>