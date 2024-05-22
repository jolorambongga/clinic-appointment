<?php

require_once('../../includes/config.php');

try { 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM tbl_Doctors";
    $stmt = $pdo->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        echo '<th scope="row">'.$row['doctorId'].'</th>';    // doctor's id
        echo '<td>'.$row['doctorName'].'</td>';    // doctor's name
        echo '<td>'.$row['doctorContact'].'</td>';    // doctor's contact num
        echo '<td>'.$row['doctorEmail'].'</td>';    // doctor's email address
        echo '<td>'.$row['doctorAddress'].'</td>';    // doctor's address
        echo '<td>';    // action buttons
        echo '<div class="d-grid gap-2 d-md-flex justify-content-md-start text-center">';
        echo '<button type="button" id="btnEdit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modEditDoctor" data-doctor-id='.$row['doctorId'].'>Edit</button>';   // edit button
        echo '<button type="button" id="btnDelete" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modDeleteDoctor" data-doctor-id='.$row['doctorId'].'>Delete</button>';    // delete button
        echo '</td>';   // end action buttons
        echo '</tr>';
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}