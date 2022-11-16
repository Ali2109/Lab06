
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lap 6</title>
</head>
<body>
    

<?php

$conn = new mysqli("localhost:3307", "root" , "", "lab_db."); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO 06_lab (F_name, L_name, S_id , Major)
VALUES ('Ali', 'Alblewi', '1' , 'Softwaer Enginering')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


</body>
</html>