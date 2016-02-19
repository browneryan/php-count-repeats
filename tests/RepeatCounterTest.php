<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_sentence_explode()
        {
            $test_count_repeats = new RepeatCounter;
            $user_sentence = "Looking for word";
            $user_word = "word";

            $result = $test_count_repeats->countRepeats($user_sentence, $user_word);

            $this->assertEquals(1, $result);
        }
    }

?>
