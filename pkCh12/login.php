<?php include 'conn.php';?>
<?php
    session_start();
    $message = "";

    if(count($_POST)>0){
        $conn = new mysqli($hostname, $username, $password ,$dbname);
        $result = mysqli_query($conn,"SELECT * FROM login_user
        WHERE userName ='". $_POST["userName"]  . "'
        and password = '" . $_POST["passWord"]."'");
        $row = mysqli_fetch_array($result);
        if(is_array($row)){
            $_SESSION["id"] = $row['userID'];
            $_SESSION["name"] = $row['userName'];
        } else {
            $message = "Invalid Username or Password!";

        }
    }
    if (isset($_SESSION["id"])) {
        header("Localtion:listofbook2.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>

<body>
      <form name="frmUser" method="post" action="" align="center">
      <div class="message"><?php if ($message!="")  {echo $message;}?>
      </div>
      <h3 align ="center">Enter Login Details</h3>Username:<br>
      <input type="text" name="userName"><br>Password:<br>
      <input type="password" name="passWord">
      <br><br>
      <input type="submit" name="submit" value="Submit">
      <input type="reset">
      </form>

</body>

</html>