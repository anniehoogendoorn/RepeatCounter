<?php

    class RepeatCounter
    {
        function countRepeats($word, $string)
        {
            $word = strtolower($word);
            $string = strtolower($string);
            $repeats = substr_count($string, $word);
            return $repeats;

        }

    }

 ?>
