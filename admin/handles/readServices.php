<?php

require_once('../../includes/config.php');

try { 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM tbl_procedures";
    $stmt = $pdo->query($sql);

    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($services) > 0) {
        echo json_encode($services);
    } else {
        echo json_encode([]);
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}