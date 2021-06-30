<?php
  session_start();
  include"db.php";
?>
<?php
  // $logged_user = 'uname';
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $login_username = $_POST['username'];
    $login_pass = $_POST['password'];

    $query = "SELECT uname FROM users WHERE uname= '$login_username' ";
    $username_results = mysqli_query($conn , $query);
    $username_row = mysqli_fetch_assoc($username_results);

    if($username_row){
      $query = "SELECT pword FROM users WHERE pword = '$login_pass'";
      $pass_results = mysqli_query($conn , $query);
      $pass_row = mysqli_fetch_assoc($pass_results);

        if($pass_row){
          // echo "Login Successful";
            // $_SESSION["id"] = $pass_row["id"];
            // $_SESSION["username"] = $username ;

            header("Location:welcome.php");
        }else{
          echo '<script type="text/javascript">alert("wrong password");</script>';
          // header("Location:about.html");
        }
    }else{
      echo '<script type="text/javascript">alert("user doesnt exist");</script>';
      // header("Location:about.html");
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>home</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="navigation">
      <div class="nav-logo">
        <h1>K</h1>
      </div>
      <nav class=nav-items>
        <ul>
          <li><a href="home.html">HOME</a></li>
          <li><a href="about.html">ABOUT ME</a></li>
          <li><a href="register.php">REGISTER</a></li>
          <li><a href="course.php">COURSES</a></li>
          <li><a href="cv.html">CV</a></li>
          <li><a href="contact.html">CONTACTS</a></li>
        </ul>
      </nav>
    </div>
    <div class="sign">
      <form class="" action="" method="post">
        <h2 style="font-size:50px;">SIGN IN</h2>
        <table class="" style="margin-left: auto; margin-right: auto; border: 1px solid black; margin-top:20px; width:500px; height: 100px;">
          <tr>
            <td>username</td>
            <td><input type="text" name="username"></td>
          </tr>
          <tr>
            <td>password</td>
            <td><input type="password" name="password"></td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: center;"><input type="submit" name="submit"></td>
          </tr>
        </table>

      </form>
    </div>
  </body>
</html>
