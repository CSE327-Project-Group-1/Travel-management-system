<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hotel_booking.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav>
      <li class="active">

      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Cse299Project</label>
      <ul>

        <li><p><?php
                      session_start();
                      echo "Welcome " .$_SESSION["emailID"];
               ?>
            </p></li>
      </ul>
    </nav>

<?php
require 'connections.php';


$result=mysqli_query($conn,$sql1);
      if (mysqli_num_rows($result)>0) {
            while ($row = mysqli_fetch_assoc($result)) {
echo "<h1><b>$row[package_name]</b></h1>";
          echo '
              <table>
                    <tr>
                      <td>City:</td> <td>''</td>
                    </tr>
                    <tr>
                      <td>Places to visit:</td> <td>''</td>
                    </tr>
                    <tr>
                      <td>Cost:</td> <td>'' BDT</td>
                    </tr>
                    <tr>
                      <td>Duration:</td> <td>'' Days</td>
                    </tr>
                    <tr>
                      <td>Hotel:</td> <td>''</td>
                    </tr>
                    <tr>
                      <td>Guide Name:</td> <td>'' ''</td>
                    </tr>
                    <tr>
                    <a href=""><button class="button"><span>Book Now!</span></button></a>
                    </tr>
              </table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
            }
        }
?>

</body>
</html>


<?php include 'footer.php'; ?>
