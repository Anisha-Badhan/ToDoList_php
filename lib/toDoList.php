<?php

    include_once ('DB.php');

    $task = $_GET["task"];

    $db = new DB();

    $result = $db->insertData($task);

    if($result == false){
        $err = "Task not added! Please try again";
        die(header('LOCATION: ../index.php?notAdded=1&err='.$err));
    }

    $msg = "Task added to the List";
    header('LOCATION: ../index.php?taskAdded=1&msg='.$msg);