<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <link rel="stylesheet" href="dashboard.css">

    <style>
        /* width */
        ::-webkit-scrollbar {
          width: 10px;
        }
        
        /* Track */
        ::-webkit-scrollbar-track {
          background: #f1f1f1; 
        }
         
        /* Handle */
        ::-webkit-scrollbar-thumb {
          background: #888; 
        }
        
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
          background: #555; 
        }
        </style>

</head>
<body>



<section id="first_sec">

<nav>


  <div class="img"> </div> 


    <ul>
    <li><a href="../Home/home.html">Home</a></li>
        <li><a href="../expertise/expertise.html">Our Expertise</a></li>
        <li><a href="../classes/class.html">Training Sessions</a></li>
        <li><a href="../Instructor/instructor.html">Meet The Team</a></li>
        <li><a href="../ContactUs/contact.html">Contact us</a></li>
        <li><a href="../About us/about.html">About us</a></li>
      <button type="button" onclick="logout()">LOG OUT</button>
  
</ul>
</nav>

<Section id="intro_page">

<?php
session_start(); // Start the session

if (!isset($_SESSION['user_id'])) {
    // If the user is not authenticated, redirect to the login page
    header('Location: login.html');
    exit();
}

// User is authenticated, proceed to display the dashboard
$userId = $_SESSION['user_id'];

include 'db.php';

// Query the database to retrieve user information based on $userId
$sql = "SELECT * FROM userDetail WHERE id = $userId";
$result = mysqli_query($con, $sql);

if ($result && $row = mysqli_fetch_assoc($result)) {
  
    // Display user information
    
    echo "<h1>Welcome to Your Dashboard</h1>";
    echo "<div class='userInfo'>";
    echo "<h3>User Profile</h3>";
    echo "<p><span>Name:</span> " . $row['Name'] . "</p>";
    echo "<p><span>Email:</span> " . $row['Email'] . "</p>";
    echo "<p><span>Contact Number:</span> " . $row['Phone'] ."<span><a href='update_number_form.php?ID=$userId'>Edit</a></span>". "</p>";
    echo "<p><span>Membership Plan:</span> " . $row['Plan'] ."<span><a href='update_plan_form.php?ID=$userId'>Edit</a> </span>". "</p>";
    echo'<hr>';
    echo'</div>';
}
?>


</Section>
</section>


<script>
  function logout(){
    window.location.href= 'logout.php';
  }
</script>

</body>
</html>

  
