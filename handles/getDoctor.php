<?php

require_once('../../includes/config.php');

try { 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $doctorId = $_GET['doctorId'];

    $sql = "SELECT * FROM tbl_Doctors WHERE doctorId = $doctorId";
    $stmt = $pdo->query($sql);
    // $stmt->bindParam(':doctorId', $doctorId, PDO::PARAM_INT);
    // $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    echo '<label for="doctorId" class="form-label">Doctor\'s Id</label>'; // doctorId
    echo '<input type="text" id="doctorId" name="doctorId" class="form-control" value="'.$row['doctorId'].'" readonly>';
    echo '<pre></pre>';

    echo '<label for="doctorName" class="form-label">Doctor\'s Name</label>';   // doctorName
    echo '<input type="text" id="doctorName" name="doctorName" class="form-control" value="'.$row['doctorName'].'">';
    echo '<pre></pre>';

    echo '<label for="doctorContact" class="form-label">Contact Number</label>';   // doctorContact
    echo '<input type="text" id="doctorContact" name="doctorContact" class="form-control" value="'.$row['doctorContact'].'">';
    echo '<pre></pre>';

    echo '<label for="doctorEmail" class="form-label">E-mail Address:</label>';   // doctorEmail
    echo '<input type="text" id="doctorEmail" name="doctorEmail" class="form-control" value="'.$row['doctorEmail'].'">';
    echo '<pre></pre>';

    echo '<label for="doctorAddress" class="form-label">Address</label>';   // doctorAddress
    echo '<input type="text" id="doctorAddress" name="doctorAddress" class="form-control" value="'.$row['doctorAddress'].'">';
    echo '<pre></pre>';

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
