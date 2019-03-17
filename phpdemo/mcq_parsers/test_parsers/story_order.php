<?php

$xml;

echo 'Title: ' . $xml->test->story[$k]->title . '<br>';
echo 'Body: ' . $xml->test->story[$k]->body . '<br>';
echo 'Instruction: ' . $xml->test->story[$k]->instruction . '<br>';

for($i = 0; $i < 10; $i++){
    for($j = 0; $j < 10; $j++){
    if(isset($xml->test->story[$i]->mcq_order[$j])){
        echo 'step1: ' . $xml->test->story[$i]->mcq_order[$j]->step1 . "<br>";
        echo 'step2: ' . $xml->test->story[$i]->mcq_order[$j]->step2 . "<br>";
        echo 'step3: ' . $xml->test->story[$i]->mcq_order[$j]->step3 . "<br>";
        if(isset($xml->test->story[$i]->mcq_order[$j]->step4)){
            echo 'step4: ' . $xml->test->story[$i]->mcq_order[$j]->step4 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_order[$j]->step5)){
            echo 'step5: ' . $xml->test->story[$i]->mcq_order[$j]->step5 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_order[$j]->step6)){
            echo 'step6: ' . $xml->test->story[$i]->mcq_order[$j]->step6 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_order[$j]->step7)){
            echo 'step7 ' . $xml->test->story[$i]->mcq_order[$j]->step7 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_order[$j]->step8)){
            echo 'step8: ' . $xml->test->story[$i]->mcq_order[$j]->step8 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_order[$j]->step9)){
            echo 'step9: ' . $xml->test->story[$i]->mcq_order[$j]->step9 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_order[$j]->step10)){
            echo 'step10: ' . $xml->test->story[$i]->mcq_order[$j]->step10 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_order[$j]->step11)){
            echo 'step11: ' . $xml->test->story[$i]->mcq_order[$j]->step11 . "<br>";
        }
        if(isset($xml->test->story[$i]->mcq_order[$j]->step12)){
            echo 'step12: ' . $xml->test->story[$i]->mcq_order[$j]->step12 . "<br>";
        }
        echo 'qid: ' . $xml->test->story[$i]->mcq_order[$j]->qid . "<br>";
        echo 'positive_feedback: ' . $xml->test->story[$i]->mcq_order[$j]->positive_feedback . "<br>";
        echo 'negative_feedback: ' . $xml->test->story[$i]->mcq_order[$j]->negative_feedback . "<hr><br>";
    }
    else
        break;
}}
?>