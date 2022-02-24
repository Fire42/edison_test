<?php
var_dump($_POST);
    function getRand1(){        // функция задающая алгоритм формирования догадок для первого объекта класса
        return $a = rand (10, 15);
    }
    function getRand2(){        // функция задающая алгоритм формирования догадок для второго объекта класса
        return $a = rand (12, 18);
    }

    $lvlA=0; //уровень первого экстрасенса;
    $lvlB=0; //уровень второго экстрасенса;
    $objExtrasenOne = new Extrasen('first',0,$lvlA); // объявление объекта1 класса Extrasen
    $objExtrasenTwo = new Extrasen('second',0,$lvlB); //объявление объекта2 класса Extrasen
    
    if (!isset($_POST['guessRequest']))
    {
        $objExtrasenOne->setGuess(getRand1());
        $objExtrasenTwo->setGuess(getRand2());
    }

    if (isset($_POST['guesstedNum']))
    {
        $c=$_POST['guesstedNum'];
        $objExtrasenOne->getGuess()==$c? $objExtrasenOne->addLvl() : $objExtrasenOne->minusLvl();
        $objExtrasenTwo->getGuess()==$c? $objExtrasenTwo->addLvl() : $objExtrasenTwo->minusLvl();
    }

    if (!isset($_POST['newGuess']))
    {
        $objExtrasenOne->setGuess(getRand1());
        $objExtrasenTwo->setGuess(getRand2());
    }

    /*if(!isset($_SESSION['TEST']))
    {
        $_SESSION['TEST'] = rand (0, 100);
    }*/
    //echo $_SESSION['TEST'];
