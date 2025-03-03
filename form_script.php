<?php

//Make short Variable names
$firstName = $_REQUEST['first_name_field'];
$lastName = $_REQUEST['last_name_field'];
$phone = $_REQUEST['phone_field'];
$email = $_REQUEST['email_field'];
$comments = $_REQUEST['comments_field'];
$gender = $_REQUEST['gender_field'];
$available = $_REQUEST['available_field'];
$age = $_REQUEST['age_field'];
$hidden = $_REQUEST['hidden_field'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab Processing Script</title>
</head>
<body>
  <div>
    <h2>Lab Processing Script</h2>
    <p>This page will display the results of the form that was submitted to it</p>
</div>
  <h1>Thank you for your Lab form submission, <?php echo htmlentities($firstName) ?>!</h1>
  <div class="box">
  <h2>This section contains the information provided in the my info section:</h2>
    <p><strong> First Name:</strong><?php echo htmlentities($firstName) ?></p>
    <p><strong>Last Name:</strong> <?php echo htmlentities($lastName) ?></p>
    <p><strong>Phone Number:</strong> <?php echo htmlentities($phone) ?></p>
    <p><strong>Email Address:</strong> <?php echo htmlentities($email) ?></p>
    <p><strong>Gender:</strong> <?php echo htmlentities($gender) ?></p>
    <p><strong>Age:</strong> <?php echo htmlentities($age) ?></p>
  </div>
  <div>
  <h2>This section contains the information provided in the availibility section:</h2>
  <h3>Days Selected as Available:</h3>
  </div>
</body>