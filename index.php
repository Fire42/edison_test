<?php
session_start();
//echo $_COOKIE["PHPSESSID"];
?>
<!DOCTYPE html>
<html>
<head></head>
    <body>
    <?php
    class Extrasen
    {
        private $name;
        private $guess; // догадка
        private $lvl; // значение достоверности

        public function __construct($name, $guess, $lvl)
        {
            $this->name=$name;
            $this->guess=$guess;
            $this->lvl=$lvl;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @return mixed
         */
        public function getGuess()
        {
            return $this->guess;
        }

        /**
         * @param mixed $guess
         */
        public function getLvl()
        {
            return $this->lvl;
        }
        public function addLvl()
        {
            return $this->lvl++;
        }
        public function minusLvl()
        {
            return $this->lvl--;
        }

    }
    //$a = rand (10, 12);//догадка первого экстрасенса;
    //$b = rand (12, 112); //догадка второго экстрасенса;
    $lvlA=0; //уровень первого экстрасенса;
    $lvlB=0; //уровень второго экстрасенса;
    function getRand1(){
        return $a = rand (10, 15);
    }
    function getRand2(){
        return $a = rand (12, 18);
    }
    $objExtrasenOne = new Extrasen('first',getRand1(),$lvlA);
    $objExtrasenTwo = new Extrasen('second',getRand2(),$lvlB);
    ?>
        <h4>"Загадайте двузначное число"</h4>
        <form  method="POST">
            <input type="submit" value="Число загадано" name="guessRequest">
        </form> <br>
    <?php
        if (isset($_POST['guessRequest']))
        {
            echo $objExtrasenOne->getGuess()."<br>";
            echo $objExtrasenTwo->getGuess()."<br>";
        }
    ?>
        <br><br>
        <form method = "POST">
            <label>Загаданное число <input type="text" name="guesstedNum"/></label>
            <input type="submit" value="Подтверждаю" />
        </form>
        <?php
        $c=$_POST['guesstedNum'];
        $objExtrasenOne->getGuess()==$c? $objExtrasenOne->addLvl() : $objExtrasenOne->minusLvl();
        $objExtrasenTwo->getGuess()==$c? $objExtrasenTwo->addLvl() : $objExtrasenTwo->minusLvl();
        ?>
        <br><br>
        <form>
            <input type="button" value="Загадать заново">
        </form>
        <table border="1">
            <caption>Таблица результатов</caption>
            <tr>
                <th>Догадки первого</th>
                <th>Догадки второго</th>
                <th>Вводимые числа</th>
                <th>Достоверность первого</th>
                <th>Достоверность второго</th>
            </tr>
            <?php

                echo "<tr><td>" . $objExtrasenOne->getGuess() . "</td><td>" . $objExtrasenTwo->getGuess() . "</td><td>" . $c . "</td><td>" . $objExtrasenOne->getlvl() . "</td><td>" . $objExtrasenTwo->getlvl() . "</td></tr>";

            ?>
        </table>
    </body>
</html>
