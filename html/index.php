<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>

<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  Thanks for visting our website page  todays message is (Love for All Hatred for none ) <a href="logout.php">Click here</a> to Logout.


</body>
