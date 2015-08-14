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

        function test_countRepeats_differentWord()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word = 'cat';
            $string = 'hat';

            //Act
            $result = $test_countRepeats->countRepeats($word, $string);

            //Assert
            $this->assertEquals(0, $result);

        }

        function test_countRepeats_capitalWord()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word = 'Cat';
            $string = 'cAT';

            //Act
            $result = $test_countRepeats->countRepeats($word, $string);

            //Assert
            $this->assertEquals(1, $result);

        }

        function test_countRepeats_multipleWordString()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word = 'cat';
            $string = 'cat in a hat';

            //Act
            $result = $test_countRepeats->countRepeats($word, $string);

            //Assert
            $this->assertEquals(1, $result);

        }

        function test_countRepeats_multipleWordsStringRepeat()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word = 'cat';
            $string = 'cat looking at a cat in a hat';

            //Act
            $result = $test_countRepeats->countRepeats($word, $string);

            //Assert
            $this->assertEquals(2, $result);

        }

        function test_countRepeats_fullWordMatch()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word = 'Cat';
            $string = 'concatinate';

            //Act
            $result = $test_countRepeats->countRepeats($word, $string);

            //Assert
            $this->assertEquals(0, $result);

        }
    }

 ?>
