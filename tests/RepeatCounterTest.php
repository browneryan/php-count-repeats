<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_if_user_input_in_countRepeats()
        {
            $test_count_repeats = new RepeatCounter;
            $user_word = "word";
            $user_sentence = "This is a sentence";

            $result = $test_count_repeats->countRepeats($user_sentence, $user_word);

            $this->assertEquals(["This is a sentence", "word"], $result);
        }
        function test_sentence_explode()
        {
            $test_count_repeats = new RepeatCounter;
            $user_sentence = "This is a sentence";

            $result = $test_count_repeats->countRepeats($user_sentence, $user_word);

            $this->assertEquals(["This", "is", "a", "sentence", "word"], $result);
        }
    }

?>
