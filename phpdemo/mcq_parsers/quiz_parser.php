<?php
$xml;
$tasks = array();
    $opt1 = array();
    $opt2 = array();
    $opt3 = array();
    $opt4 = array();
    $opt5 = array();
    $opt6 = array();
    $opt7 = array();
    $opt8 = array();
    $corAns = array();
    $qid = array();
    $pFeed = array();
    $nFeed = array();
    $steps = array();
    $match1 = array();
    $match2 = array();
    $match3 = array();
    $match4 = array();
    $match5 = array();
    $match6 = array();
    $match7 = array();
    $match8 = array();

    echo "<h2>Title: " . $xml->quiz->title . "<br>";
    echo "Level: " . $xml->quiz->level. "<br>";
    echo "Instruction: " . $xml->quiz->instruction . "</h2><hr><hr>"; 

if(isset($xml->quiz->mcq_text)){
    
    foreach($xml->quiz->mcq_text as $parse):

        array_push($tasks, $parse->task);
        array_push($opt1, $parse->opt1);
        array_push($opt2, $parse->opt2);
        array_push($opt3, $parse->opt3);

        if(isset($parse->opt4))
            array_push($opt4, $parse->opt4);
            else
            array_push($opt4, null);

        if(isset($parse->opt5))
            array_push($opt5, $parse->opt5);
            else
            array_push($opt5, null);

        if(isset($parse->opt6))
            array_push($opt6, $parse->opt6);
            else
            array_push($opt6, null);

        if(isset($parse->opt7))
            array_push($opt7, $parse->opt7);
            else
            array_push($opt7, null);

        if(isset($parse->opt8))
            array_push($opt8, $parse->opt8);
            else
            array_push($opt8, null);
    
        array_push($corAns, $parse->corAns);
        array_push($qid, $parse->qid);
        array_push($pFeed, $parse->positive_feedback);
        array_push($nFeed, $parse->negative_feedback);
    endforeach;
}

if(isset($xml->quiz->mcq_listen)){
    foreach($xml->quiz->mcq_listen as $parse):
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

if(isset($xml->quiz->mcq_match)){
    foreach($xml->quiz->mcq_match as $parse):

        array_push($tasks, null);
        array_push($opt1, $parse->opt1);
        array_push($opt2, $parse->opt2);
        array_push($opt3, $parse->opt3);

        if(isset($parse->opt4))
            array_push($opt4, $parse->opt4);
            else
            array_push($opt4, null);

        if(isset($parse->opt5))
            array_push($opt5, $parse->opt5);
            else
            array_push($opt5, null);

        if(isset($parse->opt6))
            array_push($opt6, $parse->opt6);
            else
            array_push($opt6, null);

        if(isset($parse->opt7))
            array_push($opt7, $parse->opt7);
            else
            array_push($opt7, null);

        if(isset($parse->opt8))
            array_push($opt8, $parse->opt8);
            else
            array_push($opt8, null);
    
        array_push($match1, $parse->match1);
        array_push($match2, $parse->match2);
        array_push($match3, $parse->match3);
    
        if(isset($parse->match4))
            array_push($match4, $parse->match4);
        if(isset($parse->match5))
            array_push($match5, $parse->match5);
        if(isset($parse->match6))
            array_push($match6, $parse->match6);
        if(isset($parse->match7))
            array_push($match7, $parse->match7);
        if(isset($parse->match8))
            array_push($match8, $parse->match8);

        array_push($corAns, null);
        array_push($qid, $parse->qid);
        array_push($pFeed, $parse->positive_feedback);
        array_push($nFeed, $parse->negative_feedback);
    endforeach;
}

if(isset($xml->quiz->mcq_multi)){
    foreach($xml->quiz->mcq_multi as $parse):
        array_push($tasks, $parse->task);
        array_push($opt1, $parse->opt1);
        array_push($opt2, $parse->opt2);
        array_push($opt3, $parse->opt3);

        if(isset($parse->opt4))
            array_push($opt4, $parse->opt4);
            else
            array_push($opt4, null);

        if(isset($parse->opt5))
            array_push($opt5, $parse->opt5);
            else
            array_push($opt5, null);

        if(isset($parse->opt6))
            array_push($opt6, $parse->opt6);
            else
            array_push($opt6, null);

        if(isset($parse->opt7))
            array_push($opt7, $parse->opt7);
            else
            array_push($opt7, null);

        if(isset($parse->opt8))
            array_push($opt8, $parse->opt8);
            else
            array_push($opt8, null);
    
        array_push($corAns, $parse->corAns);
        array_push($qid, $parse->qid);
        array_push($pFeed, $parse->positive_feedback);
        array_push($nFeed, $parse->negative_feedback);
    endforeach;
}

if(isset($xml->quiz->mcq_order)){
    foreach($xml->quiz->mcq_order as $parse):
        array_push($steps, $parse->step1);
        array_push($steps, $parse->step2);
        array_push($steps, $parse->step3);

        if(isset($parse->step4))
            array_push($steps, $parse->step4);
        if(isset($parse->step5))
            array_push($steps, $parse->step5);
        if(isset($parse->step6))
            array_push($steps, $parse->step6);
        if(isset($parse->step7))
            array_push($steps, $parse->step7);
        if(isset($parse->step8))
            array_push($steps, $parse->step8);
        if(isset($parse->step9))
            array_push($steps, $parse->step9);
        if(isset($parse->step10))
            array_push($steps, $parse->step10);
        if(isset($parse->step11))
            array_push($steps, $parse->step11);
        if(isset($parse->step12))
            array_push($steps, $parse->step12);
    
        array_push($corAns, null);
        array_push($qid, $parse->qid);
        array_push($pFeed, $parse->positive_feedback);
        array_push($nFeed, $parse->negative_feedback);
    endforeach;
}

if(isset($xml->quiz->mcq_visual)){
    foreach($xml->quiz->mcq_visual as $parse):
        array_push($tasks, $parse->task);
        array_push($opt1, $parse->card1);
        array_push($opt2, $parse->card2);
        array_push($opt3, $parse->card3);

        if(isset($parse->card4))
            array_push($opt4, $parse->card4);
            else
            array_push($opt4, null);

        if(isset($parse->card5))
            array_push($opt5, $parse->card5);
            else
            array_push($opt5, null);

        if(isset($parse->card6))
            array_push($opt6, $parse->card6);
            else
            array_push($opt6, null);

        if(isset($parse->card7))
            array_push($opt7, $parse->card7);
            else
            array_push($opt7, null);

        if(isset($parse->card8))
            array_push($opt8, $parse->card8);
            else
            array_push($opt8, null);
    
        array_push($corAns, $parse->corAns);
        array_push($qid, $parse->qid);
        array_push($pFeed, $parse->positive_feedback);
        array_push($nFeed, $parse->negative_feedback);
    endforeach;
}
?>