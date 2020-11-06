<?php session_start(); /* Starts the session */
/* Check Login form submitted */if(isset($_POST['Submit'])){
/* Define username and associated password array */$logins = array('Omer' => 'narbonne','username1' => 'password1','username2' => 'password2');

/* Check and assign submitted Username and Password to new variable */$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Username and Password existence in defined array */if (isset($logins[$Username]) && $logins[$Username] == $Password){
/* Success: Set session variables and redirect to Protected page  */$_SESSION['UserData']['Username']=$logins[$Username];
header("location:index.php");
exit;
} else {
/*Unsuccessful attempt: Set error message */$msg="<span style='color:red'>Invalid Login Details</span>";
}
}
?>



<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="post" name="Login_Form">
  <table width="400" border="25px" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="center" valign="top"><h3>My Login Page </h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Login Here</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">write your Pass</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit"  style="font-face: 'Comic Sans MS'; font-size: larger; color: teal; background-color: #FFFFC0; border: 3pt ridge lightgrey, value="Submit" class="Button3"></td>
    </tr>
  </table>
</form>
</body>
