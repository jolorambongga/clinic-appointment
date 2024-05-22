<?php
require_once ('../../includes/config.php');

try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $doctorName = $_POST['doctorName'];
    $doctorContact = $_POST['doctorContact'];
    $doctorEmail = $_POST['doctorEmail'];
    $doctorAddress = $_POST['doctorAddress'];

    $sql = "INSERT INTO tbl_Doctors (doctorName, doctorContact, doctorEmail, doctorAddress) VALUES (?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $doctorName, PDO::PARAM_STR);
    $stmt->bindParam(2, $doctorContact, PDO::PARAM_STR);
    $stmt->bindParam(3, $doctorEmail, PDO::PARAM_STR);
    $stmt->bindParam(4, $doctorAddress, PDO::PARAM_STR);

    $stmt->execute();

    // You might want to send a response back
    echo json_encode(["status" => "success"]);
    
} catch (PDOException $e) {
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);
}
