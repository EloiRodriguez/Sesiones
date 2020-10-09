<!DOCTYPE html>
<html>
<style>
input[type=text], input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<h2>Login session</h2>
<div>
  <form action="services/login.proc.php" method="POST">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email.." required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Introduce your password.." required>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
