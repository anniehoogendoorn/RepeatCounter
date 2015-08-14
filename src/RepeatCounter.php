<?php

    class RepeatCounter
    {
        function countRepeats($word, $string)
        {
            $word = strtolower($word);
            $string = strtolower($string);
            $string_as_array = explode(" ", $string);

            $matches_array = array();

            foreach ($string_as_array as $string_word) {
                if ($string_word == $word) {
                    array_push($matches_array, $string_word);
                }
            }

            return count($matches_array);

        }

    }

 ?>
