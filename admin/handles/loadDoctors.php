<?php

require_once ('../../includes/config.php');

try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM tbl_Doctors";
    $stmt = $pdo->query($sql);

    $doctors = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $doctors[] = array(
            'doctorId' => $row['doctorId'],
            'doctorName' => $row['doctorName']
        );
    }

    header('Content-Type: application/json');
    echo json_encode($doctors);

} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(array('error' => $e->getMessage()));
}
