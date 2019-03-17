<?php

$xml; 

echo 'Title: ' . $xml->test->story[$k]->title . '<br>';
#echo 'Level: ' . $xml->test->story[$k]->level . '<br>';
echo 'Instructions: ' . $xml->test->story[$k]->instruction . '<br>';

for($i = 0; $i < 10; $i++){
    if(isset($xml->test->story[$i]->mcq_visual[$j])){
        echo 'task: ' . $xml->test->story[$i]->mcq_visual[$j]->task . "<br>";
        echo 'card1: ' . $xml->test->story[$i]->mcq_visual[$j]->card1 . "<br>";
        echo 'card2: ' . $xml->test->story[$i]->mcq_visual[$j]->card2 . "<br>";
        echo 'card3: ' . $xml->test->story[$i]->mcq_visual[$j]->card3 . "<br>";
        if(isset($xml->test->story[$i]->mcq_visual[$j]->card4)){
            echo 'card4: ' . $xml->test->story[$i]->mcq_visual[$j]->card4 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_visual[$j]->card5)){
            echo 'card5: ' . $xml->test->story[$i]->mcq_visual[$j]->card5 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_visual[$j]->card6)){
            echo 'card6: ' . $xml->test->story[$i]->mcq_visual[$j]->card6 . "<br>";
        }
        echo 'corAns: ' . $xml->test->story[$i]->mcq_visual[$j]->corAns . "<br>";
        echo 'qid: ' . $xml->test->story[$i]->mcq_visual[$j]->qid . "<br>";
        echo 'positive_feedback: ' . $xml->test->story[$i]->mcq_visual[$j]->positive_feedback . "<br>";
        echo 'negative_feedback: ' . $xml->test->story[$i]->mcq_visual[$j]->negative_feedback . "<hr><br>";
    }
    else
        break;
}
?>