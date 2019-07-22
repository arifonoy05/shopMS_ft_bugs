<!DOCTYPE html>
<html>
  <head>
      <title>Registration Page</title>
      <!-- css -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/alphaq.css">
  </head>
  <body>
    <section class="log-reg">
      <h1>Register</h1>
      <form method="post" action="../control/regischeck.php">
        <table>
          <tr>
            <td>Username </td>
            <td><input type="text" name="uname"></td>
          </tr>
          <tr>
            <td>Password </td>
            <td><input type="password" name="pass"></td>
          </tr>
          <tr>
            <td>Email </td>
            <td><input type="email" name="email"></td>
          </tr>
          <tr>
            <td></td>
            <td><a href="login.php">Login</a><input type="submit" name="submit" value="Register"></td>
          </tr>
        </table>
      </form>
    </section>
  </body>

</html>