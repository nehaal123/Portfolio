<?php

$xml;

echo 'Title: ' . $xml->test->story[$k]->title . '<br>';
echo 'Body: ' . $xml->test->story[$k]->body . '<br>';
echo 'Instructions: ' . $xml->test->story[$k]->instruction . '<br>';

for($i = 0; $i < 10; $i++){
    for($j = 0; $j < 10; $j++){
    if(isset($xml->test->story[$i]->mcq_match[$j])){
        echo 'opt1: ' . $xml->test->story[$i]->mcq_match[$j]>opt1 . "<br>";
        echo 'opt2: ' . $xml->test->story[$i]->mcq_match[$j]->opt2 . "<br>";
        echo 'opt3: ' . $xml->test->story[$i]->mcq_match[$j]->opt3 . "<br>";
        if(isset($xml->test->story[$i]->mcq_match[$j]->opt4)){
            echo 'opt4: ' . $xml->test->story[$i]->mcq_match[$j]->opt4 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_match[$j]->opt5)){
            echo 'opt5: ' . $xml->test->story[$i]->mcq_match[$j]->opt5 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_match[$j]->opt6)){
            echo 'opt6: ' . $xml->test->story[$i]->mcq_match[$j]->opt6 . "<br>";
        }
        echo 'match1: ' . $xml->test->story[$i]->mcq_match[$j]->match1 . "<br>";
        echo 'match2: ' . $xml->test->story[$i]->mcq_match[$j]->match2 . "<br>";
        echo 'match3: ' . $xml->test->story[$i]->mcq_match[$j]->match3 . "<br>";
        if(isset($xml->test->story[$i]->mcq_match[$j]->match4)){
        echo 'match4: ' . $xml->test->story[$i]->mcq_match[$j]->match4 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_match[$j]->match5)){
        echo 'match5: ' . $xml->test->story[$i]->mcq_match[$j]->match5 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_match[$j]->match6)){
        echo 'match6: ' . $xml->test->story[$i]->mcq_match[$j]->match6 . "<br>";
        }
        echo 'qid: ' . $xml->test->story[$i]->mcq_match[$j]->qid . "<br>";
        echo 'positive_feedback: ' . $xml->test->story[$i]->mcq_match[$j]->positive_feedback . "<br>";
        echo 'negative_feedback: ' . $xml->test->story[$i]->mcq_match[$j]->negative_feedback . "<hr><br>";
    }
    else
        break;
}}
?>