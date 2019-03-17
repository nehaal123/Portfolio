<?php

$xml;

//Parses mcq tags within the test tag
if(isset($xml->test->mcq_text)){
    foreach($xml->test->mcq_text as $parse):
        echo 'Task:' . $parse->task . '<br>';
        echo 'opt1: ' . $parse->opt1 . '<br>';
        echo 'opt2: ' . $parse->opt2 . '<br>';
        echo 'opt3: ' . $parse->opt3 . '<br>';

        if(isset($parse->opt4))
            echo 'opt4: ' . $parse->opt4 . '<br>';
        if(isset($parse->opt5))
            echo 'opt5: ' . $parse->opt5 . '<br>';
        if(isset($parse->opt6))
            echo 'opt6: ' . $parse->opt6 . '<br>';
        if(isset($parse->opt7))
            echo 'opt7: ' . $parse->opt7 . '<br>';
        if(isset($parse->opt8))
            echo 'opt8: ' . $parse->opt8 . '<br>';
    
        echo 'CorAns: ' . $parse->corAns . '<br>';
        echo 'Qid: ' . $parse->qid . '<br>';
        echo 'Positive feedback: ' . $parse->positive_feedback . '<br>';
        echo 'Negative feedback: ' . $parse->negative_feedback . '<br><hr>';
    endforeach;
}

if(isset($xml->test->mcq_listen)){
    foreach($xml->test->mcq_listen as $parse):
        echo 'Word: ' . $parse->word . '<br>';
        echo 'opt1: ' . $parse->opt1 . '<br>';
        echo 'opt2: ' . $parse->opt2 . '<br>';
        echo 'opt3: ' . $parse->opt3 . '<br>';

        if(isset($parse->opt4))
            echo 'opt4: ' . $parse->opt4 . '<br>';
        if(isset($parse->opt5))
            echo 'opt5: ' . $parse->opt5 . '<br>';
        if(isset($parse->opt6))
            echo 'opt6: ' . $parse->opt6 . '<br>';
        if(isset($parse->opt7))
            echo 'opt7: ' . $parse->opt7 . '<br>';
        if(isset($parse->opt8))
            echo 'opt8: ' . $parse->opt8 . '<br>';
    
        echo 'CorAns: ' . $parse->corAns . '<br>';
        echo 'mp3: ' . $parse->mp3 . '<br>';
        echo 'Qid: ' . $parse->qid . '<br>';
        echo 'Positive feedback: ' . $parse->positive_feedback . '<br>';
        echo 'Negative feedback: ' . $parse->negative_feedback . '<br><hr>';
    endforeach;
}

if(isset($xml->test->mcq_match)){
    foreach($xml->test->mcq_match as $parse):
        echo 'opt1: ' . $parse->opt1 . '<br>';
        echo 'opt2: ' . $parse->opt2 . '<br>';
        echo 'opt3: ' . $parse->opt3 . '<br>';

        if(isset($parse->opt4))
            echo 'opt4: ' . $parse->opt4 . '<br>';
        if(isset($parse->opt5))
            echo 'opt5: ' . $parse->opt5 . '<br>';
        if(isset($parse->opt6))
            echo 'opt6: ' . $parse->opt6 . '<br>';
        if(isset($parse->opt7))
            echo 'opt7: ' . $parse->opt7 . '<br>';
        if(isset($parse->opt8))
            echo 'opt8: ' . $parse->opt8 . '<br>';
    
        echo 'match1: ' . $parse->match1 . '<br>';
        echo 'match2: ' . $parse->match2 . '<br>';
        echo 'match3: ' . $parse->match3 . '<br>';
    
        if(isset($parse->opt4))
            echo 'match4: ' . $parse->match4 . '<br>';
        if(isset($parse->opt5))
            echo 'match5: ' . $parse->match5 . '<br>';
        if(isset($parse->opt6))
            echo 'match6: ' . $parse->match6 . '<br>';
        if(isset($parse->opt7))
            echo 'match7: ' . $parse->match7 . '<br>';
        if(isset($parse->opt8))
            echo 'match8: ' . $parse->match8 . '<br>';
    
        echo 'Qid: ' . $parse->qid . '<br>';
        echo 'Positive feedback: ' . $parse->positive_feedback . '<br>';
        echo 'Negative feedback: ' . $parse->negative_feedback . '<br><hr>';
    endforeach;
}

