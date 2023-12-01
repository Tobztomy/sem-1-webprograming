<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your NAME is: <?php echo $_POST["name"]; ?>
COURSE: <?php echo $_POST["course"]; ?>
AGE: <?php echo $_POST["age"]; ?>
<?php
$servername = "localhost";
$username = "23mca059";
$password = "2515";
$dbname = "23mca059";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['name'];
$course=$_POST['course'];
$age=$_POST['age'];

$sql = "INSERT INTO student (name, course, age)
VALUES ('$name', '$course', '$age')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>