<?php 
session_start();
//function to increment counter
function foo(&$var)
{
    $var++;
}
//check if student's answer is correct
echo $_GET['corAns'];
if($_GET['options'] == $_GET['corAns']){
    echo $_GET['pFeed'];
    $_SESSION['stuAns']+=1;
}
else
    echo $_GET['nFeed'];

unset($_GET['gtg7']);
//Check to see if the counter($_SESSION['c']) is at the end of the array
if($_SESSION['c'] < $_SESSION['count']-1){
    if(!isset($_GET['gtg7']))
        foo($_SESSION['c']);
    ?>    
    <form action="render.php" method="POST">
    <input type="submit" name="gtg6" value="To test 6">
    </form><?php
}
else{
    ?>
    <form action = "temp.php" method="POST">
    <input type = "submit" value="Finish">
    </form>
    <?php
} 

?>
