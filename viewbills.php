<?php
session_start();
if ($_SESSION["user"] == 'yes') {
?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E-Pay</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/adminstyle.css" />
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
    <div class="AdminSection">
      <div class="hig row">
        <div class="hig col-lg-3 col-md-2 col-sm-12 col-xs-12">
          <div class="AdminMenu">
            <ul>
              <li><a href="viewbills.php">Home</a></li>
              <li><a href="addbills.php">Add Bills</a></li>
              <li><a href="#">Contact Messege</a></li>
              <li><a href="actions/auth.php?logout=yes">Logout</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-9 col-md-10 col-sm-12 col-xs-12">
          <div class="viewbills">
            <div class="ViewProductSec">
              <div class="SingleProductRow ROWHEADINGS">
                <div class="row">
                  <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
                    <h6>Referrence</h6>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
                    <h6>Consumer name</h6>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
                    <h6>Units</h6>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
                    <h6>Electricity Fee</h6>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-3 col-xs-3">
                    <h6>Actions</h6>
                  </div>
                </div>
              </div>
            </div>
            <?php
            include "actions/connection.php";
            $sql = "SELECT * FROM bills";
            $result = mysqli_query($conn, $sql);
            while ($rows = mysqli_fetch_assoc($result)) { ?>
              <div class="SingleProductRow">
                <div class="row">
                  <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
                    <h6><?php echo $rows['refid'] ?></h6>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
                    <h6><?php echo $rows['name'] ?></h6>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
                    <h6><?php echo $rows['unit'] ?></h6>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
                    <h6><?php echo $rows['fee'] ?></h6>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-3 col-xs-3">
                    <a href="singlebill.php?id=<?php echo $rows['id']; ?>"><button>View</button></a>
                    <a href="updatebill.php?id=<?php echo $rows['id']; ?>"><button>Update</button></a>
                    <a href="actions/deleteaction.php?id=<?php echo $rows['id']; ?>"><button>Delete</button></a>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="FooterSec">
      <h4>© 2022 Copyright: EPAYLBILL.COM</h4>
    </div>
  </body>

  </html>

<?php
} else {
  header("Location: login.php");
}
?>