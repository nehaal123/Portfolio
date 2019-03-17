<?php
$file = "MyXMLs_for_Literac_Uplift/stepsL1.xml";
$xml = simplexml_load_file($file);
//seperate
//============================================================================

if(isset($xml->quiz->mcq_match)){
    require 'render_match.php';
}
elseif(isset($xml->quiz)){
    require 'test6.php';
    }
if(isset($xml->story->mcq_order)){
    require 'render_order.php';
}
elseif(isset($xml->story)){
    require 'mcq_parsers/story_parser.php';
}
if(isset($xml->story->mcq_multi)){
    require 'test6.php';
}

    /*
    if(isset($xml->story->mcq_multi)){
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
    
        echo "<h2>Title: " . $xml->story->title . "<br>";
        echo "Level: " . $xml->story->level. "<br>";
        echo "Instruction: " . $xml->story->instruction . "</h2><hr><hr>"; 
        
        foreach($xml->story->mcq_multi as $parse):   
    
            array_push($tasks, $parse->task);
            array_push($opt1, $parse->opt1);
            array_push($opt2, $parse->opt2);
            array_push($opt3, $parse->opt3);
    
            if(isset($parse->opt4))
                array_push($opt4, $parse->opt4);
            if(isset($parse->opt5))
                array_push($opt5, $parse->opt5);
            if(isset($parse->opt6))
                array_push($opt6, $parse->opt6);
            if(isset($parse->opt7))
                array_push($opt7, $parse->opt7);
            if(isset($parse->opt8))
                array_push($opt8, $parse->opt8);
        
            array_push($corAns, $parse->corAns." ");
            array_push($qid, $parse->qid);
            array_push($pFeed, $parse->positive_feedback);
            array_push($nFeed, $parse->negative_feedback);
        endforeach;

        foreach($corAns as $item){
            $test = explode(" ",$item);
            echo '<br>' . $test[0];
        }
        //require 'render_multi.php';
    }
/*
//==========================================================================

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

if(isset($xml->quiz->mcq_multi)){
    foreach($xml->quiz->mcq_multi as $parse):
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

if(isset($xml->quiz->mcq_order)){
    foreach($xml->quiz->mcq_order as $parse):
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

if(isset($xml->quiz->mcq_visual)){
    foreach($xml->quiz->mcq_visual as $parse):
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
}*/
?>