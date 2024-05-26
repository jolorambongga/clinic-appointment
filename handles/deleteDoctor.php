<?php
require_once('../../includes/config.php');

try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $doctorId = $_POST['doctorId'];
    $userInput = $_POST['userInput'];

    if ($userInput == 'DELETE') {
        $sql = "DELETE FROM tbl_Doctors WHERE doctorId = $doctorId";
        $stmt = $pdo->query($sql);

        echo json_encode(["status" => "delete ay nakuha!", "Doctor Id" => "$doctorId" ,"userInput" => "$userInput"]);
    } else {
        echo json_encode(["status" => "DELETE IS NOT THE INPUT!", "Doctor Id" => "$doctorId" ,"userInput" => "$userInput"]);
    }

} catch (PDOException $e) {
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);
}
?>
