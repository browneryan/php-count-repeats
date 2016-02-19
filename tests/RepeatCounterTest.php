<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_full_word_match()
        {
            $test_count_repeats = new RepeatCounter;
            $user_sentence = "Looking for word";
            $user_word = "word";

            $result = $test_count_repeats->countRepeats($user_sentence, $user_word);

            $this->assertEquals(1, $result);
        }
        function test_partial_word_no_match()
        {
            $test_count_repeats = new RepeatCounter;
            $user_sentence = "Not words but word";
            $user_word = "word";

            $result = $test_count_repeats->countRepeats($user_sentence, $user_word);

            $this->assertEquals(1, $result);
        }
        function test_case_sensitivity()
        {
            $test_count_repeats = new RepeatCounter;
            $user_sentence = "Looking for Word, not words, but worD, maybe even 'woRd'.";
            $user_word = "word";

            $result = $test_count_repeats->countRepeats($user_sentence, $user_word);

            $this->assertEquals(3, $result);
        }
        function test_case_sensitivity_for_user_word()
        {
            $test_count_repeats = new RepeatCounter;
            $user_sentence = "Looking for Word, not words, but worD, maybe even 'woRd'.";
            $user_word = "WoRd";

            $result = $test_count_repeats->countRepeats($user_sentence, $user_word);

            $this->assertEquals(3, $result);
        }
        function test_punctuation()
        {
            $test_count_repeats = new RepeatCounter;
            $user_sentence = "Looking for word, not words, but word, maybe even 'word!#$%^&*()_-=+~`:;'.";
            $user_word = "word";

            $result = $test_count_repeats->countRepeats($user_sentence, $user_word);

            $this->assertEquals(3, $result);
        }
    }

?>
