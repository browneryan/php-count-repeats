<?php
    class RepeatCounter
    {
        function countRepeats($user_sentence, $user_word)
        {
            $user_array = array();
            array_push($user_array, $user_sentence);
            array_push($user_array, $user_word);
            return $user_array;
        }
    }
?>
