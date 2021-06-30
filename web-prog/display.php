<?php include "db.php";
 session_start();
 // $sec_id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>display</title>
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

    <?php
$sql = "SELECT coursename , coursecode , coursedepart , semister , instructor , result FROM course ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    echo "<table style=\" padding:0; background-color:black; text-align:center;\">

    <tr>
    <th>Course name</th>
    <th>Course code</th>
    <th>department</th>
    <th>Semester</th>
    <th>Instructor</th>
    <th>result</th>

    </tr>";
  while($row = $result->fetch_assoc()) {

    echo "<tr>";
    echo  "<th>". $row["coursename"]. "</th>" ;
    echo "<th>" . $row["coursecode"] ."</th>" ;
    echo  "<th>". $row["coursedepart"]."</th>" ;
    echo  "<th>" .$row["semister"]."</th>" ;
    echo  "<th>" .$row["instructor"] ."</th>";
    echo   "<th>".$row["result"]."</th>";

    echo "</tr>";
}
echo "</table>";

} else {
  echo "<h4>" . "0 results" ."</h4>";
}
$conn->close();
?>
  </body>
</html>
