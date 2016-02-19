<?php
    class RepeatCounter
    {
        function countRepeats($user_sentence, $user_word)
        {
            $lowercase_sentence = strtolower($user_sentence);
            $split_sentence = preg_split("/[\W]+/", $lowercase_sentence);

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
