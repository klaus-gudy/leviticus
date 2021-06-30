<?php
  session_start();
  include "db.php";

?>
<?php
   if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobilenumber = $_POST['mobilenumber'];
    $cv = $_POST['cv'];
    $socialmedia = $_POST['socialmedia'];

    $query = "INSERT INTO users (fname, mname, sname, uname, email, pword, mobile, cv, media) VALUES('$firstname','$middlename','$surname','$username','$email','$password','$mobilenumber','$cv','$socialmedia')";

    $insertdata = mysqli_query($conn , $query);

    if(!$insertdata){
      echo "inserting data into the base failed";
    }else{
      echo '<script type="text/javascript">alert("Registration Successful!");</script>';
      header("Location:course.php");
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
    <div class="register">
      <h2 style="font-size:50px;">register</h2>
      <form class="form" action="register.php" method="post">
        <p>first name</p>
        <input type="text" id="fname" pattern="[a-z]{1,15}" name="firstname" required>
        <p>middle name</p>
        <input type="text" id="mname" pattern="[a-z]{1,15}" name="middlename" required>
        <p>surname</p>
        <input type="text" id="sname" pattern="[a-z]{1,15}" name="surname" required>
        <p>user name</p>
        <input type="text" id=uname"" pattern="[a-z]{1,15}" name="username" required>
        <p>email</p>
        <input type="email" id="email" name="email" required>
        <p>password</p>
        <input type="password" id="pword"name="password" required>
        <p>mobile number</p>
        <input type="number" id="number"name="mobilenumber" required>
        <p>cv</p>
        <input type="file" id="cv"name="cv">
        <p>social media</p>
        <input type="text" id="media"name="socialmedia" required>
         <br>
        <button type="submit" name="submit" value="submit" onclick="validate()">register</button>
      </form>
    </div>
    <script type="text/javascript">
    function validate(){
      var myemail = document.getElementById("email").value;
      var mypassword = document.getElementById("pword").value;
      var e = myemail.indexOf("@");
      var f = myemail.indexOf(".");

      if(e < 1 || (f-e) < 2){
        alert("enter a valid email");
      }
      if(mypassword.length <= 5){
        alert("password too short");
      }
      if(mypassword.length >= 20){
        alert("password too long");
      }

    }

    </script>
  </body>
</html>
