<?php
//session_start();
include __DIR__."/class.php";
include __DIR__."/function.php";
//echo $_COOKIE["PHPSESSID"];
?>
<!DOCTYPE html>
<html>
<head></head>
    <body>
        <h4>"Загадайте двузначное число"</h4>
        <form  method="POST" name ="request1">
            <input type="submit" value="Число загадано" name="guessRequest">
        </form> 
        <br>
        <div>
            <?=$objExtrasenOne->getGuess()?><br>
            <?=$objExtrasenTwo->getGuess()?>
        </div>
        <br><br>
        <form method = "POST" name ="request2">
            Загаданное число: <input type="text" name="guesstedNum"/>
            <input type="submit" value="Подтверждаю" />
        </form>
        <br><br>
        <form method = "POST" name ="request3">
            <input type="submit" value="Загадать заново" name="newGuess">
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
                <tr><td><?= $objExtrasenOne->getGuess()?></td><td><?= $objExtrasenTwo->getGuess()?></td><td><?=$c?></td><td>
                    <?=$objExtrasenOne->getlvl()?></td><td><?=$objExtrasenTwo->getlvl()?></td></tr>

            
        </table>
    </body>
</html>
