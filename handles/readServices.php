<?php

require_once ('../../includes/config.php');

try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT p.procedureId, p.procedureName, p.doctorId, p.procedurePrice, d.doctorName
            FROM tbl_procedures p
            LEFT JOIN tbl_Doctors d ON p.doctorId = d.doctorId";
    $stmt = $pdo->query($sql);

    $procedures = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $procedures[] = array(
            'procedureId' => $row['procedureId'],
            'procedureName' => $row['procedureName'],
            'doctorId' => $row['doctorId'],
            'procedurePrice' => $row['procedurePrice'],
            'doctorName' => $row['doctorName'],
        );
    }

    header('Content-Type: application/json');
    echo json_encode($procedures);

} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(array('error' => $e->getMessage()));
}
