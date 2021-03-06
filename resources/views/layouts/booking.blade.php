<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booking.css">

  </head>
  <body>
    <nav>
      <label class="logo">CSE327Project</label>
      <ul>
        <!--displayt the  links in navbar -->
        <li><a class="active" href="tourist_dashboard.php">Home</a></li>
        <li><a href="tourist_profile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><p><?php
                session_start();
                echo "<p style='color:white;'>" .$_SESSION["emailID"];
               ?>
           </p></li>
      </ul>
    </nav>


  <?php
  require 'connections.php';
 /*fetch data from database. showing the package details 
 here a user can watch package details and can proceed from here if the package is preferable*/
  $package_id= $_SESSION['package_id'];
  $useremail= $_SESSION["emailID"];
  $qur1= "SELECT *
          FROM transport
          WHERE transport.to 
          (SELECT package.destination
          FROM package
          WHERE package.package_id ='$package_id');";


  $sql=mysqli_query($conn,$qur1);

  $sql1 = "SELECT *
          FROM package p
          JOIN hotel h
          ON p.hotel_id = h.hotel_id
          JOIN city c
          ON c.city_id = h.city_id
          JOIN guide g
          ON p.guide_id = g.guide_id
          AND p.package_id = '$package_id'";

  $result=mysqli_query($conn,$sql1);
$row = mysqli_fetch_assoc($result);
      ?>

    
   <form  action="insert.php" method="POST">
     <br>
       <!--show the package name  from database-->
      <label for="package name"><b>...Your Package Name</b></label>
      <input type="text"  name="package_name" readonly value="<?php echo $row['package_name']; ?>" <br>

<br> 
       <!--show the guide name from database-->
      <label for="guide name"><b>...Your guide Name</b></label>
      <input type="text"  name="guide_firstName" readonly value="<?php echo $row['guide_firstName']; ?>" <br>

<br> 
      <!--show the hotel name from database -->
      <label for="hotel_name"><b>...Your hotel Name</b></label>
      <input type="text"  name="hotel_name" readonly value="<?php echo $row['hotel_name']; ?>" <br>

<br> 
      <!-- show the transportation from database, choose the transportation which is preferable to the user-->
      <label for="transport_id"><b>...Choose transport</b></label>
  <select input type="text"  name="transport_id" required>
    <?php
      while($row=mysqli_fetch_assoc($sql))
      {
    ?>  
      <!--show the preferred transportation name which is selected by an user-->
      <option value="<?php echo $row['transport_id']; ?>" ><?php echo $row['transport_name']; ?>(<?php echo $row['transport_type']; ?>)</option>
    <?php
      }
    ?>
  </select> <br>

<br>
      <label for="num_person"><b>...Number Of People</b></label>
      <input type="text" name="num_person" value="1" required><br>
   <!--choose the preferable date for travel-->
<label for="travel_date"><b>...travel_date</b></label><br>
<input type="date" name="travel_date" placeholder="travel_date" required><br>
<input type="submit" name="insert" value="submit">

  </form>
  <div>
  </div>
</body>
</html>