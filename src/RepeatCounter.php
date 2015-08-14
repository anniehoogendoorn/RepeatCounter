<?php

    class RepeatCounter
    {
        function countRepeats($word, $string)
        {
            $repeats = substr_count($string, $word);
            return $repeats;

        }

    }

 ?>
