<?php

require_once('../../includes/config.php');

try { 

    $procedureId = $_POST['procedureId'];
    $procedureName = $_POST['procedureName'];
    $procedurePrice = $_POST['procedurePrice'];
    $doctorId = $_POST['doctorId'];

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE tbl_Procedures SET procedureName = ?, procedurePrice = ?, doctorId = ? WHERE procedureId = ?;";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $procedureName, PDO::PARAM_STR);
    $stmt->bindParam(2, $procedurePrice, PDO::PARAM_INT);
    $stmt->bindParam(3, $doctorId, PDO::PARAM_INT);
    $stmt->bindParam(4, $procedureId, PDO::PARAM_INT);

    $stmt->execute();

    echo json_encode(["status" => "successfully update record"]);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
