<?php 
session_start();

$stuArr = array();
    for($i = 0; $i < 9; $i++){
        if(isset($_POST['match'.$i])){
            array_push($stuArr, $_POST['match'.$i]);
        }
    }

    if($_POST['corArr'] == $stuArr)
        echo $_POST['pFeed'];
    else
        echo $_POST['nFeed'];

?>