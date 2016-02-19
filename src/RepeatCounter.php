<?php
    class RepeatCounter
    {
        function countRepeats($user_sentence, $user_word)
        {
            $split_sentence = explode(" ", $user_sentence);

            $count = 0;

            foreach ($split_sentence as $word) {
                if ($user_word == $word) {
                $count++;
                }
            }

            return $count;
        }
    }
?>
