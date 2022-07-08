<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>E-Pay</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
  <div class="header">
    <div class="row">
      <?php
      if (isset($_GET['messege'])) {
      ?>
        <h1>Record Not Found !!</h1>
      <?php
      } else {
      ?>
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
      <?php } ?>
    </div>
  </div>
  <div class="banner">
    <div class="bannerText">
      <h2>THE 2022 BMW R 18</h2>
      <h2>STARTING AT $15,995 MSRP</h2>
      <h2>
        <button>Discover More</button>
      </h2>
    </div>
  </div>
  <div class="MainBillSec">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="ProductHeading">
          <h2>Check You Bill Online Now !!</h2>
        </div>
        <div class="CheckBillForm container">
          <form method="GET" action="actions/searchaction.php">
            <input placeholder="Enter Bill id" name="refid" />
            <button type="submit" name="submit">Check Bill</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="contactSec">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="ProductHeading">
          <h2 style="color: #635666">Feel Free To Contact Us</h2>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="ContactInfo">
          <h3>Address</h3>
          <h4>Sukreek NF12,<br> New Wall Street, NY 061</h4>
          <h4>123-456-7890</h4><br>
          <h3>Phone</h3>
          <h4>123-456-7890</h4>
          <h4>123-456-7890</h4><br>
          <h3>Email</h3>
          <h4>contact@epaybill.com</h4>
          <h4>helpline@epaybill.com</h4>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="contactForm">
          <input placeholder="Name" />
          <input placeholder="Email" />
          <textarea rows="10" cols="5" placeholder="Please Enter Your Messege"></textarea>
          <button>Send</button>
        </div>
      </div>
    </div>
  </div>
  <div class="FooterSec">
    <h4>© 2022 Copyright: EPAYLBILL.COM</h4>
  </div>
</body>

</html>