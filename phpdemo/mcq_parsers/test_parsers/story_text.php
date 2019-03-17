<?php

$xml;

echo 'Title: ' . $xml->test->story[$k]->title . '<br>';
echo 'Body: ' . $xml->test->story[$k]->body . '<br>';

for($i = 0; $i < 10; $i++){
    for($j = 0; $j < 10; $j++){
    if(isset($xml->test->story[$i]->mcq_text[$j])){
        echo 'task: ' . $xml->test->story[$i]->mcq_text[$j]->task . "<br>";
        echo 'opt1: ' . $xml->test->story[$i]->mcq_text[$j]->opt1 . "<br>";
        echo 'opt2: ' . $xml->test->story[$i]->mcq_text[$j]->opt2 . "<br>";
        echo 'opt3: ' . $xml->test->story[$i]->mcq_text[$j]->opt3 . "<br>";
        if(isset($xml->test->story[$i]->mcq_text[$j]->opt4)){
            echo 'opt4: ' . $xml->test->story[$i]->mcq_text[$j]->opt4 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_text[$j]->opt5)){
            echo 'opt5: ' . $xml->test->story[$i]->mcq_text[$j]->opt5 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_text[$j]->opt6)){
            echo 'opt6: ' . $xml->test->story[$i]->mcq_text[$j]->opt6 . "<br>";
        }
        echo 'corAns: ' . $xml->test->story[$i]->mcq_text[$j]->corAns . "<br>";
        echo 'qid: ' . $xml->test->story[$i]->mcq_text[$j]->qid . "<br>";
        echo 'positive_feedback: ' . $xml->test->story[$i]->mcq_text[$j]->positive_feedback . "<br>";
        echo 'negative_feedback: ' . $xml->test->story[$i]->mcq_text[$j]->negative_feedback . "<hr><br>";
    }
    else
        continue;
    }}
?>