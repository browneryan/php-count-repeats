<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_sentence_explode()
        {
            $test_count_repeats = new RepeatCounter;
            $user_sentence = "This is a sentence";

            $result = $test_count_repeats->countRepeats($user_sentence);

            $this->assertEquals(["This", "is", "a", "sentence"], $result);
        }
    }

?>
