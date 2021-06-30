<?php
  session_start();
  include "db.php";

?>
<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $coursename = $_POST['coursename'];
    $code = $_POST['code'];
    $dep = $_POST['dep'];
    $sem = $_POST['sem'];
    $inst = $_POST['inst'];
    $result = $_POST['result'];
    $sec_id = $_SESSION['id'];

    $query = "INSERT INTO course (coursename, coursecode, coursedepart, semister, instructor, result, idsec) VALUES('$coursename','$code','$dep','$sem','$inst','$result','$sec_id')";

    $insertingdata = mysqli_query($conn, $query);

    if(!$insertingdata){
      echo "failed to insert codes";
    }else{
      echo '<script type="text/javascript">alert("data accepted Successful! ");</script>';
      header("Location:display.php");
    }

  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>welcome</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="navigation">
      <div class="nav-logo">
        <h1>K</h1>
      </div>
      <nav class=nav-items>
        <ul>
          <li><a href="welcome.php">WELCOME</a></li>
          <li><a href="write.php">COURSES</a></li>
          <li><a href="display.php">DISPLAY</a></li>
          <li><a href="logout.php">LOG OUT</a></li>
        </ul>
      </nav>
    </div>
    <div class="write">
      <h1 style="text-align: center;">ENTER INFO</h1>
      <form class="write-form" action="write.php" method="post">
        <table>
          <tr>
            <td><label>course name</label></td>
            <td>
              <select class="" name="coursename">
                <option value="">none</option>
                <option value="bachelor of science in statistics">bachelor of art in marine</option>
                <option value="bachelor of arts in economic">bachelor of science in computer science</option>
                <option value="bachelor of land management">bachelor of land management</option>
                <option value="bachelor of law">bachelor of law </option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">course code</label>
            </td>
            <td>
              <select class="" name="code">
                <option value="">none</option>
                <option value="FN122">FN122</option>
                <option value="IS143">IS143</option>
                <option value="IS181">IS181</option>
                <option value="DS114">DS114</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">course department</label>
            </td>
            <td>
              <select class="" name="dep">
                <option value="">none</option>
                <option value="COICT">COICT</option>
                <option value="COET">COET</option>
                <option value="UDBS">UDBS</option>
                <option value="COSS">COSS</option>
                <option value="DUCE">DUCE</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">semister</label>
            </td>
            <td>
              <select class="" name="sem">
                <option value="">none</option>
                <option value="semister1">semister 1</option>
                <option value="semister2">semister 2</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">course instructor</label>
            </td>
            <td>
              <select class="" name="inst">
                <option value="">none</option>
                <option value="Dr">Dr</option>
                <option value="Mr">Mr</option>
                <option value="Ms">Madam</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">result</label>
            </td>
            <td><select class="" name="result">
              <option value="">none</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>

          </tr>
          <tr>
            <td>
              <input type="submit" name="submit" >
            </td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
