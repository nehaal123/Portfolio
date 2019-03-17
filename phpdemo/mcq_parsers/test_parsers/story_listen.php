<?php

$xml;

for($i = 0; $i < 10; $i++){
    for($j = 0; $j < 10; $j++){
    if(isset($xml->test->story[$i]->mcq_listen[$j])){
        echo 'word: ' . $xml->test->story[$i]->mcq_listen[$j]->word . "<br>";
        echo 'opt1: ' . $xml->test->story[$i]->mcq_listen[$j]->opt1 . "<br>";
        echo 'opt2: ' . $xml->test->story[$i]->mcq_listen[$j]->opt2 . "<br>";
        echo 'opt3: ' . $xml->test->story[$i]->mcq_listen[$j]->opt3 . "<br>";
        if(isset($xml->test->story[$i]->mcq_listen[$j]->opt4)){
            echo 'opt4: ' . $xml->test->story[$i]->mcq_listen[$j]->opt4 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_listen[$j]->opt5)){
            echo 'opt5: ' . $xml->test->story[$i]->mcq_listen[$j]->opt5 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_listen[$j]->opt6)){
            echo 'opt6: ' . $xml->test->story[$i]->mcq_listen[$j]->opt6 . "<br>";
        }
        echo 'corAns: ' . $xml->test->story[$i]->mcq_listen[$j]->corAns . "<br>";
        echo 'mp3: ' .$xml->test->story[$i]->mcq_listen[$j]->mp3 . "<br>";
        echo 'qid: ' . $xml->test->story[$i]->mcq_listen[$j]->qid . "<br>";
        echo 'positive_feedback: ' . $xml->test->story[$i]->mcq_listen[$j]->positive_feedback . "<br>";
        echo 'negative_feedback: ' . $xml->test->story[$i]->mcq_listen[$j]->negative_feedback . "<hr><br>";
    }
    else
        break;
}}
?>