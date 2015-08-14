<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_countRepeats_oneLetter()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word = 'c';
            $string = 'c';

            //Act
            $result = $test_countRepeats->countRepeats($word, $string);

            //Assert
            $this->assertEquals('1', $result);

        }
    }

 ?>
