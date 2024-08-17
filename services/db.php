<?php
  $dsn = 'mysql:host=localhost;port=3306;dbname=E-VPS';
  $username = 'root';
  $password = '';
  // $db_conn = '';

  try {
    $db_conn = new PDO($dsn, $username, $password);
    // Set the PDO error mode to exception
    $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connection successful";
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>