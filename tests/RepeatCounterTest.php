<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_countRepeats_sameLetter()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word = 'c';
            $string = 'c';

            //Act
            $result = $test_countRepeats->countRepeats($word, $string);

            //Assert
            $this->assertEquals(1, $result);

        }

        function test_countRepeats_differentLetter()
        {

            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word = 'c';
            $string = 'a';

            //Act
            $result = $test_countRepeats->countRepeats($word, $string);

            //Assert
            $this->assertEquals(0, $result);
        }

        function test_countRepeats_sameWord()
        {

            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word = 'cat';
            $string = 'cat';

            //Act
            $result = $test_countRepeats->countRepeats($word, $string);

            //Assert
            $this->assertEquals(1, $result);
        }
    }

 ?>
