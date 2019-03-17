<?php 
    $stuArr = array();
    for($i = 0; $i < 15; $i++){
        if(isset($_POST['step'.$i])){
            array_push($stuArr, $_POST['step'.$i]);
        }
    }
    
    if($_POST['corArr'] == $stuArr)
        echo 'its gucci my dude';
    else
        echo 'ruh-roh!';
?>