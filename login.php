<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Honda</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/login.css" />
</head>

<body>
  <div class="header">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
        <div class="HeaderHeading">
          <h2>E-PAY</h2>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="HeaderMenu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Get Bills</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Helpline</a></li>
            <li><a href="login.php">Admin Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="ProductItem">
      <div class="HeaderHeading">
        <h2>Login - Admin Dashboard</h2>
      </div>
      <br />
      <br />
      <div class="LoginForm">
        <form method="POST" action="actions/auth.php">
          <input placeholder="Enter the username:" name="Username" />
          <input placeholder="Enter the Password:" name="Password" type="password" />
          <input type="submit" name="submit" />
        </form>
      </div>
    </div>
  </div>
  <div class="FooterSec">
    <h4>© 2022 Copyright: EPAYLBILL.COM</h4>
  </div>
</body>

</html>