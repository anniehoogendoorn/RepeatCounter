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

                    // return True;
                    array_push($matches_array, $string_word);
                }
            }
            var_dump($matches_array);
            return count($matches_array);



            //This code works until Spec 8:
            // $repeats = substr_count(strtolower($string), strtolower($word));
            // return $repeats;

        }

    }

 ?>
