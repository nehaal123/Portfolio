<?php
session_start();
$a1 = array(1,2,3);
$a2 = array(4,3,6);
if($a1 == $a2)
    echo 'yes';
else
    echo 'nope';

    $_SESSION['test'] = 5;
    $test = $_SESSION['test']; 
?>

<form action="test.php" onsubmit="jsfunc(<?php $test?>)">
<input type="checkbox" name="vehicle" value="1"> 1<br>
<input type="checkbox" name="vehicle" value="2"> 2<br>
<input type="checkbox" name="vehicle" value="3"> 3<br>
<input type="submit" name="submit" value="submit" >
</form>
<script type='text/javascript'>
var data = <?php echo json_encode($_GET) ?>
    function jsfunc(<?php $test ?>){
        alert(data.vehicle + <?php $test?>)
    }
</script>