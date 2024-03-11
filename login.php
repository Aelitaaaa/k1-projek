<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="login-container">
    <h2>Login Admin</h2>
    <form action="login_process.php" method="POST">
      <div class="form-group">
        <label for="username">
          <img src="icon/user (2).png" alt="User Icon" class="icon">
        </label>
        <input type="text" id="username" name="username" placeholder="Username" required>
      </div>
      <div class="form-group">
        <label for="password">
        </label>
        <input type="password" id="password" name="password" placeholder="Password" required>
      </div>
      <button type="submit" name="login">Login</button>
    </form>
  </div>
</body>
</html>
