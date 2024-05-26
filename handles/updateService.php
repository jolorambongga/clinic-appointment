<?php

require_once('../../includes/config.php');

try { 

    $procId = $_POST['procedureId'];
    $procName = $_POST['procedureName'];
    $procPrice = $_POST['procedurePrice'];

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE tbl_procedures SET procedureName = :procedureName, procedurePrice = :procedurePrice WHERE procedureId = :procedureId";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':procedureId', $procId, PDO::PARAM_INT);
    $stmt->bindParam(':procedureName', $procName, PDO::PARAM_STR);
    $stmt->bindParam(':procedurePrice', $procPrice, PDO::PARAM_INT);

    $stmt->execute();

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
