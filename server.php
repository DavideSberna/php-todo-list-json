<?php
 
$testo = file_get_contents('./data.json');
// echo $testo;
 

$phpArray = json_decode($testo, true);
 
 
if(isset($_POST['newTask'])){
    $newTask = [
        "task" => $_POST['newTask'],
        "complete" => false,
        "delete" => false
    ];
    $phpArray[] = $newTask;
    file_put_contents('./data.json', json_encode($phpArray));
}

header('Content-Type: application/json');
echo json_encode($phpArray);
?>