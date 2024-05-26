<?php
require_once ('../../includes/config.php');

try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $doctorId = $_POST['doctorId'];
    $doctorName = $_POST['doctorName'];
    $doctorContact = $_POST['doctorContact'];
    $doctorEmail = $_POST['doctorEmail'];
    $doctorAddress = $_POST['doctorAddress'];

    $sql = "UPDATE tbl_Doctors SET  doctorName = ?, doctorContact = ?, doctorEmail = ?, doctorAddress = ? WHERE doctorId = ?;";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $doctorName, PDO::PARAM_STR);
    $stmt->bindParam(2, $doctorContact, PDO::PARAM_STR);
    $stmt->bindParam(3, $doctorEmail, PDO::PARAM_STR);
    $stmt->bindParam(4, $doctorAddress, PDO::PARAM_STR);
    $stmt->bindParam(5, $doctorId, PDO::PARAM_INT);

    $stmt->execute();

    echo json_encode(["status" => "successfully update record"]);
    
} catch (PDOException $e) {
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);
}