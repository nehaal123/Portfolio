<?php
session_start();
if(isset($xml->quiz)){
    require 'mcq_parsers/quiz_parser.php';
}
if(isset($xml->story)){
    require 'mcq_parsers/story_parser.php';
}

//session_destroy();session_start();
if(!isset($_SESSION['c'])){ 
    $_SESSION['c'] = 0;
    $_SESSION['stuAns'] = 0;
    $arr = count($qid);
    $_SESSION['count'] = $arr;
}

echo 'Task: ' . $tasks[$_SESSION['c']];

foreach($_GET['options'] as $c){
    //$c = str_replace(',', '', $c);
    echo $c;
}

if(count($corAns[$_SESSION['c']]) < 2){
?>
<form action="test7.php" method="GET">
    <!-- Displays the options -->
   <input type="checkbox" name="options" value="1"><?php echo $opt1[$_SESSION['c']]."<br>"?>
   <input type="checkbox" name="options" value="2"><?php echo $opt2[$_SESSION['c']]."<br>"?>
   <input type="checkbox" name="options" value="3"><?php echo $opt3[$_SESSION['c']]."<br>"?>
   <?php if(isset($opt4[$_SESSION['c']])){?>
   <input type="checkbox" name="options" value="4"><?php echo $opt4[$_SESSION['c']]."<br>"?>
   <?php } ?>
   <?php if(isset($opt5[$_SESSION['c']])){?>
   <input type="checkbox" name="options" value="5"><?php echo $opt5[$_SESSION['c']]."<br>"?>
   <?php } ?>
   <?php if(isset($opt6[$_SESSION['c']])){?>
   <input type="checkbox" name="options" value="6"><?php echo $opt6[$_SESSION['c']]."<br>"?>
   <?php } ?>
   <?php if(isset($opt7[$_SESSION['c']])){?>
   <input type="checkbox" name="options" value="7"><?php echo $opt7[$_SESSION['c']]."<br>"?>
   <?php } ?>
   <?php if(isset($opt8[$_SESSION['c']])){?>
   <input type="checkbox" name="options" value="8"><?php echo $opt8[$_SESSION['c']]."<br>"?>
   <?php } ?>
   <!-- Sending correct answer, positive and negative feedback to next form -->
   <input type="hidden" name="corAns" value="<?php 
   echo $corAns[$_SESSION['c']] ?>">
   
   <input type="hidden" name="pFeed" value="<?php echo $pFeed[$_SESSION['c']] ?>">
   <input type="hidden" name="nFeed" value="<?php echo $nFeed[$_SESSION['c']] ?>">
   <input type="submit" name="gtg7" value="gucci">
</form>
   <?php }
   else{ ?>

<form action="test7.php" method="POST">
    <!-- Displays the options -->
   <input type="radio" name="options" value="1"><?php echo $opt1[$_SESSION['c']]."<br>"?>
   <input type="radio" name="options" value="2"><?php echo $opt2[$_SESSION['c']]."<br>"?>
   <input type="radio" name="options" value="3"><?php echo $opt3[$_SESSION['c']]."<br>"?>
   <?php if(isset($opt4[$_SESSION['c']])){?>
   <input type="radio" name="options" value="4"><?php echo $opt4[$_SESSION['c']]."<br>"?>
   <?php } ?>
   <?php if(isset($opt5[$_SESSION['c']])){?>
   <input type="radio" name="options" value="5"><?php echo $opt5[$_SESSION['c']]."<br>"?>
   <?php } ?>
   <?php if(isset($opt6[$_SESSION['c']])){?>
   <input type="radio" name="options" value="6"><?php echo $opt6[$_SESSION['c']]."<br>"?>
   <?php } ?>
   <?php if(isset($opt7[$_SESSION['c']])){?>
   <input type="radio" name="options" value="7"><?php echo $opt7[$_SESSION['c']]."<br>"?>
   <?php } ?>
   <?php if(isset($opt8[$_SESSION['c']])){?>
   <input type="radio" name="options" value="8"><?php echo $opt8[$_SESSION['c']]."<br>"?>
   <?php } ?>
   <!-- Sending correct answer, positive and negative feedback to next form -->
   <input type="hidden" name="corAns" value="<?php echo $corAns[$_SESSION['c']] ?>">
   <input type="hidden" name="pFeed" value="<?php echo $pFeed[$_SESSION['c']] ?>">
   <input type="hidden" name="nFeed" value="<?php echo $nFeed[$_SESSION['c']] ?>">
   <input type="submit" name="gtg7" value="gucci">
</form>
   <?php } ?>
<!--
<form action="test7.php" method="POST">
<input type="submit" name="gtg7" value="To test 7">
</form>  = str_replace(',','',$corAns[$_SESSION['c']]);
   echo $corAns[$_SESSION['c']]-->
