<?php
  include "./services/db.php";

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //:- Getting all data from form
    $visa_category = htmlspecialchars($_POST['visa-category']);
    $visa_subCategory = htmlspecialchars($_POST['visa-sub-category']);
    $application_type = htmlspecialchars($_POST["application-type"]);
    $visa_type = htmlspecialchars($_POST["visa-type"]);
    $visa_no = htmlspecialchars($_POST["visa-no"]);
    $passport_no = htmlspecialchars($_POST["passport-no"]);
    $visit_purpose = htmlspecialchars($_POST["visit-purpose"]);
    $visa_duration = htmlspecialchars($_POST["visa-duration"]);
    $visa_duration_value = htmlspecialchars($_POST["visa-duration-value"]);
    $country = htmlspecialchars($_POST["country"]);
    $mission = htmlspecialchars($_POST["mission"]);
    $entry_port = htmlspecialchars($_POST["entry-port"]);
    $departure_port = htmlspecialchars($_POST["departure-port"]);
    $arrival_date = htmlspecialchars($_POST["arrival-date"]);
    $departure_date = htmlspecialchars($_POST["departure-date"]);

    try {
      $add_query = $db_conn->prepare(
        'INSERT INTO `applicant info` (visa_category, visa_sub_category, applicant_type, visa_type, ref_visa_no, ref_passport_no, visit_purpose, visa_duration, country, mission, entry_port, departure_port, arrival_date, departure_date) VALUES (:visa_category, :visa_sub_category, :applicant_type, :visa_type, :ref_visa_no, :ref_passport_no, :visit_purpose, :visa_duration, :country, :mission, :entry_port, :departure_port, :arrival_date, :departure_date)'
      );
  
      $add_query->bindParam(":visa_category", $visa_category);
      $add_query->bindParam(":visa_sub_category", $visa_subCategory);
      $add_query->bindParam(":applicant_type", $application_type);
      $add_query->bindParam(":visa_type", $visa_type);
      $add_query->bindParam(":ref_visa_no", $visa_no);
      $add_query->bindParam(":ref_passport_no", $passport_no);
      $add_query->bindParam(":visit_purpose", $visit_purpose);
      $add_query->bindParam(":visa_duration", sprintf("%d %s", $visa_duration, $visa_duration_value));
      $add_query->bindParam(":country", $country);
      $add_query->bindParam(":mission", $mission);
      $add_query->bindParam(":entry_port", $entry_port);
      $add_query->bindParam(":departure_port", $departure_port);
      $add_query->bindParam(":arrival_date", $arrival_date);
      $add_query->bindParam(":departure_date", $departure_date);
  
      $add_query->execute();
      echo "data added successfully";
    } catch (\PDOException $ex) {
      echo "Error: ". $ex->getMessage();
    }

  } else {
    echo "not found";
  }
?>