<?php
session_start();
if ($_SESSION["user"] == 'yes') {
  if (isset($_GET['id'])) {

    include "actions/connection.php";
    $UpdateID = $_GET['id'];
    $sql = "SELECT * FROM bills where id = $UpdateID";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $row = mysqli_fetch_assoc($result);
    }
  }
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
          <div class="AddNewBill">
            <form method="POST" action="actions/updateaction.php?id=<?php echo $row['id'] ?>">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <select name="billmonth">
                    <option value="JAN" <?php if ($row['billmonth'] == "JAN") {
                                          echo 'selected';
                                        } ?>>Jan</option>
                    <option value="FEB" <?php if ($row['billmonth'] == "FEB") {
                                          echo 'selected';
                                        } ?>>FEB</option>
                    <option value="MAR" <?php if ($row['billmonth'] == "MAR") {
                                          echo 'selected';
                                        } ?>>MAR</option>
                    <option value="APR" <?php if ($row['billmonth'] == "APR") {
                                          echo 'selected';
                                        } ?>>APR</option>
                    <option value="MAY" <?php if ($row['billmonth'] == "MAY") {
                                          echo 'selected';
                                        } ?>>MAY</option>
                    <option value="JUN" <?php if ($row['billmonth'] == "JUN") {
                                          echo 'selected';
                                        } ?>>JUN</option>
                    <option value="JUL" <?php if ($row['billmonth'] == "JUL") {
                                          echo 'selected';
                                        } ?>>JUL</option>
                    <option value="AUG" <?php if ($row['billmonth'] == "AUG") {
                                          echo 'selected';
                                        } ?>>AUG</option>
                    <option value="SEP" <?php if ($row['billmonth'] == "SEP") {
                                          echo 'selected';
                                        } ?>>SEP</option>
                    <option value="OCT" <?php if ($row['billmonth'] == "OCT") {
                                          echo 'selected';
                                        } ?>>OCT</option>
                    <option value="NOV" <?php if ($row['billmonth'] == "NOV") {
                                          echo 'selected';
                                        } ?>>NOV</option>
                    <option value="DEC" <?php if ($row['billmonth'] == "DEC") {
                                          echo 'selected';
                                        } ?>>DEC</option>
                  </select>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <input name="duedate" placeholder="Due Date - DD-MM-YYYY" value="<?php echo $row['duedate']; ?>" />
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <select name="conid">
                    <option value="null">Consumer ID</option>
                    <option value="FA19M2BA080" <?php if ($row['conid'] == "FA19M2BA080") {
                                                  echo 'selected';
                                                } ?>>FA19M2BA080</option>
                    <option value="FA19M2BA081" <?php if ($row['conid'] == "FA19M2BA081") {
                                                  echo 'selected';
                                                } ?>>FA19M2BA081</option>
                    <option value="FA19M2BA082" <?php if ($row['conid'] == "FA19M2BA082") {
                                                  echo 'selected';
                                                } ?>>FA19M2BA083</option>
                    <option value="FA19M2BA083" <?php if ($row['conid'] == "FA19M2BA083") {
                                                  echo 'selected';
                                                } ?>>FA19M2BA084</option>
                    <option value="FA19M2BA084" <?php if ($row['conid'] == "FA19M2BA084") {
                                                  echo 'selected';
                                                } ?>>FA19M2BA085</option>
                  </select>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <select name="refid">
                    <option name="null">Referrence ID</option>
                    <option value="FA19M2BA080" <?php if ($row['refid'] == "FA19M2BA080") {
                                                  echo 'selected';
                                                } ?>>FA19M2BA080</option>
                    <option value="FA19M2BA081" <?php if ($row['refid'] == "FA19M2BA081") {
                                                  echo 'selected';
                                                } ?>>FA19M2BA081</option>
                    <option value="FA19M2BA082" <?php if ($row['refid'] == "FA19M2BA082") {
                                                  echo 'selected';
                                                } ?>>FA19M2BA083</option>
                    <option value="FA19M2BA083" <?php if ($row['refid'] == "FA19M2BA083") {
                                                  echo 'selected';
                                                } ?>>FA19M2BA084</option>
                    <option value="FA19M2BA084" <?php if ($row['refid'] == "FA19M2BA084") {
                                                  echo 'selected';
                                                } ?>>FA19M2BA085</option>
                  </select>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <select name="division">
                    <option <?php if ($row['division'] == "null") {
                              echo 'selected';
                            } ?> value="null">Division</option>
                    <option <?php if ($row['division'] == "Lahore") {
                              echo 'selected';
                            } ?> value="Lahore">Lahore</option>
                    <option <?php if ($row['division'] == "Bahawalpur") {
                              echo 'selected';
                            } ?> value="Bahawalpur">Bahawalpur</option>
                    <option <?php if ($row['division'] == "Multan") {
                              echo 'selected';
                            } ?> value="Multan">Multan</option>
                    <option <?php if ($row['division'] == "Karachi") {
                              echo 'selected';
                            } ?> value="Karachi">Karachi</option>
                    <option <?php if ($row['division'] == "Peshawar") {
                              echo 'selected';
                            } ?> value="Peshawar">Peshawar</option>
                  </select>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <select name="city">
                    <option <?php if ($row['city'] == "null") {
                              echo 'selected';
                            } ?> value="null">City</option>
                    <option <?php if ($row['city'] == "Lahore") {
                              echo 'selected';
                            } ?> value="Lahore">Lahore</option>
                    <option <?php if ($row['city'] == "Bahawalpur") {
                              echo 'selected';
                            } ?> value="Bahawalpur">Bahawalpur</option>
                    <option <?php if ($row['city'] == "Multan") {
                              echo 'selected';
                            } ?> value="Multan">Multan</option>
                    <option <?php if ($row['city'] == "Karachi") {
                              echo 'selected';
                            } ?> value="Karachi">Karachi</option>
                    <option <?php if ($row['city'] == "Peshawar") {
                              echo 'selected';
                            } ?> value="Peshawar">Peshawar</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <input placeholder="Full Name" name="name" value="<?php echo $row['name']; ?>" />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <input placeholder="Address" name="address" value="<?php echo $row['address']; ?>" />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <input placeholder="Units" name="unit" value="<?php echo $row['unit']; ?>" />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <input placeholder="Bill Fee" name="fee" value="<?php echo $row['fee']; ?>" />
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