if(isset($xml->test->mcq_multi)){
    foreach($xml->test->mcq_multi as $parse):
        echo 'Task:' . $parse->task . '<br>';
        echo 'opt1: ' . $parse->opt1 . '<br>';
        echo 'opt2: ' . $parse->opt2 . '<br>';
        echo 'opt3: ' . $parse->opt3 . '<br>';

        if(isset($parse->opt4))
            echo 'opt4: ' . $parse->opt4 . '<br>';
        if(isset($parse->opt5))
            echo 'opt5: ' . $parse->opt5 . '<br>';
        if(isset($parse->opt6))
            echo 'opt6: ' . $parse->opt6 . '<br>';
        if(isset($parse->opt7))
            echo 'opt7: ' . $parse->opt7 . '<br>';
        if(isset($parse->opt8))
            echo 'opt8: ' . $parse->opt8 . '<br>';
    
        echo 'CorAns: ' . $parse->corAns . '<br>';
        echo 'Qid: ' . $parse->qid . '<br>';
        echo 'Positive feedback: ' . $parse->positive_feedback . '<br>';
        echo 'Negative feedback: ' . $parse->negative_feedback . '<br><hr>';
    endforeach;
}

if(isset($xml->test->mcq_order)){
    foreach($xml->test->mcq_order as $parse):
        echo 'step1: ' . $parse->step1 . '<br>';
        echo 'step2: ' . $parse->step2 . '<br>';
        echo 'step3: ' . $parse->step3 . '<br>';

        if(isset($parse->step4))
            echo 'step4: ' . $parse->step4 . '<br>';
        if(isset($parse->step5))
            echo 'step5: ' . $parse->step5 . '<br>';
        if(isset($parse->step6))
            echo 'step6: ' . $parse->step6 . '<br>';
        if(isset($parse->step7))
            echo 'step7: ' . $parse->step7 . '<br>';
        if(isset($parse->step8))
            echo 'step8: ' . $parse->step8 . '<br>';
        if(isset($parse->step9))
            echo 'step9: ' . $parse->step9 . '<br>';
        if(isset($parse->step10))
            echo 'step10: ' . $parse->step10 . '<br>';
        if(isset($parse->step11))
            echo 'step11: ' . $prse->step11 . '<br>';
        if(isset($parse->step12))
            echo 'step8: ' . $parse->step12 . '<br>';
    
        echo 'Qid: ' . $parse->qid . '<br>';
        echo 'Positive feedback: ' . $parse->positive_feedback . '<br>';
        echo 'Negative feedback: ' . $parse->negative_feedback . '<br><hr>';
    endforeach;
}

if(isset($xml->test->mcq_visual)){
    foreach($xml->test->mcq_visual as $parse):
        echo 'Task:' . $parse->task . '<br>';
        echo 'card1: ' . $parse->card1 . '<br>';
        echo 'card2: ' . $parse->card2 . '<br>';
        echo 'card3: ' . $parse->card3 . '<br>';

        if(isset($parse->card4))
            echo 'card4: ' . $parse->card4 . '<br>';
        if(isset($parse->card5))
            echo 'card5: ' . $parse->card5 . '<br>';
        if(isset($parse->card6))
            echo 'card6: ' . $parse->card6 . '<br>';
        if(isset($parse->card7))
            echo 'card7: ' . $parse->card7 . '<br>';
        if(isset($parse->card8))
            echo 'card8: ' . $parse->card8 . '<br>';
    
        echo 'CorAns: ' . $parse->corAns . '<br>';
        echo 'Qid: ' . $parse->qid . '<br>';
        echo 'Positive feedback: ' . $parse->positive_feedback . '<br>';
        echo 'Negative feedback: ' . $parse->negative_feedback . '<br><hr>';
    endforeach;
}
?>