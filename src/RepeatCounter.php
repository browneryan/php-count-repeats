<?php
    class RepeatCounter
    {
        function countRepeats($user_sentence, $user_word)
        {
            $split_sentence = preg_split("/[\W]+/", $user_sentence);

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
