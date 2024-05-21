<?php
// Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "profil_piwi";

//1st func
function joedoel($conn, $id) {
  $sql = "SELECT judul FROM artikel WHERE id=" . $id;
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    return $row["judul"];
  } else {
    return "0 results";
  }
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$j1 = joedoel($conn, 1);
$j2 = joedoel($conn, 2);
$j3 = joedoel($conn, 3);


//2nd func
function koenten($conn, $id) {
    $sql = "SELECT konten FROM artikel WHERE id=" . $id;
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row["konten"];
    } else {
      return "0 results";
    }
  }
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Call functions with different IDs
  $k1 = koenten($conn, 1);
  $k2 = koenten($conn, 2);
  $k3 = koenten($conn, 3);

//3rd func
function linku($conn, $id) {
    $sql = "SELECT link FROM artikel WHERE id=" . $id;
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row["link"];
    } else {
      return "0 results";
    }
  }
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Call functions with different IDs
  $l1 = linku($conn, 1);
  $l2 = linku($conn, 2);
  $l3 = linku($conn, 3);

$conn->close();
?>