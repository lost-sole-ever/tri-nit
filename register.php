<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "registration_form";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO users (full_name, username, email, phone_number, password, gender)
    VALUES ('$full_name', '$username', '$email', '$phone_number', '$password', '$gender')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
?>
