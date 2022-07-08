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
              <li>Get Bills</li>
              <li>Service</li>
              <li>Helpline</li>
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
          <div class="AddNewBill">
            <form method="POST" action="actions/insertaction.php" enctype="multipart/form-data">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <select name="billmonth">
                    <option value="JAN">Jan</option>
                    <option value="FEB">FEB</option>
                    <option value="MAR">MAR</option>
                    <option value="APR">APR</option>
                    <option value="MAY">MAY</option>
                    <option value="JUN">JUN</option>
                    <option value="JUL">JUL</option>
                    <option value="AUG">AUG</option>
                    <option value="SEP">SEP</option>
                    <option value="OCT">OCT</option>
                    <option value="NOV">NOV</option>
                    <option value="DEC">DEC</option>
                  </select>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <input name="duedate" placeholder="Due Date - DD-MM-YYYY" />
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <select name="conid">
                    <option value="null">Consumer ID</option>
                    <option value="FA19M2BA080">FA19M2BA080</option>
                    <option value="FA19M2BA081">FA19M2BA081</option>
                    <option value="FA19M2BA082">FA19M2BA083</option>
                    <option value="FA19M2BA083">FA19M2BA084</option>
                    <option value="FA19M2BA084">FA19M2BA085</option>
                  </select>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <select name="refid">
                    <option name="null">Referrence ID</option>
                    <option value="FA19M2BA080">FA19M2BA080</option>
                    <option value="FA19M2BA081">FA19M2BA081</option>
                    <option value="FA19M2BA082">FA19M2BA083</option>
                    <option value="FA19M2BA083">FA19M2BA084</option>
                    <option value="FA19M2BA084">FA19M2BA085</option>
                  </select>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <select name="division">
                    <option value="null">Division</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Bahawalpur">Bahawalpur</option>
                    <option value="Multan">Multan</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Peshawar">Peshawar</option>
                  </select>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <select name="city">
                    <option value="null">City</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Bahawalpur">Bahawalpur</option>
                    <option value="Multan">Multan</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Peshawar">Peshawar</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <input placeholder="Full Name" name="name" />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <input placeholder="Address" name="address" />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <input placeholder="Units" name="unit" />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <input placeholder="Bill Fee" name="fee" />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <label>Upload Bill Picture</label>
                  <input type="file" name="billfile" />
                </div>
              </div>
              <div class="row">
                <div class="submitBtn">
                  <button type="submit">ADD</button>
                </div>
              </div>
            </form>
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