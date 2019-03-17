<?php

class Parser{
    function parse($file){
        $xml = simplexml_load_file($file);

        if(isset($xml->quiz)){

            echo "<h2>Title: " . $xml->quiz->title . "<br>";
            echo "Level: " . $xml->quiz->level. "<br>";
            echo "Instruction: " . $xml->quiz->instruction . "</h2><hr><hr>"; 

            require 'mcq_parsers\quiz_parser.php';        
        }

        elseif(isset($xml->story)){

                echo "Title: " . $xml->story->title . "<br>";
                echo "Body: " . $xml->story->body . "<br>";
                echo "Instructions: " . $xml->story->instruction . "<hr><br>";

                require 'mcq_parsers\story_parser.php';
        }

        elseif(isset($xml->test)){

            echo "Title: " . $xml->test->title . "<br>";
            echo "Level: " . $xml->test->level. "<br>";
            echo "Instruction: " . $xml->test->instruction . "<hr><br>";

            require 'mcq_parsers/test_parsers/tag_parser.php';

        if(isset($xml->test->story)){
            for($k = 0; $k <= 10; $k++){
            
            if(isset($xml->test->story[$k]->mcq_listen))
                require 'mcq_parsers/test_parsers/story_listen.php';
            if(isset($xml->test->story[$k]->mcq_text))
                require 'mcq_parsers/test_parsers/story_text.php';
            if(isset($xml->test->story[$k]->mcq_match))
                require 'mcq_parsers/test_parsers/story_match.php';
            if(isset($xml->test->story[$k]->mcq_multi))
                require 'mcq_parsers/test_parsers/story_multi.php';
            if(isset($xml->test->story[$k]->mcq_order))
                require 'mcq_parsers/test_parsers/story_order.php';
            if(isset($xml->test->story[$k]->mcq_visual))
                require 'mcq_parsers/test_parsers/story_visual.php';
       }}}
}

}
$par = new Parser();
$file = "MyXMLs_for_Literac_Uplift/bills.xml";
$test = $par->parse($file);
?>