<?php
if (isset($_GET['id'])) {

  include "actions/connection.php";
  $UpdateID = $_GET['id'];
  $sql = "SELECT * FROM bills where id = $UpdateID";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    $row = mysqli_fetch_assoc($result);
    $p = is_int($row['fee']);
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
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script>
    function PrintPage(){
      window.print();
    }
  </script>
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
    <div class="MainBillSheet">
      <table>
        <tr>
          <th>Connection Date</th>
          <th>Bill Month</th>
          <th>Reading Date</th>
          <th>Issue Date</th>
          <th>Due Date</th>
        </tr>
        <tr>
          <td>12-4-2020</td>
          <td><?php echo $row['billmonth']; ?></td>
          <td>12-4-2022</td>
          <td>20-6-2022</td>
          <td><?php echo $row['duedate']; ?></td>
        </tr>
        <tr>
          <th>Consumer ID</th>
          <th>Referrence ID</th>
          <th>Division</th>
          <th colspan="2">City</th>
        </tr>
        <tr>
          <td><?php echo $row['conid']; ?></td>
          <td><?php echo $row['refid']; ?> - UB</td>
          <td><?php echo $row['division']; ?></td>
          <td colspan="2"><?php echo $row['city']; ?></td>
        </tr>
        <tr>
          <th>Name</th>
          <th>Address</th>
          <th colspan="3" rowspan="2">
            <img class="MeterImage" src="<?php echo $row['imageurl']; ?>">
          </th>
        </tr>
        <tr>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['address']; ?>, <br> <?php echo $row['city']; ?>, <?php echo $row['division']; ?> Pakistan</td>
        </tr>
        <tr>
          <th>Meter No</th>
          <th>Previous Reading</th>
          <th>Current Reading</th>
          <th>Units</th>
          <th>TV Fee</th>
        </tr>
        <tr>
          <td>8790325</td>
          <td>8721</td>
          <td>8745</td>
          <td><?php echo $row['unit']; ?></td>
          <td>Rs. 33</td>
        </tr>
        <tr>
          <th>Electric Bill</th>
          <td>Rs <?php echo $row['fee']; ?></td>
          <th>Due Date</th>
          <td colspan="2"><?php echo $row['duedate']; ?></td>
        </tr>
        <tr>
          <th>Mepco Changes</th>
          <td>Rs 1022</td>
          <th rowspan="2">Bill In Due Date</th>
          <td colspan="2" rowspan="2">Rs 6799</td>
        </tr>
        <tr>
          <th>Govt Tax</th>
          <td>Rs 426</td>
        </tr>
        <tr>
          <th>Total</th>
          <td>Rs <?php echo $row['fee']; ?></td>
          <th>Bill After Due Date</th>
          <td colspan="2">Rs <?php echo $p + 321; ?></td>
        </tr>
        <tr>
          <td colspan="5">Please make sure you pay the bill <br> with out authorized partner,<br> For more information & complaints contact 030400000</td>
        </tr>
        <tr>
          <th>Meter No</th>
          <th>Due Date</th>
          <th>Bill In Due Date</th>
          <th colspan="2">After Due Date</th>
        </tr>
        <tr>
          <td>8790325</td>
          <td>8721</td>
          <td>Rs <?php echo $p; ?></td>
          <td colspan="2">Rs <?php echo $p + 321; ?></td>
        </tr>
      </table>
      <button style="background-color: #635666; color:white; width: 20%; margin: 10px 0px;" onclick="PrintPage();">Print Bill</button>
    </div>
  </div>
  <div class="MainBillSec">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="ProductHeading">
          <h2>Check You Bill Online Now !!</h2>
        </div>
        <div class="CheckBillForm container">
          <form>
            <input placeholder="Enter Bill id" />
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
          <h4>
            Sukreek NF12,<br />
            New Wall Street, NY 061
          </h4>
          <h4>123-456-7890</h4>
          <br />
          <h3>Phone</h3>
          <h4>123-456-7890</h4>
          <h4>123-456-7890</h4>
          <br />
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