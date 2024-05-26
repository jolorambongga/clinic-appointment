<?php

require_once('../../includes/config.php');

try { 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $procedureId = $_GET['procedureId'];

    $sql = "SELECT * FROM tbl_Procedures WHERE procedureId = $procedureId;";

    $stmt = $pdo->query($sql);

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $getService[] = $result;

    echo json_encode(array("status" => "NA-GET ANG getService", "data" => $result));


} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}