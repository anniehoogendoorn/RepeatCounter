<?php

    class RepeatCounter
    {
        function countRepeats($word, $string)
        {
            $repeats = substr_count(strtolower($string), strtolower($word));
            return $repeats;

        }

    }

 ?>
