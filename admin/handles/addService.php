<?php

require_once('../../includes/config.php');

try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $procedureName = $_POST['procedureName'];
    $procedurePrice = $_POST['procedurePrice'];
    $doctorId = $_POST['doctorId'];

    $sql = "INSERT INTO tbl_Procedures (procedureName, procedurePrice, doctorId) VALUES (?, ?, ?);";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $procedureName, PDO::PARAM_STR);
    $stmt->bindParam(2, $procedurePrice, PDO::PARAM_INT);
    $stmt->bindParam(3, $doctorId, PDO::PARAM_INT);

    $stmt->execute();

    echo json_encode(["Add Service Status" => "Success!"]);

} catch (PDOException $e) {
    echo json_encode(["Add Service Error" => "error", "message" => $e->getMessage()]);
}