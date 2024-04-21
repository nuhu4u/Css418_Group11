<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="indexstyle.css">
  <title>Login</title>
</head>
<body>
  <main>
    <section>
      <img src="fut.png" alt="futninna" id="futpng">
      <div id="FEDERAL">FEDERAL UNIVERSITY OF TECHNOLOGY, MINNA</div>
    </section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-6">
          <form action="slogin.php" method="POST" id="login-form">
            <div class="form-group">
              <label for="matric-number">Student ID</label>
              <input type="text" class="form-control" id="matric-number" name="matric-number" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>
          <div id="message"></div>
          <div class="text-center mt-3">
            <a href="forgot-password.html" id="forgot-password-link">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
  </main>
 
</body>
</html>
