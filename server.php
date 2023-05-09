<?php
 
// if($_SERVER['REQUEST_METHOD'] === 'PUT'){
//     echo $_SERVER['REQUEST_METHOD'];
//     echo file_get_contents('php://input');
//     die();
// }


$testo = file_get_contents('./data.json');
$phpArray = json_decode($testo, true);
 
 
if(isset($_POST['newTask'])){
    $newTask = [
        "task" => $_POST['newTask'],
        "complete" => false,
    ];
    $phpArray[] = $newTask;
    file_put_contents('./data.json', json_encode($phpArray)); 
} elseif(isset($_POST['updateItem'])){

    $index = $_POST['updateItem'];
    $phpArray[$index]['complete'] = !$phpArray[$index]['complete'];
    file_put_contents('./data.json', json_encode($phpArray)); 

}elseif(isset($_POST['deleteItem'])){

    $index = $_POST['deleteItem'];
    array_splice($phpArray, $index, 1);
    file_put_contents('./data.json', json_encode($phpArray)); 

} else{

}

// file_put_contents('./data.json', json_encode($phpArray));      
header('Content-Type: application/json');
$taskList = json_encode($phpArray);
echo $taskList;
 
 

?>