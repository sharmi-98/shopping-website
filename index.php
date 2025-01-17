<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Shopping Website</title>
  <style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f9;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}

.login-box {
  background-color: #fff;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  width: 300px;
  text-align: center;
}

h2 {
  margin-bottom: 20px;
  color: #333;
}

.textbox {
  margin-bottom: 15px;
}

.textbox input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 4px;
  outline: none;
  font-size: 16px;
}

.textbox input:focus {
  border-color: #007bff;
}

.remember {
  margin-bottom: 20px;
  text-align: left;
}

.remember label {
  font-size: 14px;
}

.btn-container {
  margin-bottom: 15px;
}

.btn {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  border: none;
  border-radius: 4px;
  color: white;
  font-size: 16px;
  cursor: pointer;
}

.btn:hover {
  background-color: #0056b3;
}

.links {
  display: flex;
  justify-content: space-between;
}

.links a {
  color: #007bff;
  font-size: 14px;
  text-decoration: none;
}

.links a:hover {
  text-decoration: underline;
}

</style>
</head>
<body>
  <div class="login-container">
    <div class="login-box">
      <h2>Login</h2>
      <form action="login.php" method="POST">
        <div class="textbox">
          <input type="email" placeholder="Email" name="email" required>
        </div>
        <div class="textbox">
          <input type="password" placeholder="Password" name="password" required>
        </div>
        <div class="remember">
          <label><input type="checkbox"> Remember me</label>
        </div>
        <div class="btn-container">
          <button type="submit" class="btn">Login</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
